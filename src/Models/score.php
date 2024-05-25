<?php

// File: src/Models/Score.php

namespace Vendor\PaperRockScissorsGame\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
