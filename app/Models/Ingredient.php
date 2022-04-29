<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Ingredient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'descriptif',
        'quantite',
        'image',
        'path',
        'mesure',
        'poids',
        'region',
        'reference'
    ];

    //Un ingredient peut être associé à une seule catégorie !
    public function categorie(){
        return $this->belongsTo(Categorie::class,'id_categorie');
    }

    
    //Un Produit peut être associer à 1 ou plusieurs ingrédients !
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}
