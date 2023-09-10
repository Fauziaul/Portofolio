@extends('layouts.frontLayout')


    <section class="text-gray-600 body-font">
      <div
        class="container mx-auto flex px-5 py-24 items-center justify-center flex-col"
      >
      <div class="image mx-auto">
          <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10" 
          src="{{ asset('image/thankyou.png') }}" 
          alt="avatar">
      </div>

        <div class="text-center lg:w-2/3 w-full">
          <h1
            class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"
          >
            Thank you for contacting us
          </h1>
          <p class="mb-8 leading-relaxed">
            Please check your email in 24 hours we will send you a reply as soon
            as possible. Thanks
          </p>
          <div class="flex justify-center">

          <!-- BTN BACK  -->
            <div class="form-button">
              <a href="{{ route('/') }}" class="btn">Back</a>
            </div>

                            
          </div>
            
        </div>
      </div>
    </section>

</div>


