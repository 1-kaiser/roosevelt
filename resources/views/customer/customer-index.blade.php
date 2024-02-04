<div>
    <x-guest-layout>

        <div class="navbar bg-neutral text-neutral-content sticky top-0 z-20">
            <div class="flex-1">
              <a class="btn btn-ghost text-xl">Roosevelt DriveSync</a>
            </div>
            <div class="flex-none">
              <ul class="menu menu-horizontal px-4">
                <li><a class="hover:bg-neutral-400 px-4 py-2 hover:text-black">Home</a></li>
                <li><a class="hover:bg-neutral-400 px-4 py-2 hover:text-black">Mission</a></li>
                <li><a class="hover:bg-neutral-400 px-4 py-2 hover:text-black">About Us</a></li>
              </ul>
            </div>
          </div>

        <div class="hero min-h-screen" style="background-image: url('img/hero-img.avif');">
        <div class="hero-overlay bg-opacity-70 bg-gray-900"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Roosevelt</h1>
                    <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <livewire:customer.customer-create />
                </div>
            </div>
        </div>

        <div class="sm:px-30 md:px-44 md:py-20 lg:px-96">
            <div class="chat chat-start">
                <div class="chat-image avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS chat bubble component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
                </div>
                <div class="chat-header">
                Obi-Wan Kenobi
                <time class="text-xs opacity-50">12:45</time>
                </div>
                <div class="chat-bubble">You were the Chosen One!</div>
                <div class="chat-footer opacity-50">
                Delivered
                </div>
            </div>
            <div class="chat chat-end">
                <div class="chat-image avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS chat bubble component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
                </div>
                <div class="chat-header">
                Anakin
                <time class="text-xs opacity-50">12:46</time>
                </div>
                <div class="chat-bubble">goods</div>
                <div class="chat-footer opacity-50">
                Seen at 12:46
                </div>
            </div>
        </div>

        <!-- lg -->
        <span class="md:w-full flex justify-center items-center mb-3">Send us your rating</span>
        <div class="rating rating-lg cone md:w-full flex justify-center items-center mb-8">
            
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" checked/>
            <input type="radio" name="rating-8" class="mask mask-star-2 bg-orange-400" />
        </div>
            

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.1962015711383!2d120.95088337384271!3d14.644801275995501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5ea2f491df9%3A0xd2612a136dff8d1d!2sRosevelt%20Driving%20School%20(Lecture%20Room)!5e0!3m2!1sen!2sph!4v1707033224556!5m2!1sen!2sph" class="w-full h-4/6" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        <footer class="footer p-10 bg-neutral text-neutral-content">
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

