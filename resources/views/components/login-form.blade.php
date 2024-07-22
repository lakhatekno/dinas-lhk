<div id="loginModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
        <div class="">
          <img src="https://dlhk.jogjaprov.go.id/wp-content/uploads/2023/09/Logo_DLHK-transformed-70x83.png" alt="Logo Dinas LHK" class="object-contain">
        </div>
        <div class="sm:flex sm:items-start">
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Login</h3>
            <div class="mt-2">
              <form id="loginForm" method="POST" action="/admin/login">
                @csrf
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                  <input type="email" name="email" id="email" required class="px-1 py-1 mt-1 block w-full border-gray-300 shadow-sm focus:border-dlhk-green focus:ring-dlhk-green sm:text-sm">
                </div>
                <div class="mt-4">
                  <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                  <input type="password" name="password" id="password" required class="px-1 py-1 mt-1 block w-full border-gray-300 shadow-sm focus:border-dlhk-green focus:ring-dlhk-green sm:text-sm">
                </div>
                <div class="mt-4">
                  <button type="submit" class="w-full inline-flex justify-center border border-transparent shadow-sm px-4 py-2 bg-dlhk-green text-base font-medium text-white hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>