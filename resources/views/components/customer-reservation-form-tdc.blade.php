<div class="max-w-screen-md mx-auto p-5">
    <div class="text-center mb-8">
        <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
          Reservation <span class="text-indigo-600">Form</span>
        </h3>
    </div>
    
    <form class="w-full" action="" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    {{-- Picture --}}
    <div class="flex flex-col items-center mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Your Picture
            </label>
        
            <img src="#" id="preview" class="border border-gray-400 w-36 h-34">

        <x-input type="file" class="text-sm w-44 mt-2" id="pic" name="pic" onchange="previewImage(event)"/>
        <x-input-error for="pic" class="mt-1"/>
    </div>
    {{-- Picture --}}
    <div class="flex flex-wrap -mx-3 mb-6">

        {{-- First Name --}}
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                First Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Juan">
        </div>
        {{-- First Name --}}

        {{-- Last Name --}}
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Last Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Dela Cruz">
        </div>
        {{-- Last Name --}}

    </div>
    <div class="flex flex-wrap -mx-3 mb-6">

        {{-- Email Address --}}
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Email Address
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="********@*****.**">
        </div>
        {{-- Email Address --}}

        {{-- Contact --}}
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Contact
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="number" placeholder="09*********">
        </div>
        {{-- Contact --}}

        {{-- Age --}}
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Age
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="number" placeholder="20">
        </div>
        {{-- Age --}}

      </div>
    <div class="flex flex-wrap -mx-3 mb-6">

        {{-- Birthday --}}
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Birthday
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-70 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date" placeholder="Jane">
        </div>
        {{-- Birthday --}}

        {{-- Date of Reservation --}}
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Date of Reservation
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="date" placeholder="Doe">
        </div>
        {{-- Date of Reservation --}}
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">

        {{-- Valid ID --}}
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Valid ID
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-70 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="file" placeholder="Jane">
        </div>
        {{-- Valid ID --}}

        {{-- Proof of Payment --}}
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Proof of Payment
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="file" placeholder="Doe">
        </div>
        {{-- Proof of Payment --}}
    </div>
    
    
    <div class="flex justify-between w-full px-3">
        <div class="md:flex md:items-center">
        <label class="block text-gray-500 font-bold">
            <input class="mr-2 leading-tight" type="hidden">
        </label>
        </div>
        <button class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit">
        Reserve Now
        </button>
  </div>
       
  </form>
  </div>

<form action="" method="POST" class="mt-10" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="flex justify-center h-60">

        {{-- Picture --}}
        <div class="flex flex-col items-center mr-14">
            <strong class="text-gray-700 mb-2">Your Picture</strong>
            
                <img src="#" id="preview" class="border border-gray-400 w-36 h-34">
    
            <x-input type="file" class="text-sm w-44 mt-2" id="pic" name="pic" onchange="previewImage(event)"/>
            <x-input-error for="pic" class="mt-1"/>
        </div>
        {{-- Picture --}}

        <div class="mr-16">
            {{-- Name --}}
            <div class="flex gap-x-10 items-center">
                <strong class="text-gray-700">Name</strong>

                <div class="flex flex-col">
                    <x-input type="text" class="text-sm bg-gray-100 w-56" value="{{ old('name') }}" id="name" name="name" />
                    <x-input-error for="name" class="mt-1"/>
                </div>
            </div>
            {{-- Name --}}

            {{-- Email --}}
            <div class="flex gap-x-11 items-center mt-7">
                <strong class="text-gray-700">Email</strong>

                <div class="flex flex-col">
                    <x-input type="email" class="text-sm bg-gray-100 w-56" value="{{ old('email') }}" id="email"  name="email" />
                    <x-input-error for="email" class="mt-1"/>
                </div>
            </div>
            {{-- Email --}}

            {{-- Contact --}}
            <div class="flex gap-x-6 items-center mt-7">
                <strong class="text-gray-700">Contact</strong>
                <div class="flex flex-col">
                    <x-input type="number" class="text-sm bg-gray-100 w-56" value="{{ old('contact') }}" id="contact"  name="contact" />
                    <x-input-error for="contact" class="mt-1"/>
                </div>
            </div>
            {{-- Contact --}}
        </div>

        <div>
            {{-- Date --}}
            <div class="flex gap-x-11 items-center">
                <strong class="text-gray-700">Date</strong>

                <div class="flex flex-col">
                    <x-input type="date" class="text-xs bg-gray-100" value="{{ old('date') }}" id="date" name="date" />
                    <x-input-error for="date" class="mt-1"/>
                </div>

                <x-input type="hidden" value="TDC" wire:model.lazy="course" id="course" name="course"/>
                <x-input type="hidden" value="---" name="transmission" />
            </div>
            {{-- Date --}}

            {{-- Proof of Payment --}}
            <div class="mt-7">
                <strong class="text-gray-700">Proof of Payment</strong>
                <div class="flex flex-col">
                    <x-input type="file" class="text-sm mt-2" id="paid_attachment"  name="paid_attachment" />
                    <x-input-error for="paid_attachment" class="mt-1"/>
                </div>
            </div>
            {{-- Proof of Payment --}}
        </div>

        {{-- Gcash --}}
        <div class="flex flex-col ms-10">
            <div class="flex flex-col items-center">
                <strong class="text-gray-700">Gcash QR Code</strong>
                <img src="img/gcash_qr.jpg" class="w-36 h-36">
            </div>

            <div class="inline-flex items-center justify-center w-full">
                <hr class="w-36 h-px my-8 bg-gray-700 border-0">
                <span class="absolute px-3 left-[85.4%] font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">or</span>
            </div>

            <div class="flex flex-col items-center">
                <strong class="text-gray-700">Gcash Account</strong>
                <p class="text-sm mt-1">Name: AE**N RO***T D.</p>
                <p class="text-sm mt-1">#: 09665077801</p>
            </div>

        </div>
        {{-- Gcash --}}
    </div>
    <button type="submit" class="btn btn-outline btn-error ms-[25%] my-7">Reserve Now</button>
</form>