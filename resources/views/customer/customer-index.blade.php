<div>
    <x-guest-layout>

        <div class="navbar bg-neutral text-neutral-content sticky top-0 z-10">
            <div class="flex-1">
              <a class="btn btn-ghost text-xl">Roosevelt DriveSync</a>
            </div>
            <div class="flex-none">
              <ul class="menu menu-horizontal px-4">
                <li><a href="#" class="hover:bg-neutral-400 px-4 py-2 hover:text-black">Home</a></li>
                <li><a href="#Courses" class="hover:bg-neutral-400 px-4 py-2 hover:text-black">Courses</a></li>
                <li><a href="#FAQs" class="hover:bg-neutral-400 px-4 py-2 hover:text-black">FAQs</a></li>
                <li><a href="#Contact" class="hover:bg-neutral-400 px-4 py-2 hover:text-black">Contact Us</a></li>
              </ul>
            </div>
          </div>
          

        <div class="hero min-h-screen" style="background-image: url('img/hero.jpg');">
        <div class="hero-overlay bg-opacity-70 bg-black"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-full">
                    <h1 class="mb-5 font-bold leading-tight [font-size:_clamp(2em,4vw,7em)]">LEARN IN A SAFE AND <br /> CONTROLLED ENVIRONMENT</h1>
                    <p class="mb-5">Simplifying the enrollment process so that you can start driving now!</p>
                    <livewire:customer.customer-create />
                </div>
            </div>
        </div>

        <div id="Courses" class="mt-20 ml-10">
          <strong class="text-3xl">Featured Courses & Services</strong>
          <p>Choose from a variety of vehicles, schedule and instructors that fits your needs</p>
        </div>
        
        {{-- <div class="flex py-10 items-center justify-center gap-4 pr-10 pl-10">
          <div class="card card-compact w-2/6 bg-base-100 shadow-xl">
            <figure><img src="img/TDC.jpeg" alt="TDC" /></figure>
            <div class="card-body">
              <h2 class="card-title">Theoretical Driving Course (TDC)</h2>
              <p>Aspiring drivers are now required to attend 15-hour Theoretical Driving Course before applying for student permits.</p>
            </div>
          </div>

          <div class="card card-compact w-3/6 bg-base-100 shadow-xl">
            <figure><img src="img/PDC.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              <h2 class="card-title">Practical Driving Course (PDC)</h2>
              <p>Drive any of our 170+ latest training vehicles at scheduled time slots.</p>
            </div>
          </div>

          <div class="card card-compact w-2/6 bg-base-100 shadow-xl">
            <figure><img src="img/MRC.png" alt="Shoes" /></figure>
            <div class="card-body">
              <h2 class="card-title">Motorcyle Riding Course (MRC)</h2>
              <p>Future riders can now learn how to navigate the roads safely.</p>
            </div>
          </div>
        </div> --}}

        <div class="flex mt-16 items-center justify-center">
          <div class="grid grid-cols-1 gap-x-12 gap-y-12 md:grid-cols-2 lg:grid-cols-3">
            <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
              <div class="h-96 w-72">
                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="img/TDC.jpeg" alt="" />
              </div>
              <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
              <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                <h1 class="font-dmserif text-3xl font-bold text-white">TDC</h1>
                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Theoretical Driving Course</p>
                <span class="text-sm text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 mb-3">Aspiring drivers are now required to attend 15-hour Theoretical Driving Course before applying for student permits.</span>
                <button class="rounded-full bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60">See More</button>
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
                <button class="rounded-full bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60">See More</button>
              </div>
            </div>
            <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
              <div class="h-96 w-72">
                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="img/MRC.png" alt="" />
              </div>
              <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
              <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                <h1 class="font-dmserif text-3xl font-bold text-white">MRC</h1>
                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Motorcyle Riding Course</p>
                <span class="text-sm text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 mb-3">Future riders can now learn how to navigate the roads safely.</span>
                <button class="rounded-full bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60">See More</button>
              </div>
            </div>
          </div>
        </div>
        

        <div id="FAQs" class="mt-20 ml-10">
          <strong class="text-3xl">Frequently Asked Questions</strong>
          <p>Our courses and services are backed by four decades of experience.</p>
        </div>

        <div class="relative font-inter antialiased">

          <main class="mt-16 flex flex-col justify-center bg-slate-50 overflow-hidden">
              <div class="w-full max-w-2xl mx-auto px-4 md:px-6">
      
                  <!-- Accordion component -->
                  <div class="divide-y divide-slate-200">
                      <!-- Accordion item -->
                      <div x-data="{ expanded: false }" class="py-2">
                          <h2>
                              <button
                                  id="faqs-title-01"
                                  type="button"
                                  class="flex items-center justify-between w-full text-left font-semibold py-2"
                                  @click="expanded = !expanded"
                                  :aria-expanded="expanded"
                                  aria-controls="faqs-text-01"
                              >
                                  <span>1. How much does your Practical Driving Course (PDC) cost?</span>
                                  <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                      <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                      <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                  </svg>
                              </button>
                          </h2>
                          <div
                              id="faqs-text-01"
                              role="region"
                              aria-labelledby="faqs-title-01"
                              class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                              :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                              >
                              <div class="overflow-hidden">
                                  <p class="pb-3">
                                    Our course fees are designed depending on your level of need: Beginner (20-30 Hours), Intermediate (10-15 Hours) or Refresher (8 Hours). Fees starts at P4,000. Visit our Courses page for more info.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <!-- Accordion item -->
                      <div x-data="{ expanded: false }" class="py-2">
                          <h2>
                              <button
                                  id="faqs-title-02"
                                  type="button"
                                  class="flex items-center justify-between w-full text-left font-semibold py-2"
                                  @click="expanded = !expanded"
                                  :aria-expanded="expanded"
                                  aria-controls="faqs-text-02"
                              >
                                  <span>2. What do I need to bring during my practical driving sessions?</span>
                                  <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                      <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                      <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                  </svg>
                              </button>
                          </h2>
                          <div
                              id="faqs-text-02"
                              role="region"
                              aria-labelledby="faqs-title-02"
                              class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                              :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                              >
                              <div class="overflow-hidden">
                                  <p class="pb-3">
                                    All students are required to bring their student permit or driver’s license (with LTO O.R.), A-1 ID and O.R. as proof of payment during actual driving lessons. Please wear proper clothing and footwear; sleeveless shirt, short pants, slippers and sandals are strictly not allowed.
                                    <br /><br />
                                    For security reasons, do not bring firearms or any deadly weapons and valuable belongings (ex: jewelries). A-1 Driving shall not be liable for any lost belongings.
                                  </p>
                              </div>
                          </div>
                      </div> 
                      <!-- Accordion item -->
                      <div x-data="{ expanded: false }" class="py-2">
                          <h2>
                              <button
                                  id="faqs-title-03"
                                  type="button"
                                  class="flex items-center justify-between w-full text-left font-semibold py-2"
                                  @click="expanded = !expanded"
                                  :aria-expanded="expanded"
                                  aria-controls="faqs-text-03"
                              >
                                  <span>3. What happens if I didn’t attend my scheduled practical driving session?</span>
                                  <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                      <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                      <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                  </svg>
                              </button>
                          </h2>
                          <div
                              id="faqs-text-03"
                              role="region"
                              aria-labelledby="faqs-title-03"
                              class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                              :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                              >
                              <div class="overflow-hidden">
                                  <p class="pb-3">
                                    All students must arrive 15 minutes before the scheduled driving session at the training station.
                                    <br /><br />
                                    For cancellation of schedule, student should call the registrar at least 48 hours prior to their scheduled driving lesson. Your absence without informing A-1 Driving will be considered counted.
                                  </p>
                              </div>
                          </div>
                      </div> 
                      <!-- Accordion item -->
                      <div x-data="{ expanded: false }" class="py-2">
                          <h2>
                              <button
                                  id="faqs-title-04"
                                  type="button"
                                  class="flex items-center justify-between w-full text-left font-semibold py-2"
                                  @click="expanded = !expanded"
                                  :aria-expanded="expanded"
                                  aria-controls="faqs-text-04"
                              >
                                  <span>4. Why do I need to start my first few practical driving sessions inside the training center?</span>
                                  <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                      <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                      <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                  </svg>
                              </button>
                          </h2>
                          <div
                              id="faqs-text-04"
                              role="region"
                              aria-labelledby="faqs-title-04"
                              class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
                              :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
                              >
                              <div class="overflow-hidden">
                                  <p class="pb-3">
                                    Our modern Training Centers have many advantages:
                                    <br /><br />
                                    * Complete training ground away from daily motoring traffic <br>
                                    * Safe and secure environment <br>
                                    * Free from distractions from other road users <br>
                                    * Develop confidence and skill <br>
                                    * Actual road signs, traffic lights & pavement markings are present in the facility <br>
                                    * Can easily review backing, maneuvering, parking and hanging lessons <br>
                                    * Facility is also suitable for night driving <br>
                                  </p>
                              </div>
                          </div>
                      </div>                                                                        
                  </div>
                  <!-- End: Accordion component -->
              </div>
          </main>
      </div>

        {{-- <div class="sm:px-30 md:px-44 lg:px-96 mt-8 mb-8">
            <div class="chat chat-start">
                <div class="chat-image avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS chat bubble component" src="img/Iverson.jpg" />
                </div>
                </div>
                <div class="chat-header">
                Iverson Norberte
                <time class="text-xs opacity-50">12:45 PM</time>
                </div>
                <div class="chat-bubble">How much does your Practical Driving Course (PDC) cost?</div>
                <div class="chat-footer opacity-50">
                Delivered
                </div>
            </div>
            <div class="chat chat-end">
                <div class="chat-image avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS chat bubble component" src="img/Robert.jpg" />
                </div>
                </div>
                <div class="chat-header">
                John Robert Castillo
                <time class="text-xs opacity-50">12:46 PM</time>
                </div>
                <div class="chat-bubble">Our course fees are designed depending on your level of need: Beginner (20-30 Hours), Intermediate (10-15 Hours) or Refresher (8 Hours). Fees starts at P4,000. Visit our Courses page for more info.</div>
                <div class="chat-footer opacity-50">
                Seen at 12:46 PM
                </div>
            </div>
        </div> --}}

        <!-- lg -->
        <span class="md:w-full flex justify-center items-center mt-16">Send us your rating</span>
        <div class="rating rating-lg cone md:w-full flex justify-center items-center mb-16">
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" checked/>
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" />
        </div>
            

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.1962015711383!2d120.95088337384271!3d14.644801275995501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5ea2f491df9%3A0xd2612a136dff8d1d!2sRosevelt%20Driving%20School%20(Lecture%20Room)!5e0!3m2!1sen!2sph!4v1707033224556!5m2!1sen!2sph" class="w-full h-4/6" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        <footer id="Contact" class="footer p-10 bg-neutral text-neutral-content">
            <nav>
              <h6 class="footer-title">Services</h6> 
              <a class="link link-hover">Branding</a>
              <a class="link link-hover">Design</a>
              <a class="link link-hover">Marketing</a>
              <a class="link link-hover">Advertisement</a>
            </nav> 
            <nav>
              <h6 class="footer-title">Company</h6> 
              <a class="link link-hover">About us</a>
              <a class="link link-hover">Contact</a>
              <a class="link link-hover">Jobs</a>
              <a class="link link-hover">Press kit</a>
            </nav> 
            <nav>
              <h6 class="footer-title">Legal</h6> 
              <a class="link link-hover">Terms of use</a>
              <a class="link link-hover">Privacy policy</a>
              <a class="link link-hover">Cookie policy</a>
            </nav>
          </footer> 
          <footer class="footer px-10 py-4 border-t bg-neutral text-neutral-content border-base-300">
            <aside class="items-center grid-flow-col">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
              <p>Roosevelt DriveSync <br>Providing reliable tech since 1992</p>
            </aside> 
            <nav class="md:place-self-center md:justify-self-end">
              <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
              </div>
            </nav>
          </footer>
    </x-guest-layout>
</div>

