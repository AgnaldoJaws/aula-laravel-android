<?php

namespace SON\Models;

use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Item extends Model implements Transformable
{
    use TransformableTrait;
    use BelongsToTenants;


    protected $fillable = ['payment_id','qtd','value','user_id'];

    public function items() {
        return $this->belongsTo(Payment::class);
    }

}
