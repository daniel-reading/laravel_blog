<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable=[
        'intitule',
    ];

    public function Bloge(){
        return $this->hasMany(Bloge::class, 'id_categorie');
    }
}
