@include('admin.errors')
{{Form::open(['route' => 'subscribe', 'files' => true])}}
    <input class="bg-gray-300 w-96 md:w-1/2 mt-4 p-2" name="name" type="text" placeholder="Ваше имя" />
    <input class="bg-gray-300 w-96 md:w-1/2 mt-4 p-2" name="tel" type="phone" placeholder="Ваш телефон*" />
    <textarea class="bg-gray-300 w-96 md:w-1/2 mt-4 p-2" name="text" cols="30" rows="10" placeholder="Комментарий"></textarea>
    <div class="flex text-center justify-center items-center cursor-pointer">
    <input class="hidden" type="file" name="photo" id="upload">
    <label class="cursor-pointer" for="upload"><i class="fas fa-paperclip mr-2 cursor-pointer"></i>Прикрепить фото</label>
    </div>
    {{-- <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Captcha</label>
        <div class="col-md-6">
            {!! app('captcha')->display() !!}
            @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
            @endif
        </div>
    </div> --}}
    <div class="form-group">
        <label for="captcha" class="col-md-4 control-label">Captcha</label>
        <div class="col-md-6">
            <div class="captcha">
                <span class="w-96 md:w-1/2 mt-4 p-2 center">{!! captcha_img('math') !!}</span>
                <button type="button" name="captcha" class="cursor-pointer w-48 md:w-1/4 bg-blue-700 text-white mt-2 hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none btn-refresh">Refresh</button>
            </div>
            <input type="text" name="captcha" class="bg-gray-300 w-96 md:w-1/2 mt-4 p-2" id="captcha" placeholder="enter recaptcha">
            @if ($errors->has('captcha'))
                <span class="help-block">
                    <strong class="text-red">{{ $errors->first('captcha') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <button class="cursor-pointer w-96 md:w-1/2 bg-blue-700 text-white mt-2 hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none">Узнать стоимость</button>
    </div>
{{Form::close()}}