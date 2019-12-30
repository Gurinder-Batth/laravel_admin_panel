@if(session()->has('success'))
<div class="tile quick-med">
    <div class="alert alert-success quicksand">
        <strong>{{session()->get('success')}}</strong>
    </div>
</div>
@endif

@if(session()->has('unsuccess'))
<div class="tile quick-med">
<div class="alert alert-danger quicksand">
    <strong>{{session()->get('unsuccess')}}</strong>
</div>
</div>
@endif


@if($errors->any())
<div class="tile quick-med">
<div class="alert alert-danger quicksand">
    <strong>{{$errors->first()}}</strong>
</div>
</div>
@endif