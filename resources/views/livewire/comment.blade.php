<div>
<div class="jumbotron text-center">
    <form wire:submit.prevent="addComment">
        
        <input type="text" class="form-control w-50" name="Hello" style="display: inline-block;" wire:model.lazy="newComment">
        <button class="btn btn-primary"  type="submit">Add</button>
    </form>
 </div>
 
 <div class="container">
     <div class="row">
        @foreach ($comments as $comment)
        <div class="col-md-6 text-left mb-3">
            <div class="card bg-info ">
                <div class="card-body">
                  <h3 class="card-title">{{$comment->user['name']}}</h3>
                         <p class="card-text">{{$comment->body}}</p>
                        <h5>{{$comment->created_at->diffForHumans()}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

 </div>
</div>