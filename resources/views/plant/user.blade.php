@extends('home')

@section('content')
    <table class="table table-striped table-hover">
        <tr>
        <th>uname</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->uname }}</td>
                <!-- <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td>Dec 12, 2016</td>
                <td>
                    <a class="btn btn-default" href="edit.html">Edit</a> 
                    <a class="btn btn-danger" href="#">Delete</a>
                </td> -->
            </tr>	
        @endforeach                       
    </table>
    <a class="btn btn-danger" href="#">上一页</a> 
    <a class="btn btn-danger" href="#">下一页</a>
@endsection
