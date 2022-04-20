$(document).ready(function(){
    $('.body .menu > div > div > li').click(function(){
        const value = $(this).attr('data-filter');
        if (value == 'all'){
            $('.item').show(700);
        }else{
            $(".item").not('.'+value).hide(100);
            $('.item').filter('.'+value).show(700);
        }
    $(this).click(function(){
        $('.body .menu > div > div > li').addClass("active").siblings().removeClass('active');
        })
    })
    $(document).on("load", function(){
        $('.preloader').fadeOut(900);
    })
})