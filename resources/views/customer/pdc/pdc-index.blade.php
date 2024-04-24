<div>
    <x-guest-layout>
        {{-- Navbar --}}
        <x-customer-navbar />

        <div class="h-4/5 flex justify-center items-center">
            <div class="flex gap-10 justify-center flex-wrap">
                <img src="img/pdc-driving.jpg" class="w-[40%]">
                <div>
                    <span class="text-3xl"><strong>Practical Driving Course (PDC)</strong></span>
                    <p class="mt-6">
                        The Practical Driving Course (PDC) is a mandatory course  for Driver <br /> License applicants. Students are required to take a minimum of 8 hours <br /> to complete the course. Roosevelt Driving School electronically transmits <br /> to LTO-IT System and issues PDC Certification of Completion.
                    </p>
                    <p class="text-2xl text-red-500 mt-10">PHP 500.00</p>
                </div>
            </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
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
                            <x-input type="text" class="text-sm bg-gray-200 w-56" value="{{ old('name') }}" id="name" name="name" />
                        
                            <x-input-error for="name" class="mt-1"/>
                        </div>
                    </div>
                    {{-- Name --}}

                    {{-- Email --}}
                    <div class="flex gap-x-11 items-center mt-7">
                        <strong class="text-gray-700">Email</strong>
        
                        <div class="flex flex-col">
                            <x-input type="email" class="text-sm bg-gray-200 w-56" value="{{ old('email') }}" id="email"  name="email" />
                            <x-input-error for="email" class="mt-1"/>
                        </div>
                    </div>
                    {{-- Email --}}

                    {{-- Contact --}}
                    <div class="flex gap-x-6 items-center mt-7">
                        <strong class="text-gray-700">Contact</strong>
                        <div class="flex flex-col">
                            <x-input type="number" class="text-sm bg-gray-200 w-56" value="{{ old('contact') }}" id="contact"  name="contact" />
                            <x-input-error for="contact" class="mt-1"/>
                        </div>
                    </div>
                    {{-- Contact --}}
                </div>

                <div>
                    {{-- Date --}}
                    <div class="flex gap-x-24 items-center">
                        <strong class="text-gray-700">Date</strong>
        
                        <div class="flex flex-col">
                            <x-input type="date" class="text-xs bg-gray-200" value="{{ old('date') }}" id="date" name="date" />
                            <x-input-error for="date" class="mt-1"/>
                        </div>

                        <x-input type="hidden" value="PDC" wire:model.lazy="course" id="course" name="course"/>
                    </div>
                    {{-- Date --}}

                    {{-- Transmission --}}
                    <div class="mt-7 flex gap-x-9 items-center">
                        <strong class="text-gray-700">Transmission</strong>
        
                        <div class="flex flex-col">
                            <x-select class="text-sm bg-gray-200" value="{{ old('transmission') }}" id="transmission" name="transmission">
                                <option value=""></option>
                                <option value="Manual">Manual</option>
                                <option value="Automatic">Automatic</option>
                            </x-select>
                            <x-input-error for="transmission" class="mt-1"/>
                        </div>
                    </div>
                    {{-- Transmission --}}

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

        <div class="mt-20 ml-44 shadow-xl w-[70%]">
            <div class="p-6">
                <strong class="text-black">Reservation details:</strong>
                <p class="mt-2">To reserve a slot, <strong>downpayment worth 500 pesos fee is required</strong>. Full payment of registration will be valid only for 90 days. <br /> <strong>Cancellation</strong> of you confirmed Training sessions/schedules will incur a 20% fee. The driving course is <strong>NON-TRANSFERABLE</strong>. Request for enrolment cancelation and/or course downgrade is subject to company's approval. The company reserves the right to reject refund of the total course fee or any payment made upon enrolment.</p>
            </div>
        </div>

        <div class="mt-36">
            <x-customer-calendar />
        </div>

        <div class="mt-40">
            <x-customer-footer />
        </div>
    </x-guest-layout>

    @if(session()->has('success'))
        <script>
            Swal.fire({
            icon: "success",
            title: "Registered Successfully",
            text: "Please wait for the confirmation",
            });

            setTimeout(() => {
                window.location.href = '/customer'
            }, 3000);
        </script>
    @endif

    @if(session()->has('error'))
                <span class="bg-red-500 text-black px-4 py-2">
                    {{session('error')}}
                </span>
            @endif

    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var preview = document.getElementById('preview');
                preview.src = dataURL;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</div>