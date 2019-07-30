<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class SimpleFunctionalTest extends TestCase
{
  use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWelcomePage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function testOnlyAvailableCategoriesAreShown()
    {
      //arrange
      $category_standart = \App\Category::create([
        'name' => 'Standart',
        'passengers'=> 4,
        'cost'=> 500
      ]);

      $category_economic = \App\Category::create([
        'name' => 'Economy',
        'passengers'=> 4,
        'cost'=> 500
      ]);

      $location = \App\Location::create([
        'ciudad' => 'Guadalajara',
        'is_airport'=> true,
        'direccion'=> 'Direccion 1'
      ]);

      $location->categories()->attach($category_standart);
      //act
      $response = $this->call('get','/categoriesPersonalized',[
        'start'=>$location->id,
        'return'=>'2019-02-02',
        'location_start'=>$location->id,
        'location_end'=>'2019-02-04'
      ]);

      // assert
      // $response->assertStatus(200);
      $response->assertSee('Standart');
      $response->assertDontSee('Economy');
    }
}
