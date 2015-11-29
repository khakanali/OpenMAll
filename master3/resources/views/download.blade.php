@extends("common.default")

@section("content")
<div class="maincontent-area">
    <div class="custom-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @if (Session::has('success'))
                    <div class="alert alert-success" style="margin-top:10px;">
                        {!! Session::get('success') !!}
                    </div>
                    @endif
                </div>
                <div class="col-sm-12">
                    <img class="width-100" src="/images/leather.png" style="width:100%;" />
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="page-title" style="font-weight: normal; font-family: Century gothic;">
                        Download Apps
                    </h2>
                    <div class="col-sm-12 thumbnail download">
                        <div class="col-sm-6 left">
                            <p class="font">Android and IOS</p>
                            <p class="font">Apps are coming soon....</p>
                            <p class="click">
                                <a href="#" class="btn btn-darkgreen btn-round" data-toggle="modal" data-target="#download-app">
                                Click Here</a> to receive email notification.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <img src="/images/downloadappsimac.jpg" class="img-responsive" alt="download" title="download">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::open(array('method'=>'POST','url'=>'downloads','class'=>'form-horizontal')) !!}
            <div class="modal fade custom-model" id="download-app" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" id="myModalLabel">Welcome to OpenSupermall.com</h2>
                            <h5 class="modal-title">For Download App Please Fill Form.</h5>
                        </div>
                        <div class="modal-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {!! $error !!}<br/>
                                @endforeach
                            </div>
                            @endif
                            <div class="form-group">
                                {!! Form::label("full_name", "Full Name:", array('class'=>'col-sm-4 control-label')) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('full_name', Input::old('full_name',false), array('class'=>'form-control','placeholder'=>'Type your name')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label( "contact_number", "Contact Number:", array('class'=>'col-sm-4 control-label')) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('contact_number', Input::old('contact_number',false), array('class'=>'form-control','placeholder'=>'6012-510 5696')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label("email", "Email", array('class'=>'col-sm-4 control-label')) !!}
                                <div class="col-sm-8">
                                    {!! Form::input("email","email", Input::old('old',false), array('class'=>'form-control','id'=>'inputEmail3','placeholder'=>'silver_iceg1@msn.com')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {!! Form::submit('End', array('class'=>'btn btn-green btn-round')) !!}
                        </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('script')
    @parent
    <script type="text/javascript">
        $(document).ready(function() {
            var error = {!! !empty($errors->any()) ? 1 : 0 !!}
            if(error){
                $("#download-app").modal('show');
            }
        });
    </script>
@stop
@stop