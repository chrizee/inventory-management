<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ActivityRelation;

class Warehouse extends Model
{
    use SoftDeletes, ActivityRelation;
}
