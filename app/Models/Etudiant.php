<?php

namespace App\Models;

use App\Models\Image;
// use App\Models\Comment; 
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'classe',
        'images',
    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
      
        public function image()
        {
            return $this->hasOne(Image::class);
        }
        
       public function tuteur()
       {
           return $this->belongsTo(Tuteur::class);
       }
  
}
