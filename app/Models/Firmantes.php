<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Firmantes;
class Firmantes extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps = false;
    protected $table = 'firmantes';

    public function firmantes(){
        
        return $this->belongsTo(Firmantes::class);
    }
    
}
