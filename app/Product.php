<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ActivityRelation;

class Product extends Model
{
    use SoftDeletes, ActivityRelation;

    protected $fillable = [
        'name', 'description', 'product_category_id', 'unit', 'quantity', 'reorder_point', 'order_level',
        'unit_price', 'location_id', 'status'
    ];

    public function location() 
    {
        return $this->belongsTo(App\ProductLocation::class);
    }

    public function category() 
    {
        return $this->belongsTo(App\ProductCategory::class);
    }

    public function collections()
    {
        return $this->hasMany(App\Collection::class);
    }
}
