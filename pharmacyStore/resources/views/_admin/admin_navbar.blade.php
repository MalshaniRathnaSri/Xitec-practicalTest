<div class="relative">
  <nav class="content">
    <div class="text-white flex justify-between items-center bg-black p-4">
      <div>
        <img src="{{ asset('admin_logo.png') }}" width="100" height="50" class="p-2">
      </div>
      <div class="block lg:hidden">
        <button id="nav-toggle" class="text-white focus:outline-none">
          <svg id="hamburger-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
          <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div id="nav-content" class="hidden lg:flex lg:items-center lg:space-x-5">
        @if(auth()->guard('admin')->check())
          <form action="{{ route('admin.logout') }}" method="POST" class="block lg:inline-block">
            @csrf
            <button type="submit" class="border-2 border-white p-3 rounded-lg">Logout</button>
          </form>
        @else
          <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-5">
            <div>
              <a href="{{route('admin.registration')}}" class="border-2 border-white p-3 rounded-lg block lg:inline-block">New Admin</a>
            </div>
            <div>
              <a href="{{route('admin.login')}}" class="border-2 border-white p-3 rounded-lg block lg:inline-block">Login</a>
            </div>
          </div>
        @endif
      </div>
    </div>
  </nav>

  <div id="main-container" class="relative">
    <div id="sidebar" class="fixed top-0 left-0 h-full w-56 bg-black text-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
      <div class="p-4">
        @if(auth()->guard('admin')->check())
          <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="border-2 border-white w-full p-3 rounded-lg block mb-4">Logout</button>
          </form>
        @else
          <div class="mb-4">
            <a href="{{route('admin.registration')}}" class="border-2 border-white w-full p-3 rounded-lg block">New Admin</a>
          </div>
          <div>
            <a href="{{route('admin.login')}}" class="border-2 border-white w-full p-3 rounded-lg block">Login</a>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById('nav-toggle').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    var hamburgerIcon = document.getElementById('hamburger-icon');
    var closeIcon = document.getElementById('close-icon');

    sidebar.classList.toggle('-translate-x-full');
    hamburgerIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
</script>
