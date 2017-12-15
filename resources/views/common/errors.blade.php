<!-- resource/views/common/errors.blade.php -->
<!-- validation error -->
@if (count($errors))
    <div class="alert alert-danger">      
        <strong>@lang('lang.error')</strong>      
        <br/><br/>        
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- database error -->
@if (Session::has('messageDb'))
    <div class="alert alert-danger">      
        <h5>{{ Session::get('messageDb') }}</h5>
        {{ Session::forget('messageDb') }}
    </div>
@endif
