<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
      'message', 'activityable_id', 'activityable_type'  
    ];

    public function activityable() {
        return $this->morphTo();
    }
}
