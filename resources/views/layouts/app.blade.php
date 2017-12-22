<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ Session::get('webLanguage', config('app.locale')) }}">
    <head>
        <title>@lang('lang.title')</title>
        {{ Html::style('/css/app.css') }}
    </head>
    <body>
        <div style="margin: 10px 0px 20px 1200px;">
            <h4>@lang('lang.language')</h4>
            <a href="/changelanguage/en">{{ trans('lang.eng') }}</a>
            <br/>
            <a href="/changelanguage/vi">{{ trans('lang.vi') }}</a>
        </div>
        <div class="container">
            <nav class="navbar navbar-default"></nav>
        </div>
        @yield('content')
    </body>
</html>
