@extends('app')

@section('content')
<div class="container">
    
    <div class="content-body-ajax">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <p class="fw-normal mb-3"> Question {{ $question_set->id }} </p>

                <p class="fw-normal mb-3"> {!! $question_set->question !!}</p>

                <p class="fw-normal mb-3"> {{ $question_set->question_type }}</p>
            </div> 
        </div>    
        <div class="row justify-content-center mt-1">
            <div class="col-8">
                @foreach($answer_with_options['options'] as $key => $value)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="datavalue" id="inlineCheckbox1{{$key}}" value="{{$key}}">
                    <label class="form-check-label" for="inlineCheckbox1{{$key}}">{{ $value }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-5">
            <button type="button" class="btn btn-secondary btn-submit" data-type="skip">skip</button>
            <button type="button" class="btn btn-secondary btn-submit" data-type="next">next</button>
            </div>
        </div>
    </div>    
</div> 
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> 
 <script>


    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
   
    $('body').on('click','.content-body-ajax .btn-submit',function(e){
  
        e.preventDefault();
        var name = '';

        if($(this).data('type') == 'next'  && $("input[name='datavalue']:checked").val() != undefined) {
            var name = $("input[name=datavalue]:checked").val();
        } else if($(this).data('type') != 'skip') {
            alert('select a choice');
            return false;
        }
        
        $.ajax({
           type:'POST',
           url:"{{ url('/exam/start') }}",
           data:{option_val:name},
           success:function(dataHtml){
              $(".content-body-ajax").html(dataHtml);
              //alert(data.success);
           }
        });
  
    });





       



    });
    </script>

