<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageClient extends Model
{
    use HasFactory;
    
    protected $table = "message_clients";

    public function client_individuals(){
        return $this->belongsTo(ClientIndividual::class, "client_id");
    }
    public function client_corporations(){
        return $this->belongsTo(ClientCorporation::class, "client_id");
    }
}
