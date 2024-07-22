<nav class="h-fit flex py-4 px-6 justify-between items-center bg-dlhk-green">
    <a href="/dataku" class="flex items-center gap-2">
      <img src="https://dlhk.jogjaprov.go.id/wp-content/uploads/2023/09/Logo_DLHK-transformed-70x83.png" alt="Logo Dinas LHK" class="h-10 object-contain">
      <div class="flex flex-col text-xs text-white">
        <p class="font-bold">Dinas Lingkungan Hidup dan Kehutanan</p>
        <p>Daerah Istimewa Yogyakarta</p>
      </div>
    </a>
    <div x-data="{ showButton: {{ Request::is('search') ? 'false' : 'true' }} }">
      @if(Auth::check())
          <form method="POST" action="{{ route('logout') }}" x-show="showButton">
              @csrf
              <button type="submit" class="w-fit py-1 px-6 flex items-center justify-center font-medium text-xs capitalize hover:cursor-pointer bg-white fill-slate-400 rounded-md text-black hover:text-dlhk-green hover:stroke-dlhk-green">
                <svg class=" mr-2" xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                <span> {{ Auth::user()->name }} </span> <p>&nbsp;| Logout</p>
              </button>
          </form>
      @else
          <button  x-show="showButton" onclick="toggleLoginModal()" class="py-1 px-6 flex items-center font-medium text-xs hover:cursor-pointer bg-white fill-slate-400 rounded-md text-black hover:text-dlhk-green hover:stroke-dlhk-green">
              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-login-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M3 12h13l-3 -3" /><path d="M13 15l3 -3" /></svg>
              Login
          </button>
      @endif
    </div>
  </nav>