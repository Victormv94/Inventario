@if(Session::has('message-success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <strong>Completado</strong>{!! Session::get('message-success') !!}
</div>
@endif