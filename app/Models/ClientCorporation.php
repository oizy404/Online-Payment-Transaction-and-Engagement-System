<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCorporation extends Model
{
    use HasFactory;

    protected $table = "client_corporations";

    public function associates(){
        return $this->belongsTo(Associate::class, "associate_id");
    }
    public function message_clients(){
        return $this->hasMany(MessageClient::class);
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
}
