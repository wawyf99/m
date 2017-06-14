@extends('Public.header')

@section('sidebar')
这是 master 的侧边栏。
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>