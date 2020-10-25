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
    <form wire:submit.prevent="addComment" class="mb-3">
        <input type="text" class="form-control w-50" name="Hello" style="display: inline-block;" wire:model="newComment">
        <button class="btn btn-primary"  type="submit">Add</button>
    </form>
    <div class="container">
        <div class="row">
           @foreach ($comments as $comment)
           <div class="col-12 text-left mb-3">
               <div class="card bg-info p-1">
                    <p class="card-title">{{$comment->user['name']}} {{$comment->id}} <span style="float: right;"> <i class="fas fa-trash-alt text-danger" style="floa font-size: 20px;cursor: pointer;" wire:click="removed({{$comment->id}})"></i></span></p> 
                    <p class="card-text">{{$comment->body}}</p>
                    <h5>{{$comment->created_at->diffForHumans()}}</h5>
               </div>
           </div>
           @endforeach
            {{-- {{ $comments->links() }} --}}
       </div>
   
    </div>
 </div>
 
</div>