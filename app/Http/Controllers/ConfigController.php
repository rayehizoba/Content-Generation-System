<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Models\Category;
use App\Models\Difficulty;
use App\Models\Problem;
use App\Models\Type;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return [
            'categories' => Category::all(),
            'difficulties' => Difficulty::all(),
            'types' => Type::all(),
            'audiences' => Audience::all(),
            'problems' => Problem::all(),
        ];
    }
}
