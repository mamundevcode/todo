    @extends('layouts.admin')
    @section('content')
        
        <title>Todo list app</title>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center my-5">
                <div class="h2">All todo</div>
                <a href="{{url('dashboard/todo/add')}}" class="btn btn-primary">Add todo</a>
            </div>
            <table class="table table-stripped table-dark">
                <tr>
                    <th>Name</th>
                    <th>Work</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $row)
                <tr valign="middle">
                    <td>{{$row->name}}</td>
                    <td>{{$row->work}}</td>
                    <td>{{$row->date}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                        <a href="{{url('dashboard/todo/edit')}}" class="btn btn-success btn-sm">Update</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
@endsection