<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    public function Entreprise(){
        return $this->belongsTo(Entreprise::class,'ide');
    }
    protected $fillable = [
        'ide','nom','prenom','email'
    ];
}
