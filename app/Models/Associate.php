<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    use HasFactory;

    protected $table = "associates";

    public function clients(){
        return $this->hasMany(Client::class);
    }
    public function message_associates(){
        return $this->hasMany(MessageAssociate::class);
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
}
