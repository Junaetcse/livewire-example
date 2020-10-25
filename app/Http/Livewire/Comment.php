<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\UserComment;

class Comment extends Component
{

    // public $comments;
    public $newComment;
    public $ticketID = 1;
    public function mount(){
        // $initialcomment = UserComment::latest()->get();
        //  $this->comments=$initialcomment;
    }

    protected $listeners=[
        'ticketselected',
    ];

    public function ticketselected($ticket_id)
    {
        $this->ticketID = $ticket_id;
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
            'body' => $this->newComment,
            'support_ticket_id' => $this->ticketID
        ]);

        // $this->comments->push($created_comment);
        // $this->comments->prepend($created_comment);
        $this->newComment = "";
        session()->flash('message', 'Comment successfully Added.');

    }

    public function removed($comment_id)
    {
        $comment = UserComment::find($comment_id);
        
        // $this->comments = $this->comments->where('id','!=',$comment_id);
        session()->flash('danger', 'Comment successfully Removed.');

        $comment->delete();
    }

    public function render()
    {
        return view('livewire.comment',[
            'comments' => UserComment::where('support_ticket_id', $this->ticketID)->latest()->get()
        ]);
    }
}
 