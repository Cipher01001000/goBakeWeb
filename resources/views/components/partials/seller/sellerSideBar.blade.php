<div class="w-64 h-screen shadow-lg rounded-md bg-gray-100">

    {{-- user propfile --}}
    <div class="flex flex-row items-center py-10 px-5">
      <img
        src="https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80"
        class="h-16 w-16 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700" 
        data-popover-target=" "/>
        <div class="flex flex-col">
          <h1 class="font-bold pl-3 text-lg text-gray-800">Shop Name</h1>
          <div class="flex flex-row items-center justify-center gap-1">
            <i class="material-icons text-gray-600">edit</i>
            <a class="text-gray-600 underline underline-offset-2"
                href="{{ url('/profile') }}">Edit Profile</a>
          </div>
        </div> 
        <hr>
    </div>

    <a 
    href="#"
    class="tab_btn flex flex-row gap-3 p-5 items-center pl-16 text-gray-700 font-bold w-64">
        <i class="material-icons text-gray-500">dashboard</i>
        Dashboard
    </a>
    <hr>

    <a 
    href="#"
    class="tab_btn flex flex-row gap-3 p-5 items-center pl-16 text-gray-700 font-bold w-64">
        <i class="material-icons text-gray-500">description</i>
        Orders
    </a>
    <hr>

    <a 
    href="#"
    class="tab_btn flex flex-row gap-3 p-5 items-center pl-16 text-gray-700 font-bold w-64">
        <i class="material-icons text-gray-500">shopping_bag</i>
        Products
    </a>
    <hr>

    <a 
    href="#"
    class="tab_btn flex flex-row gap-3 p-5 items-center pl-16 text-gray-700 font-bold w-64">
        <i class="material-icons text-gray-500">add_circle_outline</i>
        Add product
    </a>
    <hr>

</div>