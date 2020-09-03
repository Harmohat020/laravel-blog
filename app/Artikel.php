<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
     protected $fillable = ['titel', 'content', 'auteur']; 
}
