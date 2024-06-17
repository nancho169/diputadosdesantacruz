<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps = false;
    protected $table = 'proyectos';

    public function proyectos(){
        
        return $this->belongsTo(Proyectos::class);
    }
    
}
