@extends('front.layout')
@section('content')
     <img style="z-index: -10; background" src="https://auto-help-spb.ru/images/top/index.jpg" class="bg-contain bg-center object-fit absolute" alt="">
     <div class="header font-bold lg:text-5xl md:text-3xl text-xl mt-16 mx-6 md:mx-24">
     <h1 class="text-white">АВТОМОБИЛЬНАЯ ПОМОЩЬ НА ДОРОГЕ
        В МОСКВЕ 
        {{-- <span class="text-orange-600"> 500 РУБЛЕЙ </span> --}}
    </h1>
     </div>
     <ul class="text-sm md:text-lg lg:xl flex-col items-center justify-evenly text-white mt-10 mx-6 md:mx-24">
         <li><i class="fas fa-angle-double-right pr-4 text-orange-600 mt-4"></i>Возникла непредвиденная ситуация с авто?</li>
         <li><i class="fas fa-angle-double-right pr-4 text-orange-600 mt-4"></i>Нужно срочно ехать?</li>
         <li><i class="fas fa-angle-double-right pr-4 text-orange-600 mt-4"></i>Предлагаем любую автопомощь!</li>
         <li><i class="fas fa-angle-double-right pr-4 text-orange-600 mt-4"></i>Приезжаем на место от 15 минут</li>
         <li><i class="fas fa-angle-double-right pr-4 text-orange-600 mt-4"></i>Работаем без посредников</li>
         <button onclick="callMasterBtn()" style="font-size: 16px;font-weight: 700;" class="outline-none mt-16 mb-8 py-4 px-8 bg-blue-600 hover:bg-blue-700  transition duration-200">Вызват мастера
         </button>  
           <!-- Root element for center items -->
 <div class="callMasterForm flex flex-col opacity-60 top-0 left-0 bg-gray-900 h-full fixed w-full z-10 hidden">
     <!-- Auth Card Container -->
     <div class="grid place-items-center mx-2 my-20 sm:my-auto">
         <!-- Auth Card -->
         <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
             px-6 py-10 sm:px-10 sm:py-6 
             bg-white  rounded-lg shadow-md lg:shadow-lg">
             <i onclick="closeNav()" style=" font-size: 24px;" class="fas fa-times cursor-pointer text-black"></i>
             <!-- Card Title -->
             <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                 Вызвать мастера
             </h2>
             @include('front.forms.form2')
         </div>
     </div>
 </div>
     </ul>  
 </div>
 </div>
 </div>
 <div class="h-full w-full bg-white">
 <div class="w-4/5 m-auto flex justify-center text-center flex-wrap items-center">
         <div class=" flex-col items-center justify-evenly my-8 flex mr-12">
             <img src="https://auto-help-spb.ru/images/work-3.png" alt="">
             <h4 class='mt-6 font-extrabold'>Работаем 24 часа в сутки</h4>
             <p class='mt-2'>Приезжаем, чтобы спасти <br>
                 вас из сложной ситуации. <br>
                 Без перерывов  <br>
                 и выходных. </p>
         </div>
         <div class=" my-8 flex mr-12 flex-col items-center justify-evenly">
             <img src="https://auto-help-spb.ru/images/adv-2_1.svg" alt="">
             <h4 class='mt-6 font-extrabold'>Приезжаем за 15 минут</h4>
             <p class='mt-2'>Приезжаем, чтобы спасти <br>
                 вас из сложной ситуации. <br>
                 Без перерывов  <br>
                 и выходных. </p>
         </div>
         <div class=" my-8 flex mr-12 flex-col items-center justify-evenly">
             <img src="https://auto-help-spb.ru/images/adv-3_1.svg" alt="">
             <h4 class='mt-6 font-extrabold'>Фиксированные цены</h4>
             <p class='mt-2'>Приезжаем, чтобы спасти <br>
                 вас из сложной ситуации. <br>
                 Без перерывов  <br>
                 и выходных. </p>
         </div>
         <div class=" my-8 flex flex-col items-center justify-evenly">
             <img src="https://auto-help-spb.ru/images/adv-4_1.svg" alt="">
             <h4 class='mt-6 font-extrabold'>Опыт мастеров - 15 лет</h4>
             <p class='mt-2'>Приезжаем, чтобы спасти <br>
                 вас из сложной ситуации. <br>
                 Без перерывов  <br>
                 и выходных. </p>
         </div>
     </div>
     <div class="pb-16 h-full flex-col bg-blue-700 justify-between items-center mt-10">
         <div>
         <h1 class="text-white text-center text-4xl font-black py-8">Отправляйте фото в мессенджер</h1>
         <div class=" flex justify-evenly items-center text-center font-black flex-wrap">
            <a class="w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200" href="tel:+79067031111"> <div style="display: flex; justify-content: center" class="flex-col items-center justify-center">
                 <img class="h-16" src="https://auto-help-spb.ru/images/section-messangers/whatsapp.png" alt="">
                 <p class="text-sm mt-2">Whats App</p>
             </div></a>
            <a class=" w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200" href="tel:+79067031111"> <div style="display: flex; justify-content: center" class="flex-col items-center justify-center">
                 <img class="h-16" src="https://auto-help-spb.ru/images/section-messangers/viber.png" alt="">
                 <p class="text-sm mt-2">Viber</p>
             </div></a>
            <a class="w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200" href="tel:+79067031111"> <div style="display: flex; justify-content: center" class="flex-col items-center justify-center">
                 <img class="h-16" src="https://auto-help-spb.ru/images/section-messangers/telegram.png" alt="">
                 <p class="text-sm mt-2">Telegram</p>
             </div></a>
            <a class="w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200" href="tel:+79067031111"> <div style="display: flex; justify-content: center" class="flex-col items-center justify-center">
                 <img class="h-16" src="https://auto-help-spb.ru/images/section-messangers/vk.png" alt="">
                 <p class="text-sm mt-2">VK</p>
             </div></a>
         </div>
         <div class="mx-10 md:mx-16 lg:mx-32 flex-col justify-between"> 
         <p class="text-white text-2xl font-thin mt-6">Пришлите фото в мессенжер и получите быстрый расчет стоимости!</p>
         <p class="text-white text-2xl font-thin mt-6">Или оставтьте заявку на сайте</p>
         <button onclick="orderCallBtn()" class="border-2 border-white py-3 px-6 mt-4 text-white text-base font-bold mt-8 hover:bg-white hover:text-blue-700">Оставить заявку</button>
         </div>
 </div>
     </div>
    <div class=" mx-4 lg:mx-16 bg-white py-16">
        <div style="display: flex; justify-content:space-between; align-items:center">
        <div class="md:w-1/2 p-6 w-full">
         <p class="">Как часто бывает, автомобиль ломается в самый неподходящий момент. Не каждый может починить машину самостоятельно, качественно и быстро. Не всегда под рукой окажутся инструменты или запчасти, требуемые для устранения неполадок. Специалисты компании «Автопомощь» в Спб могут исправить большинство поломок на месте.</p>
         <br>
         <p class="">Мы оказываем широкий спектр ремонтных услуг круглосуточно, имеет фиксированные цены, опытных и быстро реагирующих мастеров. Стоимость работы ниже рыночных на 10-20 %. Современные способы связи, с помощью которых можно четко определить объем работы, сокращают время ожидания. В отдельных случаях применяется эвакуация машины до места назначения.</p>
         </div>
         <img class="mt-6 md:w-1/2 w-full" src="https://auto-help-spb.ru/assets/cache_image/images/one/index_585x361_721.jpg" alt="">   
     </div>
     </div>
    <!-- service container -->
           <!-- Root element for center items -->
 <div class="orderForm flex flex-col opacity-60 top-0 left-0 bg-gray-900 h-full fixed w-full z-10 hidden">
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
 <div>
         <h1 class="text-center text-4xl pt-8">Цены на работы</h1>
         <div class="flex flex-wrap  my-10  justify-evenly">
         <div class=" flex-wrap lg:w-3/5 w-full flex-col justify-center items-center mx-4 lg:mx-0 font-thin">
             @foreach ($services as $service)
                <div style="justify-content: center;" class="flex flex-wrap  border-2 bg-white py-4 px-2 lg:px-10 justify-evenly text-center items-center my-6 ">
                    <p class="sm:w-1/3 w-7/12 ">{{$service->title}}</p>
                    <p class='font-extrabold sm:w-1/3 w-7/12'>от {{$service->price}} руб.</p>
                    <p onclick="orderFormBtn()" class='sm:w-1/3 w-7/12 price-click text-blue-500 font-bold underline cursor-pointer'>Заказать</p>
                </div>
             @endforeach
         </div>
         
             <div class=" flex-col bg-blue-600 p-4 text-white py-10 h-full mx-4 lg:mx-0  lg:w-48 w-full">
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
   <!-- service container -->
     <!-- contact container -->
 <div class="bg-blue-600 text-center py-16">
     <div class=" mx-8">
         <h1 class="py-8 text-4xl text-center text-white font-extrabold">Как мы работаем</h1>
         <div class="flex flex-wrap justify-evenly">
         <div class="flex items-center justify-between ml-10 flex-wrap lg:w-1/5 w-full  bg-white flex-col mx-4 mt-8 py-8 px-14 relative hover:shadow-2xl">
             <div class="bg-orange-500 w-16 h-16 absolute right-0 top-0 flex items-center justify-center font-medium text-4xl text-white">01</div>
             <img src="https://auto-help-spb.ru/images/work-1.png" alt="">
             <h4 class="font-bold my-4">Звонок</h4>
             <p>Звоните нам по телефону <br><a class="text-blue-500 font-extrabold cursor-pointer" href="tel:+79067031111">+79067031111</a></p>
         </div>
         <div class="flex items-center justify-between ml-10 flex-wrap lg:w-1/5 w-full bg-white flex-col mx-4 mt-8 py-8 px-14 relative hover:shadow-2xl">
             <div class="bg-orange-500 w-16 h-16 absolute right-0 top-0 flex items-center justify-center font-medium text-4xl text-white">02</div>
             <img src="https://auto-help-spb.ru/images/work-2.png" alt="">
             <h4 class="font-bold my-4">Выезд мастера</h4>
             <p>Наш мастер в кратчайщие сроки приезжает на место</p>
         </div>
         <div class="flex items-center justify-between ml-10 flex-wrap lg:w-1/5 w-full bg-white flex-col mx-4 mt-8 py-8 px-14 relative hover:shadow-2xl">
             <div class="bg-orange-500 w-16 h-16 absolute right-0 top-0 flex items-center justify-center font-medium text-4xl text-white">03</div>
             <img src="https://auto-help-spb.ru/images/work-3.png" alt="">
             <h4 class="font-bold my-4">Ремонт</h4>
             <p>Мастер выполняет все работы быстро и качественно</p>
         </div>
         <div class="flex items-center justify-between ml-10 flex-wrap lg:w-1/5 w-full bg-white flex-col mx-4 mt-8 py-8 px-14 relative hover:shadow-2xl">
             <div class="bg-orange-500 w-16 h-16 absolute right-0 top-0 flex items-center justify-center font-medium text-4xl text-white">04</div>
             <img src="https://auto-help-spb.ru/images/work-4.png" alt="">
             <h4 class="font-bold my-4">Проверка и оплата</h4>
             <p>Вы принимаете и опачиваете работу</p>
         </div>
     </div>
     </div>
 </div>
 <div class=" bg-gray-100 py-12">
     <div class="flex-col flex-wrap mx-4 md:mx-16 lg:mx-24">
         <h1 class="title text-center font-extrabold text-xl md:text-2xl lg:text-4xl py-6">
             Профессиональная автопомощь на дороге
         </h1>
         <div class="flex-row flex-wrap ">
             <div class="flex-col font-thin px-2  w-full">
             <p> 
                 Поломка транспортного средства влечет серьезные последствия и
                 для устранения не стоит пренебрегать помощью автомастера.
             </p><br>
             <p>
                 В работе должны быть четко выполнены мельчайшие детали, чтобы исключить повторные 
                 случаи. Ведь не всегда
                 пользователь может сразу определить возникшую проблему.
             </p> <br>
             </div>
             <div class="flex-col font-thin px-2  w-full">
             <p>
                 Небольшие поломки часто скрывают серьезные нарушения в работе автомобиля, 
                 которые определит только профессионал.
                 Не стоит рисковать, вызов мастера – наилучшее решение для автолюбителя.
             </p><br>
             <p>
                 Звоните нам прямо сейчас +7 (906)703-11-11. Мастера во всех районах!
             </p>
             </div>
         </div>
     </div>
 </div>
 
 <div class="bg-white py-12">
     <div class="flex-col">
         <h1 class="font-extrabold text-4xl text-center py-6">Наши услуги</h1>
         <div class="flex text-center justify-center items-center flex-wrap">
             <div class="owl-carousel owl-theme">
                 @foreach ($services as $service)
                    <div class="item shadow-2xl lg:ml-10 border-2 border-white px-24 md:px-12 my-10 lg:px-8 sm:py-8 hover:border-orange-500"> 
                        <img class='rounded-full' src="{{$service->getImage()}}" alt="">
                        <p class="py-4 h-10 mb-16">{{$service->title}}</p>
                        <p  class=" py-4 font-extrabold text-lg">от {{$service->price}} руб.</p>
                        <button onclick="orderFormBtn()" class="font-extrabold text-blue-500 border-2 border-blue-500 py-2 px-10 hover:bg-blue-500 hover:text-white transition duration-300">Заказать</button>
                    </div>
                 @endforeach
             </div>
         
       
        
     </div>
     </div>
 </div>
 <div class="flex items-center justify-center">
     <img src="https://auto-help-spb.ru/images/form-bg.jpg" class="absolute w-full" alt="">
     <div style="z-index: 3;" class="bg-white  lg:my-10  lg:w-11/12 text-center py-8">
         <h1 class="mt-6 mb-4 font-extrabold text-2xl">Оставьте заявку</h1>
         <p class="pb-4">Можем предложить специальные условия именно для вас!</p>
        @include('front.forms.form4')
     </div>
 </div>
 <!-- Служба техпомощи компании section start -->
 <div class=" bg-gray-100">
     <div class="flex-col mx-4 md:mx-8 lg:mx-12 py-8 flex-wrap">
         <h1 class="text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12">
             Служба техпомощи компании
         </h1>
         <div class="flex mx-4 flex-wrap justify-center">
             <div class="flex-col font-thin text-sm md:text-lg">
             <p> 
                 Специалисты компании имеют многолетний опыт в техническом обслуживании автомобилей различных марок и моделей.
                  Они качественно выполняют следующие работы:
             </p><br>
             <ul class="pl-4">
                 <li class="list-disc"> Вскрытие багажника, капота или автомобиля;</li>
                 <li class="list-disc">Запуск или замену аккумулятора;</li>
                 <li class="list-disc">Устраняют поломки электроники или механические повреждения;</li>
                 <li class="list-disc">Устраняют поломки электроники или механические повреждения;</li>
                 <li class="list-disc">Услуги шиномонтажа (замена, ремонт или подкачка колес);</li>
                 <li class="list-disc">Налаживание работы сигнализации, противоугонных систем;</li>
                 <li class="list-disc">Запуск двигателя;</li>
                 <li class="list-disc">Определение поломки на месте с последующим ее устранением;</li>
                 <li class="list-disc">Проблемы с АКПП.</li>
             </ul>
             <br>
             <p>В компанию можно обратиться, если закончилось топливо или требуется вытащить автомобиль из ямы или кювета,
                  требуется транспортировка транспортного средства, при невозможности техпомощи на дороге.</p>
                  <h1 class="text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12">
                     Способы связи
                 </h1>
                 <p>Чтобы получить быструю помощь на дорогах Спб и области, нужно связаться с диспетчером по телефонам 
                     (позвонить или запросить обратный звонок),
                      обратиться в мессенджер или оставить заявку на </p>
             </div>
             <div class="flex-col font-thin">
             <p>
                 сайте. Для скорого решения проблемы и определения стоимости работ следует приложить фото поломки.
             </p><br>
             <p>
                 Для клиентов доступны WhatsApp, Viber, Telegram, VK. Автомастер озвучит фиксированную цену работы,
                  при спорных вопросах стоимость определяется на месте мастером.
             </p><br>
             <p>В компании всегда найдется выгодное предложение для клиентов, ни одно обращение не останется без внимания.</p>
             <h1 class="text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12">
                 Время важно!
             </h1>
             <p>Непредсказуемые проблемы в работе автомобиля заставляют изменить планы. 
                 Чтобы исключить возможные неудобства, диспетчер подбирает и отправляет на вызов мастера, ближайшего к месту поломки.
                  Грамотные и отлаженные действия сотрудников в кратчайшие сроки устранят поломку.</p><br>
                  <p>В компании работают мастера со стажем более 15 лет, знающие и легко разбирающиеся в современных, классических или эксклюзивных моделях автомобилей любых марок. 
                      Они качественно и быстро окажут техпомощь на дорогах Спб.</p>
                      <br>
                      <p>Перечень предложенных услуг выполняют непосредственно сотрудники, что значительно сокращает время ожидания результата.</p>
             </div>
         </div>
     </div>
 </div>
 <!-- Служба техпомощи компании section end -->
 <!-- Наши работы section start -->
 <div class=" bg-white-100 mx-4 lg:mx-24 md:mx-12 ">
     <h1 class="text-center font-extrabold text-4xl py-12">
         Наши работы
     </h1>
      <div class="flex-col">
         <div class="flex md:grid grid-cols-4 grid-rows-2 gap-8 flex-col flex-wrap py-8" >
             <div class="my-2 md:my-0 col-span-2 cursor-pointer"><img class="object-cover w-full h-full " src="https://auto-help-spb.ru/images/gallery/19/1.jpg" alt=""></div>
             <div class="my-2 md:my-0 cursor-pointer"><img class="object-cover w-full h-full " src="https://auto-help-spb.ru/images/gallery/19/2.jpg" alt=""></div>
             <div class="my-2 md:my-0 row-span-2 cursor-pointer"><img class="object-cover w-full h-full " src="https://auto-help-spb.ru/images/gallery/19/6.jpg" alt=""></div>
             <div class="my-2 md:my-0  cursor-pointer"><img class="object-cover w-full h-full " src="https://auto-help-spb.ru/images/gallery/19/3.jpg" alt=""></div>
             <div class="my-2 md:my-0  cursor-pointer"><img class="object-cover w-full h-full " src="https://auto-help-spb.ru/images/gallery/19/4.jpg" alt=""></div>
             <div class="my-2 md:my-0  cursor-pointer"><img class="object-cover w-full h-full " src="https://auto-help-spb.ru/images/gallery/19/5.jpg" alt=""></div>
         </div>
      </div>
 </div>
@endsection