@extends("common.default")

@section("content")

    <div class="row">

        <div class="col-sm-12 text-center">
            <img alt="Profile Logo" src="images/Al-halabi.jpg" width="100%">
        </div>
        <div class="clearfix"></div>
    </div>

    <section class="oshop-certificate-body">

        <div class="profile-setting-navigation">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#profile-setting-navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand hidden" href="#"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="profile-setting-navbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/profilesettingaboutus">About</a></li>
                            <li><a href="/profilesettingcertificate">Certificate</a></li>
                            <li><a href="#">Supplier</a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="btn btn-green"><i class="fa fa-lg fa-link"></i> AutoLink</a></li>
                            <li><a href="#"><strong><em>OFFICIAL SHOP</em></strong></a></li>
                            <li><a href="#"><img src="images/flag.png" width="100%" alt="flag"></a></li>
                            <li><a href="#" class="btn btn-pink">Like</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>


        <div class="oshop-certificate-content"><!--Begin main cotainer-->
            <div class="container">

                <div class="row nopadding padding-inner">
                    <?php $numItems = count($certificates); $i = 0; ?>
                    @foreach($certificates as $certificate)

                        <div class="col-md-2">
                            <img src="images/{{ $certificate->cert_logo }}" alt="Lorem Ipsum" width="100%"/>
                        </div>
                        <div class="col-md-10 nopadding">
                            <div class="padding-top-30">
                                <h4 class="padding-top-10">{{ $certificate->name }} </h4><br/>
                                <span class="fontStyle">{{ $certificate->awarded }}</span>
                                <p class="padding-top-10">
                                    *{{ $certificate->description }}.
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        @if(++$i !== $numItems)
                                <div class="col-md-12"><hr /></div>
                        @endif

                    @endforeach

                </div>
            </div>
        </div><!--End main cotainer-->
    </section>

@stop