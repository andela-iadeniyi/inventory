<?php

namespace App\Http\Controllers;

use App\Inventory;

class InventoryController extends Controller
{
	public function getInventory() {
		return $this->inventory->getAllInventory();
	}
}
