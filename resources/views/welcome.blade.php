        @extends('layouts.main')
        @section('container')

        <div class="scroll-smooth">

            <section class="flex flex-col md:flex-row p-5" style="scroll-behavior: smooth">
    
                <div class="w-full xl:w-1/2 items-center  px-10 md:mx-10 mt-32 flex flex-col">
                    <h1 class="text-white text-2xl sm:text-3xl font-bold pl-10">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis vel, ducimus possimus amet illo sapiente ut facilis eum saepe quasi nulla porro alias, voluptatem."
                    </h1>
    
                    <p class="text-white px-10 py-10 italic">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
    
                    <a href="#hero" class="w-full md:w-32">
    
                        <button class="text-black bg-white font-bold  w-full md:w-32 h-12 hover:bg-gray-500 hover:text-white">
                            Learn More
                        </button>
                    </a>
    
    
    
                </div>
    
                <div class=" w-full xl:w-1/2">
                    <img src="{{ URL('img/space.jpg') }}" alt="" class=" px-10 mt-10 w-full h-full rounded-xl pb-5">
    
                </div>
            </section>
    
            <section id="hero" style="scroll-behavior: smooth">
                <div  class=" bg-white rounded-3xl mx-12 mt-32 md:h-96 flex flex-col md:flex-row" >
                    <div class="w-full xl:w-1/2">
                        <h2 class="text-black font-bold text-3xl items-center justify-center px-10 py-20">
                            Starlink’s high-speed, low-latency service is made possible via the world’s largest constellation of highly advanced satellites operating in a low orbit around the Earth.
    
                        </h2>
                        <button class="bg-black text-white font-bold  w-24 h-10 mx-10 -my-10  hover:bg-gray-700 hover:text-white ">Try Now</button>
    
                    </div>
    
                    <div class="w-full xl:w-1/2">
                        <img src="{{ URL('img/graph2.png') }}" alt="" class="w-full items-center h-full">
    
                    </div>
    
                </div>
    
            
            </section>
        </div>
        @endsection
       