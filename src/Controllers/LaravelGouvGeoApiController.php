<?php

namespace DaVikingCode\LaravelGouvGeoApi\Controllers;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use DaVikingCode\LaravelGouvGeoApi\Facades\Departement;

class LaravelGouvGeoApiController extends Controller
{
    public static function retrieveCoordinates(array $address)
    {
        $client = new Client();
        $coords = ['latitude' => 0, 'longitude' => 0];
        $search = $address['numero'] . '+' . $address['voie'] . '+' . $address['commune'];
        $request = config('laravelgouvgeoapi.api_url_adresse') . 'search/?q=' . $search . '&postcode=' . $address['code_postal'];
        $response = $client->request('GET', $request);
        $data = json_decode($response->getBody());
        // si adresse trouvée
        if(count($data->features) > 0)
        {
            $coords['latitude'] = $data->features[0]->geometry->coordinates[1];
            $coords['longitude'] = $data->features[0]->geometry->coordinates[0];
        }
        return $coords;
    }

    public static function retrieveAddress(array $coords)
    {
        $client = new Client();

        // Methode 1 : adresses reverve
        $request = config('laravelgouvgeoapi.api_url_adresse') . 'reverse/?lon='.$coords['longitude'].'&lat='.$coords['latitude'];
        $response = $client->request('GET', $request);
        $data = json_decode($response->getBody());

        $address = [];
        $address['numero'] = '';
        $address['voie'] = '';
        $address['code_postal'] = '';
        $address['commune'] = '';

        // si adresse trouvée
        if(count($data->features) > 0)
        {
            if(isset($data->features[0]->properties->housenumber))
            {
                $address['numero'] = $data->features[0]->properties->housenumber;
            }
            if(isset($data->features[0]->properties->street))
            {
                $address['voie'] = $data->features[0]->properties->street;
            }
            elseif(isset($data->features[0]->properties->name))
            {
                $address['voie'] = $data->features[0]->properties->name;
            }
            if(isset($data->features[0]->properties->postcode))
            {
                $address['code_postal'] = $data->features[0]->properties->postcode;
            }
            if(isset($data->features[0]->properties->city))
            {
                $address['commune'] = $data->features[0]->properties->city;
            }
        }
        else
        {
            // méthode 2 : communes (seulement commune et code postal)
            $request = config('laravelgouvgeoapi.api_url_geo') . 'communes?fields=nom,codesPostaux&lon='.$coords['longitude'].'&lat='.$coords['latitude'];
            $response = $client->request('GET', $request);
            $data = json_decode($response->getBody());
            if(count($data) > 0)
            {
                $address['commune'] = $data[0]->nom;
                $address['code_postal'] = $data[0]->codesPostaux[0];
            }
        }
        return $address;
    }

    public static function retrievePrefectureCoordinates(string $code_departement)
    {
        $departement = Departement::where('code_postal', $code_departement)->first();

        if($departement)
        {
            $coordinates = [];
            $client = new Client();
            $code_insee = $departement->insee_prefecture;
            $request = config('laravelgouvgeoapi.api_url_geo') . 'communes/' . $code_insee . '/?fields=centre';
            $response = $client->request('GET', $request);
            $data = json_decode($response->getBody());
            $coordinates['longitude'] = $data->centre->coordinates[0];
            $coordinates['latitude'] = $data->centre->coordinates[1];
            return $coordinates;
        }
        else
        {
            abort(404, 'Département non trouvé.');
        }
    }
}
