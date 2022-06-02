<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public function usuarios(){
        return $this -> belongsTo(User::class, 'id_users');
    }
    public $timestamps = false;
}
