<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    use HasFactory;

    protected $table = "associates";

    public function client_corporations(){
        return $this->hasMany(ClientCorporation::class);
    }
    public function client_individuals(){
        return $this->hasMany(ClientIndividual::class);
    }
    public function message_associates(){
        return $this->hasMany(MessageAssociate::class);
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
}
