
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Employee designation names
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <h3><strong>Basic: </strong>{{ $paygrade->basic }}</h3>
                    <br>
                    <br>
                  <form action="/paygrade/{{$paygrade->id}}/salary/" method="post">
                  <?php 
                  $total_ammount=0;
                  ?>
                       @foreach ($payitems as $item)
                       <span class="col-xs-12">
                       <strong>
                          {{ $item->payitem }} :
                       </strong>
                       <br>
                       <br>
                       </span>
                       <span class="col-xs-6">Exact($)</span>
                       <span class="col-xs-5 col-xs-offset-1">Percent (%) </span>
                       <span class="col-xs-6">                         
                       <input class="form-control exact_input" id="accurate_{{ $item->id }}" data_acccurate="{{ $item->id }}" type="number" value="{{ !empty($salarylist[$item->id])? $salarylist[$item->id]:''}}" name="salarylist[{{$item->id}}]" placeholder="Enter amount">
                        </span>
                        <span class="col-xs-6">
                        <span class="col-xs-1">
                         OR        
                        </span>
                        <span class="col-xs-11">
                        <input class="form-control percent_input" id="percent_{{ $item->id }}" basic_payment="{{ $paygrade->basic }}" data_acccurate="{{ $item->id }}"   value="{{  !empty($salarylist[$item->id])? $salarylist[$item->id]*100/$paygrade->basic :''}}"  placeholder="Enter % amount">
                        </span>
                        </span>
                       <?php 
                        $total_ammount+= !empty($salarylist[$item->id])? $salarylist[$item->id]:'';
                            ?>
                        <hr class="style1">  
                       @endforeach
                    {{ csrf_field() }}
                  <h4><strong>Total ammount: </strong > <span id="total_ammount">{{ $total_ammount }}</span> </h4>
                <button class="btn btn-success">submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>







@endsection
