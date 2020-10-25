<div>
<div class="jumbotron text-center">
    @error('newComment') <span class="error text-danger mb-2">{{ $message }}</span> @enderror
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div>
        @if (session()->has('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif
    </div>
    <form wire:submit.prevent="addComment">
        <input type="text" class="form-control w-50" name="Hello" style="display: inline-block;" wire:model="newComment">
        <button class="btn btn-primary"  type="submit">Add</button>
    </form>
 </div>
 
 <div class="container">
     <div class="row">
        @foreach ($comments as $comment)
        <div class="col-md-6 text-left mb-3">
            <div class="card bg-info ">
                <div class="card-header">
                    <i class="fas fa-trash-alt text-danger" style="float: right; font-size: 20px;cursor: pointer;" wire:click="removed({{$comment->id}})"></i>
                </div>
                <div class="card-body">
                  <h3 class="card-title">{{$comment->user['name']}} {{$comment->id}}</h3>
                         <p class="card-text">{{$comment->body}}</p>
                        <h5>{{$comment->created_at->diffForHumans()}}</h5>
                </div>
            </div>
        </div>
        @endforeach
         {{ $comments->links() }}
    </div>

 </div>
</div>