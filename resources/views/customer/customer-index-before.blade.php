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

        <x-customer-hero-section />
      
      {{-- HERO SECTION --}}

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

