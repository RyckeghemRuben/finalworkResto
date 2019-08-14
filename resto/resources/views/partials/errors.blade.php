@foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert" style="margin-top: 1em;">
        {{ $error  }}
    </div>
@endforeach