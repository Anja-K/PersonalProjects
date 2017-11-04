<!-- JS Scripts -->
<script src="./js/bootstrap.js"></script>

<!-- Load d3.js and c3.js -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.8.0.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.22/jquery-ui.js"></script>

<script src="js/index.js"></script>

    <!-- Menu Toggle Script -->
    <script>

    $(function() {

        $( "#button-toggle" ).click(function() {
             $( "#menu-down" ).slideToggle( "slow" );
         });

        $(".dropdown-list-element").on("click", function(e) {
            $(this).children(".nav-second-level").slideToggle("fast");

        });
    });

    $( function() {

        $("#menu-toggle").on("click", function(e) {
            e.preventDefault();
            $("#sidebarid").toggleClass("sidebar-hide");
            $("#page-wrapper").toggleClass("wrapper-hide");

            // Toggle Icon Rotation
          $(this).children('.fa-chevron-left').toggleClass("fa-chevron-right"); 
        });

        $('input').blur(function() {
            var pass = $('input[name=password]').val();
            var repass = $('input[name=confirm]').val();
            if(($('input[name=password]').val().length == 0) || ($('input[name=confirm]').val().length == 0)){
                $('#password').addClass('has-error');
            }
            else if (pass != repass) {
                $('#Password').addClass('has-error');
                $('#confirm').addClass('has-error');
            }
            else {
                $('#Password').removeClass().addClass('has-success');
                $('#confirm').removeClass().addClass('has-success');
            }
        });



      //   $("#1").on("click", function(e){

      //          // e.preventDefault();

               
      //          var currentPosition = $(this).parents('td').prevAll('td:eq(1)').children('input').val();

      //          console.log(currentPosition);

                 
      //          $('.user-profile-details').children('p').text(currentPosition);

             
      // });

       

        $('#order-items').sortable({
            containment: 'parent',
            update: function () {
            var data = $(this).sortable('serialize');

        
        $.ajax({
            type: "GET",
            dataType: "JSON",
            url: "DB/reorder.php",
            data: data
        });
    }
});
     } );
   
