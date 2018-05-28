import $ from 'jquery';
import waypoints from '../../../../node_modules/waypoints/lib/noframework.waypoints';
import smoothScroll from 'jquery-smooth-scroll';


/*  #### Przyklejanie nawigacji  ####  */

		    $(document).ready(function()
		    {
                var stickyNavTop = $('.nav').offset().top;
            	 
			   
			
                 var stickyNav = function()
			       {
                      var scrollTop = $(window).scrollTop();

                      if (scrollTop > stickyNavTop)
						      { 

						 
				          $('.nav').addClass('sticky');
		                
                         
                   } else {
         
				           $('.nav').removeClass('sticky');
						      
                   }
             };

               stickyNav();

               $(window).scroll(function()  
			    {
                  stickyNav();
                });
            });