<div class="courses_bg min-h-screen">

  <div id="Courses" class="pt-14 ml-10">
    <strong class="text-3xl">Featured Courses</strong>
    <p>Choose from a variety of vehicles, schedule and instructors that fits your needs</p>
</div>

  <div class="flex pt-16 items-center justify-center">
    <div class="grid grid-cols-1 gap-x-12 gap-y-12 md:grid-cols-1 lg:grid-cols-2">
      <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
        <div class="h-96 w-72">
          <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="img/TDC.jpeg" alt="" />
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
        <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
          <h1 class="font-dmserif text-3xl font-bold text-white">TDC</h1>
          <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Theoretical Driving Course</p>
          <span class="text-sm text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 mb-3">Aspiring drivers are now required to attend 15-hour Theoretical Driving Course before applying for student permits.</span>
          <strong class="text-red-400 mb-3">Starts at Php 500</strong>
          <a href="{{ route('tdc-index') }}" class="rounded-full bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60">See More</a>
        </div>
      </div>

      <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
        <div class="h-96 w-72">
          <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="img/PDC.jpg" alt="" />
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
        <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
          <h1 class="font-dmserif text-3xl font-bold text-white">PDC</h1>
          <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Practical Driving Course</p>
          <span class="text-sm text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 mb-3">Drive any of our 170+ latest training vehicles at scheduled time slots.</span>
          <strong class="text-red-400 mb-3">Starts at Php 500</strong>
          <a href="{{ route('pdc-index') }}" class="rounded-full bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60">See More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .courses_bg {
    background: url('img/courses_bg.svg') no-repeat;
    background-size: cover;
  }
</style>

