<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'basic_table';

    protected $fillable = [
        'title',
        'content',
        'slug'
    ];

}

 Post::create([

    'title'=>'table title goes here',
    'content'=>'table data goes here',
    'slug'=>'another table title? goes here'

    ]);

    
