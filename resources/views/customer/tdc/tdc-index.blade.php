<div>
    <x-guest-layout>

        {{-- Navbar --}}
        <x-customer-navbar />

        <div class="h-4/5 flex items-center">
            <div class="flex gap-10 justify-center flex-wrap">
                <img src="img/tdc-classroom.jpg" class="w-1/3">
                <div>
                    <span class="text-3xl"><strong>Theoretical Driving Course (TDC)</strong></span>
                    <p class="mt-6">
                        The Theoretical Driving Course (TDC) is a 15-hr classroom module for 2 <br> days. This is a mandatory course for Student Permit applicants. Students <br> are required to pass the Final Written Exam after course completion. If passed, <br> Roosevelt Driving School electronically transmits to LTO-IT System and issues <br> TDC Certification of Completion.
                    </p>
                    <p class="text-2xl text-red-500 mt-10">PHP 500.00</p>
                </div>
            </div>
        </div>

        <div class="max-w-full mx-auto px-32">
            <div class="text-center mb-8">
                <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                  Reservation <span class="text-indigo-600">Form</span>
                </h3>
            </div>
            
            <form class="w-full" action="{{ route('tdc-save') }}" id="tdcForm" method="POST" enctype="multipart/form-data">
                @csrf
        
                {{-- Picture --}}
                <div class="flex flex-col items-center mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Your Picture
                        </label>
                    
                        <img src="#" id="previewPic" class="border border-gray-400 w-36 h-34" hidden>
            
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
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ Auth::guard('customer')->user()->first_name }}" id="first_name" name="first_name" type="text" placeholder="Juan">
                        <x-input-error for="first_name" class="mt-1"/>
                    </div>
                    {{-- First Name --}}
            
                    {{-- Last Name --}}
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Last Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ Auth::guard('customer')->user()->last_name }}" id="last_name" name="last_name" type="text" placeholder="Dela Cruz">
                        <x-input-error for="last_name" class="mt-1"/>
                    </div>
                    {{-- Last Name --}}
        
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
        
                    {{-- Email Address --}}
                    <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Email Address
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ Auth::guard('customer')->user()->email }}" id="email" name="email" type="text" placeholder="********@*****.**">
                    <x-input-error for="email" class="mb-2"/>
                    </div>
                    {{-- Email Address --}}
            
                    {{-- Contact --}}
                    <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-3" for="grid-password">
                        Contact
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ Auth::guard('customer')->user()->contact }}" id="contact" name="contact" type="number" placeholder="09*********">
                    <x-input-error for="contact" class="mb-2"/>
                    </div>
                    {{-- Contact --}}
            
                    {{-- Age --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-5" for="grid-password">
                        Age
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ old('age') }}" id="age" name="age" type="number" placeholder="20">
                        <x-input-error for="age" class="mt-1"/>
                    </div>
                    {{-- Age --}}
        
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
        
                    {{-- Birthday --}}
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Birthday
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-70 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" value="{{ old('birthday') }}" id="birthday" name="birthday" type="date" max="2008-01-01">
                    <x-input-error for="birthday" class="mt-1"/>
                    </div>
                    {{-- Birthday --}}
            
                    {{-- Date of Reservation --}}
                    <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Date of Reservation
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ old('date') }}" id="date" name="date" type="date">
                    <x-input-error for="date" class="mt-1"/>
                    </div>
                    {{-- Date of Reservation --}}
                    <x-input type="hidden" value="TDC" id="course" name="course"/>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
        
                    {{-- Valid ID --}}
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Valid ID
                    </label>

                    <input class="appearance-none block w-full bg-gray-200 text-gray-70 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="valid_id" name="valid_id" type="file" onchange="previewImageID(event)">

                    <img src="#" id="previewID" class="border mt-2 border-gray-400 w-60 h-32" hidden>

                    <x-input-error for="valid_id" class="mt-1"/>
                    </div>
                    {{-- Valid ID --}}
            
                    {{-- Proof of Payment --}}
                    <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Proof of Payment
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="paid_attachment" name="paid_attachment" type="file" onchange="previewImageGcash(event)">

                    <img src="#" id="previewPaid" class="border mt-2 border-gray-400 w-48 h-80" hidden>

                    <x-input-error for="paid_attachment" class="mt-1"/>
                    </div>
                    <x-input type="hidden" value="---" name="transmission" />
                    {{-- Proof of Payment --}}
                </div>
            
            
                <div class="flex justify-between w-full px-3 py-4">
                    <div class="md:flex md:items-center">
                    <label class="block text-gray-500 font-bold">
                        <input class="mr-2 leading-tight" type="hidden">
                    </label>
                    </div>
                    <button class="shadow w-44 bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit">
                    Reserve Now
                    </button>
                </div>
               
            </form>
        </div>

        {{-- Gcash --}}
        <div class="flex flex-col ms-10 mt-10">
            <div class="flex flex-col items-center">
                <strong class="text-gray-700">Gcash QR Code</strong>
                <img src="img/gcash_qr.jpg" class="w-48 h-48">
            </div>

            <div class="inline-flex items-center justify-center w-full">
                <hr class="w-36 h-px my-8 bg-gray-700 border-0">
                <span class="absolute px-3 left-[51.4%] font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">or</span>
            </div>

            <div class="flex flex-col items-center">
                <strong class="text-gray-700">Gcash Account</strong>
                <p class="text-sm mt-1">Name: AE**N RO***T D.</p>
                <p class="text-sm mt-1">#: 09665077801</p>
            </div>

        </div>
        {{-- Gcash --}}

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

    <style>
        #pic-error, #contact-error, #age-error, #grid-first-name-error, #date-error, #valid_id-error, #paid_attachment-error {
            color: red;
            font-size: 13px;
            outline: none;
        }
        .error {
            outline: 1px solid red;
        }
        .valid {
            outline: 1px solid rgb(15, 255, 15);
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#tdcForm').validate({
                rules: {
                    pic: {required: true},
                    first_name: {required: true},
                    last_name: {required: true},
                    email: {required: true},
                    contact: {required: true},
                    age: {
                        required: true,
                        min: 18
                    },
                    birthday: {required: true},
                    date: {required: true},
                    valid_id: {required: true},
                    paid_attachment: {required: true},
                },
                messages: {
                    age: {min: "Only 18 years old and above are eligible for reservation."}
                },
                highlight: function (element) {
                    $(element).removeClass('valid').addClass('error');
                },
                unhighlight: function (element) {
                    $(element).removeClass('error').addClass('valid');
                }
            })
        })
    </script>

    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var preview = document.getElementById('previewPic');
                preview.src = dataURL;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }

        function previewImageID(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var preview = document.getElementById('previewID');
                preview.src = dataURL;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }

        function previewImageGcash(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var preview = document.getElementById('previewPaid');
                preview.src = dataURL;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>

    </x-guest-layout>
</div>