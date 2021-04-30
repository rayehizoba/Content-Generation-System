<?php

namespace App\Http\Livewire;

use App\Models\Question;
use App\Models\Status;
use Livewire\Component;

class QuestionsPage extends Component
{
    public $search = '';
    public $status;

    protected $queryString = ['search', 'status'];

    public function setStatus($id =null)
    {
        $this->status = $id;
    }

    public function render()
    {
        $query = Question::query();
        $query->whereRaw("UPPER('label') LIKE '%'". strtoupper($this->search)."'%'");
        $query->when($this->status, function ($q) {
            return $q->where('status_id', $this->status);
        });
        return view('livewire.questions-page', [
            'statuses' => Status::all(),
            'questions' => $query->get(),
        ]);
    }
}
