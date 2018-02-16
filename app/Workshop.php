<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Company;
class Workshop extends Model
{
    //
    public function company(){
        return $this->belongsTo(Company::class,'company_id');
     }
}
