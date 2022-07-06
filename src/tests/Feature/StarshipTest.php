<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Starship;

class StarshipTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_list_all_starships_success()
    {
        $response = $this->get('/api/starships');
        $response->assertStatus(200);
    }

    public function test_create_starship_success()
    {
        $starship = Starship::create(
            [
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
            ]
        );

        $this->assertEquals('CR90 corvette', $starship->name);
    }

    public function test_update_starship_success()
    {
        $starship = Starship::create(
            [
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
            ]
        );
        
        $starship->update([
            'name'=> 'CR90 corvette 2'
        ]);

        $this->assertEquals('CR90 corvette 2', $starship->name);
    }

    public function test_delete_starship_success()
    {
        $starship = Starship::create(
            [
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
            ]
        );
        
        $delet = $starship->delete();

        $this->assertTrue($delet);
    }
}
