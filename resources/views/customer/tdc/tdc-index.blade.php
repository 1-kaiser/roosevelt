<div>
    <x-guest-layout>

        <x-customer-navbar />

        <div class="h-4/5 flex items-center">

            <div class="flex gap-10 justify-center flex-wrap">
                <img src="img/tdc-classroom.jpg" class="w-1/3">
                <div>
                    <span class="text-3xl"><strong>Theoretical Driving Course (TDC)</strong></span>
                    <p class="mt-6">
                        The Theoretical Driving Course (TDC) is a 15-hr classroom module for 2 <br> days. This is a mandatory course for Student Permit applicants. Students <br> are required to pass the Final Written Exam after course completion. If passed, <br> Roosevelt Driving School electronically transmits to LTO-IT System and issues <br> TDC Certification of Completion.
                    </p>
                    <p class="text-2xl text-red-500 mt-10">PHP 1,000.00</p>

                    <form action="" method="POST" class="float-center absolute mt-10">
                        @csrf
                        @method('post')

                        @if(session()->has('error'))
                            <span class="bg-red-500 text-black px-4 py-2">
                                {{session('error')}}
                            </span>
                        @endif

                        <div class="flex">
                            <div class="mr-16">
                                <div class="flex gap-x-5 items-center">
                                    <strong class="text-gray-700">Name</strong>
                    
                                    <div class="flex flex-col">
                                        <x-input type="text" class="text-sm bg-gray-200" id="form.name" name="name" />
                                        <x-input-error for="form.name" class="mt-1" /> 
                                        @error('name')
                                        <span class="text-red-500 text-sm mt-1">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
        
                                <div class="flex gap-x-6 items-center mt-7">
                                    <strong class="text-gray-700">Email</strong>
                    
                                    <div class="flex flex-col">
                                        <x-input type="email" class="text-sm bg-gray-200" id="form.email"  name="email" />
                                        @error('email')
                                        <span class="text-red-500 text-sm mt-1">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
    
                            <div>
                                <div class="flex gap-x-5 items-center">
                                    <strong class="text-gray-700">Time</strong>
                    
                                    <div class="flex flex-col">
                                        <x-input type="time" class="text-xs bg-gray-200"  id="time" name="time" />
                                        @error('time')
                                        <span class="text-red-500 text-sm mt-1">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                    
                                <div class="flex gap-x-5 items-center mt-7">
                                    <strong class="text-gray-700">Date</strong>
                    
                                    <div class="flex flex-col">
                                        <x-input type="date" class="text-xs bg-gray-200"  id="date" name="date" />
                                        @error('date')
                                        <span class="text-red-500 text-sm mt-1">{{$message}}</span>
                                        @enderror 
                                    </div>

                                    <x-input type="hidden" value="TDC" wire:model.lazy="course" id="course" name="course"/>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline btn-error mt-10 mb-15">Reserve Now</button>
                    </form>

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
                </div>
            </div>
        </div>

        <div class="mt-40">
            <x-customer-footer />
        </div>
    </x-guest-layout>

    {{-- <script>
        window.addEventListener("swal", (event) => {
            let data = event.detail;

            Swal.fire({
                title: data.title,
                text: data.text,
                icon: data.icon,
            });
        });
    </script> --}}
</div>