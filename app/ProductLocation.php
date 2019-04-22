<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ActivityRelation;

class ProductLocation extends Model
{
    use SoftDeletes, ActivityRelation;

    protected $fillable = [
        'shelf_id', 'compartment_id', 'level_id', 'status'
    ];

    public function product()
    {
        return $this->hasOne(App\Product::class);
    }

    public function compartment()
    {
        return $this->belongsTo(App\Compartment::class);
    }

    public function level()
    {
        return $this->belongsTo(App\Level::class);
    }
}