@extends('layouts.template')

@section('content')

   <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Survey Result</h2>
          
          @foreach($details as $detail)
          <div class="row">
          <div class="col-lg-12">
          <div class="box wow fadeInLeft">
            <div class="form-row" >
              <div class="form-group col-md-3" >
               <b>Details : </b> 
              </div>
              <div class="form-group col-md-3" >
               <b>{{ $detail['student']['name'] }}</b>  
              </div>
              <div class="form-group col-md-3" >
              {{ $detail['student']['dept'] }}
              </div>
              <div class="form-group col-md-3" >
               {{ $detail['student']['batch'] }}
              </div>  
           </div> 
           <hr>
           <div class="form-row" >
           	@foreach($detail['answer'] as $key => $value)
              <div class="form-group col-md-6" >
               <b>{{ $question[$key] }} </b> 
              </div>
              <div class="form-group col-md-6" >
               {{ $value }}  
              </div>
              @endforeach
           </div> 
         </div> </div> </div>
          @endforeach





        </div>
    </div>
</section>

@endsection