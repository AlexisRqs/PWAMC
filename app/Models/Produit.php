<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'descriptif',
        'ville',
        'image',
        'path',
        'code_qr',
        'quantite',
        'poids',
        'mention_legales'

    ];

      

      //Un produit peut être associé à plusieurs ingredients !
    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }
}
