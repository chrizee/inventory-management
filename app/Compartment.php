<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ActivityRelation;

class Compartment extends Model
{
    use SoftDeletes, ActivityRelation;
}
