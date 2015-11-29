@extends('common.default')
@section('content')
  @section('style')
    <style>
      .has-error .form-control {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      }
    </style>
  @stop

<div class="container">

  <div class="section-heading">
    <h2>Advertise With Us</h2>
  </div>
  <div class="section-content advertise-withus">
    @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          {!! $error !!}<br/>
        @endforeach
      </div>
    @endif
    @if (Session::has("success"))
      <div class="alert alert-success">
          {!! Session::get("success") !!}
      </div>
    @endif
    <div class="form-section">
      <div class="form-section-heading">
        Create Your Own
      </div><!-- form-section-heading end -->
      <div class="form-section-heading-two">
        O-Shop
      </div><!-- form-section-heading-two end -->
      <div class="form-section-top-button">
        <a href="javascript:;;">Get Started</a>
      </div><!-- form-section-top-button end -->
      <div class="form-section-heading-three">
        Get our designer to help you design your O-shop
      </div><!-- form-section-heading-three -->
      {!! Form::open(array('method'=>'POST','url'=>'advertise','class'=>'form-horizontal','id'=>'register-form')) !!}
        <div class="form">
          <div class="section-1">
            <div class="pull-left class-left">
              <span>Full Name:</span>
            </div>
            <div class="pull-right col-sm-8 class-right">
              {!! Form::text("name", Input::old('name',false), array("class"=>"col-sm-12","placeholder"=>"Type your full name ","onblur"=>"validate()")) !!}
            </div>
            <div class="clearfix"></div>
          </div><!-- section-1 end-->
          <div class="section-2">
            <div class="pull-left class-left">
              <span>Contact Number:</span>
            </div>
            <div class="pull-right col-sm-8 class-right">
              {!! Form::text("phone", Input::old('phone',false), array("class"=>"col-sm-12","placeholder"=>"Type your contact number","onblur"=>"validate()")) !!}
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="clearfix"></div>
          </div><!-- section-1 end-->
          <div class="section-3">
            <div class="pull-left class-left">
              <span>Email:</span>
            </div>
            <div class="pull-right col-sm-8 class-right">
              {!! Form::text("email", Input::old('email',false), array("class"=>"col-sm-12","placeholder"=>"Type your email","onblur"=>"validate()","data-error"=>"Bruh, that email address is invalid")) !!}
            </div>
            <div class="clearfix"></div>
          </div><!-- section-1 end-->
          <div class="section-3">
            <div class="pull-left class-right-email">
              <strong> Email:qiaohua.intermedius@gmail.com</strong>
            </div>
            <div class="pull-right adjust-margin form-section-top-button   class-right-button">
              <button type="submit">Send Request</button>
            </div>
            <div class="clearfix"></div>
          </div><!-- section-1 end-->
        </div><!-- form class end-->
      {!! Form::close() !!}<!-- form end-->
    </div><!-- form-section end -->
    <div class="background"></div>
  </div><!-- section-content end -->
</div><!-- container end -->

@stop
@section('script')
@parent
  <script>
      $(function() {

      // Setup form validation on the #register-form element
      $("#register-form").validate({

          // Specify the validation rules
          rules: {
              inputName: "required",
                         inputEmail: {
                  required: true,
                  email: true
              },
              inputTwitter: {
                  required: true,
                  phone: true
              }

          },
             // Specify the validation error messages
          messages: {
              inputName: "Please enter your name",
              inputTwitter: "Please specify your Phone Number",
              inputEmail: "Please enter a valid email address",
          },
          submitHandler: function(form) {
              form.submit();
          }
      });

    });
  </script>
@stop
