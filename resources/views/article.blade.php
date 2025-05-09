@extends('layouts.app')
@section('title', 'Article insert page')

@section('content')
 <div class="container">
  <div class="row mt-5">
    <div class="col d-flex justify-content-center">
      <div class="card">
        
       
        <div class="card-header" style="background-color: #9cc483;">
          <h4 class="mb-0 text-white">Add Article</h4>
        </div>
        
        <div class="card-body">
          <form action="{{route('adding')}}" method="POST">@csrf
            <div class="row mb-3">
              
              <div class="col">
                <label for="title" class="form-label">Title</label>
                <input
                  type="text"
                  id="title"
                  name="title"
                  class="form-control"
                  placeholder="Enter article title"
                >
                @error('title')
                     <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              
              <div class="col">
                <label for="category" class="form-label">Category</label>
                <input
                  type="text"
                  id="category"
                  name="category"
                  class="form-control"
                  placeholder="Enter category"
                   >
                  @error('category')
                     <small class="text-danger">{{ $message }}</small>
                  @enderror
              </div>
              
            </div>
            
            <div class="row mb-3">
              
              <div class="col">
                <label for="description" class="form-label">Description</label>
                <textarea
                  id="description"
                  name="description"
                  class="form-control"
                  rows="3"
                  placeholder="Enter description"
                ></textarea>
              </div>
              
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
 </div>
@endsection