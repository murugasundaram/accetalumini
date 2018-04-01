@extends('layouts.template')

@section('content')

   <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Feedbacks</h2>
          
          @foreach($feedbacks as $detail)
          <div class="row">
          <div class="col-lg-12">
          <div class="box wow fadeInLeft">
            <div class="form-row" >
              <div class="form-group col-md-3" >
               <b>Name : </b> 
              </div>
              <div class="form-group col-md-3" >
               {{ $detail->name }}  
              </div>
              <div class="form-group col-md-3" >
              <b>Email :</b>
              </div>
              <div class="form-group col-md-3" >
              {{ $detail->email }} 
              </div>  
              <div class="form-group col-md-12" >
              <b>Message :</b>
              </div>
              <div class="form-group col-md-12" >
              {{ $detail->msg }} 
              </div>
           </div> 
           <hr> 
         </div> </div> </div>
          @endforeach





        </div>
    </div>
</section>

@endsection