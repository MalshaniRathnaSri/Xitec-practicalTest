<div class="bg-blue">
    <div class="flex justify-between items-center p-4">
        <div>
            <a href="{{ route('home')}}">
                <img src="{{asset('pharmacy-logo.png')}}" width="150" height="50" alt="Pharmacy Logo"/>
            </a>
        </div>

        <button id="menu-toggle" class="block md:hidden text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <div class="hidden md:flex justify-center space-x-5">
            <a href="" type="button" class="text-black bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-5 py-2.5 text-center me-2 mb-2">Upload Prescription</a>
            @guest
                <a href="{{route ('register')}}" type="button" class="hidden md:block text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center me-2 mb-2 border-2 border-blue-200">Register</a>
                <a href="{{route ('login')}}" type="button" class="hidden md:block text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center me-2 mb-2 border-2 border-blue-200">Sign In</a>
            @endguest  
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="hidden md:block text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center me-2 mb-2 border-2 border-blue-200">Sign Out</button>
                </form>
            @endauth
        </div>
    </div>

    <div id="menu-sidebar" class="fixed inset-0 bg-blue-200 z-50 hidden md:hidden w-44">
        <div class="flex flex-col items-center p-4 space-y-4">
            <button id="menu-close" class="self-end text-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <a href="" type="button" class="text-black bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-5 py-2.5 text-center mb-2">Upload Prescription</a>
            @guest
                <a href="{{route ('register')}}" type="button" class="text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center mb-2 border-2 border-blue-200">Register</a>
                <a href="{{route ('login')}}" type="button" class="text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center mb-2 border-2 border-blue-200">Sign In</a>
            @endguest  
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center mb-2 border-2 border-blue-200">Sign Out</button>
                </form>
            @endauth
        </div>
    </div>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menuSidebar = document.getElementById('menu-sidebar');
        if (menuSidebar.classList.contains('hidden')) {
            menuSidebar.classList.remove('hidden');
        } else {
            menuSidebar.classList.add('hidden');
        }
    });

    document.getElementById('menu-close').addEventListener('click', function() {
        var menuSidebar = document.getElementById('menu-sidebar');
        menuSidebar.classList.add('hidden');
    });
</script>
