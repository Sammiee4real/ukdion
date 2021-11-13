<div>
    
    <div>
  
        <form wire:submit.prevent="save">
          @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
               
                <div class="grid grid-cols-3 gap-6">
                  <div class="col-span-3 sm:col-span-2">
                    <label for="campaign_name" class="block text-sm font-medium text-gray-700">
                      Campaign Name {{ $campaign->id }}
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                       
                        <input value="{{ $campaign->name }}" id="campaign_name" wire:model="campaign_name" type="text" autocomplete="campaign_name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Campaign Name">
                        <br/>
                        @error('campaign_name') <span class=" text-red-700 ">{{ $message }}</span>@enderror
                      
                      <input  wire:model="user_id" type="hidden"  required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="user id">
                     
                      
                      </div>
                  </div>
                </div>
    
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="date_from" class="block text-sm font-medium text-gray-700">
                        Date From
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                          
                          <input id="date_from"  wire:model="date_from" type="date" autocomplete="date_from" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Date From">
                          <br/>
                          @error('date_from') <span class=" text-red-700 ">{{ $message }}</span>@enderror
                        </div>
                    </div>
                  </div>
    
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="date_to" class="block text-sm font-medium text-gray-700">
                        Date To
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                         
                          <input id="date_to"  wire:model="date_to" type="date" autocomplete="date_to" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Date To">
                          <br/>
                          @error('date_to') <span class=" text-red-700 ">{{ $message }}</span>@enderror
                        </div>
                    </div>
                  </div>
    
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="total_budget" class="block text-sm font-medium text-gray-700">
                        Total Budget(USD)
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                         
                          <input id="total_budget"  wire:model="total_budget" type="number" autocomplete="total_budget" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Total Budget">
                          <br/>
                          @error('total_budget') <span class=" text-red-700 ">{{ $message }}</span>@enderror
                        </div>
                    </div>
                  </div>
    
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="daily_budget" class="block text-sm font-medium text-gray-700">
                        Daily Budget(USD)
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        
                          <input id="daily_budget"  wire:model="daily_budget" type="number" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Daily Budget">
                          <br/>
                          @error('daily_budget') <span class=" text-red-700 ">{{ $message }}</span>@enderror
                        </div>
                    </div>
                  </div>
    
    
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="creative_uploads" class="block text-sm font-medium text-gray-700">
                        Creative Uploads <span ></span>
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        
                          <input wire:model='creative_uploads' multiple   type="file" id="creative_uploads" name="creative_uploads"   autocomplete="creative_uploads" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Creative Uploads">
                          <br/>
                          @error('creative_uploads') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                  </div>
    
    
             
                
    
    
    
              </div>
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Edit This Campaign
                </button>
              </div>
            </div>
          </form>
    
    
    </div>

    
</div>
