/**
 * Created by Khakan Ali on 11/27/2015.
 */

$(document).ready(function () {
    var item_id;
    $('#display-product-section').on('click','.p-img-bordered',function(){
        if(splitclass($(this).attr('class'))[1] == 'selected-pro'){
            $(this).removeClass('selected-pro');
        }else {
            $('.selected-pro').each(function(){
                $(this).removeClass('selected-pro');
            });
            $(this).addClass('selected-pro');
        }
    });
});

function splitclass(data){
    return data.split(' ');
}
