<div {{$attributes(['class'=>" p-3 flex flex-col md:flex-row lg:flex-col  items-center text-center space-y-2   max-w-[450px] md:max-w-full xl:max-w-[400px] gap-5 test"])}}>
    <div class="max-w-[400px] border-2 border-mainColor bs-img--dark">

        <img src="{{$src}}" alt="" class="w-full order">
    </div>
    <div class="space-y-3 ">

        <h3 class="text-2xl font-semibold text-mainColor">{{$heading}}</h3>
        <p >{{$slot}}</p>
    </div>
    </div>


   