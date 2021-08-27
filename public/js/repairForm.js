var peca=0;
$(document).ready(function(){
    $('#add_more').on('click', function(){

        peca++;
        var html ='<div id="append_no_'+peca+'" class="animated bounceInLeft">'+
            '<div class="input-group mt-3">'+
            '<div class="input-group-prepend">'+
            '<span class="input-group-text br-15">'+
            '<i class="fas fa-box"></i></span>'+
            '</div>'+
            '<input type="text" placeholder="Peça Nº'+peca+'"  id="Peca_'+peca+'"  class="form-control" required/>'+ '&emsp;' + '<input type="checkbox"  id="PecaO_'+peca+'" class="flipswitch mt-1"/>'+
            '</div></div>';

        $('#dynamic_container').append(html);
        $('#remove_more').fadeIn(function(){
            $(this).show();
        });
    });

    $('#remove_more').on('click', function(){

        $('#append_no_'+peca).removeClass('bounceInLeft').addClass('bounceOutRight')
            .fadeOut(function(){
                $(this).remove();
            });
        peca--;
        if(peca==0){
            $('#remove_more').fadeOut(function(){
                $(this).hide()
            });
        }

    });
});

