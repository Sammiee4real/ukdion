<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Campaigns') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div>
                    @if (session()->has('message'))
                        <div class=" bg-green-100 text-gray-900 p-4">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                </div>
            </div>

            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                 Campaign Name
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date From
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date To
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Total Budget(USD)
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Daily Budget(USD)
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date Created
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   Creative Uploads
                </th>
                
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Action
                 </th>

              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($campaigns as $campaign)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $campaign->campaign_name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $campaign->date_from }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{-- <td class="px-6 py-4 whitespace-nowrap"> --}}
                {{-- <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> --}}
                    {{ $campaign->date_to }}
                {{-- </span> --}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                &#36;{{ number_format($campaign->total_budget) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                &#36;{{  number_format($campaign->daily_budget) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{  $campaign->created_at->diffForHumans() }}
              </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Get Creative Uploads</a>
                </td>
                   
            
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="edit_campaign/{{ $campaign->id }}" class=" text-white p-1 rounded-lg  bg-blue-400  hover:bg-indigo-900">Edit</a>
              </td>
            
           
                
            </tr>
            @empty
            <div class=" bg-blue-100 text-gray-900 p-4">
                 {{ __('No record found') }}<hr/>
            </div>
            @endforelse
            
            <tr >
                <td colspan="7">{{ $campaigns->links() }}</td>
            </tr>

              <!-- More people... -->
            </tbody>
          </table>

        

        </div>
      </div>
    </div>
  </div>
  



        </div>
    </div>
</x-app-layout>
