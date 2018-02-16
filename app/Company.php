<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Workshop;
class Company extends Model
{
    //
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
