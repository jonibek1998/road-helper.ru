@extends('front.layout')
@section('title', ' - Reviews')
@section('content')

<!-- Root element for center items -->
<div class="reviewForm flex flex-col opacity-60 top-0 left-0 bg-gray-900 h-full fixed w-full z-10 hidden">
<!-- Auth Card Container -->
<div class="grid place-items-center mx-2 my-20 sm:my-auto">
    <!-- Auth Card -->
    <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
        px-6 py-10 sm:px-10 sm:py-6 
        bg-white  rounded-lg shadow-md lg:shadow-lg">
        <i onclick="closeReview()" style=" font-size: 24px;" class="fas fa-times cursor-pointer text-black"></i>
        <!-- Card Title -->
        <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
            Оставьте отзыв
        </h2>
        <p class="text-center text-sm lg:text-xl text-gray-800">
            Оставьте ваш отзыв о нашей работе
        </p>
        @include('admin.errors')
        {{Form::open(['route' => 'comments', 'files' => true])}}
            <!-- Name Input -->
            <input  type="text" name="name" placeholder="Ваше имя"
                class="block w-full py-3 px-1 mt-2 
                text-gray-800 appearance-none 
                bg-gray-200 pl-6
                focus:text-gray-500 focus:outline-none focus:border-gray-200"
                 />
                 <br>
                <div class="form-group">
                    <label for="exampleInputFile">Аватар</label>
                    <input type="file" name="avatar" id="exampleInputFile">
        
                </div>
            
            <input placeholder="Ваш отзыв" name="text"
                class="block w-full py-3 pb-16 px-1 mt-2 
                text-gray-800 appearance-none 
                bg-gray-200 pl-6
                focus:text-gray-500 focus:outline-none focus:border-gray-200"
                 />
                
            <!-- Submit Buttton -->
            <button
                class="w-full py-3 mt-10 bg-blue-600 rounded-sm
                font-medium text-white uppercase
                focus:outline-none hover:bg-gray-700 hover:shadow-none">
                Отправить
            </button>
        {{Form::close()}}
    </div>
</div>
</div>


<div class="mx-12 my-12">
<h1 class="text-center mb-6 font-extrabold text-2xl lg:text-4xl">Отзывы наших клиентов</h1>
<p>Мы - дорожим своей репутацией и отвечаем за качество
    выполненных работ! Наша команда опытных профессионалов
    поможет в любой ситуации 24/7! Если вы стали нашим клиентом, 
    то му будем рады вашему отзыву о нашей работе!</p>
<button onclick="reviewBtn()" class="py-4 px-8 bg-blue-600 text-white mt-6">Оставить отзыв</button>
</div>


<div class="flex flex-wrap justify-center px-12">
<div class="owl-carousel owl-theme">
    @foreach ($reviews as $review)
    <div class="item w-2 border-2 border-white shadow-2xl w-full px-4 my-8 lg:p-4">
        <img class="w-16 h-16"  src="https://auto-help-spb.ru/images/feedback-icon.svg" alt="">
        <p class="my-6 h-32 mb-20">{{$review->text}}</p>
        <p class="font-extrabold">{{$review->name}}</p>
        <p>{{$review->getDate()}}</p>
    </div>
    @endforeach

</div>
</div>   
@endsection