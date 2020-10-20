<div class="jumbotron text-center">
    <form action="#">
        
        <input type="text" class="form-control w-50" name="Hello" style="display: inline-block;" wire:model="newComment">
        <button class="btn btn-primary" wire:click="addComment" type="button">Add</button>
    </form>
 </div>
 
 <div class="container">
    <div class="row">
        <div class="col text-left">
            @foreach ($a as $comment)
            <div class="card bg-info ">
                <h5>{{$comment}}</h5>
                {{-- <div class="card-body">
                  <h3 class="card-title">{{$comment['creator']}}</h3>
                         <p class="card-text">{{$comment['body']}}</p>
                        <h5>{{$comment['time']}}</h5>
                </div> --}}
            </div>
            @endforeach
        </div>
    </div>
 </div>
 