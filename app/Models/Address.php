<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Address extends  Model{
    protected $table = "address";
    protected $fillable =  ['address' , 'pin_no' , 'email' , 'contact_no'];

}


