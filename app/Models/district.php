<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class district extends Model
{
    use HasFactory;
    use Notifiable;

    public $table = 'districts';
    protected $fillable = [
        'id','state_id','name'];


    public function states()
    {
        return $this->belongsTo('App\Models\state');
    }

}