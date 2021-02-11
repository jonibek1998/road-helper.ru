@extends('front.layout')
@section('title', ' - Contacts')
@section('content')
<div class="mx-4 lg:mx-24">
    <h1 class="text-center text-xl md:text-2xl py-10 lg:text-4xl font-extrabold">Контакты</h1>
    <p>Звоните нам круглосуточно или оставьте заявку на сайте (скидка при заказе через сайт до 300 рублей)! Наши мастера находятся во всех районах города и во всех пригородах! Будем у вас через 15 минут!</p>
    <div class="py-10 flex items-center justify-between flex-wrap w-10/12">
        <div class="flex items-center justify-between p-2">
            <i class="fas fa-phone-alt pr-2 text-blue-600"></i>
            <a class="hover:text-blue-500" href="tel:+79067031111">+79067031111</a>
        </div>
        <div class="flex items-center justify-between p-2">
            <i class="fas fa-envelope pr-2 text-blue-600"></i>
            <a class="hover:text-blue-500" href="mailto:admin@roadhelper.ru">admin@roadhelper.ru</a>
        </div>
        <div class="flex items-center justify-between p-2">
            <i class="fas fa-clock pr-2 text-blue-600"></i>
            <p>Работаем
                24 часа</p>
        </div>
    </div>
    <p class="pb-24">Ознакомиться со всеми услугами и их стоимостью вы можете на странице <a class="text-blue-500 underline" href="{{route('prices')}}"> цены. </a></p>
</div>
@endsection