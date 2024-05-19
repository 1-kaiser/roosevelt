<div>
    <x-guest-layout>

      {{-- @if (Session::has('successLogout'))

          <script>
            Swal.fire({
            icon: "success",
            title: "Logged out successfully",
            });
          </script>
    
      @endif --}}

      {{-- NAVBAR --}}

        <x-customer-navbar-before />

      {{-- NAVBAR --}}
          
      {{-- HERO SECTION --}}

        
      
      {{-- HERO SECTION --}}
      
      <div class="carousel w-full min-h-screen">
        <div id="slide1" class="carousel-item relative w-full">
          <div class="hero min-h-screen" style="background-image: url('img/hero.jpg');">
            <div class="hero-overlay bg-opacity-70 bg-black"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-full">
                        <h1 class="mb-5 font-bold leading-tight [font-size:_clamp(2em,4vw,7em)]">LEARN IN A SAFE AND <br /> CONTROLLED ENVIRONMENT</h1>
                        <p class="mb-5">Simplifying the enrollment process so that you can start driving now!</p>
                        {{-- <livewire:customer.customer-create /> --}}
                        <div class="btn btn-outline text-white">
                          <a href="#learn-more">Learn More</a>
                        </div>
                    </div>
              </div>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide4" class="btn btn-circle">❮</a> 
            <a href="#slide2" class="btn btn-circle">❯</a>
          </div>
        </div> 

        <div id="slide2" class="carousel-item relative w-full">
          <div class="hero min-h-screen" style="background-image: url('img/TDC.jpeg');">
            <div class="hero-overlay bg-opacity-70 bg-black"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-full">
                        <h1 class="mb-5 font-bold leading-tight [font-size:_clamp(2em,4vw,7em)]">SAFETY BEGINS WITH <br /> PROPER EDUCATION</h1>
                        <p class="mb-5">First step of a Student Driver Journey facilitated by well-trained and competent instructors.
                          </p>
                        {{-- <livewire:customer.customer-create /> --}}
                        <div class="btn btn-outline text-white">
                          <a href="#learn-more">Learn More</a>
                        </div>
                    </div>
              </div>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a> 
            <a href="#slide3" class="btn btn-circle">❯</a>
          </div>
        </div> 
        
        <div id="slide3" class="carousel-item relative w-full">
          <div class="hero min-h-screen" style="background-image: url('img/tdc-classroom.jpg');">
            <div class="hero-overlay bg-opacity-70 bg-black"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-full">
                        <h1 class="mb-5 font-bold leading-tight [font-size:_clamp(2em,4vw,7em)]">PRODUCING THE BEST DRIVERS <br /> ACROSS THE LAND</h1>
                        <p class="mb-5">Designed to formally educate the growing population rider of our country</p>
                        {{-- <livewire:customer.customer-create /> --}}
                        <div class="btn btn-outline text-white">
                          <a href="#learn-more">Learn More</a>
                        </div>
                    </div>
              </div>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a> 
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
        </div> 
      </div>
      
      {{-- <script>
        $(document).ready(function() {
            const $carouselInner = $('.carousel');
            const $carouselItems = $('.carousel-item');
            let currentIndex = 0;

            function showNextSlide() {
                currentIndex = (currentIndex + 1) % $carouselItems.length;
                const offset = -currentIndex * 100;
                $carouselInner.css('transform', `translateX(${offset}%)`);
            }

            setInterval(showNextSlide, 3000);
        });
      </script> --}}

      {{-- <x-customer-hero-section /> --}}

      {{-- CALENDAR --}}

        {{-- <x-customer-calendar /> --}}

      {{-- CALENDAR --}}
      
      {{-- FEATURED COURSES --}}

        <x-customer-courses />

      {{-- FEATURED COURSES --}} 

      {{-- ABOUT ROOSEVELT --}}

        <x-customer-about />

      {{-- ABOUT ROOSEVELT --}}  

      {{-- CALENDAR --}}

      {{-- <x-customer-calendar /> --}}

      {{-- CALENDAR --}}

      {{-- FAQS --}}
        
        <x-customer-faqs />

      {{-- FAQS --}} 
      
      {{-- Contact Form --}}

        <x-customer-contact-form />

      {{-- Contact Form --}}

      {{-- RATING --}}
      
        <x-customer-rating />

      {{-- RATING --}}  

      {{-- MAP --}}

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.058360643576!2d120.99313067402575!3d14.652628585839942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b59f86e8f281%3A0x57071814d700a71f!2sSolid%20Driving%20School!5e0!3m2!1sen!2sph!4v1710242639496!5m2!1sen!2sph" class="w-full h-4/6" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      {{-- MAP --}}

      {{-- FOOTER --}}

        <x-customer-footer />

      {{-- FOOTER --}}
    </x-guest-layout>
</div>

