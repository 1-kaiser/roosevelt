<div class="navbar bg-amber-500 p-1 sticky top-0 z-10">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl"><x-authentication-card-logo /></a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-4 text-black font-bold">
        <li><a href="{{ route('customer-index') }}" class="hover:bg-amber-600 px-4 py-2 hover:text-white">Home</a></li>
        {{-- <li><a href="#Calendar" class="hover:bg-amber-600 px-4 py-2 hover:text-white">Calendar</a></li> --}}
        <li><a href="#Courses" class="hover:bg-amber-600 px-4 py-2 hover:text-white">Courses</a></li>
        <li><a href="#learn-more" class="hover:bg-amber-600 px-4 py-2 hover:text-white">About Roosevelt</a></li>
        <li><a href="#FAQs" class="hover:bg-amber-600 px-4 py-2 hover:text-white">FAQs</a></li>
        <li><a href="#Contact" class="hover:bg-amber-600 px-4 py-2 hover:text-white">Contact Us</a></li>
      </ul>
    </div>
</div>