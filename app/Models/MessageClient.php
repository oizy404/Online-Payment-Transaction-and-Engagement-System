<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageClient extends Model
{
    use HasFactory;
    
    protected $table = "message_clients";

    public function clients(){
        return $this->belongsTo(Client::class, "client_id");
    }
}
