<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloge extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre',
        'contenu',
        'image',
        'id_user',
        'id_categorie',
    ];

    public function Categorie(){
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }

    public function User(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
