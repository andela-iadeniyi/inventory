<?php

namespace App\Http\Repositories;

use App\Category;

class CategoryRepository
{
    public function create($data) {
    	$category = Category:create([
    		'name' => $data->name
    	])

    	if ($category) {
    		return true;
    	}
    }

    public function getCategoryId($id) {
    	$category = Category::where_id($id)->first();

        return $category->id;
    }

}
