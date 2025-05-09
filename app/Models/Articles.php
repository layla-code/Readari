<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'Title',
        'Categorie',
        'Description',
        'levels_id',
    ];}
