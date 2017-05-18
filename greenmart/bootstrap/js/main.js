
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle(150);
            e.stopPropagation();
            e.preventDefault();
        });
    });



$(function() {

    $("#menu-lg").mouseover(function() {
        $("#submenu-frame").height(300);
        $(".img-submenu").height(300);
        $(".content-submenu").height(300);

    });

    $(".house").mouseover(function(){
    	$('#Household').siblings().hide();
        $('#Household').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/household.jpg");
    });

    $(".lqr").mouseover(function(){
    	$('#Liquor').siblings().hide();
        $('#Liquor').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/liquor.jpg");
    });

    $(".bek").mouseover(function(){
    	$('#Bakery').siblings().hide();
        $('#Bakery').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/bakery.jpg");
    });

    $(".gro").mouseover(function(){
    	$('#Grocery').siblings().hide();
        $('#Grocery').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/grocery.jpg");
    });

    $(".drinks").mouseover(function(){
    	$('#Drinks').siblings().hide();
        $('#Drinks').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/drink.jpg");
    });

    $(".des").mouseover(function(){
    	$('#nosub').siblings().hide();
        $('#nosub').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/desert.jpg");
    });

    $(".veg").mouseover(function(){
    	$('#Vegetables').siblings().hide();
        $('#Vegetables').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/vegetable.jpg");
    });

    $(".meat").mouseover(function(){
    	$('#nosub').siblings().hide();
        $('#nosub').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/Meat.jpg");
    });

    $(".fish").mouseover(function(){
    	$('#nosub').siblings().hide();
        $('#nosub').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/fish.jpg");
    });

    $(".home").mouseover(function(){
    	$('#Homeware').siblings().hide();
        $('#Homeware').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/homeware.jpg");
    });

    $(".fruit").mouseover(function(){
    	$('#nosub').siblings().hide();
        $('#nosub').show();
        $("#cat-img").attr("src","http://localhost/greenmart/img/fuits.jpg");
    });


    $("#menu-lg").mouseleave(function() {
        $("#submenu-frame").height(0);
        $(".img-submenu").height(0);
        $(".content-submenu").height(0);
    });

});






	$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
    //admin
    $(function(){
    $('#tob').click(function(){
        if($('#mySidenav').width()!=0)
        {
            $('#mySidenav').width('0');
            $("#tob").attr('class', 'glyphicon glyphicon-menu-hamburger');
        }
        else
        {
            $('#mySidenav').width('250');
            $("#tob").attr('class', 'glyphicon glyphicon-remove');
        }
    });
    /*$('#mySidenav').mouseleave(function(){
        $('#mySidenav').width('0');
    });*/
});

    
