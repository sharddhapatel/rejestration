<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class city extends Model
{
    use HasFactory;
    use Notifiable;

    public $table='city';
    protected $fillable=['id','name','districtid'];

    public function city()
    {
        return $this->belongsTo('App\Models\district');
    }



    
}
