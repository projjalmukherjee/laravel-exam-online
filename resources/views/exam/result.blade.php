@extends('app')

@section('content')


<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">result</h5>
        
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
         Correct Answer 
          <span class="badge bg-primary rounded-pill">{{$result->student_correct_ans}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Wrong Answer
          <span class="badge bg-primary rounded-pill">{{$result->student_wrong_ans}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Skp Answer
          <span class="badge bg-primary rounded-pill">{{$result->student_skip_ans}}</span>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-primary" onclick="document.location.href = '{{url('/exam')}}'">Return home</button>
  </div>

@endsection