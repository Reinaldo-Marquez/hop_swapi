<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Starship;

class StarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Starship::create([
            'name'=> 'CR90 corvette',
            'model'=> 'CR90 corvette',
            'manufacturer'=> 'Corellian Engineering Corporation',
            'cost_in_credits'=> '3500000',
            'length'=> '150',
            'max_atmosphering_speed'=> '950',
            'crew'=> '30-165',
            'passengers'=> '600',
            'cargo_capacity'=> '3000000',
            'consumables'=> '1 year',
            'hyperdrive_rating'=> '2.0',
            'MGLT'=> '60',
            'starship_class'=> 'corvette',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/1/',
                'https://swapi.dev/api/films/3/',
                'https://swapi.dev/api/films/6/'
            ],
            'url'=> 'https://swapi.dev/api/starships/2/'
        ]);
        Starship::create([
            'name'=> 'Sentinel-class landing craft',
            'model'=> 'Sentinel-class landing craft',
            'manufacturer'=> 'Sienar Fleet Systems, Cyngus Spaceworks',
            'cost_in_credits'=> '240000',
            'length'=> '38',
            'max_atmosphering_speed'=> '1000',
            'crew'=> '5',
            'passengers'=> '75',
            'cargo_capacity'=> '180000',
            'consumables'=> '1 month',
            'hyperdrive_rating'=> '1.0',
            'MGLT'=> '70',
            'starship_class'=> 'landing craft',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/1/'
            ],
            'url'=> 'https://swapi.dev/api/starships/5/'
        ]);
        Starship::create([
            'name'=> 'Star Destroyer',
            'model'=> 'Imperial I-class Star Destroyer',
            'manufacturer'=> 'Kuat Drive Yards',
            'cost_in_credits'=> '150000000',
            'length'=> '1,600',
            'max_atmosphering_speed'=> '975',
            'crew'=> '47,060',
            'passengers'=> 'n/a',
            'cargo_capacity'=> '36000000',
            'consumables'=> '2 years',
            'hyperdrive_rating'=> '2.0',
            'MGLT'=> '60',
            'starship_class'=> 'Star Destroyer',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/1/',
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/3/'
        ]);
        Starship::create([
            'name'=> 'Death Star',
            'model'=> 'DS-1 Orbital Battle Station',
            'manufacturer'=> 'Imperial Department of Military Research, Sienar Fleet Systems',
            'cost_in_credits'=> '1000000000000',
            'length'=> '120000',
            'max_atmosphering_speed'=> 'n/a',
            'crew'=> '342,953',
            'passengers'=> '843,342',
            'cargo_capacity'=> '1000000000000',
            'consumables'=> '3 years',
            'hyperdrive_rating'=> '4.0',
            'MGLT'=> '10',
            'starship_class'=> 'Deep Space Mobile Battlestation',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/1/'
            ],
            'url'=> 'https://swapi.dev/api/starships/9/'
        ]);
        Starship::create([
            'name'=> 'Millennium Falcon',
            'model'=> 'YT-1300 light freighter',
            'manufacturer'=> 'Corellian Engineering Corporation',
            'cost_in_credits'=> '100000',
            'length'=> '34.37',
            'max_atmosphering_speed'=> '1050',
            'crew'=> '4',
            'passengers'=> '6',
            'cargo_capacity'=> '100000',
            'consumables'=> '2 months',
            'hyperdrive_rating'=> '0.5',
            'MGLT'=> '75',
            'starship_class'=> 'Light freighter',
            'pilots'=> [
                'https://swapi.dev/api/people/13/',
                'https://swapi.dev/api/people/14/',
                'https://swapi.dev/api/people/25/',
                'https://swapi.dev/api/people/31/'
            ],
            'films'=> [
                'https://swapi.dev/api/films/1/',
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/10/'
        ]);
        Starship::create([
            'name'=> 'Y-wing',
            'model'=> 'BTL Y-wing',
            'manufacturer'=> 'Koensayr Manufacturing',
            'cost_in_credits'=> '134999',
            'length'=> '14',
            'max_atmosphering_speed'=> '1000km',
            'crew'=> '2',
            'passengers'=> '0',
            'cargo_capacity'=> '110',
            'consumables'=> '1 week',
            'hyperdrive_rating'=> '1.0',
            'MGLT'=> '80',
            'starship_class'=> 'assault starfighter',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/1/',
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/11/'
        ]);
        Starship::create([
            'name'=> 'X-wing',
            'model'=> 'T-65 X-wing',
            'manufacturer'=> 'Incom Corporation',
            'cost_in_credits'=> '149999',
            'length'=> '12.5',
            'max_atmosphering_speed'=> '1050',
            'crew'=> '1',
            'passengers'=> '0',
            'cargo_capacity'=> '110',
            'consumables'=> '1 week',
            'hyperdrive_rating'=> '1.0',
            'MGLT'=> '100',
            'starship_class'=> 'Starfighter',
            'pilots'=> [
                'https://swapi.dev/api/people/1/',
                'https://swapi.dev/api/people/9/',
                'https://swapi.dev/api/people/18/',
                'https://swapi.dev/api/people/19/'
            ],
            'films'=> [
                'https://swapi.dev/api/films/1/',
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/12/'
        ]);
        Starship::create([
            'name'=> 'TIE Advanced x1',
            'model'=> 'Twin Ion Engine Advanced x1',
            'manufacturer'=> 'Sienar Fleet Systems',
            'cost_in_credits'=> 'unknown',
            'length'=> '9.2',
            'max_atmosphering_speed'=> '1200',
            'crew'=> '1',
            'passengers'=> '0',
            'cargo_capacity'=> '150',
            'consumables'=> '5 days',
            'hyperdrive_rating'=> '1.0',
            'MGLT'=> '105',
            'starship_class'=> 'Starfighter',
            'pilots'=> [
                'https://swapi.dev/api/people/4/'
            ],
            'films'=> [
                'https://swapi.dev/api/films/1/'
            ],
            'url'=> 'https://swapi.dev/api/starships/13/'
        ]);
        Starship::create([
            'name'=> 'Executor',
            'model'=> 'Executor-class star dreadnought',
            'manufacturer'=> 'Kuat Drive Yards, Fondor Shipyards',
            'cost_in_credits'=> '1143350000',
            'length'=> '19000',
            'max_atmosphering_speed'=> 'n/a',
            'crew'=> '279,144',
            'passengers'=> '38000',
            'cargo_capacity'=> '250000000',
            'consumables'=> '6 years',
            'hyperdrive_rating'=> '2.0',
            'MGLT'=> '40',
            'starship_class'=> 'Star dreadnought',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/15/'
        ]);
        Starship::create([
            'name'=> 'Rebel transport',
            'model'=> 'GR-75 medium transport',
            'manufacturer'=> 'Gallofree Yards, Inc.',
            'cost_in_credits'=> 'unknown',
            'length'=> '90',
            'max_atmosphering_speed'=> '650',
            'crew'=> '6',
            'passengers'=> '90',
            'cargo_capacity'=> '19000000',
            'consumables'=> '6 months',
            'hyperdrive_rating'=> '4.0',
            'MGLT'=> '20',
            'starship_class'=> 'Medium transport',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/17/'
        ]);
        Starship::create([
            'name'=> 'Slave 1',
            'model'=> 'Firespray-31-class patrol and attack',
            'manufacturer'=> 'Kuat Systems Engineering',
            'cost_in_credits'=> 'unknown',
            'length'=> '21.5',
            'max_atmosphering_speed'=> '1000',
            'crew'=> '1',
            'passengers'=> '6',
            'cargo_capacity'=> '70000',
            'consumables'=> '1 month',
            'hyperdrive_rating'=> '3.0',
            'MGLT'=> '70',
            'starship_class'=> 'Patrol craft',
            'pilots'=> [
                'https://swapi.dev/api/people/22/'
            ],
            'films'=> [
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/5/'
            ],
            'url'=> 'https://swapi.dev/api/starships/21/'
        ]);
        Starship::create([
            'name'=> 'Imperial shuttle',
            'model'=> 'Lambda-class T-4a shuttle',
            'manufacturer'=> 'Sienar Fleet Systems',
            'cost_in_credits'=> '240000',
            'length'=> '20',
            'max_atmosphering_speed'=> '850',
            'crew'=> '6',
            'passengers'=> '20',
            'cargo_capacity'=> '80000',
            'consumables'=> '2 months',
            'hyperdrive_rating'=> '1.0',
            'MGLT'=> '50',
            'starship_class'=> 'Armed government transport',
            'pilots'=> [
                'https://swapi.dev/api/people/1/',
                'https://swapi.dev/api/people/13/',
                'https://swapi.dev/api/people/14/'
            ],
            'films'=> [
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/22/'
        ]);
        Starship::create([
            'name'=> 'EF76 Nebulon-B escort frigate',
            'model'=> 'EF76 Nebulon-B escort frigate',
            'manufacturer'=> 'Kuat Drive Yards',
            'cost_in_credits'=> '8500000',
            'length'=> '300',
            'max_atmosphering_speed'=> '800',
            'crew'=> '854',
            'passengers'=> '75',
            'cargo_capacity'=> '6000000',
            'consumables'=> '2 years',
            'hyperdrive_rating'=> '2.0',
            'MGLT'=> '40',
            'starship_class'=> 'Escort ship',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/2/',
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/23/'
        ]);
        Starship::create([
            'name'=> 'Calamari Cruiser',
            'model'=> 'MC80 Liberty type Star Cruiser',
            'manufacturer'=> 'Mon Calamari shipyards',
            'cost_in_credits'=> '104000000',
            'length'=> '1200',
            'max_atmosphering_speed'=> 'n/a',
            'crew'=> '5400',
            'passengers'=> '1200',
            'cargo_capacity'=> 'unknown',
            'consumables'=> '2 years',
            'hyperdrive_rating'=> '1.0',
            'MGLT'=> '60',
            'starship_class'=> 'Star Cruiser',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/27/'
        ]);
        Starship::create([
            'name'=> 'A-wing',
            'model'=> 'RZ-1 A-wing Interceptor',
            'manufacturer'=> 'Alliance Underground Engineering, Incom Corporation',
            'cost_in_credits'=> '175000',
            'length'=> '9.6',
            'max_atmosphering_speed'=> '1300',
            'crew'=> '1',
            'passengers'=> '0',
            'cargo_capacity'=> '40',
            'consumables'=> '1 week',
            'hyperdrive_rating'=> '1.0',
            'MGLT'=> '120',
            'starship_class'=> 'Starfighter',
            'pilots'=> [
                'https://swapi.dev/api/people/29/'
            ],
            'films'=> [
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/28/'
        ]);
        Starship::create([
            'name'=> 'B-wing',
            'model'=> 'A/SF-01 B-wing starfighter',
            'manufacturer'=> 'Slayn & Korpil',
            'cost_in_credits'=> '220000',
            'length'=> '16.9',
            'max_atmosphering_speed'=> '950',
            'crew'=> '1',
            'passengers'=> '0',
            'cargo_capacity'=> '45',
            'consumables'=> '1 week',
            'hyperdrive_rating'=> '2.0',
            'MGLT'=> '91',
            'starship_class'=> 'Assault Starfighter',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/3/'
            ],
            'url'=> 'https://swapi.dev/api/starships/29/'
        ]);
        Starship::create([
            'name'=> 'Republic Cruiser',
            'model'=> 'Consular-class cruiser',
            'manufacturer'=> 'Corellian Engineering Corporation',
            'cost_in_credits'=> 'unknown',
            'length'=> '115',
            'max_atmosphering_speed'=> '900',
            'crew'=> '9',
            'passengers'=> '16',
            'cargo_capacity'=> 'unknown',
            'consumables'=> 'unknown',
            'hyperdrive_rating'=> '2.0',
            'MGLT'=> 'unknown',
            'starship_class'=> 'Space cruiser',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/4/'
            ],
            'url'=> 'https://swapi.dev/api/starships/31/'
        ]);
        Starship::create([
            'name'=> 'Droid control ship',
            'model'=> 'Lucrehulk-class Droid Control Ship',
            'manufacturer'=> 'Hoersch-Kessel Drive, Inc.',
            'cost_in_credits'=> 'unknown',
            'length'=> '3170',
            'max_atmosphering_speed'=> 'n/a',
            'crew'=> '175',
            'passengers'=> '139000',
            'cargo_capacity'=> '4000000000',
            'consumables'=> '500 days',
            'hyperdrive_rating'=> '2.0',
            'MGLT'=> 'unknown',
            'starship_class'=> 'Droid control ship',
            'pilots'=> [],
            'films'=> [
                'https://swapi.dev/api/films/4/',
                'https://swapi.dev/api/films/5/',
                'https://swapi.dev/api/films/6/'
            ],
            'url'=> 'https://swapi.dev/api/starships/32/'
        ]);
        Starship::create([
            'name'=> 'Naboo fighter',
            'model'=> 'N-1 starfighter',
            'manufacturer'=> 'Theed Palace Space Vessel Engineering Corps',
            'cost_in_credits'=> '200000',
            'length'=> '11',
            'max_atmosphering_speed'=> '1100',
            'crew'=> '1',
            'passengers'=> '0',
            'cargo_capacity'=> '65',
            'consumables'=> '7 days',
            'hyperdrive_rating'=> '1.0',
            'MGLT'=> 'unknown',
            'starship_class'=> 'Starfighter',
            'pilots'=> [
                'https://swapi.dev/api/people/11/',
                'https://swapi.dev/api/people/35/',
                'https://swapi.dev/api/people/60/'
            ],
            'films'=> [
                'https://swapi.dev/api/films/4/',
                'https://swapi.dev/api/films/5/'
            ],
            'url'=> 'https://swapi.dev/api/starships/39/'
        ]);
        Starship::create([
            'name'=> 'Naboo Royal Starship',
            'model'=> 'J-type 327 Nubian royal starship',
            'manufacturer'=> 'Theed Palace Space Vessel Engineering Corps, Nubia Star Drives',
            'cost_in_credits'=> 'unknown',
            'length'=> '76',
            'max_atmosphering_speed'=> '920',
            'crew'=> '8',
            'passengers'=> 'unknown',
            'cargo_capacity'=> 'unknown',
            'consumables'=> 'unknown',
            'hyperdrive_rating'=> '1.8',
            'MGLT'=> 'unknown',
            'starship_class'=> 'yacht',
            'pilots'=> [
                'https://swapi.dev/api/people/39/'
            ],
            'films'=> [
                'https://swapi.dev/api/films/4/'
            ],
            'url'=> 'https://swapi.dev/api/starships/40/'
        ]);
    }
}
