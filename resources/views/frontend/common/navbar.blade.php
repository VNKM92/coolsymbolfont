 
  
 
  <nav class="bg-[#3f4b29] text-white">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between h-16 items-center">

        <!-- Logo -->
        <div class="flex items-center space-x-8">
          <div class="text-xl font-medium border-white pb-1"><a href="{{url('/') }}" class="nav-link">  Home  </a></div>

          <!-- Desktop Menu -->
          <div class="hidden md:flex space-x-6 font-medium">
            {{-- <a href="#" class="border-b-2 border-[#3f4b29] pb-1">Dashboard</a> --}}

            <!-- Dropdown -->
            @php  $data = DB::table('posts')->get();  @endphp
            <div class="relative group">
              <button class="hover:text-gray-200">Symbol List <svg class="w-4 h-4 ml-1 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
 
              <div class="absolute h-64 overflow-auto hidden group-hover:block bg-[#b3ca89] text-gray-800 mt-2 rounded shadow-lg w-40">
                  @foreach( $data as $item)
                     <a href="{{url($item->slug)}}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">{{ $item->title }}</a>
                  @endforeach
              </div>
            </div>

            <!-- Multi Dropdown -->
            {{-- <div class="relative group">
              <button class="hover:text-gray-200">Projects</button>
              <div class="absolute hidden group-hover:block bg-white text-gray-800 mt-2 rounded shadow-lg w-48">

                <a href="#" class="block px-4 py-2 hover:bg-green-100">All Projects</a>

                <!-- Nested Dropdown -->
                <div class="relative group/sub">
                  <span class="block px-4 py-2 hover:bg-green-100 cursor-pointer">
                    Categories →
                  </span>
                  <div class="absolute left-full top-0 hidden group-hover/sub:block bg-white rounded shadow-lg w-40">
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">Web</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-100">Mobile</a>
                  </div>
                </div>

              </div>
            </div> --}}
            <a href="{{url('word-counter')}}" class="hover:text-green-200">Word Counter</a>
            <a href="{{url('text-generator')}}" class="hover:text-green-200">Text Generator</a>
          </div>
        </div>

        <!-- Right Section -->
        <div class="flex items-center space-x-4">

          <!-- Search -->
          <div class="hidden md:block">
            <input
              type="text"
              placeholder="Search"
              class="hidden px-4 py-1 rounded-full bg-white text-gray-800 focus:outline-none"
            />
          </div>

          <!-- Notification -->
          {{-- <button class="relative">
            🔔
            <span class="absolute -top-1 -right-1 bg-red-500 text-xs rounded-full px-1">3</span>
          </button> --}}

          <!-- Profile Dropdown -->
          {{-- <div class="relative group">
            <img
              src="https://i.pravatar.cc/40"
              class="w-9 h-9 rounded-full cursor-pointer"
            />
            <div class="absolute right-0 hidden group-hover:block bg-white text-gray-800 mt-2 rounded shadow-lg w-40">
              <a href="#" class="block px-4 py-2 hover:bg-green-100">Profile</a>
              <a href="#" class="block px-4 py-2 hover:bg-green-100">Settings</a>
              <a href="#" class="block px-4 py-2 hover:bg-green-100">Logout</a>
            </div>
          </div> --}}

          <!-- Mobile Menu Button -->
          <button id="menuBtn" class="md:hidden text-2xl">
            ☰
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-[#b3ca89] text-[#3f4b29] font-medium px-4 pb-4">
      <a href="{{url('/')}}" class="block py-2">Home</a>
      <a href="{{url('word-counter')}}" class="block py-2 hover:text-green-600">Word Counter</a>
      <a href="{{url('text-generator')}}" class="block py-2 hover:text-green-600">Text Generator</a>
      
      <!-- Mobile Projects Dropdown -->
      <button onclick="toggle('projectMenu')" class="w-full text-left py-2">
        Coolsymbol List ▾
      </button>
      <div id="projectMenu" class="hidden pl-4">

        {{-- <a class="block py-1" href="#">Coolsymbol List</a> --}}

        <!-- Sub Dropdown -->
        <button onclick="toggle('categoryMenu')" class="w-full text-left py-1">
          List ▾
        </button>
        <div id="categoryMenu" class="hidden pl-4  h-64 overflow-auto hidden bg-[#cedab7] text-gray-800 mt-2 rounded shadow-2xl w-70">
          @foreach( $data as $item)
              <a class="block py-1" href="{{url($item->slug)}}">{{ $item->title }}</a>
          @endforeach
        </div>
      </div>



      <input
        type="text"
        placeholder="Search"
        class="hidden w-full mt-2 px-4 py-2 bg-white rounded text-gray-800"
      />
     
  </nav>
 
   

  <script>
    function toggle(id) {
      document.getElementById(id).classList.toggle('hidden');
    }

    document.getElementById('menuBtn').addEventListener('click', () => {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    });
  </script>

 