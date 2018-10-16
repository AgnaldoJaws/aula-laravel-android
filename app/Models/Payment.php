<?php

namespace SON\Models;


use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Payment extends Model implements Transformable
{
    use TransformableTrait;
    use BelongsToTenants;

    protected $fillable = ['method','total','hash','total','token','user_id'];

}
