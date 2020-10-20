<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{

    public $comments = [
        [
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam similique quis unde iure odit enim porro culpa architecto exercitationem
            iste perferendis deleniti inventore quidem, error odio impedit, sunt numquam earum.',
            'time' => '3 min ago',
            'creator' => 'Junaet'
        ],
        [
            'body' => 'new Comment',
            'time' => '3 min ago',
            'creator' => 'Junaet'
        ]
    ];

    public $a=array("a"=>"red","b"=>"green");

    public $newComment;
    public function addComment()
    {
        array_unshift($this->a,"blue");
        // array_unshift($this->comments,[
        //     'body' => $this->newComment,
        //     'time' => \Carbon\Carbon::now()->diffForHumans(),
        //     'creator' => 'Junaet'
        // ]);
    }
    public function render()
    {
        return view('livewire.comment');
    }
}
