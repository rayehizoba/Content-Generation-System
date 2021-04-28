<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function difficulty()
    {
        return $this->belongsTo(Difficulty::class);
    }

    public function audience()
    {
        return $this->belongsTo(Audience::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function problems()
    {
        return $this->belongsToMany(Problem::class);
    }
}
