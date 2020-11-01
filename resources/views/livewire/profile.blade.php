<div>

  
        <form wire:submit.prevent="save">
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                  <label for="company_website" class="block text-sm font-medium leading-5 text-gray-700">
                   Profile
                  </label>
                </div>
              </div>
              <div>
                <div>
                  @if($saved)
                  <div class="toast">
                    <div class="toast-header text-dark">
                      Toast Header
                    </div>
                    <div class="toast-body">
                      Some text inside the toast body
                    </div>
                  </div>

                  @endif
                </div>
              </div>
              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                  <label for="company_website" class="block text-sm font-medium leading-5 text-gray-700">
                    Website
                  </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                      http://
                    </span>
                    <input wire:model="name"id="company_website" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="www.example.com">
                </div>
                @error('name')
                <div class="mt-1 text-red-500 text-sm">{{$message}}</div>
                @enderror  
                </div>
              </div>
  
              <div class="mt-6">
                <label for="about" class="block text-sm leading-5 font-medium text-gray-700">
                  About
                </label>
                <div class="rounded-md shadow-sm">
                  <textarea id="about" wire:model="about" rows="3" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="you@example.com"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">
                  Brief description for your profile. URLs are hyperlinked.
                </p>
              </div>
              @error('about')
              <div class="mt-1 text-red-500 text-sm">{{$message}}</div>
              @enderror  
  
              <div class="mt-6">
                <label class="block text-sm leading-5 font-medium text-gray-700">
                  Photo
                </label>
                <div class="mt-2 flex items-center">
                  <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                  </span>
                  <span class="ml-5 rounded-md shadow-sm">
                    <button type="button" class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                      Change
                    </button>
                  </span>
                </div>
              </div>
  
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <span class="inline-flex rounded-md shadow-sm">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                  Save
                </button>
              </span>
            </div>
          </div>
        </form>

</div>
