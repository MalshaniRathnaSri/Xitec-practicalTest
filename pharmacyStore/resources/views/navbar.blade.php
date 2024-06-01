<div class="bg-blue">
    <div class="flex justify-between items-center">
        <div class="">
            <a href="{{ route('home')}}">
                <img src='/pharmacy-logo.png' width="150" height="50"/>
            </a>
        </div>

        <div>
            <a href="" type="button" class="text-black bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-5 py-2.5 text-center me-2 mb-2">Upload Prescription</a>
        </div>

        <div class="flex justify-center space-x-5">
            @guest
                <div>
                    <a href="{{route ('register')}}" type="button" class="hidden md:block text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center me-2 mb-2 border-2 border-blue-200">Register</a>
                </div>
                <div>
                    <a href="{{route ('login')}}" type="button" class="hidden md:block text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center me-2 mb-2 border-2 border-blue-200">Sign In</a>
                </div>
            @endguest  
                
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="hidden md:block text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-2xl text-sm px-3 py-2.5 text-center me-2 mb-2 border-2 border-blue-200">Signout</button>
            </form>
            @endauth
        </div>

    </div>
</div>