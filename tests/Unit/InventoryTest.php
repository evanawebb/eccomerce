<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Inventory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class InventoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateInventory()
    {
        $newShirt = factory(Inventory::class)->create([
            'category' => 'Shirt',
            'subCategory' => 'Work Shirts',
        ]);

        $newPant = factory(Inventory::class)->create([
            'category' => 'Pant',
            'subCategory' => '100% Cotton Pants',
        ]);

        $this->assertDatabaseHas('inventories', [
            'name' => $newShirt->name,
        ]);

        $this->assertDatabaseHas('inventories', [
            'name' => $newPant->name,
        ]);
    }

    public function testGetShirts()
    {
        $newShirt = factory(Inventory::class)->create([
            'category' => 'Shirts',
            'subCategory' => 'Work Shirts',
        ]);

        $newPant = factory(Inventory::class)->create([
            'category' => 'Pants',
            'subCategory' => '100% Cotton Pants',
        ]);

        $dbShirt = Inventory::shirts()->get()->first();

        $this->assertEquals($newShirt->attributes, $dbShirt->attributes);
    }
}
