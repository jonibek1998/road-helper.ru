@extends('front.layout')
@section('title', ' - Prices')
@section('content')
<div class="mx-12 my-12">
    <h1 class="text-center mb-6 font-extrabold text-2xl lg:text-4xl">Цены</h1>
    <p>Мы работаем без посредников, поэтому предлагаем самые выгодные цены! Вы можете обратиться к нам за помощью <span class="font-extrabold"> 24/7. </span> Прибудем к вам в течении <span class="font-extrabold">15 минут! </span> Мастер в каждом районе!</p>
<button class="py-4 px-8 bg-blue-600 text-white mt-6">Заказать помощь</button>
</div>

<div>

    <!-- service container -->
           <!-- Root element for center items -->
 <div  class="orderForm flex flex-col opacity-60 top-0 left-0 bg-gray-900 h-full fixed w-full z-10 hidden">
    <!-- Auth Card Container -->
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <!-- Auth Card -->
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
            px-6 py-10 sm:px-10 sm:py-6 
            bg-white  rounded-lg shadow-md lg:shadow-lg">
            <i onclick="closeNav()" style=" font-size: 24px;" class="fas fa-times cursor-pointer text-black"></i>
            <!-- Card Title -->
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Заказать
            </h2>
            @include('front.forms.form2')
        </div>
    </div>
</div>
    <div class="flex flex-wrap  my-10  justify-evenly">
    <div class=" flex-wrap lg:w-3/5 w-full flex-col justify-center items-center mx-4 lg:mx-0 font-thin">
        @foreach ($services as $service)
        <h3 class="text-2xl md:text-3xl lg:text-2xl pt-8 font-extrabold">{{$service->title}}</h3>
            @foreach ($prices as $price)
                @if ($price->service_id == $service->id)
                    <div style="justify-content: center;" class="flex flex-wrap  border-2 bg-white py-4 px-2 lg:px-10 justify-evenly text-center items-center my-6 ">
                        <p class="sm:w-1/3 w-7/12 ">{{$price->title}}</p>
                        <p class='font-extrabold sm:w-1/3 w-7/12'>{{$price->price}}</p>
                        <p onclick="orderFormBtn()" class='sm:w-1/3 w-7/12 price-click text-blue-500 font-bold underline cursor-pointer'>Заказать</p>
                    </div>
                @endif
            @endforeach
        @endforeach

    </div>
    
        <div class=" flex-col bg-blue-600 p-4 text-white py-10 mx-4 lg:mx-0 h-full  lg:w-48 w-full">
            <p>
                Цена озвученная диспетчером, не увеличится на месте работ.
            </p><br>
            <p> При невозможности точно описать проблему диспетчеру, стоимость
                работ определяет мастер.
            </p><br>
            <p>
            Стоимость зависит от сложности и условий 
            проведения работ.
            Вы заплатите на 10-20% меньше средней цены по рынку.
            </p>
        </div>
        
    </div>
</div>
@endsection