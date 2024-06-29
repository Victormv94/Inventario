@if(Session::has('message-danger'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <strong>Error</strong>{!! Session::get('message-danger') !!}
</div>
@endif