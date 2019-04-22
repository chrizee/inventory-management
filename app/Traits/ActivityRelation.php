<?php

namespace App\Traits;

use App\Activity;

trait ActivityRelation 
{
    
    public function activities() 
    {
        return $this->morphMany(Activity::class, "activityable");
    }
}

