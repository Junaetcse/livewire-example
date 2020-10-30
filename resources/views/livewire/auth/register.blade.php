<div>
    <form wire:submit.prevent="register">
        <div>
            <label for="email">Email</label>
            <input wire:model="email" type="text" id="email" name="email">
            @error('email')
                <span>{{$message}}</span>
                    @enderror
                </div>
            <div>
            
            <label for="password">Password</label>
            <input wire:model.lazy="password" type="text" id="password" name="password">
            @error('password')
            <span>{{$message}}</span>
                @enderror
        </div>
        <div>
            
            <label for="confirm_password">Confirm Password</label>
            <input wire:model.lazy="confirm_password" type="text" id="confirm_password" name="confirm_password">
        </div>
        <div>
            <input type="submit" value="Registration"> 
        </div>
    </form>
</div>
