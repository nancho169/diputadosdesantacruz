<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Firmantes;
class Diputados extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps = false;
    protected $table = 'diputados';

    public function diputados(){
        
        return $this->belongsTo(Diputados::class);
    }
    
}
