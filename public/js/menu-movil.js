// window.onload = function(){

	$(".menu-movil").click(function(){
		$(".menu-movil").css('display', 'inline-block');
        $(".desplegable-movil").slideToggle('fast', function(){

        });

    });
	//de esta manera cuando clickeo fuera del div del menu se va el menu
 //    $("html").click(function() {
 //    	$(".desplegable-movil").hide();
 //    	$(".menu-movil").show();
	// });
	// $('.menu-movil').click(function (e) {
	//     e.stopPropagation();
	// });
// }
