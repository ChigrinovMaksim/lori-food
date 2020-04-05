<link rel="stylesheet" href="{{ url('css/callback.css') }}">
<script type="text/javascript" src="{{ url('js/callback.js') }}"></script>


<button type="button" class="phone_img" data-toggle="modal" data-target="#exampleModal">
    <img src="images/phone.png" alt="" class="phone_img">
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><input type="text" placeholder="Ваше имя" class="input_modal_name"></p>
                <p><input type="tel" name="tel" placeholder="Ваш телефон" class="input_modal_phone"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>