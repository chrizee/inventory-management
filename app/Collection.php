<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ActivityRelation;

class Collection extends Model
{
    use SoftDeletes, ActivityRelation;

    protected $fillable = [
        'quantity', 'requested_by', 'status', 'comment'
    ];

    public function product()
    {
        return $this->belongsTo(App\Product::class);
    }

    public function requestedBy()
    {
        return $this->hasOne(App\User::class, 'requested_by');
    }

    public function approvedBy()
    {
        return $this->hasOne(App\User::class, 'approved_by');
    }

    public function collectedBy()
    {
        return $this->hasOne(App\User::class, "collected_by");
    }
}
