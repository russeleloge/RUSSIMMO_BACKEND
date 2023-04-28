<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeConfiguration extends Model
{
    use HasFactory;

    public $fillable = [
        "code", "libelle"
    ];


    public function configurations(){
        return $this->hasMany(Configuration::class);
    }
}
