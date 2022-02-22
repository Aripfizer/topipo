<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ["name", "email", "entreprise_id"];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
   
}
