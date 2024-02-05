    @extends('layouts.admin')
    @section('content')

     <title>Todo list app</title>
      <div class="container">
          <div class="d-flex justify-content-between align-items-center my-5">
              <div class="h2">Add todo</div>
              <a href="{{url('dashboard/todo')}}" class="btn btn-primary">Back</a>
          </div>
          <div class="card">
            <div class="card-body">
              <form action="{{route('todo.insert')}}" method="post">
                @csrf
                <label for="" calss="form-label m-4">Name</label>
                <input type="text" name="name" class="form-control">
                <div class="div text-danger">
                  @error('name')
                      {{$message}}
                  @enderror
                </div>
                <label for="" calss="form-label m-4">Work</label>
                <input type="text" name="work" class="form-control">
                <div class="div text-danger">
                  @error('work')
                      {{$message}}
                  @enderror
                </div>
                <label for="" calss="form-label m-4">Date</label>
                <input type="date" name="date" class="form-control">
                <div class="div text-danger">
                  @error('date')
                      {{$message}}
                  @enderror
                </div>
                <label for="" calss="form-label m-4">Email</label>
                <input type="text" name="email" class="form-control">
                <div class="div text-danger">
                  @error('email')
                      {{$message}}
                  @enderror
                </div>
                <button class="btn btn-primary m-4">Add Todo</button>
              </form>
            </div>
          </div>
      </div>
      @endsection