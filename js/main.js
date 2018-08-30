$(function(){

	$('.probootstrap-toggle').on('click', function(){
		// console.log('nice');

		var mainNav = $('.probootstrap-main-nav');

		
			if ( !mainNav.hasClass('active') ) {
				
					mainNav.addClass('active');
	
			} else {
				mainNav.removeClass('active');
			
			}
		
		
		

	});
	
		
$("#main").mouseover(function() {

	  $("#main").css("background-image:", "url('./images/img_1.jpeg')");
	  $('#main').css("background-image", "url(../images/img_1.jpeg)"); 
	  	  
		//console.log("hola");	  
  
});

$("#main").mouseout(function() {	

	  $("#main").css("background-image", "url('images/1718a076e29822051df8bcf8b5ce1124-logo-de-android-by-vexels.png')");	  
	  
		console.log("hola");	  
  
  
  
});

	





	

});