<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

       // Au cas le nom du modele est different de celui de la table en question
    // protected $table = "articles";\

    public function configurations(){
        return $this->hasMany(Configuration::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,"user_bien","bien_id","user_id");
    }

}
