<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function getClassNameAttribute()
    {
        if ($this->status->id == 1) return 'bg-#FFA252';
        if ($this->status->id == 2) return 'bg-#2EC98D';
        if ($this->status->id == 3) return 'bg-#4B93F5';
    }
}
