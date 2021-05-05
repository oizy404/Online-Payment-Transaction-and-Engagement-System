<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageAssociate extends Model
{
    use HasFactory;

    protected $table = "message_associates";

    public function associates(){
        return $this->belongsTo(Associate::class, "associate_id");
    }
}
