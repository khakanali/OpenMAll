/**
 * Created by sadia on 9/16/2015.
 */



$ = jQuery;
 $().ready(function(){

     var text_max = 255;
     $('#textarea_feedback').html(text_max);

     $('#textarea').keyup(function() {
         var text_length = $('#textarea').val().length;
         var text_remaining = text_max - text_length;

         $('#textarea_feedback').html(text_remaining);
     });
     /*
      section created by khakan ali on 11/22/2015
      */
     $('#wareplusbtn').on('click',function(){
         var curr_val = parseInt($('#moq').val());
         curr_val = curr_val + 1;
         $('#moq').val(curr_val);
     });
     $('#wareminusbtn').on('click',function(e){
         var curr_val = parseInt($('#moq').val());
         if(curr_val > 0) {
             curr_val = curr_val - 1;
             $('#moq').val(curr_val);
         }else{
             e.preventDefault();
         }
     });
     $('#Category_id').on('change',function(){
         var val = $(this).val();
         if(val != ""){
             $.ajax({
                 type: "post",
                 url: 'subcategory?id='+val,
                 cache: false,
                 success: function(responseData, textStatus, jqXHR) {
                     $('#subcat').html(responseData);
                 },
                 error: function(responseData, textStatus, errorThrown) {
                     alert(errorThrown);
                 }
             });
         }
     });
     $('#country_id').on('change',function(){
         var val = $(this).val();
         if(val != ""){
             $.ajax({
                 type: "post",
                 url: 'state?id='+val,
                 cache: false,
                 success: function(responseData, textStatus, jqXHR) {
                     $('#states').html(responseData);
                 },
                 error: function(responseData, textStatus, errorThrown) {
                     alert(errorThrown);
                 }
             });
         }
     });
     $('#states').on('change',function(){
         var val = $(this).val();
         if(val != ""){
             $.ajax({
                 type: "post",
                 url: 'city?id='+val,
                 cache: false,
                 success: function(responseData, textStatus, jqXHR) {
                     $('#cities').html(responseData);
                 },
                 error: function(responseData, textStatus, errorThrown) {
                     alert(errorThrown);
                 }
             });
         }
     });
     $('#send').on('click',function(e){
         var total = $('.validator').length;
         var counter = 0;
         var total1 = $('.validator1').length;
         var counter1 = 0;

         if($('#checkboxD').is(':checked')){
             //ok every thing
         }else {
             $('.validator1').each(function () {
                 if ($(this).val() == "") {
                     $(this).addClass('fields_error');
                 } else {
                     counter1 = counter1 + 1;
                 }
             });
             if (total1 != counter1) {
                 hascheckbox = false;
             }else{
                 hascheckbox = true;
             }
         }
         $('.validator').each(function(){
             if($(this).val() == "") {
                 $(this).addClass('fields_error');
             }else{
                 counter = counter + 1;
             }
         });
         if(total == counter && hasimage && hascheckbox){
             //allow form to saved
         }else{
             if(!hasimage){
                 alert('select a valid image');
             }else{
                 alert('There are some errors');
             }
             e.preventDefault();
         }
     });
     $('#addwholesaledealer').on('click',function(){
         $.ajax({
             type: "get",
             url: 'newdealer',
             cache: false,
             success: function(responseData, textStatus, jqXHR) {
                 $("#wsreseller").append(responseData);
             },
             error: function(responseData, textStatus, errorThrown) {
                 alert(errorThrown);
             }
         });
     });
     //voucher
     $('.whole').click(function(){
         $('.whole').each(function(){
             $(this).prop('checked', false);
             // $(this).next('label').toggle('click');
         });
         $(this).prop('checked',true);
     });
     $('.wholeweek').click(function(){
         $('.wholeweek').each(function(){
             $(this).prop('checked', false);
             // $(this).next('label').toggle('click');
         });
         $(this).prop('checked',true);
     });

     $('#sendv').on('click',function(e){
         var total = $('.validator').length;
         var counter = 0;
         var totalWhole = $('.whole').length;
         var counterWhole = 0;

         var totalWholeweek = $('.wholeweek').length;
         var counterWholeweek = 0;

         //check any whole checkbox is checked?
         $('.whole').each(function(){
             if($(this).is(':checked')){
                 counterWhole = counterWhole + 1;
             }
         });
         $('.wholeweek').each(function(){
             if($(this).is(':checked')){
                 counterWholeweek = counterWholeweek + 1;
             }
         });
         if(counterWhole < 1){
             $('.whole').next('label').addClass('fields_error');
         }
         if(counterWholeweek < 1){
             $('.wholeweek').next('label').addClass('fields_error');
         }
         $('.validator').each(function(){
             if($(this).val() == "") {
                 $(this).addClass('fields_error');
             }else{
                 counter = counter + 1;
             }
         });
         if(total == counter && hasimage && totalWhole == counterWhole && totalWholeweek == counterWholeweek){
             //allow form to saved
         }else{
             if(!hasimage){
                 alert('select a valid image');
             }else{
                 alert('There are some errors');
             }
             e.preventDefault();
         }
     });


     /* Validation */
     $('#loginForm, #forgotForm').bootstrapValidator();

     $('#registerForm').bootstrapValidator({
         message: 'This value is not valid',
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
         fields: {
             username: {
                 message: 'The username is not valid',
                 validators: {
                     notEmpty: {
                         message: 'The username is required and can\'t be empty'
                     },
                     stringLength: {
                         min: 6,
                         max: 30,
                         message: 'The username must be more than 6 and less than 30 characters long'
                     },
                     regexp: {
                         regexp: /^[a-zA-Z0-9_\.]+$/,
                         message: 'The username can only consist of alphabetical, number, dot and underscore'
                     }
                 }
             },
             country: {
                 validators: {
                     notEmpty: {
                         message: 'The country is required and can\'t be empty'
                     }
                 }
             },
             contact: {
                 validators: {
                     digits: {
                         message: 'The value can contain only digits'
                     }
                 }
             },
             office: {
                 validators: {
                     digits: {
                         message: 'The value can contain only digits'
                     }
                 }
             },
             mobile: {
                 validators: {
                     digits: {
                         message: 'The value can contain only digits'
                     }
                 }
             },
             email: {
                 validators: {
                     notEmpty: {
                         message: 'The email address is required and can\'t be empty'
                     },
                     emailAddress: {
                         message: 'The input is not a valid email address'
                     }
                 }
             },
             password: {
                 validators: {
                     notEmpty: {
                         message: 'The password is required and can\'t be empty'
                     },
                     identical: {
                         field: 'confirmPassword',
                         message: 'The password and its confirm are not the same'
                     }
                 }
             },
             confirmPassword: {
                 validators: {
                     notEmpty: {
                         message: 'The confirm password is required and can\'t be empty'
                     },
                     identical: {
                         field: 'password',
                         message: 'The password and its confirm are not the same'
                     }
                 }
             }
         }
     });

     //select2
     $("select").select2();
    /* color picker */
    $("input[id^='colorPicker']").focusin(function(){
        if($("#colorPicker").length > 0)
        {
            var clrpickrID = $(this).attr("id").substring($(this).attr("id").indexOf('colorPicker')+11 );
            $('#colorPicker'+clrpickrID).ColorPicker({
                color: $(this).val(),
                onSubmit: function(hsb, hex, rgb, el) {
                    $(el).val(hex);
                    $(el).ColorPickerHide();
                },
                onChange: function (hsb, hex, rgb) {
                    $('#colorPicker'+clrpickrID).val('#'+hex);
                    $('#colorPicker'+clrpickrID).css('background', '#'+hex);
                    $('#colorPicker'+clrpickrID).css('color', '#eee');

                },
                onBeforeShow: function () {
                    $(this).ColorPickerSetColor(this.value);
                }
            })
                .bind('keyup', function(){
                    $(this).ColorPickerSetColor(this.value);
                });
        }
    });

    if ( ($(window).height() + 100) < $(document).height() ) {
        $('#top-link-block').removeClass('hidden').affix({
            // how far to scroll down before link "slides" into view
            offset: {top:100}
        });
    }
    // Bootstrap ScrollPSY
    $('body').scrollspy({
        target: '.static-tab',
        offset: 395
    });
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.static-tab').fadeIn();
        } else {
            $('.static-tab').fadeOut();
        }
    });
    // simple smooth scrolling for bootstrap scroll spy nav
    $(".static-tab li a[href^='#']").on('click', function(e) {
        // prevent default anchor click behavior
        e.preventDefault();
        // store hash
        var hash = this.hash;
        // animate
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000, function(){
            // when done, add hash to url
            // (default click behaviour)
            window.location.hash = hash;
        });

    });
    /* date picker */
    $('#datetimepicker, #datetimepickerr').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    /* time picker */
    $('#timepicker, #timepickerr').timepicki();

    $("#datepicker-in").datetimepicker({
        inline: true,
        format: 'YYYY-MM-DD'
    });
    /* editor */
    tinymce.init({
        selector: "#info-textarea, #info-textarea2, #remarks-textarea",
        theme: "modern",
        height: 300,
        cleanup: true,
        plugins: ["charmap","fullscreen","textcolor image","anchor link code"],

        toolbar1: "code | fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",

        toolbar2: "bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media | insertdatetime preview | forecolor backcolor",

        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
    });

    $('#checkboxD').click(function(){
        $('.toggleDelivery').find('input').attr('disabled',this.checked);
    });
    //==== Add More Scripts***

    var rowNum = 0;

    /* signBoard thumbs*/
    $(".sbimgID").click(function(){
        var sr=$(this).attr('src');
        $('.signboard').css('background','url('+sr+') no-repeat scroll 0 0 / 100% 100%');
        $('.signboard-text').remove();
    });
    /* Bunting thumbs*/
    $(".bimgID").click(function(){
        var sr=$(this).attr('src');
        $('.bunting').css('background','url('+sr+')');
    });
 /* youtube video thumbs*/
    $('ul#extractThumb li img').each(function() {
        var iframe = $(this).attr('data-src');
        var youtube_video_id = iframe.match(/www\.youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
        if (youtube_video_id.length == 11) {
            $(this).attr('src', "http://img.youtube.com/vi/" + youtube_video_id + "/0.jpg");
            $(this).click(function () {
                $('#tvideoID').attr('src',iframe);
            });
        }
    });

    $("#remVBcontent").click(function(){
        $('#tvideoID').attr('src','');
        $('.placeholdertext').removeClass('hidden');
    });
    /* Bunting*/
    $("#remBunting").click(function(){
        $('#display-bunting').addClass('hidden');
        $('.p-product').removeClass('col-sm-9').addClass('col-sm-12')
        $('.p-box').removeClass('col-lg-4 col-md-6 col-sm-6').addClass('col-lg-3 col-md-3 col-sm-4')
        $('#addBunting').removeClass('hidden');
    });

    $("#addBunting").click(function(){
        $('.p-product').removeClass('col-sm-12').addClass('col-sm-9')
        $('.p-box').removeClass('col-lg-3 col-md-3 col-sm-4').addClass('col-lg-4 col-md-6 col-sm-6')
        $('#display-bunting').removeClass('hidden');
        $('#addBunting').addClass('hidden');
    });
    /* display product section boxes*/
var pSecCount = 0;
    $("#addPsec").click(function(){
        rowNum++;
        pSecCount++;
        $("#elevator-btn").find(' > li:nth-last-child(1)').before(' <li role="presentation" class="floor-navigation"><a href="#psection'+pSecCount+'" id="count'+pSecCount+'"></a></li>');
        $('#count'+pSecCount).text('Product '+pSecCount)

        $("#display-product-section").append('<div id="psection'+pSecCount+'"> <div class="col-sm-12 section-name"> <input type="text" class="btn btn-default btn-lg col-md-3 " placeholder="Section Name"></div>        <div class="clearfix"></div>        <div id="display-product'+rowNum+'"> </div>        <div class="clearfix"></div>        <div class="col-sm-12" style="border-bottom: 2px dotted">        <a class="text-green" id="addPbox'+rowNum+'" data-pbID="'+rowNum+'" href="javascript:void(0);"><i class="fa fa-plus-circle"></i></a>        </div>   <a data-remID="'+pSecCount+'" class="pull-right text-green remPsec" href="javascript:void(0);"><i class="fa fa-minus-circle"></i></a>  </div>');




    $("#addPbox"+rowNum).click(function(){
        var pbid = $(this).attr("data-pbID");
        rowNum++;
        var clas = "";
        if($(".p-product").hasClass( "col-sm-12" )==true){
            clas="col-lg-3 col-md-3 col-sm-4";
        }else{
            clas="col-lg-4 col-md-6 col-sm-6";
        }
        $("#display-product"+pbid).append('<div id="pbox'+rowNum+'" class="p-box placeholder '+clas+' col-xs-12"><div class="p-img-bordered"><div class="p-img" id="'+rowNum+'" ><a class="badge badge-close remPbox" >X</a><img id="timgID'+rowNum+'" src="images/placeholder.png" class="img-responsive"><a class="badge badge-upload " id="uploadImg'+rowNum+'"  data-toggle="collapse" data-target="#imgThumbs'+rowNum+'" aria-expanded="false" aria-controls="imgThumbs'+rowNum+'" ><i class="fa fa-lg fa-upload"></i></a> <div class="collapse imgThumbs"     data-thumbId="'+rowNum+'"   id="imgThumbs'+rowNum+'"> <ul > <li> <img class="simgID" alt="item" src="images/p1.png" class="img-responsive"></li>        <li>  <img class="simgID" alt="item" src="images/p2.png" class="img-responsive"></li>  <li> <img class="simgID" alt="item" src="images/p3.png" class="img-responsive"></li> <li> <img class="simgID" alt="item" src="images/p4.png" class="img-responsive"></li>        <li><img class="simgID" alt="item" src="images/p5.png" class="img-responsive"></li> <li> <img class="simgID" alt="item" src="images/p6.png" class="img-responsive"></li>    </ul></div></div>        <table class="table table-bordered p-specs">        <tr>        <td rowspan="2"  id="pname_'+rowNum+'">&nbsp;</td><td id="pval1_'+rowNum+'">&nbsp;</td></tr><tr><td class="text-danger" id="pval2_'+rowNum+'">&nbsp;</td></tr></table></div><div class="clearfix"> </div>        <div class=" col-xs-8">        <ul class="list-inline">        <li class="btn-green"><i class="fa fa-plus"></i></li>        <li class="btn-pink"><i class="fa fa-heart"></i></li>        <li class="btn-darkgreen"><i class="fa fa-shopping-cart"></i></li>        </ul>        </div>        <div class=" col-xs-4 text-right">        <strong class="text-muted" id="discountval_'+rowNum+'">0%</strong>        </div>        <div class="clearfix"> </div>        </div>        ');

        $( "#discountval_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });
        $( "#pname_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });
        $( "#pval1_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });
        $( "#pval2_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });

        var src = null;

        $(".simgID").bind( "click", function(element) { src=$(this).attr('src');});//it runs multiple times

        $("#imgThumbs"+rowNum).bind( "click", function(element) {

           var sr= src //$(this).attr('src');
           var id = $(this).closest(".imgThumbs").attr("data-thumbid");

            $(this).closest(".p-img").find('#timgID'+id).attr('src', sr);
            $(this).closest(".p-box").removeClass('placeholder');
            src = '';
        });
    });



    $("#display-product"+rowNum).on('click', '.remPbox' , function(){
        $('#pbox'+rowNum).remove();
        rowNum = rowNum -1;
        //$(this).parent().parent().remove();
    });
    });

    $("#display-product-section").on('click', '.remPsec' , function(){
        $("#count"+$(this).attr("data-remID")).parent().remove();
        $(this).parent().remove();
       // pSecCount--;
    });




    /* for first static display */
    $("#uploadBtn").change(function(){
        document.getElementById("uploadFile").value = this.value;
        readURLSingle(this, 'preview-img');
    });
    /* upload default signboard*/
    $("#signboarduploadBtn").change(function(){
        readURLSingle(this, 'preview-img-sb');
    });
    /* upload default bunting*/
    $("#bntuploadBtn").change(function(){
        readURLSingle(this, 'preview-img-bnt');
    });
    /* upload default video banner*/
    $("#vbnruploadBtn").change(function(){
        readURLSingle(this, 'preview-img-vbnr');
    });
    /* for subcat display */
    var listgrp =0;
    $("#mainCat").on('change', function() {
        listgrp++;
        if($(this).val() !="") {
            $('#append-subCate').append('<div data-listgroup="'+$(this).val()+'" id="listgroups' + listgrp + '" class="listgroupsbox col-sm-3"><a class="badge badge-close remLGB" >X</a><ul class="list-group list-unstyled"> <li class="btn list-group-item active">' + $(this).val() + ' </li><li> <ul class="list-unstyled inner-lvl"></ul></li><li  class="list-group-item"><a class="btn btn-primary form-control" href="/create_new_product"><i class="fa fa-plus-circle"></i> Create New Products</a> </li>   </div></div>');

            $("#mainCat option:selected").attr('disabled','disabled');
        }
    });

    $('#append-subCate').on('click', '.remLGB', function(){
        var relval = $(this).parent().attr('data-listgroup');
        $('#mainCat option[value="' + relval +'"]').removeAttr('disabled');
        $(this).parent().remove();
    });
    $('#append-subCate ul.inner-lvl li').click(function() {

        $("someTableSelector").find("tr:gt(0)").remove();
        $('#p-detailT').find("tr:gt(1)").remove();
        $('#p-pricingT').find("tr:gt(1)").remove();
        $('#p-specsT').find("tr:gt(1)").remove();
        for(i=1; i<= $(this).attr('item-count'); i++) {
            $('#p-detailT').append('<tr><td>'+i+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>');
            $('#p-pricingT').append('<tr><td>'+i+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>');
            $('#p-specsT').append('<tr><td>'+i+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td> </tr>');
        }
        $("td").bind("click", function (element) {
            newInput(this);
        });
    });

    /* album products */

    $( "#pbox td, #discountval").bind( "click", function(element) {
        newInput(this);

    });
    $("#pbox .simgID").bind( "click", function(element) {
        var src=$(this).attr('src');
        $(this).closest(".p-img").find('#timgID').attr('src', src);
    });
    $("#upldpro").click(function(){
        rowNum++;
        $('#pro-counter').html(function(i, val) { return val*1+1 });

       $("#append-pro").append('<div id="pbox'+rowNum+'" class="p-box placeholder  col-sm-3 col-xs-12"><div class="p-img" id="'+rowNum+'" ><a class="badge badge-close remProbox" >X</a>        <img id="timgID'+rowNum+'" src="images/placeholder.png" class="img-responsive">        <a class="badge badge-upload " id="uploadImg'+rowNum+'"  data-toggle="collapse" data-target="#imgThumbs'+rowNum+'" aria-expanded="false" aria-controls="imgThumbs'+rowNum+'" ><i class="fa fa-lg fa-upload"></i></a> <div class="collapse imgThumbs"     data-thumbId="'+rowNum+'"   id="imgThumbs'+rowNum+'"> <ul > <li> <img class="simgID" alt="item" src="images/p1.png" class="img-responsive"></li>        <li>  <img class="simgID" alt="item" src="images/p2.png" class="img-responsive"></li>  <li> <img class="simgID" alt="item" src="images/p3.png" class="img-responsive"></li> <li> <img class="simgID" alt="item" src="images/p4.png" class="img-responsive"></li>        <li><img class="simgID" alt="item" src="images/p5.png" class="img-responsive"></li> <li> <img class="simgID" alt="item" src="images/p6.png" class="img-responsive"></li>    </ul></div>       </div>        <table class="table table-bordered p-specs">        <tr>        <td colspan="2"  id="pname_'+rowNum+'">&nbsp;</td><td id="pval1_'+rowNum+'">&nbsp;</td></tr><tr> <td class="text-danger" id="padd_'+rowNum+'">&nbsp;</td>  <td id="pqty_'+rowNum+'">&nbsp;</td><td class="text-danger" id="pval2_'+rowNum+'">&nbsp;</td></tr></table><div class="clearfix"> </div>        <div class=" col-xs-8">        <ul class="list-inline">        <li class="btn-green"><i class="fa fa-plus"></i></li>        <li class="btn-pink"><i class="fa fa-heart"></i></li>        <li class="btn-darkgreen"><i class="fa fa-shopping-cart"></i></li>        </ul>        </div>        <div class=" col-xs-4 text-right">        <strong class="text-muted" id="discountval_'+rowNum+'">0%</strong>        </div>        <div class="clearfix"> </div>        </div>        ');

        $( "#discountval_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });
        $( "#pname_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });  $( "#padd_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });
        $( "#pqty_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });
        $( "#pval1_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });
        $( "#pval2_"+rowNum ).bind( "click", function(element) {
            newInput(this);
        });

        var src = null;
        $(".simgID").bind( "click", function(element) { src=$(this).attr('src');});//it runs multiple times

        $("#imgThumbs"+rowNum).bind( "click", function(element) {

            var sr= src //$(this).attr('src');
            var id = $(this).closest(".imgThumbs").attr("data-thumbid");

            $(this).closest(".p-img").find('#timgID'+id).attr('src', sr);
            $(this).closest(".p-box").removeClass('placeholder');
            src = '';
        });
    });
    $("#append-pro").on('click', '.remProbox', function(){
        $(this).parent().parent().remove();
     //   $('#upldsb').removeClass('hidden');
        $('#pro-counter').html(function(i, val) { return val*1-1 });
    });

    /* album signboard */
    $("#upldsb").click(function(){
        rowNum++;
        if($('.upld-signboard').length > 3){
            $('#upldsb').addClass('hidden');
        }
        $('#signboar-counter').html(function(i, val) { return val*1+1 });
            $("#append-sb-img").append(' <div class="col-sm-11 upld-signboard">        <a class="badge badge-close remupldsb">X</a>        <img class="img-responsive"  id="preview-img-sb' + rowNum + '"  src="#" alt="" />        <div class="inputBtnSection">     <label class="fileUpload">        <input data-imgID="' + rowNum + '"   id="uploadBtn' + rowNum + '"  type="file" class="upload" />        <span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span>        </label>        </div>        </div>');

            $("#uploadBtn" + rowNum).change(function (ele) {
                var id = $(this).attr("data-imgID");
                readURLSingle(this, 'preview-img-sb'+id);
            });
    });
    $("#append-sb-img").on('click', '.remupldsb', function(){
        $(this).parent().remove();
        $('#upldsb').removeClass('hidden');
        $('#signboar-counter').html(function(i, val) { return val*1-1 });
    });

    /* album bunting */
    $("#upldbb").click(function(){
        rowNum++;
        if($('.upld-bunting').length > 3){
            $('#upldbb').addClass('hidden');
        }
        $('#bunting-counter').html(function(i, val) { return val*1+1 });
            $("#append-bb-img").append(' <div class="col-sm-2 upld-bunting">        <a class="badge badge-close remupldbb">X</a>        <img class="img-responsive"  id="preview-img-bnt' + rowNum + '"  src="#" alt="" />        <div class="inputBtnSection">     <input disabled="disabled" class="disableInputField">   <label class="fileUpload">        <input data-imgID="' + rowNum + '"   id="uploadBtn' + rowNum + '"  type="file" class="upload" />        <span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span>        </label>        </div>        </div>');

            $("#uploadBtn" + rowNum).change(function (ele) {
                var id = $(this).attr("data-imgID");
                readURLSingle(this, 'preview-img-bnt'+id);
            });
    });
    $("#append-bb-img").on('click', '.remupldbb', function(){
        $(this).parent().remove();
        $('#upldbb').removeClass('hidden');
        $('#bunting-counter').html(function(i, val) { return val*1-1 });
    });

    /* album video banner */
    $("#upld-v-or-b").click(function(){
        rowNum++;
        if($('.upld-bvideo').length >= 1){
            $('#upld-v-or-b').addClass('hidden');
        }
        $('#video-counter').html(function(i, val) { return val*1+1 });
        $("#append-v-or-b").append(' <div class="col-sm-11 upld-bvideo">        <a class="badge badge-close rem-v-or-b">X</a>        <img class="img-responsive"  id="preview-img-vbnr' + rowNum + '"  src="#" alt="" />        <div class="inputBtnSection">      <label class="fileUpload">        <input data-imgID="' + rowNum + '"   id="uploadBtn' + rowNum + '"  type="file" class="upload" />        <span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span>        </label>        </div>        </div>');

        $("#uploadBtn" + rowNum).change(function (ele) {
            var id = $(this).attr("data-imgID");
            readURLSingle(this, 'preview-img-vbnr'+id);
        });

    });
    $("#append-v-or-b").on('click', '.rem-v-or-b', function(){
        $(this).parent().remove();
        $('#upld-v-or-b').removeClass('hidden');
        $('#video-counter').html(function(i, val) { return val*1-1 });
    });

    /* profile about us */
    $("#addABlayer").click(function(){
        rowNum++;
        $("#append-about-field").append('<div class="profile-field"> <div class="col-sm-2 profile-photo"   > <img  id="preview-img'+rowNum+'" class="preview-img img-responsive"  src="#" alt="Add Photo" /> <div class="inputBtnSection">  <input id="uploadFile'+rowNum+'" class="disableInputField" placeholder="Upload Passport Photo" disabled="disabled" /> <label class="fileUpload"><input data-imgID="'+rowNum+'"   id="uploadBtn'+rowNum+'" type="file" class="upload" /><span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span></label>    </div></div>        <div class="col-sm-9">        <div class="form-group">        <label class="col-sm-2 control-label">Name</label>        <div class="col-sm-8">        <input type="text" class="form-control" >        </div>              </div>        <div class="form-group">        <label class="col-sm-2 control-label">Position</label>    <div class="col-sm-8">          <input type="text" class="form-control" >          </div>     </div>        <div class="form-group mbot0">        <label class="col-sm-2 control-label">Description</label>        <div class="col-sm-10">        <textarea class="form-control" ></textarea>        </div>        </div>        </div>    <div class="col-sm-1">        <a class="text-danger pull-right remABlayer" href="javascript:void(0);"><i class="fa fa-minus-circle"></i></a>        </div>      <div class="clearfix"></div>        </div>        ');

        $("#uploadBtn"+rowNum).change(function(){
            var id = $(this).attr("data-imgID");
            readURLSingle(this, 'preview-img'+id);
        });

    });
    $("#append-about-field").on('click', '.remABlayer', function(){
        $(this).parent().parent().remove();
    });
    /* profile certificate */
   $("#addPFlayer").click(function(){
        rowNum++;
        $("#append-profile-field").append('    <div class="profile-field">        <div class="col-sm-2 profile-photo"> <img  id="preview-img'+rowNum+'" class="preview-img img-responsive"  src="#" alt="Add Photo" /><div class="inputBtnSection">  <input id="uploadFile'+rowNum+'" class="disableInputField" placeholder="Upload Passport Photo" disabled="disabled" /> <label class="fileUpload"><input data-imgID="'+rowNum+'" id="uploadBtn'+rowNum+'"  type="file" class="upload" /><span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span></label>    </div></div>        <div class="col-sm-9">        <div class="form-group">        <label class="col-sm-2 control-label">Name</label>        <div class="col-sm-8">        <input type="text" class="form-control" >        </div>              </div>        <div class="form-group">        <label class="col-sm-2 control-label">Date Awarded</label>    <div class="col-sm-4">        <div class="input-group date" id="datetimepicker'+rowNum+'">        <input type="text" class="form-control" data-date-format="YYYY/MM/DD"/>        <span class="input-group-addon">        <span class="glyphicon glyphicon-calendar"></span>        </span>        </div>        </div>     </div>        <div class="form-group mbot0">        <label class="col-sm-2 control-label">Description</label>        <div class="col-sm-10">        <textarea class="form-control" ></textarea>        </div>        </div>        </div>    <div class="col-sm-1">        <a class="text-danger pull-right remPFlayer" href="javascript:void(0);"><i class="fa fa-minus-circle"></i></a>        </div>      <div class="clearfix"></div>        </div>        ');

       $("#uploadBtn"+rowNum).change(function(){
           var id = $(this).attr("data-imgID");
           readURLSingle(this, 'preview-img'+id);
       });

        $('#datetimepicker'+rowNum).datetimepicker({ format: 'YYYY-MM-DD' });

    });

    $("#append-profile-field").on('click', '.remPFlayer', function(){
        $(this).parent().parent().remove();
    });
    /* clone of voucher sch*/
    $("#copySchT").click(function () {
        rowNum++;

        var schHeader = '';
         schHeader = ('<div class="append-schT margin-top"><a class="badge badge-close remthisSch">X</a><div class="schPlace"><div class="col-xs-12">Month <strong style="padding-left:20px">'+$("#m").val()+'</strong><strong class="pull-right">'+$("#y").val()+'</strong></div><label class="col-xs-12 control-label">Date</label><div class="clearfix"></div><div class="margin-top"><div class="col-xs-1">From</div> <input type="text" value="1" size="3" class="text-center"> &nbsp; to &nbsp; <input type="text" value="15" size="3" class="text-center"></div></div><div class="clearfix"></div><div class="table-responsive" id="report'+rowNum+'"></div></div>');
        $("#append-schT").append(schHeader);
        $("#schT").clone().appendTo("#append-schT #report"+rowNum).removeAttr('id').find('input').prop('disabled', true).css('border','none').css('background', 'transparent').removeAttr('id');
        $("#report"+rowNum).find('td > #addnewSch').parent().remove();
        $("#report"+rowNum).find('td > .remnewSch').parent().remove();
        $("#report"+rowNum).find('td > .subtotal').parent().remove();
        $("#report"+rowNum+" tr:last").remove();

    });

    $("#append-schT").on('click', '.remthisSch', function(){
        $(this).parent().remove();
    });

    $('input.myr-price, input.retailSave, input#rPrice, input#oPrice').number( true, 2 );
    $('input.retailSave').blur(function() {
        var rp = $('#rPrice').val();
        var op = $('#oPrice').val();
        var res = op - rp / op * 100;
        if(!isNaN(res)) {
            if(res>0) {
                $('#resultSave').text(res).number(true, 2);
            }else{
                $('#resultSave').text(0).number(true, 2);
            }
        }
    });
    $('input.myr-price, #rPrice, #oPrice').on('keydown',  checkValidationInteger);
    $("input.numeric").on('keypress',  checkValidationNumeric);

    $("#addnewSch").click(function(){
        rowNum++;
     $('<tr><td class="saving"> <div class="input-group"><span class="input-group-addon">From</span><input type="text" id="timepicker'+rowNum+'"  class="form-control"></div></td><td><div class="input-group"><span class="input-group-addon">To</span><input type="text" id="timepickerr'+rowNum+'"  class="form-control"></div></div></td><td><div class="input-group"><span class="input-group-addon">MYR </span><input type="text" class="form-control calInput myr-price"></div></td><td class="text-danger text-center"><span>0</span> %</td><td><input type="text" class="form-control numeric calInput" ></td><td>MYR <span class="hide"></span> <span class="subtotal pull-right">100</span></td><td><a  href="javascript:void(0);" class="remnewSch text-danger"><i class="fa fa-minus-circle"></i></a></td></tr>').insertAfter("#schT tr:first");
        $('input.myr-price').number( true, 2 );
        $('#timepicker'+rowNum+', #timepickerr'+rowNum).timepicki();
        $("input.numeric").on('keypress',  checkValidationNumeric);

    });
    $('#schT')
        .on('keyup', 'input.calInput', calCulations);

    $("#schT").on('click', '.remnewSch', function(){
        $(this).parent().parent().remove();
    });

    $("#addsubC").click(function(){

        $("#appendsubC").append('<div class="form-group"> <div class="col-sm-4 col-sm-offset-3"><input type="text" class="form-control" ></div><div class="col-xs-1">	 <a  href="javascript:void(0);"  class="remsubC text-danger"><i class="fa fa-minus-circle"></i></a></div></div>'); });

    $("#appendsubC").on('click', '.remsubC', function(){
        $(this).parent().parent().remove();
    });

    $("#addwholesale").click(function(){
        $("#wsreseller").append(' <div class="form-group">    <div class="col-sm-11 col-xs-10">      <input type="text" name="resellers" class="form-control" >    </div>	<div class="col-xs-1 row">	 <a  href="javascript:void(0);"  class="btn btn-default remwholesale text-danger"><i class="fa fa-minus-circle"></i></a>   </div>  </div>');
    });
    $("#wsreseller").on('click', '.remwholesale', function(){
        $(this).parent().parent().remove();
    });
    $('#wrpTable, #sppTable')
        .on('keyup', 'input', calc);


    $("#addrsp").click(function(){
        $("#wrpTable > tbody").append(' <tr><td class="saving"><input class="form-control numeric" name="wunit"  type="text" size="5"></td><td> <div class="input-group"><span class="input-group-addon">MYR</span><input type="text" name="wprice" class="form-control myr-price"></div></td><td>  <a  href="javascript:void(0);"  class="remrsp form-control text-center text-danger"><i class="fa fa-minus-circle"></i></a></td><td><div class="input-group"><span class="input-group-addon">SAVE</span> <div class="average form-control text-center text-danger">0.0</div><span class="input-group-addon">% from retail</span></div></td></tr>');
        $('input.myr-price').number( true, 2 );
        $("input.numeric").on('keypress',  checkValidationNumeric);
    });
    $("#wrpTable").on('click', '.remrsp', function(){
        $(this).parent().parent().remove();
    });
    $("#addspp").click(function(){
        $("#sppTable > tbody").append(' <tr><td class="saving"><input class="form-control numeric" name="sunit" type="text" size="5"></td><td> <div class="input-group"><span class="input-group-addon">MYR</span><input type="text" name="sprice" class="form-control myr-price"></div></td><td>  <a  href="javascript:void(0);"  class="remspp form-control text-center text-danger"><i class="fa fa-minus-circle"></i></a></td><td><input class="form-control " name="username" type="text"></td><td><div class="input-group"><span class="input-group-addon">SAVE</span> <div class="average form-control text-center text-danger">0.0</div><span class="input-group-addon">% from retail</span></div></td></tr>');
        $('input.myr-price').number( true, 2 );
        $("input.numeric").on('keypress',  checkValidationNumeric);
    });
    $("#sppTable").on('click', '.remspp', function(){
        $(this).parent().parent().remove();
    });

	 $("#uploadBtnDD").change(function(){
		 $("#uploadFileDD").val($("#uploadBtnDD").val());
        });
	 $("#uploadBtnBR").change(function(){
		 $("#uploadFileBR").val($("#uploadBtnBR").val());
        });
    $("#addDD").click(function(){
        rowNum++;

        $("#dirDetail").append('  <div class="form-group">     ' +
        '<label class="col-sm-1 control-label">&nbsp;</label>    ' +
        '<div class="col-sm-2">      ' +
        '<input type="text" class="form-control" name="directors[]" placeholder="Type the Name">    </div>	<div class="col-sm-3">      ' +
        '<input type="text" class="form-control" name="nric[]" placeholder="Type the NRIC or Passport Number"></div><div id="dcountryAppend" class="col-sm-2"></div><div class="col-sm-4">        <div class="inputBtnSection">	' +
        '<input id="uploadFileDD'+rowNum+'" class="disableInputField" placeholder="Upload Passport Photo" disabled="disabled" />	<label class="fileUpload">		' +
        '<input id="uploadBtnDD'+rowNum+'" id-attr="'+rowNum+'"  name="directorImages[]"  type="file" class="upload" />		<span class="uploadBtn">Upload </span>	</label>        </div> ' +
        '<a href="javascript:void(0);" class="remDD text-danger"><i class="fa fa-minus-circle"></i></a>    </div>  </div>  </div>');
        //$("#dcountry").clone().appendTo('#dcountryAppend');
        $("#dcountryAppend").html('<select class="form-control">'+$('#dcountry').html()+'</select>');
        $('#dcountryAppend').removeAttr('id');

        $("#uploadBtnDD"+rowNum).change(function(){
			 var id = $(this).attr('id-attr');
			 $("#uploadFileDD"+id).val($(this).val());
        });
    });

    $("#dirDetail").on('click', '.remDD', function(){
        $(this).parent().parent().remove();
    });

    $("#addBS").click(function(){
		rowNum++;
        $("#businessReg").append('<div class="form-group">  <div class="col-sm-4 col-sm-offset-8">     <div class="inputBtnSection">	'+ 
		'<input id="uploadFileBR'+rowNum+'" class="disableInputField" placeholder="Upload Document" disabled="disabled" />	<label class="fileUpload">'+ 
		'		<input id="uploadBtnBR'+rowNum+'" id-attr="'+rowNum+'" name="upload_attachment[]"  type="file" class="upload" />		<span class="uploadBtn">Upload </span>	</label>      '+
		'  </div> 	 <a  href="javascript:void(0);"  class="remBS text-danger"><i class="fa fa-minus-circle"></i></a>    </div>  </div>  </div>');
		
		$("#uploadBtnBR"+rowNum).change(function(){
			var	id = $(this).attr('id-attr');
			$("#uploadFileBR"+id).val($(this).val());
        });
    });

    $("#businessReg").on('click', '.remBS', function(){
        $(this).parent().parent().remove();
    });

    $("#addWS").click(function(){

        $("#website").append(' <div class="form-group">    <div class="col-sm-4  col-sm-offset-2 col-xs-10">      <input type="text" class="form-control" name="website[]" placeholder="http://www.abc.com.my">    </div>	<div class="col-xs-1">	 <a  href="javascript:void(0);"  class="remWS text-danger"><i class="fa fa-minus-circle"></i></a>   </div>  </div>');
    });

    $("#website").on('click', '.remWS', function(){
        $(this).parent().parent().remove();
    });
    $("#addSM").click(function(){

        $("#socialMedia").append(' <div class="form-group">   <div class="col-sm-4 col-sm-offset-2 col-xs-10">      <input type="text" class="form-control" name="social[]" placeholder="http://www.facebook.com/my">    </div>	<div class="col-xs-1">	 <a  href="javascript:void(0);"  class="remSM text-danger"><i class="fa fa-minus-circle"></i></a>    </div>  </div>');
    });

    $("#socialMedia").on('click', '.remSM', function(){
        $(this).parent().parent().remove();
    });


    $("#addEcom").click(function(){

        $("#currEcom").append(' <div class="form-group">  <div class="col-sm-4 col-sm-offset-2 col-xs-10">      <input type="text" class="form-control" name="ecom_site[]" placeholder="http://www.abc.com">    </div>	<div class="col-xs-1">	 <a  href="javascript:void(0);"  class="remEcom text-danger"><i class="fa fa-minus-circle"></i></a>    </div>  </div>');
    });

    $("#currEcom").on('click', '.remEcom', function(){
        $(this).parent().parent().remove();
    });

    $("#addBD").click(function(){
        $("#brandDetail").append(' <div class="form-group"><div class="col-sm-6  col-sm-offset-4 col-xs-10"><select class="form-control" name="brand_name[]">'+$('#brandNames').html()+'</select></div><div class="col-xs-1">	 <a  href="javascript:void(0);"  class="remBD text-danger"><i class="fa fa-minus-circle"></i></a>    </div>  </div>');

    });

    $("#brandDetail").on('click', '.remBD', function(){
        $(this).parent().parent().remove();
    });

	
	 $("#uploadBtnRem").change(function(){
		 $("#uploadFileRem").val($("#uploadBtnRem").val());
        });
    $("#addRem").click(function(){
rowNum++;
        $("#remarks").append(' <div class="form-group">  <div class="col-sm-9  col-sm-offset-3  col-xs-12">    <div class="inputBtnSection">'+
		'	<input id="uploadFileRem'+rowNum+'" class="disableInputField" name="upload_attachment[]"  placeholder="Add New Attachment" disabled="disabled" />	'+
		'<label class="fileUpload">		<input id="uploadBtnRem'+rowNum+'" id-attr="'+rowNum+'" type="file" name="upload_attachment[]" class="upload" />	'+
		'	<span class="uploadBtn">Upload </span>	</label>     </div> '+
		'  <a  href="javascript:void(0);"  class="remRem text-danger"><i class="fa fa-minus-circle"></i></a>  </div>  </div>');

		$("#uploadBtnRem"+rowNum).change(function(){
			var	id = $(this).attr('id-attr');
			$("#uploadFileRem"+id).val($(this).val());
        });   

   });

    $("#remarks").on('click', '.remRem', function(){
        $(this).parent().parent().remove();
    });

    //plugin bootstrap minus and plus
    $('.btn-number').click(function(e){
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {

                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    function calCulations(){
        $('#schT tr:has(.saving)').each(function(i,v){
            var $cel = $(v.cells);
            var $quantity = $cel.eq(4).find('input').val();
            var $price = $cel.eq(2).find('input').val();
            var $opr = $('#oPrice').val()
            var $ssavings = ($opr - $price) / $opr * 100;
            if($ssavings>0){
                $cel.eq(3).find('span').text($ssavings).number( true, 2);
            }else{
                $cel.eq(3).find('span').text(0).number(true, 2);
            }
         //   alert($ssavings)
            var $total = $price * $quantity;
            if (!isNaN($total)) {
                $cel.eq(-2).find('span.hide').text($total);
                $cel.eq(-2).find('span.subtotal').text($total).number( true, 2 );
                var sum = 0.0;
                $('span.hide').each(function(){
                    sum += parseFloat($(this).text());
                });
                $('#nettotal').text(sum).number( true, 2 );
            } else {
                //alert('Ops Error! Please only numbers');
            }
        });
    }
    function calc(){
        $('#wrpTable tr:has(.saving), #sppTable tr:has(.saving)').each(function(i,v){

            var $cel = $(v.cells);
            var $unit = $cel.eq(0).find('input').val();
            var $price = $cel.eq(1).find('input').val();
            var $op = $('#oPrice').val();
            var $avg = $price / $unit;
            var $per = (($op - $avg)/$op )* 100;
            if (!isNaN($per)) {
                if ($per > 0){
                    $cel.eq(-1).find('div.average').text($per).number(true, 2);
                } else{
                    $cel.eq(-1).find('div.average').text(0).number( true, 2 );
                }
            } else {
                //alert('Ops Error! Please only numbers');
            }
        });
    }
    function checkValidationInteger(e){
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) ||
                // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    }
    function checkValidationNumeric(e){
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#errmsg").html("Digits Only").show().fadeOut("slow");
            return false;
        }
    }

    function readURLSingle(input, id) {
        var fileTypes = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx', 'xls'];  //acceptable file types

        if (input.files && input.files[0]) {
            var extension = input.files[0].name.split('.').pop().toLowerCase(),  //file extension from input file
                isSuccess = fileTypes.indexOf(extension) > -1;  //is extension in acceptable types
            if (isSuccess) { //yes
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#'+id).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
            else { //no
                alert('Warning: Type mismatch')
            }
        }
    }

    function closeInput(elm) {
        var value = $(elm).find('input').val();
        //   alert(value)
        $(elm).empty().text(value);

        $(elm).bind("dblclick", function () {
            newInput(elm);
        });
    }

    function newInput(elm) {
        $(elm).unbind('dblclick');

        var value = $(elm).text();
        $(elm).empty();

        $("<input>")
            .attr('type', 'text')
            .attr('class', 'form-control')
            .val(value)
            .blur(function() {
                closeInput(elm);
            })
            .appendTo($(elm))
            .focus();
    }

});


$(document).ready(function(){
    if($('#end-line').length > 0) {
        var alias_end = document.getElementById('end-line');
        var object_end = alias_end.getContext("2d");
        object_end.beginPath();
        object_end.strokeStyle = "#FFFFFF";
        object_end.setLineDash([3]);
        object_end.moveTo(20, 8);
        object_end.lineTo(100, 8);
        object_end.stroke();

        object_end.beginPath();
        object_end.fillStyle = "#FFFFFF";
        object_end.arc(10, 8, 4, 0, Math.PI * 2, false);
        object_end.closePath();
        object_end.fill();

        object_end.beginPath();
        object_end.fillStyle = "#FFFFFF";
        object_end.arc(100, 8, 4, 0, Math.PI * 2, false);
        object_end.closePath();
        object_end.fill();

        var alias_end_1 = document.getElementById('end-line-1');
        var object_end_1 = alias_end_1.getContext("2d");
        object_end_1.beginPath();
        object_end_1.strokeStyle = "#FFFFFF";
        object_end_1.setLineDash([3]);
        object_end_1.moveTo(20, 8);
        object_end_1.lineTo(100, 8);
        object_end_1.stroke();

        object_end_1.beginPath();
        object_end_1.fillStyle = "#FFFFFF";
        object_end_1.arc(10, 8, 4, 0, Math.PI * 2, false);
        object_end_1.closePath();
        object_end_1.fill();

        object_end_1.beginPath();
        object_end_1.fillStyle = "#FFFFFF";
        object_end_1.arc(100, 8, 4, 0, Math.PI * 2, false);
        object_end_1.closePath();
        object_end_1.fill();

        var alias_end_2 = document.getElementById('end-line-2');
        var object_end_2 = alias_end_2.getContext("2d");
        object_end_2.beginPath();
        object_end_2.strokeStyle = "#FFFFFF";
        object_end_2.setLineDash([3]);
        object_end_2.moveTo(20, 8);
        object_end_2.lineTo(100, 8);
        object_end_2.stroke();

        object_end_2.beginPath();
        object_end_2.fillStyle = "#FFFFFF";
        object_end_2.arc(10, 8, 4, 0, Math.PI * 2, false);
        object_end_2.closePath();
        object_end_2.fill();

        object_end_2.beginPath();
        object_end_2.fillStyle = "#FFFFFF";
        object_end_2.arc(100, 8, 4, 0, Math.PI * 2, false);
        object_end_2.closePath();
        object_end_2.fill();

        var alias_end_3 = document.getElementById('end-line-3');
        var object_end_3 = alias_end_3.getContext("2d");
        object_end_3.beginPath();
        object_end_3.strokeStyle = "#FFFFFF";
        object_end_3.setLineDash([3]);
        object_end_3.moveTo(20, 8);
        object_end_3.lineTo(100, 8);
        object_end_3.stroke();

        object_end_3.beginPath();
        object_end_3.fillStyle = "#FFFFFF";
        object_end_3.arc(10, 8, 4, 0, Math.PI * 2, false);
        object_end_3.closePath();
        object_end_3.fill();

        object_end_3.beginPath();
        object_end_3.fillStyle = "#FFFFFF";
        object_end_3.arc(100, 8, 4, 0, Math.PI * 2, false);
        object_end_3.closePath();
        object_end_3.fill();

        var alias_end_4 = document.getElementById('end-line-4');
        var object_end_4 = alias_end_4.getContext("2d");
        object_end_4.beginPath();
        object_end_4.strokeStyle = "#FFFFFF";
        object_end_4.setLineDash([3]);
        object_end_4.moveTo(20, 8);
        object_end_4.lineTo(100, 8);
        object_end_4.stroke();

        object_end_4.beginPath();
        object_end_4.fillStyle = "#FFFFFF";
        object_end_4.arc(10, 8, 4, 0, Math.PI * 2, false);
        object_end_4.closePath();
        object_end_4.fill();

        object_end_4.beginPath();
        object_end_4.fillStyle = "#FFFFFF";
        object_end_4.arc(100, 8, 4, 0, Math.PI * 2, false);
        object_end_4.closePath();
        object_end_4.fill();

        var alias_end_5 = document.getElementById('end-line-5');
        var object_end_5 = alias_end_5.getContext("2d");
        object_end_5.beginPath();
        object_end_5.strokeStyle = "#FFFFFF";
        object_end_5.setLineDash([3]);
        object_end_5.moveTo(20, 8);
        object_end_5.lineTo(100, 8);
        object_end_5.stroke();

        object_end_5.beginPath();
        object_end_5.fillStyle = "#FFFFFF";
        object_end_5.arc(10, 8, 4, 0, Math.PI * 2, false);
        object_end_5.closePath();
        object_end_5.fill();

        object_end_5.beginPath();
        object_end_5.fillStyle = "#FFFFFF";
        object_end_5.arc(100, 8, 4, 0, Math.PI * 2, false);
        object_end_5.closePath();
        object_end_5.fill();

        var alias = document.getElementById('part-one');
        var object = alias.getContext("2d");
        object.beginPath();
        object.strokeStyle = "#FFFFFF";
        object.setLineDash([3]);
        object.moveTo(10, 10);
        object.lineTo(20, 10);
        object.stroke();

        object.beginPath();
        object.fillStyle = "#FFFFFF";
        object.arc(24, 10, 4, 0, Math.PI * 2, false);
        object.closePath();
        object.fill();

        object.beginPath();
        object.fillStyle = "#FFFFFF";
        object.arc(10, 155, 4, 0, Math.PI * 2, false);
        object.closePath();
        object.fill();

        object.beginPath();
        object.strokeStyle = "#FFFFFF";
        object.setLineDash([3]);
        object.moveTo(10, 10);
        object.lineTo(10, 150);
        object.stroke();


        var alias_second = document.getElementById('part-three');
        var object_second = alias_second.getContext("2d");
        object_second.beginPath();
        object_second.strokeStyle = "#FFFFFF";
        object_second.setLineDash([3]);
        object_second.moveTo(20, 20);
        object_second.lineTo(20, 30);
        object_second.stroke();

        object_second.beginPath();
        object_second.strokeStyle = "#FFFFFF";
        object_second.setLineDash([3]);
        object_second.moveTo(20, 30);
        object_second.lineTo(75, 30);
        object_second.stroke();

        object_second.beginPath();
        object_second.strokeStyle = "#FFFFFF";
        object_second.setLineDash([3]);
        object_second.moveTo(75, 30);
        object_second.lineTo(75, 100);
        object_second.stroke();

        object_second.beginPath();
        object_second.fillStyle = "#FFFFFF";
        object_second.arc(76, 100, 4, 0, Math.PI * 2, false);
        object_second.closePath();
        object_second.fill();

        var alias_four = document.getElementById('part-four');
        var object_four = alias_four.getContext("2d");
        object_four.beginPath();
        object_four.strokeStyle = "#FFFFFF";
        object_four.setLineDash([3]);
        object_four.moveTo(28, 10);
        object_four.lineTo(28, 35);
        object_four.stroke();

        object_four.beginPath();
        object_four.strokeStyle = "#FFFFFF";
        object_four.setLineDash([3]);
        object_four.moveTo(28, 35);
        object_four.lineTo(180, 35);
        object_four.stroke();

        object_four.beginPath();
        object_four.strokeStyle = "#FFFFFF";
        object_four.setLineDash([3]);
        object_four.moveTo(180, 35);
        object_four.lineTo(180, 120);
        object_four.stroke();

        object_four.beginPath();
        object_four.fillStyle = "#FFFFFF";
        object_four.arc(180, 120, 4, 0, Math.PI * 2, false);
        object_four.closePath();
        object_four.fill();

        var alias_six = document.getElementById('part-six');
        var object_six = alias_six.getContext("2d");
        object_six.beginPath();
        object_six.strokeStyle = "#FFFFFF";
        object_six.setLineDash([3]);
        object_six.moveTo(28, 20);
        object_six.lineTo(28, 35);
        object_six.stroke();

        object_six.beginPath();
        object_six.strokeStyle = "#FFFFFF";
        object_six.setLineDash([3]);
        object_six.moveTo(28, 35);
        object_six.lineTo(120, 35);
        object_six.stroke();

        object_six.beginPath();
        object_six.strokeStyle = "#FFFFFF";
        object_six.setLineDash([3]);
        object_six.moveTo(120, 35);
        object_six.lineTo(120, 100);
        object_six.stroke();

        object_six.beginPath();
        object_six.strokeStyle = "#FFFFFF";
        object_six.setLineDash([3]);
        object_six.moveTo(120, 100);
        object_six.lineTo(50, 100);
        object_six.stroke();

        object_six.beginPath();
        object_six.fillStyle = "#FFFFFF";
        object_six.arc(45, 100, 4, 0, Math.PI * 2, false);
        object_six.closePath();
        object_six.fill();

        var alias_eight = document.getElementById('part-eight');
        var object_eight = alias_eight.getContext("2d");
        object_eight.beginPath();
        object_eight.strokeStyle = "#FFFFFF";
        object_eight.setLineDash([3]);
        object_eight.moveTo(88, 20);
        object_eight.lineTo(88, 130);
        object_eight.stroke();

        object_eight.beginPath();
        object_eight.strokeStyle = "#FFFFFF";
        object_eight.setLineDash([3]);
        object_eight.moveTo(88, 130);
        object_eight.lineTo(30, 130);
        object_eight.stroke();

        object_eight.beginPath();
        object_eight.fillStyle = "#FFFFFF";
        object_eight.arc(30, 130, 4, 0, Math.PI * 2, false);
        object_eight.closePath();
        object_eight.fill();
    }
});