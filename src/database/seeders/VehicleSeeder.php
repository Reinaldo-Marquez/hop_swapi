<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
            "name" => "Sand Crawler",
            "model" => "Digger Crawler",
            "manufacturer" => "Corellia Mining Corporation",
            "cost_in_credits" => "150000",
            "length" => "36.8 ",
            "max_atmosphering_speed" => "30",
            "crew" => "46",
            "passengers" => "30",
            "cargo_capacity" => "50000",
            "consumables" => "2 months",
            "vehicle_class" => "wheeled",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/1/",
                "https://swapi.dev/api/films/5/"
            ],
            "url" => "https://swapi.dev/api/vehicles/4/"
        ]);
        Vehicle::create([
            "name" => "T-16 skyhopper",
            "model" => "T-16 skyhopper",
            "manufacturer" => "Incom Corporation",
            "cost_in_credits" => "14500",
            "length" => "10.4 ",
            "max_atmosphering_speed" => "1200",
            "crew" => "1",
            "passengers" => "1",
            "cargo_capacity" => "50",
            "consumables" => "0",
            "vehicle_class" => "repulsorcraft",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/1/"
            ],
            "url" => "https://swapi.dev/api/vehicles/6/"
        ]);
        Vehicle::create([
            "name" => "X-34 landspeeder",
            "model" => "X-34 landspeeder",
            "manufacturer" => "SoroSuub Corporation",
            "cost_in_credits" => "10550",
            "length" => "3.4 ",
            "max_atmosphering_speed" => "250",
            "crew" => "1",
            "passengers" => "1",
            "cargo_capacity" => "5",
            "consumables" => "unknown",
            "vehicle_class" => "repulsorcraft",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/1/"
            ],
            "url" => "https://swapi.dev/api/vehicles/7/"
        ]);
        Vehicle::create([
            "name" => "TIE/LN starfighter",
            "model" => "Twin Ion Engine/Ln Starfighter",
            "manufacturer" => "Sienar Fleet Systems",
            "cost_in_credits" => "unknown",
            "length" => "6.4",
            "max_atmosphering_speed" => "1200",
            "crew" => "1",
            "passengers" => "0",
            "cargo_capacity" => "65",
            "consumables" => "2 days",
            "vehicle_class" => "starfighter",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/1/",
                "https://swapi.dev/api/films/2/",
                "https://swapi.dev/api/films/3/"
            ],
            "url" => "https://swapi.dev/api/vehicles/8/"
        ]);
        Vehicle::create([
            "name" => "Snowspeeder",
            "model" => "t-47 airspeeder",
            "manufacturer" => "Incom corporation",
            "cost_in_credits" => "unknown",
            "length" => "4.5",
            "max_atmosphering_speed" => "650",
            "crew" => "2",
            "passengers" => "0",
            "cargo_capacity" => "10",
            "consumables" => "none",
            "vehicle_class" => "airspeeder",
            "pilots" => [
                "https://swapi.dev/api/people/1/",
                "https://swapi.dev/api/people/18/"
            ],
            "films" => [
                "https://swapi.dev/api/films/2/"
            ],
            "url" => "https://swapi.dev/api/vehicles/14/"
        ]);
        Vehicle::create([
            "name" => "TIE bomber",
            "model" => "TIE/sa bomber",
            "manufacturer" => "Sienar Fleet Systems",
            "cost_in_credits" => "unknown",
            "length" => "7.8",
            "max_atmosphering_speed" => "850",
            "crew" => "1",
            "passengers" => "0",
            "cargo_capacity" => "none",
            "consumables" => "2 days",
            "vehicle_class" => "space/planetary bomber",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/2/",
                "https://swapi.dev/api/films/3/"
            ],
            "url" => "https://swapi.dev/api/vehicles/16/"
        ]);
        Vehicle::create([
            "name" => "AT-AT",
            "model" => "All Terrain Armored Transport",
            "manufacturer" => "Kuat Drive Yards, Imperial Department of Military Research",
            "cost_in_credits" => "unknown",
            "length" => "20",
            "max_atmosphering_speed" => "60",
            "crew" => "5",
            "passengers" => "40",
            "cargo_capacity" => "1000",
            "consumables" => "unknown",
            "vehicle_class" => "assault walker",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/2/",
                "https://swapi.dev/api/films/3/"
            ],
            "url" => "https://swapi.dev/api/vehicles/18/"
        ]);
        Vehicle::create([
            "name" => "AT-ST",
            "model" => "All Terrain Scout Transport",
            "manufacturer" => "Kuat Drive Yards, Imperial Department of Military Research",
            "cost_in_credits" => "unknown",
            "length" => "2",
            "max_atmosphering_speed" => "90",
            "crew" => "2",
            "passengers" => "0",
            "cargo_capacity" => "200",
            "consumables" => "none",
            "vehicle_class" => "walker",
            "pilots" => [
                "https://swapi.dev/api/people/13/"
            ],
            "films" => [
                "https://swapi.dev/api/films/2/",
                "https://swapi.dev/api/films/3/"
            ],
            "url" => "https://swapi.dev/api/vehicles/19/"
        ]);
        Vehicle::create([
            "name" => "Storm IV Twin-Pod cloud car",
            "model" => "Storm IV Twin-Pod",
            "manufacturer" => "Bespin Motors",
            "cost_in_credits" => "75000",
            "length" => "7",
            "max_atmosphering_speed" => "1500",
            "crew" => "2",
            "passengers" => "0",
            "cargo_capacity" => "10",
            "consumables" => "1 day",
            "vehicle_class" => "repulsorcraft",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/2/"
            ],
            "url" => "https://swapi.dev/api/vehicles/20/"
        ]);
        Vehicle::create([
            "name" => "Sail barge",
            "model" => "Modified Luxury Sail Barge",
            "manufacturer" => "Ubrikkian Industries Custom Vehicle Division",
            "cost_in_credits" => "285000",
            "length" => "30",
            "max_atmosphering_speed" => "100",
            "crew" => "26",
            "passengers" => "500",
            "cargo_capacity" => "2000000",
            "consumables" => "Live food tanks",
            "vehicle_class" => "sail barge",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/3/"
            ],
            "url" => "https://swapi.dev/api/vehicles/24/"
        ]);
        Vehicle::create([
            "name" => "Bantha-II cargo skiff",
            "model" => "Bantha-II",
            "manufacturer" => "Ubrikkian Industries",
            "cost_in_credits" => "8000",
            "length" => "9.5",
            "max_atmosphering_speed" => "250",
            "crew" => "5",
            "passengers" => "16",
            "cargo_capacity" => "135000",
            "consumables" => "1 day",
            "vehicle_class" => "repulsorcraft cargo skiff",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/3/"
            ],
            "url" => "https://swapi.dev/api/vehicles/25/"
        ]);
        Vehicle::create([
            "name" => "TIE/IN interceptor",
            "model" => "Twin Ion Engine Interceptor",
            "manufacturer" => "Sienar Fleet Systems",
            "cost_in_credits" => "unknown",
            "length" => "9.6",
            "max_atmosphering_speed" => "1250",
            "crew" => "1",
            "passengers" => "0",
            "cargo_capacity" => "75",
            "consumables" => "2 days",
            "vehicle_class" => "starfighter",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/3/"
            ],
            "url" => "https://swapi.dev/api/vehicles/26/"
        ]);
        Vehicle::create([
            "name" => "Imperial Speeder Bike",
            "model" => "74-Z speeder bike",
            "manufacturer" => "Aratech Repulsor Company",
            "cost_in_credits" => "8000",
            "length" => "3",
            "max_atmosphering_speed" => "360",
            "crew" => "1",
            "passengers" => "1",
            "cargo_capacity" => "4",
            "consumables" => "1 day",
            "vehicle_class" => "speeder",
            "pilots" => [
                "https://swapi.dev/api/people/1/",
                "https://swapi.dev/api/people/5/"
            ],
            "films" => [
                "https://swapi.dev/api/films/3/"
            ],
            "url" => "https://swapi.dev/api/vehicles/30/"
        ]);
        Vehicle::create([
            "name" => "Vulture Droid",
            "model" => "Vulture-class droid starfighter",
            "manufacturer" => "Haor Chall Engineering, Baktoid Armor Workshop",
            "cost_in_credits" => "unknown",
            "length" => "3.5",
            "max_atmosphering_speed" => "1200",
            "crew" => "0",
            "passengers" => "0",
            "cargo_capacity" => "0",
            "consumables" => "none",
            "vehicle_class" => "starfighter",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/4/",
                "https://swapi.dev/api/films/6/"
            ],
            "url" => "https://swapi.dev/api/vehicles/33/"
        ]);
        Vehicle::create([
            "name" => "Multi-Troop Transport",
            "model" => "Multi-Troop Transport",
            "manufacturer" => "Baktoid Armor Workshop",
            "cost_in_credits" => "138000",
            "length" => "31",
            "max_atmosphering_speed" => "35",
            "crew" => "4",
            "passengers" => "112",
            "cargo_capacity" => "12000",
            "consumables" => "unknown",
            "vehicle_class" => "repulsorcraft",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/4/"
            ],
            "url" => "https://swapi.dev/api/vehicles/34/"
        ]);
        Vehicle::create([
            "name" => "Armored Assault Tank",
            "model" => "Armoured Assault Tank",
            "manufacturer" => "Baktoid Armor Workshop",
            "cost_in_credits" => "unknown",
            "length" => "9.75",
            "max_atmosphering_speed" => "55",
            "crew" => "4",
            "passengers" => "6",
            "cargo_capacity" => "unknown",
            "consumables" => "unknown",
            "vehicle_class" => "repulsorcraft",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/4/"
            ],
            "url" => "https://swapi.dev/api/vehicles/35/"
        ]);
        Vehicle::create([
            "name" => "Single Trooper Aerial Platform",
            "model" => "Single Trooper Aerial Platform",
            "manufacturer" => "Baktoid Armor Workshop",
            "cost_in_credits" => "2500",
            "length" => "2",
            "max_atmosphering_speed" => "400",
            "crew" => "1",
            "passengers" => "0",
            "cargo_capacity" => "none",
            "consumables" => "none",
            "vehicle_class" => "repulsorcraft",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/4/"
            ],
            "url" => "https://swapi.dev/api/vehicles/36/"
        ]);
        Vehicle::create([
            "name" => "C-9979 landing craft",
            "model" => "C-9979 landing craft",
            "manufacturer" => "Haor Chall Engineering",
            "cost_in_credits" => "200000",
            "length" => "210",
            "max_atmosphering_speed" => "587",
            "crew" => "140",
            "passengers" => "284",
            "cargo_capacity" => "1800000",
            "consumables" => "1 day",
            "vehicle_class" => "landing craft",
            "pilots" => [],
            "films" => [
                "https://swapi.dev/api/films/4/"
            ],
            "url" => "https://swapi.dev/api/vehicles/37/"
        ]);
        Vehicle::create([
            "name" => "Tribubble bongo",
            "model" => "Tribubble bongo",
            "manufacturer" => "Otoh Gunga Bongameken Cooperative",
            "cost_in_credits" => "unknown",
            "length" => "15",
            "max_atmosphering_speed" => "85",
            "crew" => "1",
            "passengers" => "2",
            "cargo_capacity" => "1600",
            "consumables" => "unknown",
            "vehicle_class" => "submarine",
            "pilots" => [
                "https://swapi.dev/api/people/10/",
                "https://swapi.dev/api/people/32/"
            ],
            "films" => [
                "https://swapi.dev/api/films/4/"
            ],
            "url" => "https://swapi.dev/api/vehicles/38/"
        ]);
        Vehicle::create([
            "name" => "Sith speeder",
            "model" => "FC-20 speeder bike",
            "manufacturer" => "Razalon",
            "cost_in_credits" => "4000",
            "length" => "1.5",
            "max_atmosphering_speed" => "180",
            "crew" => "1",
            "passengers" => "0",
            "cargo_capacity" => "2",
            "consumables" => "unknown",
            "vehicle_class" => "speeder",
            "pilots" => [
                "https://swapi.dev/api/people/44/"
            ],
            "films" => [
                "https://swapi.dev/api/films/4/"
            ],
            "url" => "https://swapi.dev/api/vehicles/42/"
        ]);
    }
}
