@extends('layout.main')
@push('head')
  <title>Todo list app</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Update Todo</div>
        <a href="" class="btn btn-primary">Back</a>
    </div>
    <div class="card">
      <div class="card-body">
        <form action="" method="post">
          @csrf
          <label for="" calss="form-label m-4">Name</label>
          <input type="text" name="name" class="form-control" value="">
          <label for="" calss="form-label m-4">Work</label>
          <input type="text" name="name" class="form-control" value="">
          <label for="" calss="form-label m-4">Date</label>
          <input type="date" name="name" class="form-control" value="">
        </form>
      </div>
    </div>
</div>
@endsection