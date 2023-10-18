<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Comment; 
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'etudiant',

    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
      
        public function image()
        {
            return $this->hasOne(Image::class);
        }
        
       public function etudiants()
       {
           return $this->hasMany(Etudiant::class);
       }
  
}

