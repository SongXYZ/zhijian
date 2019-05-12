@extends('home')

@section('content')
    <table class="table table-striped table-hover">
        <tr>
            <th>内容</th>
            <th>时间</th>
        </tr>
        @foreach ($discuss as $dc)
            <tr>
                <td>{{ str_limit($dc->content, 100, '...') }}</td>
                <td>{{ $dc->discusstime }}</td>
        @endforeach             
    </table>　
    <a class="btn btn-danger" href="#">上一页</a> 
    <a class="btn btn-danger" href="#">下一页</a>
@endsection
