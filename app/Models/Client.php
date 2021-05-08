<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";

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
