$(document).ready(function () {
    
    $('.heart').on('click', function () {
        $(this).toggleClass('active');
    });
    $('.hasSubItem>a').on('click',function(){
		if(jQuery(this).parents('#product-product').length == 0){
			if(jQuery(this).parent().hasClass('activeSub')){
				jQuery(this).parent().toggleClass('activeSub');
				jQuery(this).parent().addClass('activeSubPar');
				return false;
			}else{
				if(jQuery(this).parent().hasClass('activeSubPar')){
					jQuery(this).parent().toggleClass('activeSub');
					return false;
				}
			}
		}
		
    });
    $('.forgotpass a').on('click',function(){
        $("#login").modal("hide");
    });
    $('.creaateAkk a').on('click',function(){
        $("#login").modal("hide");
    });
    $('.backToLogin a').on('click',function(){
        $("#forgot").modal("hide");
        $("#createAkk").modal("hide");
    });
    $('.sidebarnavHmt').on('click',function(){
        $(this).parent().toggleClass('openSidebar');
    });
    $('.p_c_t_count .plus, .p_c_t_count .minus').on('click',function(){
        var val_cur = Number($(this).parents('.p_c_t_count').attr('data-cur'));
        if($(this).hasClass('minus')){
            val_cur = val_cur - 1;
        }else{
            val_cur = val_cur + 1;
        }
        if(val_cur < 1){val_cur = 1;}
        if(val_cur > 99){val_cur = 99;}
        $(this).parents('.p_c_t_count').attr('data-cur',val_cur);
        $(this).parents('.p_c_t_count').find('.current').html(val_cur);
        console.log(val_cur);
    });
});

