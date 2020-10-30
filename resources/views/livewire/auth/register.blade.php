<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full"  style="
    border: 2px solid #e0d9d9;
    background: #f7f7f7;
    padding: 25px;
">
      <div>
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
          Sign in to your account
        </h2>
      </div>

      <form class="mt-8 "  wire:submit.prevent="register">
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm">
          <div class="py-2">
              <label for="email" >Email Address</label>
              <input style="background-color: rgb(247, 247, 247);" aria-label="Email address" wire:model="email"  name="email" type="email" required class="@error('email') border-red-500 @enderror appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Email address">
                @error('email')
                <div class="mt-1 text-red-500 text-sm">{{$message}}</div>
                @enderror
             
            </div>

            <div class="py-2">
            <label for="password" >Password</label>
            <input style="background-color: rgb(247, 247, 247);"  aria-label="Password" wire:model.lazy="password"  name="password" type="password" required class="@error('password') border-red-500 @enderror appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Password">
            @error('password')
            <div class="mt-1 text-red-500 text-sm">{{$message}}</div>
            @enderror
         
        </div>
            <div class="py-2">
            <label for="confirm_password" >Confirm Password</label>
            <input style="background-color: rgb(247, 247, 247);"  aria-label="Password" wire:model.lazy="confirm_password" name="confirm_password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Password">
        </div>
    </div>
    <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
           Registration
          </button>
        </div>
              <div style="
              text-align: center;
              font-size: 14px;
              margin-top: 5px;
          ">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    Alreaday Have an Account Login
                  </a>
              </div>
      </form>
    </div>
  </div>

{{--  
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
   </div>   --}}

