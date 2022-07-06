<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Vehicle;

class VehicleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/vehicles');

        $response->assertStatus(200);
    }

    public function test_create_vehicle_success()
    {
        $vehicle = Vehicle::create(
            [
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
            ]
        );

        $this->assertEquals('Sand Crawler', $vehicle->name);
    }

    public function test_update_vehicle_success()
    {
        $vehicle = Vehicle::create(
            [
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
            ]
        );
        
        $vehicle->update([
            'name'=> 'Reinaldo Marquez'
        ]);

        $this->assertEquals('Reinaldo Marquez', $vehicle->name);
    }

    public function test_delete_vehicle_success()
    {
        $vehicle = Vehicle::create(
            [
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
            ]
        );
        
        $delet = $vehicle->delete();

        $this->assertTrue($delet);
    }
}
