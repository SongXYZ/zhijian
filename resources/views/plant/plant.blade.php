@extends('home')

@section('content')
    <table class="table table-striped table-hover">
        <tr>
            <th>名称</th>
            <th>别称</th>
            <th>养护知识</th>
            <th>形态特征</th>
            <th>百科信息</th>
        </tr>
        @foreach ($plants as $plant)
            <tr>
                <td>{{ $plant->pname }}</td>
                <td>{{ $plant->alias }}</td>
                <td>{{ str_limit($plant->careknowledge, 100, '...') }}</td>
                <td>{{ str_limit($plant->feature, 100, '...') }}</td>
                <td>{{ str_limit($plant->des, 100, '...') }}</td>
            </tr>	
        @endforeach             
    </table>　
    <a class="btn btn-danger" href="#">上一页</a> 
    <a class="btn btn-danger" href="#">下一页</a>
@endsection
