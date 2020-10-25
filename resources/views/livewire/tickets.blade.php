<div>
    <h5 class="text-center py-2">Support Ticket</h5>
    <div class="row">
        @foreach ($tickets as $ticket)
        <div class="col-12 text-left mb-3">
            {{-- <div class="card bg-info p-1"style="cursor: pointer;" wire::click="$emit('ticketselected',{{ $ticket->id }})"> --}}
            <div class="card  p-1 {{ $active === $ticket->id ? 'bg-light':'bg-info' }}"style="cursor: pointer;" wire:click="$emit('ticketselected',{{ $ticket->id }})">
                 <p class="card-text">{{$ticket->question}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
