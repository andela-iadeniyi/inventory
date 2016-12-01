<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';

    protected $fillable = ['category_id',
							'product_name',
							'quantity',
							'amount'
						];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
