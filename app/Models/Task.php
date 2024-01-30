<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'active',
        'due_date',
        'todo_id',
        'state_id',
    ];

    public function steps(){
        return $this->hasMany(Step::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function todo(){
        return $this->belongsTo(Todo::class);
    }

    public function users(): BelongsToMany
    {
        //return $this->belongsToMany(User::class)->withPivot('name')->withTimestamps();
        return $this->belongsToMany(User::class)->using(TaskUser::class); // para relacion
    }
}
