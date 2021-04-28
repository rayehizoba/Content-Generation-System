<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Audience;
use App\Models\Category;
use App\Models\Difficulty;
use App\Models\Question;
use App\Models\Type;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create random questions
        $questions = [
            [
                'label' => 'Who is the present Queen of England ?',
                'answers' => [ 'Queen Elizabeth II' ]
            ],
            [
                'label' => 'Who is at the head of the country in England ?',
                'answers' => [ 'Elizabeth II' ]
            ],
            [
                'label' => 'Since when does Elizabeth II reign ?',
                'answers' => [ '1952' ]
            ],
            [
                'label' => 'What is the name of the Queen of United Kingdom since 1952 ?',
                'answers' => [ 'Elizabeth II', 'Queen Elizabeth II' ]
            ],
            [
                'label' => 'What is the name of the Queen of the United Kingdom ?',
                'answers' => [ 'Elizabeth II', 'Queen Elizabeth II' ]
            ],
        ];
        foreach ($questions as $question) {
            Question::create([
                'label' => $question['label'],
                'difficulty_id' => Difficulty::inRandomOrder()->first()->id,
                'audience_id' => Audience::inRandomOrder()->first()->id,
                'type_id' => Type::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ]);
        }

        // Fetch the question ids
        $question_ids = Question::all('id')->pluck('id')->toArray();

        // Create random answers
        foreach ($question_ids as $key => $question_id) {
            foreach ($questions[$key]['answers'] as $answer) {
                Answer::create([
                    'label' => $answer,
                    'is_correct' => true,
                    'question_id' => $question_id
                ]);
            }
            Answer::factory()->count(3)->create([
                'is_correct' => false,
                'question_id' => $question_id
            ]);
        }
    }
}
