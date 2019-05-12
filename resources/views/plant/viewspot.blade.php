@extends('home')

@section('content')
    <table class="table table-striped table-hover">
        <tr>
            <th>景点名称</th>
            <th>城市</th>
            <th>地址</th>
            <th>描述</th>
            <th>开放时间</th>
            <th>票价</th>
            <th>交通指导</th>
        </tr>
        @foreach ($viewspots as $vs)
            <tr>
                <td>{{ $vs->destname }}</td>
                <td>{{ $vs->city }}</td>
                <td>{{ str_limit($vs->address, 100, '...') }}</td>
                <td>{{ str_limit($vs->summarydesc, 100, '...') }}</td>
                <td>{{ str_limit($vs->openinghours, 100, '...') }}</td>
                <td>{{ $vs->ticket }}</td>
                <td>{{ str_limit($vs->trafficguide, 100, '...') }}</td>
            </tr>	
        @endforeach             
    </table>
    <a class="btn btn-danger" href="#">上一页</a> 
    <a class="btn btn-danger" href="#">下一页</a>
@endsection
