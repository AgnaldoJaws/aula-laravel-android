<?php

namespace SON\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


class Endereco extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        "cep",
        "address",
        "number",
        "city",
        "neighborhood",
        "state",
        "complement",
        "user_id"
       ];

       public function category() {
        return $this->belongsTo(User::class);
    }

}
