<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;


    public function typeConfigurations()
    {
        return $this->belongsTo(TypeConfiguration::class, "type_configuration_id", "id");
    }

}
