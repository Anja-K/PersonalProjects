$(function() {



        $( "#subreddits-btn" ).click(function() {
        	

        	var top = $('body').scrollTop();
        	
        	
              $(".page-wrapper").toggleClass("wrapper-hide");
              $( ".sidebar" ).toggleClass("sidebar-hide");
              $(".hide-before").toggleClass("show-before");
         

         });


        $("#back").on("click", function(e) {
            e.preventDefault();
            
             $( ".sidebar" ).toggleClass("sidebar-hide");
             $(".page-wrapper").toggleClass("wrapper-hide");
             $(".hide-before").toggleClass("show-before");
            
        });

        $('#search-btn').click(function(e){
        	e.preventDefault();
  			$('#search').toggleClass('clicked');
  			if($('#search').hasClass('clicked')){
   			 $('.btn-extended').focus();
			}

   			var icon = $(this).html();
              $(this).html(icon == '<i class="fa fa-search" aria-hidden="true"></i>' ? '<i class="fa fa-times" aria-hidden="true"></i>' : '<i class="fa fa-search" aria-hidden="true"></i>');
  

  		});	

        $( ".collapse-btn" ).on("click", function(e) {
        	e.preventDefault();
        	  $(this).parents('.top').parent('.comment').toggleClass("closed-comment");
              $(this).parents('.top').siblings('.hide-child').toggleClass("hide-content");
              $(this).parents('.top').find(".children").toggleClass("show-children");

              var text = $(this).html();
              $(this).html(text == '<i class="fa fa-plus" aria-hidden="true"></i>' ? '<i class="fa fa-minus" aria-hidden="true"></i>' : '<i class="fa fa-plus" aria-hidden="true"></i>');

         });


        
    });