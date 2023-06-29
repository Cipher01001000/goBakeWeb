<x-layouts.app-layout title="| Cake_customization">

    <div class="flex flex-row justify-center gap-5">

    {{-- product_container --}}
    <div class="flex flex-col">
            
        {{-- product --}}
        <div class="p-10 shadow-lg rounded-lg flex flex-row w-fit">
            
            {{-- product_image --}}
            <div class="flex flex-col">
                <div class="">
                    <img
                        src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FrZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                        class="h-96 w-96 object-cover rounded-lg"/>
                </div>

                <div class="flex flex-row justify-center items-center gap-5 pt-5">

                    <div class="">
                        <img
                        src="https://images.unsplash.com/photo-1593187623747-7ea827ad1013?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8c3RyYWJlcnJ5JTIwY3VwY2FrZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                        class="h-20 w-20 object-cover rounded-lg"/>
                    </div>

                    <div class="">
                        <img
                        src="https://images.unsplash.com/photo-1519869325930-281384150729?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHN0cmFiZXJyeSUyMGN1cGNha2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
                        class="h-20 w-20 object-cover rounded-lg"/>
                    </div>

                    <div class="">
                        <img
                        src="https://images.unsplash.com/photo-1587668178277-295251f900ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8c3RyYWJlcnJ5JTIwY3VwY2FrZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                        class="h-20 w-20 object-cover rounded-lg"/>
                    </div>

                    <div class="">
                        <img
                        src="https://images.unsplash.com/photo-1576618148400-f54bed99fcfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                        class="h-20 w-20 object-cover rounded-lg"/>
                    </div>
                </div>

            </div>

            {{-- product_review --}}
            <div class="flex flex-row">
                <div class="flex flex-col">
                    {{-- user_info --}}
                    <div class="flex flex-row justify-center items-center">
                        <img
                            src="https://images.unsplash.com/photo-1576579639123-1610ff48f5cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            class="h-16 w-16 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700"/>
                        <div class="flex flex-col pl-2">
                            <h1 class="text-gray-700 font-bold text-lg">Muhammad Avdol</h1>
                            <span class="text-gray-500">Stand user of Magician's Red</span>
                        </div>
                    </div>

                    {{-- user_comment --}}
                    <p class="text-gray-700 px-10 py-5 w-96">
                        "Tsk Tsk Tsk Tsk Tsk Tsk, Yesssssss, I am!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, libero laborum molestiae ad maxime, cum nostrum sequi perspiciatis architecto quisquam aliquam beatae"
                    </p>

                    {{-- product_rating --}}
                    <div class="px-10 flex items-center gap-0">
                        
                        <i class="material-icons text-amber-600">star</i>
                        <i class="material-icons text-amber-600">star</i>
                        <i class="material-icons text-amber-600">star</i>
                        <i class="material-icons text-amber-600">star</i>
                        <i class="material-icons text-amber-600">star_outline</i>

                        <div class="h1 text-cyan-600 pl-2">Ratings</div>
                        <hr>
                    </div>

                </div>
            
            </div>

        </div>

        {{-- cake_customization --}}
        <div class="px-10 py-5 shadow-lg rounded-lg mt-5">

            {{-- cake_type --}}
            <h1 class="text-gray-700 font-bold text-lg p-2">Cake Type</h1>
            <hr>
            <div class="flex flex-col">

                {{-- row 1 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="standard"
                        data-ripple-dark="true">
                        <input
                            id="standard"
                            name="cake_type"
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
                        for="standard"
                        >
                        Standard
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="fruit_cake"
                        data-ripple-dark="true"
                        >
                        <input
                            id="fruit_cake"
                            name="cake_type"
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
                        for="fruit_cake"
                        >
                        Fruit Cake
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="cheese_cake"
                        data-ripple-dark="true"
                        >
                        <input
                            id="cheese_cake"
                            name="cake_type"
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
                        for="cheese_cake"
                        >
                        Cheese Cake
                        </label>
                    </div>    
                </div>

                {{-- row 2 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="gluten_free"
                        data-ripple-dark="true">
                        <input
                          id="gluten_free"
                          name="cake_type"
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
                        for="gluten_free"
                      >
                        Gluten Free
                      </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="wedding_cake"
                        data-ripple-dark="true"
                      >
                        <input
                          id="wedding_cake"
                          name="cake_type"
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
                        for="wedding_cake"
                      >
                        Wedding Cake
                      </label>
                    </div>  
                </div>

                {{-- row 3 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="sugar_free"
                        data-ripple-dark="true">
                        <input
                          id="sugar_free"
                          name="cake_type"
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
                        for="sugar_free"
                      >
                        Sugar Free
                      </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="cup_cake"
                        data-ripple-dark="true"
                      >
                        <input
                          id="cup_cake"
                          name="cake_type"
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
                        for="cup_cake"
                      >
                        Cup Cake
                      </label>
                    </div>  
                </div>
            </div>

            {{-- flavor --}}
            <h1 class="text-gray-700 font-bold text-lg p-2">Flavor</h1>
            <hr>
            <div class="flex flex-col">

                {{-- row 1 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="chocolate"
                        data-ripple-dark="true">
                        <input
                            id="chocolate"
                            name="flavor"
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
                        for="chocolate"
                        >
                        Chocolate
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="mocha"
                        data-ripple-dark="true"
                        >
                        <input
                            id="mocha"
                            name="flavor"
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
                        for="mocha"
                        >
                        Mocha
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="blueberry"
                        data-ripple-dark="true"
                        >
                        <input
                            id="blueberry"
                            name="flavor"
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
                        for="blueberry"
                        >
                        Blueberry
                        </label>
                    </div>    
                </div>

                {{-- row 2 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="vanilla"
                        data-ripple-dark="true">
                        <input
                          id="vanilla"
                          name="flavor"
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
                        for="vanilla"
                      >
                        Vanilla
                      </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="coffee"
                        data-ripple-dark="true"
                      >
                        <input
                          id="coffee"
                          name="flavor"
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
                        for="coffee"
                      >
                        Coffee
                      </label>
                    </div>
                    
                    <div class="inline-flex items-center w-40">
                        <label
                          class="relative flex cursor-pointer items-center rounded-full p-3"
                          for="caramel"
                          data-ripple-dark="true"
                        >
                          <input
                            id="caramel"
                            name="flavor"
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
                          for="caramel"
                        >
                          Caramel
                        </label>
                    </div>  
                </div>

                {{-- row 3 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="strawberry"
                        data-ripple-dark="true">
                        <input
                          id="strawberry"
                          name="flavor"
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
                        for="strawberry"
                      >
                        Strawberry
                      </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="red_velvet"
                        data-ripple-dark="true"
                      >
                        <input
                          id="red_velvet"
                          name="flavor"
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
                        for="red_velvet"
                      >
                        Red Velvet
                      </label>
                    </div>  
                </div>
            </div>

            {{-- size --}}
            <h1 class="text-gray-700 font-bold text-lg p-2">Size</h1>
            <hr>
            <div class="flex flex-col">

                {{-- row 1 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="5_inch"
                        data-ripple-dark="true">
                        <input
                            id="5_inch"
                            name="size"
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
                        for="5_inch"
                        >
                        5 Inch
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="8_inch"
                        data-ripple-dark="true"
                        >
                        <input
                            id="8_inch"
                            name="size"
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
                        for="8_ich"
                        >
                        8 Inch
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="11_inch"
                        data-ripple-dark="true"
                        >
                        <input
                            id="11_inch"
                            name="size"
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
                        for="11_inch"
                        >
                        11 Inch
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="14_inch"
                        data-ripple-dark="true"
                        >
                        <input
                            id="14_inch"
                            name="size"
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
                        for="14_inch"
                        >
                        14 Inch
                        </label>
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="6_inch"
                        data-ripple-dark="true">
                        <input
                          id="6_inch"
                          name="size"
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
                        for="6_inch"
                      >
                        6 Inch
                      </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="9_inch"
                        data-ripple-dark="true"
                      >
                        <input
                          id="9_inch"
                          name="size"
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
                        for="9_inch"
                      >
                        9 Inch
                      </label>
                    </div>
                    
                    <div class="inline-flex items-center w-40">
                        <label
                          class="relative flex cursor-pointer items-center rounded-full p-3"
                          for="12_inch"
                          data-ripple-dark="true"
                        >
                          <input
                            id="12_inch"
                            name="size"
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
                          for="12_inch"
                        >
                          12 Inch
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                          class="relative flex cursor-pointer items-center rounded-full p-3"
                          for="15_inch"
                          data-ripple-dark="true"
                        >
                          <input
                            id="15_inch"
                            name="size"
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
                          for="15_inch"
                        >
                          15 Inch
                        </label>
                    </div> 
                </div>

                {{-- row 3 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="7_inch"
                        data-ripple-dark="true">
                        <input
                          id="7_inch"
                          name="size"
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
                        for="7_inch"
                      >
                        7 Inch
                      </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="10_inch"
                        data-ripple-dark="true"
                      >
                        <input
                          id="10_inch"
                          name="size"
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
                        for="10_inch"
                      >
                        10 Inch
                      </label>
                    </div>
                    
                    <div class="inline-flex items-center w-40">
                        <label
                          class="relative flex cursor-pointer items-center rounded-full p-3"
                          for="13_inch"
                          data-ripple-dark="true"
                        >
                          <input
                            id="13_inch"
                            name="size"
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
                          for="13_inch"
                        >
                          13 Inch
                        </label>
                    </div>
                    
                    <div class="inline-flex items-center w-40">
                        <label
                          class="relative flex cursor-pointer items-center rounded-full p-3"
                          for="16_inch"
                          data-ripple-dark="true"
                        >
                          <input
                            id="16_inch"
                            name="size"
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
                          for="16_inch"
                        >
                          16 Inch
                        </label>
                    </div>
                </div>
                    
            </div>

            {{-- layer --}}
            <h1 class="text-gray-700 font-bold text-lg p-2">Layer</h1>
            <hr>
            <div class="flex flex-col">

                {{-- row 1 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="1_layer"
                        data-ripple-dark="true">
                        <input
                            id="1_layer"
                            name="layer"
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
                        for="1_layer"
                        >
                        1 Layer
                        </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="4_layer"
                        data-ripple-dark="true"
                        >
                        <input
                            id="4_layer"
                            name="layer"
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
                        for="4_layer"
                        >
                        4 Layer
                        </label>
                    </div>   
                </div>

                {{-- row 2 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="2_layer"
                        data-ripple-dark="true">
                        <input
                          id="2_layer"
                          name="layer"
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
                        for="2_layer"
                      >
                        2 Layer
                      </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="5_layer"
                        data-ripple-dark="true"
                      >
                        <input
                          id="5_layer"
                          name="layer"
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
                        for="5_layer"
                      >
                        5 Layer
                      </label>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="3_layer"
                        data-ripple-dark="true">
                        <input
                          id="3_layer"
                          name="layer"
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
                        for="3_layer"
                      >
                        3 Layer
                      </label>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="6_layer"
                        data-ripple-dark="true"
                      >
                        <input
                          id="6_layer"
                          name="layer"
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
                        for="6_layer"
                      >
                        6 Layer
                      </label>
                    </div>  
                </div>
            </div>

            {{-- design --}}
            <h1 class="text-gray-700 font-bold text-lg p-2">Design</h1>
            <hr>
            <div class="flex flex-col">

                {{-- row 1 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="decoration_1"
                        data-ripple-dark="true">
                        <input
                            id="decoration_1"
                            name="decoration"
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
                        {{-- image --}}
                        <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                          <img src="https://images.unsplash.com/photo-1628505048571-327399c9324c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                          class="object-cover h-24 w-28 rounded-t-lg">
                          <h1 class="text-gray-800 text-center p-1">Decoration 1</h1>
                        </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="decoration_2"
                      data-ripple-dark="true">
                      <input
                          id="decoration_2"
                          name="decoration"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1614249376843-959aa7466086?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzZ8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Decoration 2</h1>
                      </div>
                    </div>
                    
                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="decoration_3"
                      data-ripple-dark="true">
                      <input
                          id="decoration_3"
                          name="decoration"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1656978772876-007b571a964e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Decoration 3</h1>
                      </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="decoration_4"
                      data-ripple-dark="true">
                      <input
                          id="decoration_4"
                          name="decoration"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1562777717-dc6984f65a63?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                        alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Decoration 4</h1>
                      </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="decoration_5"
                      data-ripple-dark="true">
                      <input
                          id="decoration_5"
                          name="decoration"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1627834377411-8da5f4f09de8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" 
                        alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Decoration 5</h1>
                      </div>
                    </div>
                    
                </div>

            </div>

            {{-- pattern --}}
            <h1 class="text-gray-700 font-bold text-lg p-2">Pattern</h1>
            <hr>
            <div class="flex flex-col">

                {{-- row 1 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="pattern_1"
                        data-ripple-dark="true">
                        <input
                            id="pattern_1"
                            name="pattern"
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
                        {{-- image --}}
                        <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                          <img src="https://images.unsplash.com/photo-1628505048571-327399c9324c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                          class="object-cover h-24 w-28 rounded-t-lg">
                          <h1 class="text-gray-800 text-center p-1">Pattern 1</h1>
                        </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="pattern_2"
                      data-ripple-dark="true">
                      <input
                          id="pattern_2"
                          name="pattern"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1614249376843-959aa7466086?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzZ8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Pattern 2</h1>
                      </div>
                    </div>
                    
                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="pattern_3"
                      data-ripple-dark="true">
                      <input
                          id="patter_3"
                          name="patten"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1656978772876-007b571a964e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Pattern 3</h1>
                      </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="pattern_4"
                      data-ripple-dark="true">
                      <input
                          id="pattern_4"
                          name="pattern"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1562777717-dc6984f65a63?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                        alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Pattern 4</h1>
                      </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="pattern_5"
                      data-ripple-dark="true">
                      <input
                          id="pattern_5"
                          name="pattern"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1627834377411-8da5f4f09de8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" 
                        alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Pattern 5</h1>
                      </div>
                    </div>                   
                </div>

            </div>

            {{-- topper --}}
            <h1 class="text-gray-700 font-bold text-lg p-2">Topper</h1>
            <hr>
            <div class="flex flex-col">

                {{-- row 1 --}}
                <div class="flex-flex-row">
                    <div class="inline-flex items-center w-40">
                        <label
                        class="relative flex cursor-pointer items-center rounded-full p-3"
                        for="topper_1"
                        data-ripple-dark="true">
                        <input
                            id="topper_1"
                            name="topper"
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
                        {{-- image --}}
                        <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                          <img src="https://images.unsplash.com/photo-1628505048571-327399c9324c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                          class="object-cover h-24 w-28 rounded-t-lg">
                          <h1 class="text-gray-800 text-center p-1">Topper 1</h1>
                        </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="topper_2"
                      data-ripple-dark="true">
                      <input
                          id="topper_2"
                          name="topper"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1614249376843-959aa7466086?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzZ8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Topper 2</h1>
                      </div>
                    </div>
                    
                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="topper_3"
                      data-ripple-dark="true">
                      <input
                          id="topper_3"
                          name="topper"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1656978772876-007b571a964e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Topper 3</h1>
                      </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="topper_4"
                      data-ripple-dark="true">
                      <input
                          id="topper_4"
                          name="topper"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1562777717-dc6984f65a63?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                        alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Topper 4</h1>
                      </div>
                    </div>

                    <div class="inline-flex items-center w-40">
                      <label
                      class="relative flex cursor-pointer items-center rounded-full p-3"
                      for="topper_5"
                      data-ripple-dark="true">
                      <input
                          id="topper_5"
                          name="topper"
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
                      {{-- image --}}
                      <div class="flex flex-col rounded-lg bg-gray-400 mt-3">
                        <img src="https://images.unsplash.com/photo-1627834377411-8da5f4f09de8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" 
                        alt="decoration"
                        class="object-cover h-24 w-28 rounded-t-lg">
                        <h1 class="text-gray-800 text-center p-1">Topper 5</h1>
                      </div>
                    </div>                   
                </div>

            </div>

            {{-- message / decoration --}}
            <h1 class="text-gray-700 font-bold text-lg p-2">Message / Dedication</h1>
            <hr>
            <div class="flex flex-col">

              <div class="w-96 mt-5">
                <div class="relative w-full min-w-[200px]">
                  <textarea
                    class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "
                  ></textarea>
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Message / Dedication
                  </label>
                </div>
              </div>

            </div>

            {{-- user_review --}}
            <div class="flex flex-col mt-5 w-96">
              <div class="flex flex-col mb-5">

                <hr>
                <h1 class="text-gray-700 font-bold text-lg py-5">Review and Ratings</h1>
                  {{-- user_info --}}
                  <div class="flex flex-row justify-start items-start pl-10">
                      <img
                          src="https://images.unsplash.com/photo-1576579639123-1610ff48f5cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                          class="h-16 w-16 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700"/>
                      <div class="flex flex-col pl-2">
                          <h1 class="text-gray-700 font-bold text-lg">Muhammad Avdol</h1>
                          <span class="text-gray-500">Stand user of Magician's Red</span>
                      </div>
                  </div>

                  {{-- user_comment --}}
                  <p class="text-gray-700 px-10 py-5 w-fit">
                      "Tsk Tsk Tsk Tsk Tsk Tsk, Yesssssss, I am!
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, libero laborum molestiae ad maxime, cum nostrum sequi perspiciatis architecto quisquam aliquam beatae"
                  </p>

                  {{-- product_rating --}}
                  <div class="px-10 flex items-center gap-0">
                      
                      <i class="material-icons text-amber-600">star</i>
                      <i class="material-icons text-amber-600">star</i>
                      <i class="material-icons text-amber-600">star</i>
                      <i class="material-icons text-amber-600">star</i>
                      <i class="material-icons text-amber-600">star_outline</i>

                      <div class="h1 text-cyan-600 pl-2">Ratings</div>
                      <hr>
                  </div>

              </div>

              <div class="flex flex-col">

                <hr>
                  {{-- user_info --}}
                  <div class="flex flex-row justify-start items-start pl-10 mt-5">
                      <img
                          src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                          class="h-16 w-16 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700"/>
                      <div class="flex flex-col pl-2">
                          <h1 class="text-gray-700 font-bold text-lg">Jean Pierre Polnareff</h1>
                          <span class="text-gray-500">Stand user of Silver Chariot</span>
                      </div>
                  </div>

                  {{-- user_comment --}}
                  <p class="text-gray-700 px-10 py-5 w-fit">
                      "Muhammad Avdol!!!!!!
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, libero laborum molestiae ad maxime, cum nostrum sequi perspiciatis architecto quisquam aliquam beatae"
                  </p>

                  {{-- product_rating --}}
                  <div class="px-10 flex items-center gap-0">
                      
                      <i class="material-icons text-amber-600">star</i>
                      <i class="material-icons text-amber-600">star</i>
                      <i class="material-icons text-amber-600">star_half</i>
                      <i class="material-icons text-amber-600">star_outline</i>
                      <i class="material-icons text-amber-600">star_outline</i>

                      <div class="h1 text-cyan-600 pl-2">Ratings</div>
                      <hr>
                  </div>

              </div>
              
          
          </div>

        </div>

    </div>

        {{-- side_bar --}}
        <div class="flex flex-col">

            {{-- preview --}}
            <div class="h-80 shadow-lg p-10 rounded-lg">

                <h1 class="text-lg font-bold text-gray-700">Preview</h1>

                <div class="flex flex-row pt-3">
                    <h1 class="text-gray-500 pr-2">Shipping to:</h1>
                    <h1 class="text-gray-700">Agartha, Center Earth, Milky Way</h1>
                </div>

                <div class="flex flex-row pt-3">
                    <h1 class="text-gray-500 pr-2">Shipping fee:</h1>
                    <h1 class="text-gray-700 pr-1">₱</h1>
                    <h1 class="text-gray-700">56.00</h1>
                </div>

            </div>

            {{-- shop_details --}}
            <div class="shadow-lg p-8 mt-5 rounded-lg">

                <div class="flex flex-row items-center">
                    <img
                        src="https://images.unsplash.com/photo-1564591111131-dbdb2571cfb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                        class="h-20 w-20 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700" 
                        data-popover-target="profile-menu"/>
                        <h1 class="font-bold pl-3 text-lg text-gray-800">Shop Name</h1>
                        <hr>
                </div>
                
                <h1 class="text-gray-700 py-5">Shop Rating</h1>

                <div class="flex items-center gap-0">
                    
                    <i class="material-icons text-amber-600">star</i>
                    <i class="material-icons text-amber-600">star</i>
                    <i class="material-icons text-amber-600">star</i>
                    <i class="material-icons text-amber-600">star_half</i>
                    <i class="material-icons text-amber-600">star_outline</i>

                    <div class="h1 text-cyan-600 pl-2">66.66%</div>
                    <hr>
                </div>

                 <div class="flex flex-row p-10">

                    <button
                        class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-dark="true">
                        Chat now
                    </button>

                    <a
                        class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-dark="true"
                        href="{{ url('/seller_shop') }}">
                        Visit Store
                    </a>

                 </div>

            </div>

            {{-- total --}}
            <div class="shadow-lg p-8 mt-5 rounded-lg">

              <div class="flex flex-col">

                <h1 class="text-gray-700 text-lg font-bold">Total</h1>
                <hr>

                <div class="flex flex-row">
                  <h1 class="text-gray-700 p-2 text-start">Cake Type:</h1>
                  <h1 class="text-gray-500 p-2">Cheese Cake</h1>
                </div>

                <div class="flex flex-row">
                  <h1 class="text-gray-700 p-2 text-start">Flavor:</h1>
                  <h1 class="text-gray-500 p-2">Blueberry</h1>
                </div>

                <div class="flex flex-row">
                  <h1 class="text-gray-700 p-2 text-start">Size:</h1>
                  <h1 class="text-gray-500 p-2">6 Inch</h1>
                </div>

                <div class="flex flex-row">
                  <h1 class="text-gray-700 p-2 text-start">Design:</h1>
                </div>

                <div class="flex flex-row pl-10">
                  <h1 class="text-gray-700 p-2">Decoration:</h1>
                </div>

                <div class="flex flex-row pl-20">
                  <div class="flex flex-col rounded-lg bg-gray-400">
                    <img src="https://images.unsplash.com/photo-1628505048571-327399c9324c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                    class="object-cover h-24 w-28 rounded-t-lg">
                    <h1 class="text-gray-800 text-center p-1">Decoration 1</h1>
                  </div>
                </div>

                <div class="flex flex-row pl-10">
                  <h1 class="text-gray-700 p-2">Pattern:</h1>
                </div>

                <div class="flex flex-row pl-20">
                  <div class="flex flex-col rounded-lg bg-gray-400">
                    <img src="https://images.unsplash.com/photo-1614249376843-959aa7466086?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzZ8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                    class="object-cover h-24 w-28 rounded-t-lg">
                    <h1 class="text-gray-800 text-center p-1">Pattern 2</h1>
                  </div>
                </div>

                <div class="flex flex-row pl-10">
                  <h1 class="text-gray-700 p-2">Topper:</h1>
                </div>

                <div class="flex flex-row pl-20">
                  <div class="flex flex-col rounded-lg bg-gray-400">
                    <img src="https://images.unsplash.com/photo-1656978772876-007b571a964e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGNha2UlMjBkZWNvcmF0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="decoration"
                    class="object-cover h-24 w-28 rounded-t-lg">
                    <h1 class="text-gray-800 text-center p-1">Topper 3</h1>
                  </div>
                </div>

                <div class="flex flex-row mt-5">
                  <h1 class="text-gray-700 p-2 text-start">Message:</h1>
                  <h1 class="text-gray-500 p-2">Happy Birthday Bogart</h1>
                </div>

                <div class="flex flex-row mt-5">
                    <h1 class="text-gray-700 p-2">Total:</h1>
                    <h1 class="text-gray-500 p-2">₱</h1>
                    <h1 class="text-gray-500 p-2 pl-0">723.00</h1>
                </div>

                <div class="flex flex-row justify-center items-center mt-5">

                  <a
                    class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-dark="true"
                    href="{{ url('/cart') }}"
                  >
                    Add to cart
                  </a>

                  <a
                    class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-dark="true"
                    href="{{ url('/orders') }}"
                  >
                    Buy now
                  </a>

                </div>


              </div>

            </div>

        </div>


    </div>

    @push('scripts')
        
    @endpush

</x-layouts.app-layout>