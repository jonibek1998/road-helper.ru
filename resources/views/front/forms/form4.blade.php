@include('admin.errors')
{{Form::open(['route' => 'subscribe', 'files' => true, 'class' => 'flex lg:full  flex-wrap justify-evenly items-center'])}}
<input class="bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4" name="name" type="text" placeholder="Ваше имя">
<input class="bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4" name="tel" type="tel" placeholder="Ваш телефон*">
<div class="flex flex-wrap items-center justify-center lg:w-1/4">
   <button class="cursor-pointer w-96 md:w-1/2 bg-blue-700 text-white mt-2 hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none">Узнать стоимость</button>
<input class="hidden" type="file" name="photo" id="file">
<label class="w-9/12 sm:w-full cursor-pointer mt-4 lg:mt-0" for="file"><i class="fas fa-paperclip mr-2"></i>Прикрепить фото</label>
</div>
{{Form::close()}}