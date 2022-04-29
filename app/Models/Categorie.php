<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;

class Categorie extends Model
{
    use HasFactory;
    protected $guard =['id','created_at','updated_at'];
    protected $fillable = [
        'nom',
        'path',
        'type',
        'descriptif',
    ];

    //Une catégorie peut être associer à 1 ou plusieurs ingrédients !
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

}
