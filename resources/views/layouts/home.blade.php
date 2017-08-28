<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>企业网站</title>
    <link rel="stylesheet" href="{{asset('css/home/main.css')}}">
    @yield('style')
</head>
<body>
    {{--公共页头--}}
    <div class="page-header">
        <nav style="background-color: gray;">
            <h3>导航栏</h3>
        </nav>
        <section class="slider">
            <h3>轮播图</h3>
        </section>
    </div>
    {{--主要内容--}}
    <div class="page-content">
        @yield('content')
    </div>
    {{--公共页脚--}}
    <div class="page-footer">
        <h3>页脚</h3>
    </div>
    @yield('script')
</body>
</html>
