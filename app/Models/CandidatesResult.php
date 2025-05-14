<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidatesResult extends Model
{
    protected $table = 'candidates_result';
    protected $fillable = [
        'CandidateName',
        'PositionId',
        'Score'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'PositionId');
    }
}
