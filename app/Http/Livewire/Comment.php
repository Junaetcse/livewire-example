<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{

    public $comments;
    public $newComment;
    public function mount($com){
        
         $this->comments=$com;
    }

    public function addComment()
    {

        if($this->newComment == ''){
            return;
        }
        array_unshift($this->comments,[
            'body' => $this->newComment,
            'time' => \Carbon\Carbon::now()->diffForHumans(),
            'creator' => 'Junaet'
        ]);
    }
    public function render()
    {
        return view('livewire.comment');
    }
}
