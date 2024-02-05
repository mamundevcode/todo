    @extends('layouts.admin')
    @section('user')
        
        <title>Todo list app</title>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center my-5">
                <div class="h2">All todo</div>
                <a href="" class="btn btn-primary">Add todo</a>
            </div>
            <table class="table table-stripped table-dark">
                <tr>
                    <th>Name</th>
                    <th>Work</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                
                <tr valign="middle">
                    <td>mamma</td>
                    <td>mamma</td>
                    <td>mamma</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">Update</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                
            </table>
        </div>
@endsection