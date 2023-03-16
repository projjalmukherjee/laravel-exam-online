@extends('app')

@section('content')
<div class="container">
   
    <div class="row justify-content-center mt-5">
        <div class="col-8">
              <form action="{{ url('/exam') }}">
                <div class="form-group mb-3">
                  <label for="exampleInput">Enter Name</label>
                  <input type="text" name="student_name" class="form-control" id="exampleInput" aria-describedby="textHelp" placeholder="Enter Name" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </div>
</div>
@endsection