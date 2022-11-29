<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardDetail extends Model
{
    use HasFactory;
    protected $table = 'card_details';
    protected $primaryKey = 'id';
    

    public function card() {
        return $this->belongsTo(Card::class);
    }
}
