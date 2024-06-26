<nav class="navbar flex flex-wrap items-center justify-between w-full py-4 md:py-2 px-4 text-lg text-gray-700 bg-amber-300 sticky top-0 z-10">
    
  <div>
      <a href="#">
      <x-authentication-card-logo /> 
      <span class="font-bold">Solid Driving School</span>
      </a>
  </div>
  
    {{-- Hamburger Menu --}}
    <svg
        xmlns="http://www.w3.org/2000/svg"
        id="menu-button"
        class="h-6 w-6 cursor-pointer md:hidden block"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16"
        />
    </svg>
  
  <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
      <ul class="pt-4 text-[15px] md:flex md:justify-between md:pt-0">
        <li>
          <a href="{{ route('customer-index') }}" class="md:p-4 py-2 block hover:text-purple-400 font-bold"
            >Home</a
          >
        </li>
        <li>
          <a href="#Courses" class="md:p-4 py-2 block hover:text-purple-400 font-bold"
            >Courses</a
          >
        </li>
        <li>
          <a href="#learn-more" class="md:p-4 py-2 block hover:text-purple-400 font-bold"
            >About</a
          >
        </li>
        {{-- <li>
          <a href="#Calendar" class="md:p-4 py-2 block hover:text-purple-400 font-bold"
            >Calendar</a
          >
        </li> --}}
        <li>
          <a href="#FAQs" class="md:p-4 py-2 block hover:text-purple-400 font-bold"
            >FAQs</a
          >
        </li>
        <li>
          <a
            class="md:p-4 py-2 block hover:text-purple-400 font-bold"
            href="#Contact"
            >Contact</a
          >
        </li>
        <li>

          @if (Auth::guard('customer')->user()?->first_name)

            <a
            class="md:p-4 py-2 block hover:text-purple-400 font-bold flex items-center"
            href="{{ route('customer-logout') }}"
            ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
            </svg>
            
            Logout</a
            >

          @else

          <a
              class="md:p-4 py-2 block hover:text-purple-400 font-bold flex items-center"
              href="{{ route('customer-login') }}"
              ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
              </svg>
              Register/Login</a
          >

          @endif

        </li>
      </ul>
    </div>
</nav>


<script>
  const button = document.querySelector('#menu-button');
  const menu = document.querySelector('#menu');

  button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });

</script>