<div class="pt-10">
    <div class="contact-1 py-4 md:py-12 pt-10">
        <div class="container mx-auto px-4">
          <div class="xl:flex -mx-4">
            <div class="xl:w-10/12 xl:mx-auto px-4">
      
              <div class="xl:w-3/4 mb-4">
                <h1 class="text-3xl text-medium mb-4">We would love to hear from you</h1>
                <p class="text-xl mb-2">Please submit your information and we will get back to you.</p>
                <p>Call us at <a href="tel:+12314561231" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 transition-colors duration-300">+639 53 568 2090</a></p>
              </div>
      
              <div class="md:flex md:-mx-4 mt-4 md:mt-10">
      
                <div class="md:w-2/3 md:px-4">                                
                  <form class="contact-form" id="contact-form" action="{{route('faqs')}}" method="POST">
                    @csrf
                    
                    <div class="sm:flex sm:flex-wrap -mx-3">
                      <div class="sm:w-1/2 px-3 mb-6">
                        <input type="text" placeholder="Full Name" class="border-1 rounded px-3 py-1 w-full border-indigo-400 focus:border-indigo-400 input" value="" name="name">
                      </div>
                      <div class="sm:w-1/2 px-3 mb-6">
                        <input type="number" placeholder="Age" class="border-1 rounded px-3 py-1 w-full border-indigo-400 focus:border-indigo-400 input" value="" name="age">
                      </div>
                      <div class="sm:w-1/2 px-3 mb-6">
                        <input type="email" placeholder="E-mail address" class="border-1 rounded px-3 py-1 w-full border-indigo-400 focus:border-indigo-400 input" value="" name="email">
                      </div>
                      <div class="sm:w-1/2 px-3 mb-6">
                        <input type="number" placeholder="Phone Number" class="border-1 rounded px-3 py-1 w-full border-indigo-400 focus:border-indigo-400 input" value="" name="contact">
                      </div>
                      <div class="sm:w-full px-3">
                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Your message here" class="border-1 rounded px-3 py-1 w-full border-indigo-400 focus:border-indigo-400 input" name="message"></textarea>
                      </div>
                    </div>
                    <div class="text-right mt-4 md:mt-12">
                      <button class="border-2 border-indigo-600 rounded px-6 py-2 text-indigo-600 hover:bg-indigo-600 hover:text-white transition-colors duration-300" type="submit">
                        Send a Message
                        <i class="fas fa-chevron-right ml-2 text-sm"></i>
                      </button>
                    </div>
                  </form>
                </div>
      
                <div class="md:w-1/3 md:px-4 mt-10 md:mt-0">
                  <div class="bg-indigo-100 rounded py-4 px-6">
                    <h5 class="text-xl font-medium mb-3">Help</h5>
                    <p class="text-gray-700 mb-4">Need help or have any query? Don't hesitate, you can directly shoot us an <a href="mailto:" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 inline-block">email</a> or call us at <a href="tel:" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 inline-block">+639 53 568 2090</a></p>
                    <p class="text-gray-700">You can move to <a href="#" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 inline-block">FAQs</a> or <a href="#" class="text-indigo-600 border-b border-transparent hover:border-indigo-600 inline-block">Support</a> page to get more information about our site.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

@if(session()->has('success'))
    <script>
        Swal.fire({
        icon: "success",
        title: "Success",
        text: "You just submit an inquiry!",
        });

        setTimeout(() => {
        window.location.href = '/customer'
        }, 3000);
    </script>
@endif

<style>
  #name-error, #age-error, #email-error, #contact-error, #message-error {
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

    $.validator.addMethod("lettersOnly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z]+$/.test(value);
    }, "Please enter only letters.");

    $('#contact-form').validate({
        rules: {
            name: {required: true, lettersOnly: true},
            age: {required: true,},
            email: {required: true},
            contact: {required: true},
            message: {required: true, lettersOnly: true},
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