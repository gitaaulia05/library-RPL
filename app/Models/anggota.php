<?php

namespace App\Models;

use App\Models\order;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{

    protected $table = "anggotas";
    protected $primaryKey = "id_anggota";
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        "id_anggota",
        "slug",
        "nama",
        "gambar_anggota",
        "email", 
        "credit_anggota"
    ];



    public function order () : hasMany {
        return $this->hasMany( order::class , 'id_anggota' , 'id_anggota');
    }
    
}
