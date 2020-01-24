<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postad extends Model
{
    protected $fillable = [
        'RenterUsername','Housename','phonenumber','availablefrom','availablefloor','type_rent','budget_rent','Divisionselect','Cityselect','Areaselect','full_address','About_rent','image_name','user_type',
    ];
}
