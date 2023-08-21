<x-layouts.seller-layout title="| Orders">
 
    <div class="flex flex-row">
      <x-partials.seller.sellerSideBar />
      <div class="ml-64 w-full">

        <div class="w-full">
          <div class="flex flex-row items-center px-10 pt-5">
            <i class="material-icons text-gray-500">shopping_bag</i>
            <div class="text-gray-700 text-2xl">Orders</div>
          </div>
          <div class="w-full p-5">
            <div class="relative right-0">
              <ul
                class="relative flex list-none flex-wrap rounded-xl bg-blue-gray-50/60 p-1"
                data-tabs="tabs"
                role="list"
              >
                <li class="z-30 flex-auto text-center">
                  <a
                    class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                    data-tab-target=""
                    active=""
                    role="tab"
                    aria-selected="true"
                    aria-controls="all"
                  >
                    <span class="ml-1">All</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                  <a
                    class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                    data-tab-target=""
                    role="tab"
                    aria-selected="false"
                    aria-controls="toApprove"
                  >
                    <span class="ml-1">To approve</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                  <a
                    class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                    data-tab-target=""
                    role="tab"
                    aria-selected="false"
                    aria-controls="approved"
                  >
                    <span class="ml-1">Approved</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                  <a
                    class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                    data-tab-target=""
                    role="tab"
                    aria-selected="false"
                    aria-controls="completed"
                  >
                    <span class="ml-1">Completed</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                  <a
                    class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                    data-tab-target=""
                    role="tab"
                    aria-selected="false"
                    aria-controls="cancellation"
                  >
                    <span class="ml-1">Cancelation</span>
                  </a>
                </li>
              </ul>
              <form class="w-full mt-3" action="/customerOrder">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" name="search" id="default-search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600">Search</button>
                </div>
              </form>
              @unless ($orders->isEmpty())
              <div data-tab-content="" class="">
                {{-- all --}}
                <div class="block opacity-100" id="all" role="tabpanel">
                  <table class="mt-5 w-full rounded-lg">
                    <tr class="text-gray-800 text-sm text-center bg-gray-500 truncate">
                      <td class="p-3">Product(s)</td>
                      <td class="p-3">Buyer Name</td>
                      <td class="p-3">Order Total</td>
                      <td class="p-3">Status</td>
                      <td class="p-3">Payment Method</td>
                      <td class="p-3">Address</td>
                      <td class="p-3">Order Time</td>
                      <td class="p-3">Actions</td>
                    </tr>
                    @foreach ($orders as $index => $order)
                    <tr class="text-gray-700 text-sm text-center truncate {{ $index % 2 == 0 ? 'bg-gray-0' : 'bg-gray-200' }}">
                      <td class="p-3 border px-4 py-2">{{ $order->name; }}</td>
                      <td class="p-3 border px-4 py-2">{{ $order->customer_name}}</td>
                      <td class="p-3 border px-4 py-2">1</td>
                      <td class="p-3 border px-4 py-2">
                        @if ($order->status === "Pending")
                          <div class="flex justify-center p-1 items-center border-2 rounded-lg border-indigo-600">
                            {{ $order->status }}
                            <i class="material-icons ml-1 text-indigo-600">pending_actions</i>
                          </div>
                        @endif
                      </td>
                      <td class="p-3 border px-4 py-2">{{ $order->payment_method }}</td>
                      <td class="p-3 border px-4 py-2">{{ $order->address }}</td>
                      <td class="p-3 border px-4 py-2">{{ $order->created_at->diffForHumans() }}</td>
                      <td class="p-3 border px-4 py-2">
                        <div class="flex flex-row">
                          <a href="/seller/{{ $order->id }}/edit"
                            class="flex flex-row justify-center items-center">
                          <button
                            class="text-blue-400"
                            type="button"
                            data-ripple-light="true"
                            >
                            <i class="material-icons mr-1 text-blue-400">edit_square</i>
                          </button>
                          </a>
  
                          <a href="{{ url('/cancelOrder') }}"
                            class="flex flex-row justify-center items-center">
                          <button
                            class="text-blue-400"
                            type="button"
                            data-ripple-light="true"
                            >
                            <i class="material-icons mr-1 text-red-400">cancel</i>
                          </button>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    @else
                      <div class="flex flex-row items-center justify-center py-10">
                        <i class="material-icons text-gray-700 pr-1">inventory_2</i>
                        <div class="text-gray-700 font-bold text-2xl">No orders yet!</div>
                      </div>
                    @endunless
                  </table>
                  <div class="mt-6 p-4">
                    {{ $orders->links() }}
                  </div>
            </div>    
        </div>
    </div>
    
    @push('scripts')
    <script src={{ asset('js/tab.js') }}></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
    @endpush 
      
    </x-layouts.seller-layout>