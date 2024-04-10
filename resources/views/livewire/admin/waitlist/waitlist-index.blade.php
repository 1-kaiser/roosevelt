<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Waitlist') }}
        </h2>
    </x-slot>

    <div class="flex justify-end pt-5 pb-2 pr-[4.2rem] gap-2">

        <button @click="$wire.exportXLSX()" id="button" class="group rounded-md shadow bg-green-500 text-white cursor-pointer    flex justify-between items-center overflow-hidden transition-all hover:glow">
            <div class="relative w-8 h-8 bg-white bg-opacity-20 text-white flex justify-center items-center transition-all">
                <svg id="arrow" class="w-4 h-4 transition-all group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
                <svg id="check" class="absolute z-10 w-0 top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 text-white transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <div id="progress" class="absolute w-full h-0 bg-white bg-opacity-20 top-0 duration-200"></div>
            </div>
              <p class="px-5 text-sm">XLSX</p>
          </button>

          <button @click="$wire.exportPDF()" id="button" class="group rounded-md shadow bg-red-500 text-white cursor-pointer    flex justify-between items-center overflow-hidden transition-all hover:glow">
            <div class="relative w-8 h-8 bg-white bg-opacity-20 text-white flex justify-center items-center transition-all">
                <svg id="arrow" class="w-4 h-4 transition-all group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
                <svg id="check" class="absolute z-10 w-0 top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 text-white transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <div id="progress" class="absolute w-full h-0 bg-white bg-opacity-20 top-0 duration-200"></div>
            </div>
              <p class="px-5 text-sm">PDF</p>
          </button>

        {{-- <x-button @click="$wire.exportXLSX()">XLSX</x-button>
        <x-button @click="$wire.exportPDF()">PDF</x-button> --}}
    </div>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:admin.waitlist.waitlist-table />
            </div>
        </div>
    </div>

    <footer class="fixed left-0 bottom-0 w-full">
      <div class="max-w-full sm:px-6 lg:px-1">
          <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col items-start justify-between border-t border-gray-100 md:flex-row md:items-center">
              <p class="mb-6 text-sm text-left text-gray-600 md:mb-0">© Copyright IS 3A Group 5. All Rights Reserved.</p>
              <div class="flex items-start justify-start space-x-6 md:items-center md:justify-center">
                  <a href="#_" class="text-sm text-gray-600 transition hover:text-primary">Terms</a>
                  <a href="#_" class="text-sm text-gray-600 transition hover:text-primary">Privacy</a>
              </div>
          </div>
          </div>
      </div>
    </footer>
</div>