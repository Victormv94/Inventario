@if(count($errors) > 0)
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <ul>
        @foreach($errors->all() as $error)
        <li>{!! $error !!}</li>
        @endforeach
    </ul>
</div>
@endif