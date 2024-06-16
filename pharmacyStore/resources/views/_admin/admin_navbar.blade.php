<nav class="content">
  <div class="text-white flex justify-between items-center bg-black">
    <div>
      <img src="admin_logo.png" width="100" height="50" class="p-2">
    </div>
    <div></div>
    <div class="flex justify-center items-center space-x-5 mr-4">
      @guest
      <div>
        <a href="{{route ('admin.registration') }}" class="border-2 border-white p-3 rounded-lg">New Admin</a>
      </div>
      <div>
        <a href="{{route ('admin.login') }}" class="border-2 border-white p-3 rounded-lg">Login</a>
      </div>
      @endguest
      
      <div>
        @auth
        <form action="{{route ('admin/logout')}}" method="POST">
          <a href="{{route ('admin.login') }}" class="border-2 border-white p-3 rounded-lg">Logout</a>
        </form>
        @endauth
      </div>
    </div>
</div>
</nav>

