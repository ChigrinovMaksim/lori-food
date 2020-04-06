{!! Html::style('css/callback.css') !!}
{!! Html::script('js/callback.js') !!}

<div class="callback-button" data-toggle="modal" data-dismiss="modal" data-tooltip="tooltip" title="" data-target="#callback" data-original-title="Обратный звонок">
    <img src="images/phone.jpeg" alt="" class="phone_img">
</div>

<!-- Modal Callback -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="callback" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-callback">
            <div class="close-login-modal" data-dismiss="modal" aria-label="Close"></div>
            <div class="modal-body">
                {!! Form::open(['route' => 'post::callback', 'method' => 'POST', 'id' => 'callback_from']) !!}
                {!! csrf_field() !!}

                <div class="modal-callback-name">
                    {!! Form::text('callback_name', old('callback_name'), ['class' => 'form-control', 'placeholder' => 'Ваше имя', 'onkeyup' => 'validateField(this, 2, "Имя должно быть больше двух символов!")']) !!}
                </div>

                <div class="modal-callback-name">
                    {!! Form::text('callback_phone', old('callback_phone'), ['class' => 'form-control user-phone', 'placeholder' => 'Телефон', 'onkeyup' => 'validateField(this, 19, "Введите телефон полностью!")']) !!}
                </div>

                <div class="modal-callback-button">
                    {!! Form::button('Позвоните мне!', ['class' => 'btn btn-success callback-submit', 'onclick' => 'sendCallbackRequest("callback")']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>