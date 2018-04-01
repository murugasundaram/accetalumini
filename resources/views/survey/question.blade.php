@extends('layouts.template')

@section('content')
<style type="text/css">
  textarea {
    height: 50px;
    resize: none;
  }
  .homebtn {
    background: #50d8af;
    border: 0;
    border-radius: 3px;
    padding: 10px 30px;
    color: #fff;
    transition: 0.4s;
    cursor: pointer;
  }
  .homebtn:hover {
    background: none;
    color: #50d8af;
    border: 2px solid #50d8af;
    border-radius: 3px;
    padding: 10px 30px;
   
    transition: 0.4s;
    cursor: pointer;
  }
</style>
   <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Survey</h2>
          <p>Happy that you are here! Your response for the following questions will help us to take this forward for fellow students welfare. </p>
        </div>

        @if(isset($name))
          <div class="row">
          <div class="col-lg-12">
            <div class="box wow fadeInLeft">
              <!-- <div class="icon"><i class="fas fa-smile"></i></div> -->
            <div class="form-row" style="text-align: center;">
              <div class="form-group col-md-12" >
               <b> Thank you <span style="color: #50d8af;"> {{ $name }} </span>, for your valuable time. Together we will bring a change! </b>
              </div>
              <div class="form-group col-md-12" style="text-align: center;margin-top: 10px">
              <a class="homebtn" href="{{ asset('/') }}">Go to Home</a>
            </div></div>
            </div> </div> </div>
        @else
       <form action="" method="post" >
      {{ csrf_field() }}
       
        <div class="row">
          <div class="col-lg-12">
            <div class="box wow fadeInLeft">
              <!-- <div class="icon"><i class="fas fa-smile"></i></div> -->
              <h4 class="title" style="margin-left: 0px"><a href="">Please Provide Your Informations</a></h4>
             
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name (eg: Kannan)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" name="dept" class="form-control" id="name" placeholder="Your Department (eg: Mechanical)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" name="batch" class="form-control" id="name" placeholder="Your Batch (eg. 2nd Year or 2020 passedout bacth)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validation"></div>
              </div>
            </div>
         
              <p class="" style="margin-left: 0px;text-align: center;">We never share above info with anyone.</p>
            </div>

            <div class="box wow fadeInLeft">
              <!-- <div class="icon"><i class="fas fa-smile"></i></div> -->
              <h4 class="title" style="margin-left: 0px"><a href="">Survey is here</a></h4>


              <div class="form-row">
               <div class="form-group col-md-12">
                <b> Are you satisfied with ACCET? </b>
              </div>
              <div class="form-group col-md-12">
                <span style="padding-left: 5%"> <input type="radio" value="yes" name="ques[q1]"> Yes </span>
                <span style="padding-left: 5%"> <input type="radio" value="no" name="ques[q1]"> No  </span>
              </div>
            </div>

            <div class="form-row">
               <div class="form-group col-md-12">
                <b> Are you ok with the name change of ACCET to ACGCET? </b>
              </div>
              <div class="form-group col-md-12">
                <span style="padding-left: 5%"> <input type="radio" value="yes" name="ques[q2]"> Yes </span>
                <span style="padding-left: 5%"> <input type="radio" value="no" name="ques[q2]"> No  </span>
              </div>
            </div>

            <div class="form-row">
               <div class="form-group col-md-12">
                <b> Do you have any backlogs? </b>
              </div>
              <div class="form-group col-md-12">
                <span style="padding-left: 5%"> <input type="radio" value="yes" name="ques[q3]"> Yes </span>
                <span style="padding-left: 5%"> <input type="radio" value="no" name="ques[q3]"> No  </span>
              </div>
            </div>

            <div class="form-row">
               <div class="form-group col-md-12">
                <b> Have you participated in thiran? </b>
              </div>
              <div class="form-group col-md-12">
                <span style="padding-left: 5%"> <input type="radio" value="yes" name="ques[q4]"> Yes </span>
                <span style="padding-left: 5%"> <input type="radio" value="no" name="ques[q4]"> No  </span>
              </div>
            </div>

            <div class="form-row">
               <div class="form-group col-md-12">
                <b> Are you interested on theory or practical? </b>
              </div>
              <div class="form-group col-md-12">
                <span style="padding-left: 5%"> <input type="radio" value="theory" name="ques[q5]"> Theory </span>
                <span style="padding-left: 5%"> <input type="radio" value="practical" name="ques[q5]"> Practical  </span>
              </div>
            </div>

              <div class="form-row">
               <div class="form-group col-md-12">
                <b> Have you ever visited a library? </b>
              </div>
              <div class="form-group col-md-12">
                <span style="padding-left: 5%"> <input type="radio" value="yes" name="ques[q6]"> Yes </span>
                <span style="padding-left: 5%"> <input type="radio" value="no" name="ques[q6]"> No  </span>
              </div>
            </div>

            <div class="form-row">
               <div class="form-group col-md-12">
                <b> What is your plan, after B.E? </b>
              </div>
              <div class="form-group col-md-12">
                <span style="padding-left: 5%"> <input type="radio" value="job" name="ques[q7]"> Job </span>
                <span style="padding-left: 5%"> <input type="radio" value="studies" name="ques[q7]"> Higher studies  </span>
              </div>
            </div>

            <div class="form-row">
               <div class="form-group col-md-12">
                <b> Are you aware of ACCET placement stats? </b>
              </div>
              <div class="form-group col-md-12">
                <span style="padding-left: 5%"> <input type="radio" value="yes" name="ques[q8]"> Yes </span>
                <span style="padding-left: 5%"> <input type="radio" value="no" name="ques[q8]"> No  </span>
              </div>
            </div>
             
            <div class="form-row">
              <div class="form-group col-md-12">
                <b> Why ACCET? </b>
              </div>
              <div class="form-group col-md-12">
                 <textarea class="form-control" name="ques[q9]" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              </div>
            </div>
               <div class="form-row">
              <div class="form-group col-md-12">
                <b> What missing in ACCET? </b>
              </div>
              <div class="form-group col-md-12">
                 <textarea class="form-control" name="ques[q10]" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-12">
                <b> What is your expectation from Alumni? </b>
              </div>
              <div class="form-group col-md-12">
                 <textarea class="form-control" name="ques[q11]" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <b> What would make ACCET an asset for India? </b>
              </div>
              <div class="form-group col-md-12">
                 <textarea class="form-control" name="ques[q12]" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12">
                <b> What are the daily problems faced in ACCET? </b>
              </div>
              <div class="form-group col-md-12">
                 <textarea class="form-control" name="ques[q13]" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              </div>
            </div>

          <div class="form-row">
              <div class="form-group col-md-12">
                <input style="float: right;" type="submit" name="survey-submit" id="survey-btn" value="Submit">
              </div>
            </div>
           
            </div>
          </div>

        </div>
 </form>
 @endif
      </div>
    </section>
@endsection