
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

		});