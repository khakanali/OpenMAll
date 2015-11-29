@extends('common.default')

@section('content')


    <div class="maincontent-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="images/Buyerregistration.png" title="banner" class="img-responsive">
                </div>
                <div class="col-sm-12">
                    <h2 class="page-title">Search Results</h2>

                @if(isset($search_key_word))
                    {{$search_key_word}}
                @endif
                    <br>
            </div>
                <div class="clearfix margin-top"></div>
            </div>
        </div>
    </div>
@stop



