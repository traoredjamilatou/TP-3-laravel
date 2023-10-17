<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Comment; 
use App\Models\tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',

    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
      
        public function image()
        {
            return $this->hasOne(Image::class);
        }
        
       public function tuteurs()
       {
           return $this->belongsTo(tuteur::class);
       }
  
}
