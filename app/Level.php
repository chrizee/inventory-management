<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ActivityRelation;

class Level extends Model
{
    use SoftDeletes, ActivityRelation;
}
