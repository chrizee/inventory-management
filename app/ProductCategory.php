<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ActivityRelation;

class ProductCategory extends Model
{
    use SoftDeletes, ActivityRelation;

    protected $fillable = [
        'name', 'description', 'reorder_point', 'order_level'
    ];

    public function product() {
        return $this->hasMany(App\Product::class);
    }
}
