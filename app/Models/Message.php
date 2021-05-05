<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = "messages";

    public function associates(){
        return $this->belongsTo(Associate::class, "user_id");
    }
    public function client_individuals(){
        return $this->belongsTo(ClientIndividual::class, "user_id");
    }
    public function client_corporations(){
        return $this->belongsTo(ClientCorporation::class, "user_id");
    }
}
