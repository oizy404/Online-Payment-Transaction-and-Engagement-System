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
    public function clients(){
        return $this->belongsTo(Client::class, "user_id");
    }
}
