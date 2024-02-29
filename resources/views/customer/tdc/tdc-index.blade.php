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

                    <form action="" class="float-center absolute mt-10">
                        @csrf
                        <div class="flex gap-x-14 items-center">
                            <strong class="text-gray-700">Time</strong>
            
                            <x-input type="time" class="text-xs bg-gray-200" wire:model.lazy="form.time" id="form.time" name="form.time" />
                            <x-input-error for="form.time" class="mt-1" />  
                        </div>
            
                        <div class="flex gap-x-14 items-center mt-7">
                            <strong class="text-gray-700">Date</strong>
            
                            <x-input type="date" class="text-xs bg-gray-200" wire:model.lazy="form.date" id="form.date" name="form.date" />
                            <x-input-error for="form.date" class="mt-1" />
                        </div>

                        <button class="btn btn-outline btn-error mt-10 mb-10">Reserve Now</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-40">
            <x-customer-footer />
        </div>
    </x-guest-layout>
</div>