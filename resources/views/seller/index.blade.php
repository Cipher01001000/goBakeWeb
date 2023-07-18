<x-layouts.seller-layout title="| Home">
 
<div class="flex flex-row">
  <x-partials.seller.sellerSideBar />
    {{-- dashboard --}}
    <div class="content flex flex-row">
      
      <div class="p-20">
        <h1 class="text-gray-700 font-bold text-2xl">Dashboard</h1>
        <canvas class="h-60" id="myChart"></canvas>
      </div>
  
      <div class="p-20">
        <canvas class="h-60" id="lineChart"></canvas>
      </div>

    </div>

    {{-- orders --}}
    <div class="content hidden w-full">
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
          <div data-tab-content="" class="p-5">
            {{-- all --}}
            <div class="block opacity-100" id="all" role="tabpanel">
              <form class="w-full">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600">Search</button>
                </div>
              </form>
              <table class="mt-5 w-full rounded-lg">
                <tr class="text-gray-800 bg-gray-500">
                  <td class="p-3">Product(s)</td>
                  <td class="p-3">Order Total</td>
                  <td class="p-3">Product id</td>
                  <td class="p-3">Status</td>
                  <td class="p-3">Payment Method</td>
                  <td class="p-3">Actions</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="p-3">Blueberry Chessecake</td>
                  <td class="p-3">2</td>
                  <td class="p-3">01001000</td>
                  <td class="p-3">Pending</td>
                  <td class="p-3">Cash on delivery</td>
                  <td class="p-3">Actions</td>
                </tr>
                <tr class="text-gray-700 bg-gray-200">
                  <td class="p-3">Blackforest</td>
                  <td class="p-3">1</td>
                  <td class="p-3">01001001</td>
                  <td class="p-3">Approved</td>
                  <td class="p-3">Gcash</td>
                  <td class="p-3">Actions</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="p-3">Blueberry Chessecake</td>
                  <td class="p-3">2</td>
                  <td class="p-3">01001000</td>
                  <td class="p-3">Pending</td>
                  <td class="p-3">Cash on delivery</td>
                  <td class="p-3">Actions</td>
                </tr>
                <tr class="text-gray-700 bg-gray-200">
                  <td class="p-3">Blackforest</td>
                  <td class="p-3">1</td>
                  <td class="p-3">01001001</td>
                  <td class="p-3">Approved</td>
                  <td class="p-3">Gcash</td>
                  <td class="p-3">Actions</td>
                  <tr class="text-gray-700">
                </tr>
                <tr class="text-gray-700">
                    <td class="p-3">Blueberry Chessecake</td>
                    <td class="p-3">2</td>
                    <td class="p-3">01001000</td>
                    <td class="p-3">To approved</td>
                    <td class="p-3">Cash on delivery</td>
                    <td class="p-3">Actions</td>
                  </tr>
                  <tr class="text-gray-700 bg-gray-200">
                    <td class="p-3">Blackforest</td>
                    <td class="p-3">1</td>
                    <td class="p-3">01001001</td>
                    <td class="p-3">Approved</td>
                    <td class="p-3">Gcash</td>
                    <td class="p-3">Actions</td>
                  </tr>
                  <tr class="text-gray-700">
                    <td class="p-3">Blueberry Chessecake</td>
                    <td class="p-3">2</td>
                    <td class="p-3">01001000</td>
                    <td class="p-3">Completed</td>
                    <td class="p-3">Cash on delivery</td>
                    <td class="p-3">Actions</td>
                  </tr>
                  <tr class="text-gray-700 bg-gray-200">
                    <td class="p-3">Blackforest</td>
                    <td class="p-3">1</td>
                    <td class="p-3">01001001</td>
                    <td class="p-3">Cancelled</td>
                    <td class="p-3">Gcash</td>
                    <td class="p-3">Actions</td>
                  </tr>
                </tr>
              </table>
            </div>
            {{-- to approved --}}
            <div class="hidden opacity-0" id="toApprove" role="tabpanel">
              <form class="w-full">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600">Search</button>
                </div>
              </form>
              <table class="mt-5 w-full rounded-lg">
                <tr class="text-gray-800 bg-gray-500">
                  <td class="p-3">Product(s)</td>
                  <td class="p-3">Order Total</td>
                  <td class="p-3">Product id</td>
                  <td class="p-3">Status</td>
                  <td class="p-3">Payment Method</td>
                  <td class="p-3">Actions</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="p-3">Blueberry Chessecake</td>
                  <td class="p-3">2</td>
                  <td class="p-3">01001000</td>
                  <td class="p-3">To approved</td>
                  <td class="p-3">Cash on delivery</td>
                  <td class="p-3">Actions</td>
                </tr>
              </table>
            </div>
            {{-- approved --}}
            <div class="hidden opacity-0" id="approved" role="tabpanel">
              <form class="w-full">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600">Search</button>
                </div>
              </form>
              <table class="mt-5 w-full rounded-lg">
                <tr class="text-gray-800 bg-gray-500">
                  <td class="p-3">Product(s)</td>
                  <td class="p-3">Order Total</td>
                  <td class="p-3">Product id</td>
                  <td class="p-3">Status</td>
                  <td class="p-3">Payment Method</td>
                  <td class="p-3">Actions</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="p-3">Blackforest</td>
                  <td class="p-3">1</td>
                  <td class="p-3">01001001</td>
                  <td class="p-3">Approved</td>
                  <td class="p-3">Gcash</td>
                  <td class="p-3">Actions</td>
                  <tr class="text-gray-700">
                </tr>
                <tr class="text-gray-700 bg-gray-200">
                  <td class="p-3">Blackforest</td>
                  <td class="p-3">1</td>
                  <td class="p-3">01001001</td>
                  <td class="p-3">Approved</td>
                  <td class="p-3">Gcash</td>
                  <td class="p-3">Actions</td>
                  <tr class="text-gray-700">
                </tr>
              </table>
            </div>
            {{-- completed --}}
            <div class="hidden opacity-0" id="completed" role="tabpanel">
              <form class="w-full">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600">Search</button>
                </div>
              </form>
              <table class="mt-5 w-full rounded-lg">
                <tr class="text-gray-800 bg-gray-500">
                  <td class="p-3">Product(s)</td>
                  <td class="p-3">Order Total</td>
                  <td class="p-3">Product id</td>
                  <td class="p-3">Status</td>
                  <td class="p-3">Payment Method</td>
                  <td class="p-3">Actions</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="p-3">Blueberry Chessecake</td>
                  <td class="p-3">2</td>
                  <td class="p-3">01001000</td>
                  <td class="p-3">Completed</td>
                  <td class="p-3">Cash on delivery</td>
                  <td class="p-3">Actions</td>
                </tr>  
              </table>
            </div>
            {{-- cancelled --}}
            <div class="hidden opacity-0" id="cancellation" role="tabpanel">
              <form class="w-full">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600">Search</button>
                </div>
              </form>
              <table class="mt-5 w-full rounded-lg">
                <tr class="text-gray-800 bg-gray-500">
                  <td class="p-3">Product(s)</td>
                  <td class="p-3">Order Total</td>
                  <td class="p-3">Product id</td>
                  <td class="p-3">Status</td>
                  <td class="p-3">Payment Method</td>
                  <td class="p-3">Actions</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="p-3">Blackforest</td>
                  <td class="p-3">1</td>
                  <td class="p-3">01001001</td>
                  <td class="p-3">Cancelled</td>
                  <td class="p-3">Gcash</td>
                  <td class="p-3">Actions</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- products --}}
    <div class="content hidden w-full flex-col">

      {{-- search --}}
      <form class="w-full p-5">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search" required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600">Search</button>
        </div>
      </form>

      <div class="my-4 w-full">
        @unless (count($products) == 0)
          <table class="w-full table-auto">
            <thead>
              <tr class="text-gray-800 bg-gray-500">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Stock</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Edit Product</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $index => $product)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-gray-200' }} text-gray-700 text-center">
                  <td class="border px-4 py-2">{{ $product->name }}</td>
                  <td class="border px-4 py-2">{{ $product->price }}</td>
                  <td class="border px-4 py-2">{{ $product->stock }}</td>
                  <td class="border px-4 py-2">{{ $product->category }}</td>
                  <td class="border px-4 py-2">
                    <div class="flex flex-row gap-3 justify-center items-center">
                      <a href="/seller/{{ $product->id }}/edit">
                        <button
                        class="flex select-none items-center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-1 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button"
                        data-ripple-light="true"
                        >
                        <i class="material-icons mr-1">edit</i>
                        Update
                      </button>
                      </a>
                      <i class="material-icons underline text-red-700 cursor-pointer">
                        <form method="POST" action="seller/{{ $product->id }}">
                          @csrf
                          @method('DELETE')
                          <button
                            class="flex select-none items-center rounded-lg bg-gradient-to-tr from-red-600 to-red-400 py-1 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true"
                            onclick="return confirm('Are you sure you want to delete this product?')"
                            >
                            <i class="material-icons mr-1">delete</i>
                            Delete
                          </button>
                        </form>
                      </i>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <div class="flex flex-row items-center justify-center py-2">
            <i class="material-icons text-gray-700 pr-1">inventory_2</i>
            <div class="text-gray-700 font-bold text-2xl">Empty items!</div>
          </div>
          <div class="flex justify-center items-center">
            <a
            class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true"
            href="{{ url('/add_product') }}"
            >
            <div class="flex flex-row justify-center items-center">
              Add product
              <div class="material-icons ml-1">add_circle_outline</div>
            </div>
            </a>
          </div>
        @endunless
      </div>
      
      <div class="mt-6 p-4">
        {{ $products->links() }}
      </div>
      
    </div>

    {{-- add products --}}
    <div class="content hidden">
      <div class="flex flex-row h-10 m-10 gap-5">
        <a
          class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          data-ripple-light="true"
          href="{{ url('/add_product') }}"
        >
          Add Products
        </a>
        <a
          class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          data-ripple-light="true"
          href="{{ url('/customize_product') }}"
        >
          Cake customization
        </a>
      </div>
    </div>
  
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Baking Tools', 'Cakes', 'Baking Equipments', 'Custom Cakes', 'Cupcakes', 'Ingredients'],
      datasets: [{
        label: 'Number of sales',
        data: [12, 19, 3, 5, 7, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script>
  const ctx2 = document.getElementById('lineChart');

  new Chart(ctx2, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Total sale by month',
        data: [12, 19, 3, 5, 7, 3, 4, 5, 7, 9, 10, 8],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<script src={{ asset('js/tab.js') }}></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>\
<script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
@endpush 
  
</x-layouts.seller-layout>