<x-layouts.app-layout title="| Profile">

    <div class="px-60 py-10">

        <div class="flex flex-row bg-gray-200 rounded-md">

            <div class="p-10 flex flex-col">
                <h1 class="text-gray-800 font-bold text-lg">My profile</h1>
                <p class="text-gray-500">Manage and protect your account</p>
                <hr>
    
                <div class="p-10">
                    <div class="flex flex-row justfy-center items-center">
                        <h1 class="text-gray-600 pr-5 w-40 text-end">Username</h1>
                        <div class="w-80">
                            <div class="relative h-10 w-full min-w-[200px]">
                                <input
                                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                placeholder=" "
                                value="Jonathan Joestar" />
                            </div>
                        </div>
                    </div>
    
                    <div class="flex flex-row justfy-center items-center mt-5">
                        <h1 class="text-gray-600 pr-5 w-40 text-end">Update Password</h1>
                        <div class="w-40 mr-16">
                            <div class="relative h-10 w-full min-w-[200px]">
                                <input
                                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                placeholder=" "
                                value="123456"
                                type="password" />
                            </div>
                        </div>
                        <div class="w-40">
                            <div class="relative h-10 w-full min-w-[200px]">
                                <input
                                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                placeholder=" "
                                value="123456" 
                                type="password"/>
                            </div>
                        </div>
                    </div>
    
                    <div class="flex flex-row justfy-center items-center mt-5">
                        <h1 class="text-gray-600 pr-5 w-40 text-end">Email</h1>
                        <p class="text-gray-500">gobake45@gmail.com</p>
                        <a href="" class="text-blue-500 pl-5">Change</a>
                    </div>
    
                    <div class="flex flex-row justfy-center items-center mt-5">
                        <h1 class="text-gray-600 pr-5 w-40 text-end">Contact Number</h1>
                        <p class="text-gray-500">+63987654321</p>
                        <a href="" class="text-blue-500 pl-5">Change</a>
                    </div>
    
                    <div class="flex flex-row justfy-center items-center mt-5">
                        <h1 class="text-gray-600 pr-5 w-40 text-end">Gender</h1>
                        <div class="flex gap-10">
                            <div class="inline-flex items-center">
                              <label
                                class="relative flex cursor-pointer items-center rounded-full p-3"
                                for="html"
                                data-ripple-dark="true"
                              >
                                <input
                                  id="male"
                                  name="gender"
                                  type="radio"
                                  class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10"
                                />
                                <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-3.5 w-3.5"
                                    viewBox="0 0 16 16"
                                    fill="currentColor"
                                  >
                                    <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                  </svg>
                                </div>
                              </label>
                              <label
                                class="mt-px cursor-pointer select-none font-light text-gray-700"
                                for="male"
                              >
                                Male
                              </label>
                            </div>
                            <div class="inline-flex items-center">
                              <label
                                class="relative flex cursor-pointer items-center rounded-full p-3"
                                for="female"
                                data-ripple-dark="true"
                              >
                                <input
                                  id="female"
                                  name="gender"
                                  type="radio"
                                  class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10"
                                />
                                <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-3.5 w-3.5"
                                    viewBox="0 0 16 16"
                                    fill="currentColor"
                                  >
                                    <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                  </svg>
                                </div>
                              </label>
                              <label
                                class="mt-px cursor-pointer select-none font-light text-gray-700"
                                for="female"
                              >
                                Female
                              </label>
                            </div>
                            <div class="inline-flex items-center">
                                <label
                                  class="relative flex cursor-pointer items-center rounded-full p-3"
                                  for="other"
                                  data-ripple-dark="true"
                                >
                                  <input
                                    id="other"
                                    name="gender"
                                    type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10"
                                  />
                                  <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="h-3.5 w-3.5"
                                      viewBox="0 0 16 16"
                                      fill="currentColor"
                                    >
                                      <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                  </div>
                                </label>
                                <label
                                  class="mt-px cursor-pointer select-none font-light text-gray-700"
                                  for="other"
                                >
                                  Other
                                </label>
                              </div>
                          </div>
                    </div>
    
                    <div class="flex flex-row justfy-center items-center mt-5">
                        <h1 class="text-gray-600 pr-5 w-40 text-end">Date of birth</h1>
                        <div class="w-80">
                            <div class="relative h-10 w-full min-w-[200px]">
                                <input
                                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                placeholder=" "
                                value="Jonathan Joestar"
                                type="date" />
                            </div>
                        </div>
                    </div>
    
                    <div class="flex flex-row p-5 gap-5 justify-center items-center">
    
                        <button
                            class="middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true"
                            >
                            Save
                        </button>
    
                        <button
                            class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true"
                            >
                            Back
                        </button>
    
                    </div>
    
                </div>
            </div>
    
            <div class="w-80">
                <div class="flex flex-col justify-center items-center mt-32">
                    <img
                    src="https://images.unsplash.com/photo-1675786571865-90827bbf8b8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHZlY3RvciUyMGF2YXRhcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                    class="h-24 w-24 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700" 
                    data-popover-target=" "/>

                    <button
                        class="middle none mt-5 center rounded-lg border border-gray-500 py-2 px-6 font-sans text-xs font-bold uppercase text-gray-700 transition-all hover:opacity-75 focus:ring focus:ring-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-dark="true">
                        Select Image
                    </button>

                    <div class="flex flex-row justify-center items-center mt-3">
                        <h1 class="text-gray-500 pr-2">File size:</h1>
                        <p class="text-gray-500">Maximum 1 MB</p>
                    </div>

                    <div class="flex flex-row justify-center items-center mt-1">
                        <h1 class="text-gray-500 pr-2">File extension:</h1>
                        <p class="text-gray-500">JPG, PNG</p>
                    </div>

                </div>
            </div>
    
        </div>

    </div>


    @push('scripts')
        <script src={{ asset('js/tab.js') }}></script>
    @endpush    
</x-layouts.app-layout>