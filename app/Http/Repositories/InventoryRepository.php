<?php

namespace App\Http\Repositories;

use App\Inventory;
use App\Http\Repositories\CategoryRepository;

class InventoryRepository extends CategoryRepository
{

    public function create($data) {
    	$inventory = Inventory::create([
    		'category_id' => $this->getCategoryId($data->id),
    		'product_name'=> $data->name,
    		'quantity'	  => $data->quantity,
    		'amount'	  => $data->amount
    	]);

    	if ($inventory) {
    		return true;
    	}
    }

    public function getAllInventory() {
        return Inventory::all();
    }

    public function getInventoryById($id) {
        return Inventory::where_id($id)->get();
    }
}
