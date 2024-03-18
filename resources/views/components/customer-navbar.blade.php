{{-- <div class="navbar bg-amber-400 p-1 sticky top-0 z-10">
    <div class="flex-1">
      <a class="btn btn-ghost"><x-authentication-card-logo /></a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-4 text-black font-bold">
        <li><a href="{{ route('customer-index') }}" class="hover:bg-amber-600 px-4 py-2 hover:text-black">Home</a></li>
        {{-- <li><a href="#Calendar" class="hover:bg-amber-600 px-4 py-2 hover:text-white">Calendar</a></li> --}}
        {{-- <li><a href="#Courses" class="hover:bg-amber-600 px-4 py-2 hover:text-black">Courses</a></li>
        <li><a href="#learn-more" class="hover:bg-amber-600 px-4 py-2 hover:text-black">About Roosevelt</a></li>
        <li><a href="#FAQs" class="hover:bg-amber-600 px-4 py-2 hover:text-black">FAQs</a></li>
        <li><a href="#Contact" class="hover:bg-amber-600 px-4 py-2 hover:text-black">Contact Us</a></li>
      </ul>
    </div>
</div>  --}}

<nav class="navbar flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-4 text-lg text-gray-700 bg-amber-400 sticky top-0 z-10">
    
  <div>
      <a href="#">
      <x-authentication-card-logo /> 
      <span class="text-black">Solid Driving School</span>
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
      <ul class="pt-4 text-base text-black md:flex md:justify-between md:pt-0">
        <li>
          <a href="{{ route('customer-index') }}" class="md:p-4 py-2 block hover:text-purple-400"
            >Home</a
          >
        </li>
        <li>
          <a href="#Courses" class="md:p-4 py-2 block hover:text-purple-400"
            >Courses</a
          >
        </li>
        <li>
          <a href="#learn-more" class="md:p-4 py-2 block hover:text-purple-400"
            >About</a
          >
        </li>
        <li>
          <a href="#FAQs" class="md:p-4 py-2 block hover:text-purple-400"
            >FAQs</a
          >
        </li>
        <li>
          <a
            class="md:p-4 py-2 block hover:text-purple-400"
            href="#Contact"
            >Contact</a
          >
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