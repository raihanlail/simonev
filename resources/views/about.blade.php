@extends('layouts.main')
@section('container')


<h1 class="text-white items-center justify-center text-4xl font-extrabold m-10">
    ABOUT US
</h1>
<section class="flex flex-col md:flex-row m-10">
    <div class="w-full md:w-1/2 text-white p-5">
        <h2 class="font-bold justify-center text-3xl pb-10">
            Starlink provides high-speed, low-latency broadband internet across the globe. Within each coverage area, orders are fulfilled on a first-come, first-served basis.

        </h2>

        <button class="w-full md:w-32 h-12 bg-white text-black font-bold hover:bg-gray-500 ">
            Order Now

        </button>
       

    </div>

    <div class="w-full md:w-1/2 text-white p-5">
        <img src="{{ URL('img/starlink.jpg') }}" alt="" class="w-full">

    </div>

</section>

<section class="flex flex-col md:flex-row">
    <div class="m-10 ">
        <div class="w-full md:w-1/2">
            
        <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
         <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
            <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[124px] rounded-l-lg"></div>
         <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[178px] rounded-l-lg"></div>
            <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[17px] top-[142px] rounded-r-lg"></div>
            <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-light.png" class="dark:hidden w-[272px] h-[572px]" alt="">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-dark.png" class="hidden dark:block w-[272px] h-[572px]" alt="">
         </div>


         
    </div>
  </div>

  <div class="w-full md:w-1/2">
    <h2 class="font-bold text-white justify-center text-3xl pb-10">
        We covered 100+ countries, 500+ states, 1000+ cities, and of course billions of people with our connections.

    </h2>


 </div>

</section>

@endsection