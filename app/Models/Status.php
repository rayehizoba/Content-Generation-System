<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function getClassNameAttribute()
    {
        if ($this->id == 1) return 'bg-#EF9345 text-#91521D';
        if ($this->id == 2) return 'bg-#24B77E text-#157E55';
        if ($this->id == 3) return 'bg-#3885ED text-#235BA7';
    }
}
