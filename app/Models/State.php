<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class state extends Model
{

   use HasFactory;
    use Notifiable;

    public $table = 'states';
    protected $fillable = ['id','name'];

    public function district()
    {
        return $this->hasMany('App\district');
    }
}
