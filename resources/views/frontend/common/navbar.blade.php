<nav class="bg-[#3f4b29]" style="border-top: 1px solid #fff; ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          
          <div class="flex-shrink-0 flex items-center text-xl font-bold text-white">
           <a href="{{url('/') }}" class="nav-link">  Home  </a>
          </div>
        
          <div class="hidden sm:flex sm:ml-6 sm:space-x-8 items-center">

                    <?php
                        $data = DB::table('posts')->get();
                    ?>
                    
 
                    @foreach( $data as $item)
                      <!--<a href="{{url($item->slug)}}" class="nav-link">{{ $item->title }}</a>-->
                    @endforeach
         
            
                      <button class="text-white hover:text-gray-300 focus:outline-none" id="dropdownButton">
                  <!--<button class="text-white hover:text-gray-300 focus:outline-none" id="dropdownButton">-->
                    Symbol List<svg class="w-4 h-4 ml-1 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                  </button>
                  <div class="absolute h-64 overflow-auto ml-20 top-40 mt-2 py-2 w-48 bg-[#b3ca89] rounded-md shadow-xl z-20 hidden" id="dropdownMenu">
                    @foreach( $data as $item)
                    <a href="{{url($item->slug)}}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">{{ $item->title }}</a>
                    @endforeach
                  </div>
                 
            </div>    
                   
          
          <!--<!- end dropdown--->
          
        </div>
        
        <div class="flex items-center sm:hidden">
          <button id="menu-toggle" class="p-2 text-gray-200 hover:text-white hover:bg-gray-600 rounded"  aria-label="sidemenu">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- data lis -->

    
    <style>
        .mobile-nav-link {
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 0.375rem 6px ;
            color: #3f4b29;
            font-weight: 500;
        }
    </style>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="bg-[#b3ca89]  sm:hidden hidden px-2 pt-2 pb-3 space-y-1 ">
       <!--<a href="{{url('/') }}" class="mobile-nav-link">Home</a>-->
       @foreach( $data as $item)
          <a href="{{url($item->slug)}}" class="mobile-nav-link">{{ $item->title }}</a>
        @endforeach
    </div>
  </nav>
  
  <script>
      const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        
        dropdownButton.addEventListener('click', () => {
          dropdownMenu.classList.toggle('hidden');
        });
        
        // Optional: Hide the dropdown when clicking outside
        document.addEventListener('click', (event) => {
          if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
          }
        });
  </script>
  
  