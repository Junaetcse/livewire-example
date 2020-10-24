<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\UserComment;

class Comment extends Component
{

    public $comments;
    public $newComment;
    public function mount(){
        $initialcomment = UserComment::all();
         $this->comments=$initialcomment;
    }

    public function addComment()
    {

        if($this->newComment == ''){
            return;
        }

        $created_comment = UserComment::create([
            'user_id' => 1,
            'body' => $this->newComment
        ]);

        // $this->comments->push($created_comment);
        $this->comments->prepend($created_comment);

    }

    public function render()
    {
        return view('livewire.comment');
    }
}
