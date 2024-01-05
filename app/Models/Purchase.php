<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'full_name',
        'payment_method',
        'email',
    ];

    // Relasi dengan model Game
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
