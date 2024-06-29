@if(Session::has('message-info'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <strong>Info</strong>{!! Session::get('message-info') !!}
</div>
@endif