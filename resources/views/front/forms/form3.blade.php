@include('admin.errors')
{{Form::open(['route' => 'subscribe', 'files' => true])}}
    <input class="bg-gray-300 w-96 md:w-1/2 mt-4 p-2" name="name" type="text" placeholder="Ваше имя" />
    <input class="bg-gray-300 w-96 md:w-1/2 mt-4 p-2" name="tel" type="phone" placeholder="Ваш телефон*" />
    <textarea class="bg-gray-300 w-96 md:w-1/2 mt-4 p-2" name="text" cols="30" rows="10" placeholder="Комментарий"></textarea>
    <div class="flex text-center justify-center items-center cursor-pointer">
    <input class="hidden" type="file" name="photo" id="upload">
    <label class="cursor-pointer" for="upload"><i class="fas fa-paperclip mr-2 cursor-pointer"></i>Прикрепить фото</label>
    </div>
    <button class="cursor-pointer w-96 md:w-1/2 bg-blue-700 text-white mt-2 hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none">Узнать стоимость</button>
    </div>
{{Form::close()}}