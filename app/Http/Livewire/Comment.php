<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\UserComment;

class Comment extends Component
{

    public $comments;
    public $newComment;
    public function mount(){
        $initialcomment = UserComment::latest()->get();
         $this->comments=$initialcomment;
    }

    public function updated($newComment)
    {
        $this->validate(['newComment' => 'required|max:200']);
    }

    public function addComment()
    {

        $this->validate(['newComment' => 'required|max:200']);
        $created_comment = UserComment::create([
            'user_id' => 1,
            'body' => $this->newComment
        ]);

        // $this->comments->push($created_comment);
        $this->comments->prepend($created_comment);
        $this->newComment = "";
        session()->flash('message', 'Comment successfully Added.');

    }

    public function removed($comment_id)
    {
        $comment = UserComment::find($comment_id);
        $this->comments = $this->comments->where('id','!=',$comment_id);
        session()->flash('danger', 'Comment successfully Removed.');

        // $comment->delete();
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
 