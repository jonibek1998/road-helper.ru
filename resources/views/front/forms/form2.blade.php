{{Form::open(['route' => 'subscribe', 'files' => true])}}
<!-- Name Input -->
<input  type="text" placeholder="Ваше имя" name="name"
    class="block w-full py-3 px-1 mt-2 
    text-gray-800 appearance-none 
    bg-gray-200 pl-6
    focus:text-gray-500 focus:outline-none focus:border-gray-200"
    required />
<!-- Number Input -->
<input  type="tel" placeholder="Ваш телефон*" name="tel"
    class="block w-full py-3 px-1 mt-6 mb-4
    text-gray-800 appearance-none 
    bg-gray-200 pl-6
    focus:text-gray-500 focus:outline-none focus:border-gray-200"
    required />
<!-- Text Input -->

<input placeholder="Ваше сообщение" name="text"
    class="block w-full py-3 pb-16 px-1 mt-2 
    text-gray-800 appearance-none 
    bg-gray-200 pl-6
    focus:text-gray-500 focus:outline-none focus:border-gray-200"
    required />
  
<!-- Submit Buttton -->
<button
    class="w-full py-3 mt-10 bg-blue-600 rounded-sm
    font-medium text-white uppercase
    focus:outline-none hover:bg-gray-700 hover:shadow-none">
    Отправить
</button>
{{Form::close()}}