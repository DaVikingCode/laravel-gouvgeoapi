<?php

namespace DaVikingCode\LaravelGouvGeoApi\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('
            INSERT INTO `departements` (`id`, `code_postal`, `nom`, `nom_uppercase`, `slug`, `nom_soundex`, `insee_prefecture`) VALUES
            (1, \'01\', \'Ain\', \'AIN\', \'ain\', \'A500\', \'01053\'),
            (2, \'02\', \'Aisne\', \'AISNE\', \'aisne\', \'A250\', \'02408\'),
            (3, \'03\', \'Allier\', \'ALLIER\', \'allier\', \'A460\', \'03190\'),
            (4, \'04\', \'Alpes-de-Haute-Provence\', \'ALPES-DE-HAUTE-PROVENCE\', \'alpes-de-haute-provence\', \'A412316152\', \'04070\'),
            (5, \'05\', \'Hautes-Alpes\', \'HAUTES-ALPES\', \'hautes-alpes\', \'H32412\', \'05061\'),
            (6, \'06\', \'Alpes-Maritimes\', \'ALPES-MARITIMES\', \'alpes-maritimes\', \'A41256352\', \'06088\'),
            (7, \'07\', \'Ardèche\', \'ARDÈCHE\', \'ardeche\', \'A632\', \'07186\'),
            (8, \'08\', \'Ardennes\', \'ARDENNES\', \'ardennes\', \'A6352\', \'08105\'),
            (9, \'09\', \'Ariège\', \'ARIÈGE\', \'ariege\', \'A620\', \'09122\'),
            (10, \'10\', \'Aube\', \'AUBE\', \'aube\', \'A100\', \'10387\'),
            (11, \'11\', \'Aude\', \'AUDE\', \'aude\', \'A300\', \'11069\'),
            (12, \'12\', \'Aveyron\', \'AVEYRON\', \'aveyron\', \'A165\', \'12202\'),
            (13, \'13\', \'Bouches-du-Rhône\', \'BOUCHES-DU-RHÔNE\', \'bouches-du-rhone\', \'B2365\', \'13055\'),
            (14, \'14\', \'Calvados\', \'CALVADOS\', \'calvados\', \'C4132\', \'14118\'),
            (15, \'15\', \'Cantal\', \'CANTAL\', \'cantal\', \'C534\', \'15014\'),
            (16, \'16\', \'Charente\', \'CHARENTE\', \'charente\', \'C653\', \'16015\'),
            (17, \'17\', \'Charente-Maritime\', \'CHARENTE-MARITIME\', \'charente-maritime\', \'C6535635\', \'17300\'),
            (18, \'18\', \'Cher\', \'CHER\', \'cher\', \'C600\', \'18033\'),
            (19, \'19\', \'Corrèze\', \'CORRÈZE\', \'correze\', \'C620\', \'19272\'),
            (20, \'2A\', \'Corse-du-sud\', \'CORSE-DU-SUD\', \'corse-du-sud\', \'C62323\', \'2A004\'),
            (21, \'2B\', \'Haute-corse\', \'HAUTE-CORSE\', \'haute-corse\', \'H3262\', \'2B033\'),
            (22, \'21\', \'Côte-d\'\'or\', \'CÔTE-D\'\'OR\', \'cote-dor\', \'C360\', \'21231\'),
            (23, \'22\', \'Côtes-d\'\'armor\', \'CÔTES-D\'\'ARMOR\', \'cotes-darmor\', \'C323656\', \'22278\'),
            (24, \'23\', \'Creuse\', \'CREUSE\', \'creuse\', \'C620\', \'23096\'),
            (25, \'24\', \'Dordogne\', \'DORDOGNE\', \'dordogne\', \'D6325\', \'24322\'),
            (26, \'25\', \'Doubs\', \'DOUBS\', \'doubs\', \'D120\', \'25056\'),
            (27, \'26\', \'Drôme\', \'DRÔME\', \'drome\', \'D650\', \'26362\'),
            (28, \'27\', \'Eure\', \'EURE\', \'eure\', \'E600\', \'27229\'),
            (29, \'28\', \'Eure-et-Loir\', \'EURE-ET-LOIR\', \'eure-et-loir\', \'E6346\', \'28085\'),
            (30, \'29\', \'Finistère\', \'FINISTÈRE\', \'finistere\', \'F5236\', \'29232\'),
            (31, \'30\', \'Gard\', \'GARD\', \'gard\', \'G630\', \'30189\'),
            (32, \'31\', \'Haute-Garonne\', \'HAUTE-GARONNE\', \'haute-garonne\', \'H3265\', \'31555\'),
            (33, \'32\', \'Gers\', \'GERS\', \'gers\', \'G620\', \'32013\'),
            (34, \'33\', \'Gironde\', \'GIRONDE\', \'gironde\', \'G653\', \'33063\'),
            (35, \'34\', \'Hérault\', \'HÉRAULT\', \'herault\', \'H643\', \'34172\'),
            (36, \'35\', \'Ille-et-Vilaine\', \'ILLE-ET-VILAINE\', \'ille-et-vilaine\', \'I43145\', \'35238\'),
            (37, \'36\', \'Indre\', \'INDRE\', \'indre\', \'I536\', \'36064\'),
            (38, \'37\', \'Indre-et-Loire\', \'INDRE-ET-LOIRE\', \'indre-et-loire\', \'I536346\', \'37261\'),
            (39, \'38\', \'Isère\', \'ISÈRE\', \'isere\', \'I260\', \'38185\'),
            (40, \'39\', \'Jura\', \'JURA\', \'jura\', \'J600\', \'39300\'),
            (41, \'40\', \'Landes\', \'LANDES\', \'landes\', \'L532\', \'40192\'),
            (42, \'41\', \'Loir-et-Cher\', \'LOIR-ET-CHER\', \'loir-et-cher\', \'L6326\', \'41018\'),
            (43, \'42\', \'Loire\', \'LOIRE\', \'loire\', \'L600\', \'42218\'),
            (44, \'43\', \'Haute-Loire\', \'HAUTE-LOIRE\', \'haute-loire\', \'H346\', \'43157\'),
            (45, \'44\', \'Loire-Atlantique\', \'LOIRE-ATLANTIQUE\', \'loire-atlantique\', \'L634532\', \'44109\'),
            (46, \'45\', \'Loiret\', \'LOIRET\', \'loiret\', \'L630\', \'45234\'),
            (47, \'46\', \'Lot\', \'LOT\', \'lot\', \'L300\', \'46042\'),
            (48, \'47\', \'Lot-et-Garonne\', \'LOT-ET-GARONNE\', \'lot-et-garonne\', \'L3265\', \'47001\'),
            (49, \'48\', \'Lozère\', \'LOZÈRE\', \'lozere\', \'L260\', \'48095\'),
            (50, \'49\', \'Maine-et-Loire\', \'MAINE-ET-LOIRE\', \'maine-et-loire\', \'M346\', \'49007\'),
            (51, \'50\', \'Manche\', \'MANCHE\', \'manche\', \'M200\', \'50502\'),
            (52, \'51\', \'Marne\', \'MARNE\', \'marne\', \'M650\', \'51108\'),
            (53, \'52\', \'Haute-Marne\', \'HAUTE-MARNE\', \'haute-marne\', \'H3565\', \'52121\'),
            (54, \'53\', \'Mayenne\', \'MAYENNE\', \'mayenne\', \'M000\', \'53130\'),
            (55, \'54\', \'Meurthe-et-Moselle\', \'MEURTHE-ET-MOSELLE\', \'meurthe-et-moselle\', \'M63524\', \'54395\'),
            (56, \'55\', \'Meuse\', \'MEUSE\', \'meuse\', \'M200\', \'55029\'),
            (57, \'56\', \'Morbihan\', \'MORBIHAN\', \'morbihan\', \'M615\', \'56260\'),
            (58, \'57\', \'Moselle\', \'MOSELLE\', \'moselle\', \'M240\', \'57453\'),
            (59, \'58\', \'Nièvre\', \'NIÈVRE\', \'nievre\', \'N160\', \'58194\'),
            (60, \'59\', \'Nord\', \'NORD\', \'nord\', \'N630\', \'59350\'),
            (61, \'60\', \'Oise\', \'OISE\', \'oise\', \'O200\', \'60057\'),
            (62, \'61\', \'Orne\', \'ORNE\', \'orne\', \'O650\', \'61001\'),
            (63, \'62\', \'Pas-de-Calais\', \'PAS-DE-CALAIS\', \'pas-de-calais\', \'P23242\', \'62041\'),
            (64, \'63\', \'Puy-de-Dôme\', \'PUY-DE-DÔME\', \'puy-de-dome\', \'P350\', \'63113\'),
            (65, \'64\', \'Pyrénées-Atlantiques\', \'PYRÉNÉES-ATLANTIQUES\', \'pyrenees-atlantiques\', \'P65234532\', \'64445\'),
            (66, \'65\', \'Hautes-Pyrénées\', \'HAUTES-PYRÉNÉES\', \'hautes-pyrenees\', \'H321652\', \'65440\'),
            (67, \'66\', \'Pyrénées-Orientales\', \'PYRÉNÉES-ORIENTALES\', \'pyrenees-orientales\', \'P65265342\', \'66136\'),
            (68, \'67\', \'Bas-Rhin\', \'BAS-RHIN\', \'bas-rhin\', \'B265\', \'67482\'),
            (69, \'68\', \'Haut-Rhin\', \'HAUT-RHIN\', \'haut-rhin\', \'H365\', \'68066\'),
            (70, \'69\', \'Rhône\', \'RHÔNE\', \'rhone\', \'R500\', \'69123\'),
            (71, \'70\', \'Haute-Saône\', \'HAUTE-SAÔNE\', \'haute-saone\', \'H325\', \'70550\'),
            (72, \'71\', \'Saône-et-Loire\', \'SAÔNE-ET-LOIRE\', \'saone-et-loire\', \'S5346\', \'71270\'),
            (73, \'72\', \'Sarthe\', \'SARTHE\', \'sarthe\', \'S630\', \'72181\'),
            (74, \'73\', \'Savoie\', \'SAVOIE\', \'savoie\', \'S100\', \'73065\'),
            (75, \'74\', \'Haute-Savoie\', \'HAUTE-SAVOIE\', \'haute-savoie\', \'H321\', \'74010\'),
            (76, \'75\', \'Paris\', \'PARIS\', \'paris\', \'P620\', \'75056\'),
            (77, \'76\', \'Seine-Maritime\', \'SEINE-MARITIME\', \'seine-maritime\', \'S5635\', \'76540\'),
            (78, \'77\', \'Seine-et-Marne\', \'SEINE-ET-MARNE\', \'seine-et-marne\', \'S53565\', \'77288\'),
            (79, \'78\', \'Yvelines\', \'YVELINES\', \'yvelines\', \'Y1452\', \'78646\'),
            (80, \'79\', \'Deux-Sèvres\', \'DEUX-SÈVRES\', \'deux-sevres\', \'D2162\', \'79191\'),
            (81, \'80\', \'Somme\', \'SOMME\', \'somme\', \'S500\', \'80021\'),
            (82, \'81\', \'Tarn\', \'TARN\', \'tarn\', \'T650\', \'81004\'),
            (83, \'82\', \'Tarn-et-Garonne\', \'TARN-ET-GARONNE\', \'tarn-et-garonne\', \'T653265\', \'82121\'),
            (84, \'83\', \'Var\', \'VAR\', \'var\', \'V600\', \'83137\'),
            (85, \'84\', \'Vaucluse\', \'VAUCLUSE\', \'vaucluse\', \'V242\', \'84007\'),
            (86, \'85\', \'Vendée\', \'VENDÉE\', \'vendee\', \'V530\', \'85191\'),
            (87, \'86\', \'Vienne\', \'VIENNE\', \'vienne\', \'V500\', \'86194\'),
            (88, \'87\', \'Haute-Vienne\', \'HAUTE-VIENNE\', \'haute-vienne\', \'H315\', \'87085\'),
            (89, \'88\', \'Vosges\', \'VOSGES\', \'vosges\', \'V200\', \'88160\'),
            (90, \'89\', \'Yonne\', \'YONNE\', \'yonne\', \'Y500\', \'01053\'),
            (91, \'90\', \'Territoire de Belfort\', \'TERRITOIRE DE BELFORT\', \'territoire-de-belfort\', \'T636314163\', \'90010\'),
            (92, \'91\', \'Essonne\', \'ESSONNE\', \'essonne\', \'E250\', \'91228\'),
            (93, \'92\', \'Hauts-de-Seine\', \'HAUTS-DE-SEINE\', \'hauts-de-seine\', \'H32325\', \'92050\'),
            (94, \'93\', \'Seine-Saint-Denis\', \'SEINE-SAINT-DENIS\', \'seine-saint-denis\', \'S525352\', \'93008\'),
            (95, \'94\', \'Val-de-Marne\', \'VAL-DE-MARNE\', \'val-de-marne\', \'V43565\', \'94028\'),
            (96, \'95\', \'Val-d\'\'oise\', \'VAL-D\'\'OISE\', \'val-doise\', \'V432\', \'95500\'),
            (97, \'976\', \'Mayotte\', \'MAYOTTE\', \'mayotte\', \'M300\', \'97608\'),
            (98, \'971\', \'Guadeloupe\', \'GUADELOUPE\', \'guadeloupe\', \'G341\', \'97105\'),
            (99, \'973\', \'Guyane\', \'GUYANE\', \'guyane\', \'G500\', \'97302\'),
            (100, \'972\', \'Martinique\', \'MARTINIQUE\', \'martinique\', \'M6352\', \'97209\'),
            (101, \'974\', \'Réunion\', \'RÉUNION\', \'reunion\', \'R500\', \'97411\');
        ');
    }
}
