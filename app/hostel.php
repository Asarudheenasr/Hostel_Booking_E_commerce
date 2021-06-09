<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hostel extends Model
{
    protected $fillable = [
        'hostel_name', 'state', 'district','address','images','bedcapacity','ac','food','bedcapacity','men','woman','wifi','shelf','parking','kitchen','laundry'
       
    
        
       
    ];

}
