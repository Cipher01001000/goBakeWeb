<nav class="flex justify-center items-center px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li class="inline-flex items-center cursor-pointer">
        <a class="inline-flex items-center text-sm font-medium text-pink-500 hover:text-pink-500 tab_btn">
          Shopping Cart
        </a>
      </li>
      <li class="">
        <div class="flex items-center">
          <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <a class="cursor-pointer ml-1 text-sm font-medium text-gray-700 hover:text-pink-500 md:ml-2 tab_btn">Checkout Details</a>
        </div>
      </li>
    </ol>
  </nav>
  
  <div class="content_box">
    {{ $slot }}
  </div>