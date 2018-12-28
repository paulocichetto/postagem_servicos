
		jQuery(function($){
  			$('.input').css({
          'display' : 'none'
        });

        $('.abas-menu input').click(function(){
    		var input = $(this);
    		var active_tab_class = 'menu-aba-atual';
    		var the_tab = '.' + input.attr('id');
    
   			$('.abas-menu label').removeClass(active_tab_class);
   			 input.addClass(active_tab_class);
    
    		$('.aba-conteudo .abas').css({
      		'display' : 'none'
    		});
    
    		$(the_tab).show();
    
    		return true;

  		  });

        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 4000); // Change image every 2 seconds
        }
		});