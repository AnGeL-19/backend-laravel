<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Step extends Model
{
    use HasFactory;

    protected $table = 'steps';

    protected $fillable = [
        'name',
        'description',
        'image',
        'due_date',
        'task_id',
        'state_id'
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
