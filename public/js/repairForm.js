var i=0;
$(document).ready(function(){
    $('#add_more').on('click', function(){

        i++;
        var html ='<div id="append_no_'+i+'" class="animated bounceInLeft">'+
            '<div class="input-group mt-3">'+
            '<div class="input-group-prepend">'+
            '<span class="input-group-text br-15">'+
            '<i class="fas fa-box"></i></span>'+
            '</div>'+
            '<input type="text" placeholder="Peça Nº'+i+'"  class="form-control"/>'+ '&emsp;' + '<input type="checkbox" class="flipswitch mt-1"/>'+
            '</div></div>';

        $('#dynamic_container').append(html);
        $('#remove_more').fadeIn(function(){
            $(this).show();
        });
    });

    $('#remove_more').on('click', function(){

        $('#append_no_'+i).removeClass('bounceInLeft').addClass('bounceOutRight')
            .fadeOut(function(){
                $(this).remove();
            });
        i--;
        if(i==0){
            $('#remove_more').fadeOut(function(){
                $(this).hide()
            });;
        }

    });
});

