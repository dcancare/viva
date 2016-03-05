 $(document).on('scroll', function (e) {
 	
 	if (window.scrollY < 1 || window.scrollY > 200) 
 	{
 		 $('.navbar').css('opacity', 1);
 	}
 	else
 	{
   		 $('.navbar').css('opacity', ($(document).scrollTop() / 450));
 	}
 });
