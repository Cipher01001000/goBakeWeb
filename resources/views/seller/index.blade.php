<x-layouts.seller-layout title="| Home">
 
<div class="flex flex-row">
  <x-partials.seller.sellerSideBar />
  <div class="ml-64">
    <div class="flex flex-row items-center pl-10 pt-5">
      <i class="material-icons text-gray-500">dashboard</i>
      <div class="text-gray-700 text-2xl">Dashboard</div>
    </div>
    {{-- body --}}
      <div class="flex flex-col px-11 pt-5">
        {{-- contents --}}
        <div class="flex-row flex items-center">
        <i class="material-icons text-gray-500">analytics</i>
        <div class="text-gray-700 text-xl">Business Insights</div>
        </div>
        <div class="text-gray-500 text-sm py-1">An overview of the shop data for the confirmed order</div>

        <div class="flex flex-row">
          {{-- chart --}}
          <div class="">
            <canvas class="w-96 h-96" id="lineChart"></canvas>
          </div>
          
          {{-- 1st col --}}
          <div class="flex flex-col gap-3">
            {{-- Visitors --}}
            <div class="px-11">
              <div class="flex flex-row items-center">
                <div class="text-gray-500 my-1">Visitors</div>
                <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
              </div>
              <div class="text-gray-800 text-2xl">69</div>
              <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
            </div>
            <hr>
            {{-- Orders --}}
            <div class="px-11">
              <div class="flex flex-row items-center">
                <div class="text-gray-500 my-1">Orders</div>
                <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
              </div>
              <div class="text-gray-800 text-2xl">42</div>
              <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
            </div>
          </div>

          {{-- 2nd col --}}
          <div class="flex flex-col gap-3">
            {{-- Page views --}}
            <div class="px-11">
              <div class="flex flex-row items-center">
                <div class="text-gray-500 my-1">Page Views</div>
                <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
              </div>
              <div class="text-gray-800 text-2xl">28</div>
              <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
            </div>
            <hr>
            {{-- Conversion Rate --}}
            <div class="px-11">
              <div class="flex flex-row items-center">
                <div class="text-gray-500 my-1">Conversion Rate</div>
                <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
              </div>
              <div class="text-gray-800 text-2xl">69.99%</div>
              <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
            </div>
          </div>
        </div>

        {{-- To do list --}}
        <div class="flex-row flex items-center mt-5">
          <i class="material-icons text-gray-500">fact_check</i>
          <div class="text-gray-700 text-xl">To do list</div>
        </div>

        <div class="text-gray-500 text-sm py-1">Things you need to deal with</div>
        
         <div class="flex flex-row">
            <div class="flex flex-col items-center p-5">
              <div class="text-blue-500 text-2xl">3</div>
              <div class="text-gray-700">To approve</div>
            </div>
            <div class="flex flex-col items-center p-5">
              <div class="text-blue-500 text-2xl">2</div>
              <div class="text-gray-700">Approved</div>
            </div>
            <div class="flex flex-col items-center p-5">
              <div class="text-blue-500 text-2xl">5</div>
              <div class="text-gray-700">Completed</div>
            </div>
            <div class="flex flex-col items-center p-5">
              <div class="text-blue-500 text-2xl">1</div>
              <div class="text-gray-700">Pending cancellation</div>
            </div>
         </div>

         {{-- Product Overview --}}
         <div class="flex-row flex items-center mt-5 py-5">
          <i class="material-icons text-gray-500">inventory_2</i>
          <div class="text-gray-700 text-xl">Product Overview</div>
        </div>

        <div class="flex flex-row">
          <table class="text-sm truncate">
            <tr class="border">
              <td>
                <div class="text-gray-700 text-xl text-center">Visit</div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Product Visitor</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Product Page Views</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Items Visited</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Product Bounce Visitors</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
            </tr>
            <tr class="border">
              <td>
                <div class="text-gray-700 text-xl text-center">Add to cart</div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Product Visitor</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Units</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Conversion Rate</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">00.00%</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
            </tr>
            <tr class="border">
              <td>
                <div class="text-gray-700 text-xl text-center">Placed order</div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Buyers</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">6</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Units</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">69.99%</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Items Placed</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Sales</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="flex flex-row items-center">
                    <div class="text-gray-800 text-2xl mr-1">₱</div>
                    <div class="text-gray-800 text-2xl">0</div>
                  </div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Conversion Rate</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">69.99%</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td> 
            </tr>
            <tr class="border">
              <td>
                <div class="text-gray-700 text-xl text-center">Confirmed order</div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Buyers</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Units</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Items Confirmed</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">0</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Sales</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="flex flex-row items-center">
                    <div class="text-gray-800 text-2xl mr-1">₱</div>
                    <div class="text-gray-800 text-2xl">0</div>
                  </div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
              <td>
                <div class="p-5">
                  <div class="flex flex-row items-center">
                    <div class="text-gray-500 my-1">Conversion Rate</div>
                    <i class="material-icons text-gray-500 text-sm ml-2">help_outline</i>
                  </div>
                  <div class="text-gray-800 text-2xl">69.99%</div>
                  <div class="text-gray-500 my-1">vs yesterday 0.00% -</div>
                </div>
              </td>
            </tr>
          </table>
        </div>

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

{{-- <div class="p-20">
  <canvas class="w-full" id="lineChart"></canvas>
</div> --}}

<script src={{ asset('js/tab.js') }}></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
@endpush 
  
</x-layouts.seller-layout>