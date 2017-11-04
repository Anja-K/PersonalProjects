<?php 
include "templates/header.php"
;
 ?>

    <!-- Page container -->
    <div id="page-wrapper" class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Timeline</h1>

                            <div class="container">
            <div class="timeline">
                <h2>2017</h2>
                <ul class="timeline-items">
                    <li class="is-hidden timeline-item"> <!-- Normal block, positionned to the left -->
                        <h3>Title</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime mollitia nemo neque, perferendis quod reprehenderit ut, vel veritatis voluptas?</p>
                        <hr>
                        <time>January 2013</time>
                    </li>
                </ul>
                <h2>2016</h2>
                <ul class="timeline-items">
                    <li class="is-hidden timeline-item inverted"> <!-- Normal block, positionned to the right  -->
                        <h3>Title</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aspernatur consequuntur culpa deserunt ea esse est inventore, ipsa laborum officia, quam quia quidem, rem sunt tempora tenetur ullam voluptatem.</p>
                        
                        <hr>
                        <time>Mars 2014</time>
                    </li>
                    <li class="is-hidden timeline-item centered"> <!-- Centered block, positionned in the middle -->
                        <h3>Title</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, cupiditate dicta dignissimos dolorem doloribus ducimus eos error ex molestiae nobis odio odit optio placeat quasi repudiandae, unde velit voluptate voluptatem!
                        </p>
                        <p><a href="#">Link</a></p>
                        <hr>
                        <time>Date</time>
                    </li>

                </ul>
                <h2>2015</h2>
                <ul class="timeline-items">
                    <li class="is-hidden timeline-item">
                        <h3>Title</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur blanditiis dolorem, eos excepturi impedit neque nisi recusandae repudiandae tempora. Ad debitis ducimus est et explicabo, id in nam necessitatibus?</p>

                        
                        <hr>
                        <time>Date</time>
                    </li>
                    <li class="is-hidden timeline-item inverted">
                        <h3>Title</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dignissimos inventore labore maiores mollitia neque nesciunt nulla obcaecati vel velit! Aut, maxime minima? Eos est laborum non optio quidem ut!</p>

                        
                        <hr>
                        <time>Date</time>
                    </li>


                </ul>
                <h2>2014</h2>
                <ul class="timeline-items">
                    <li class="is-hidden timeline-item">
                        <h3>Title</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum magnam quis vero vitae. Adipisci at doloribus eius expedita id, nobis officiis perferendis quae sint ut. Consectetur nostrum obcaecati veritatis!</p>

                        <hr>
                        <time>Date</time>
                    </li>
                    <li class="is-hidden timeline-item">
                        <h3>Title</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, commodi delectus dolor ea maxime modi nobis obcaecati odit, provident quaerat, soluta voluptates! Ex inventore libero placeat quaerat quod sint?</p>
                        
                        <p><a href="#">Link</a></p>
                        <hr>
                        <time>Date</time>
                    </li>
                    <li class="is-hidden timeline-item centered">
                        <h3>Title</h3>
                        <hr>
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid animi architecto aspernatur assumenda dicta distinctio ducimus, fugiat fugit hic itaque laudantium maxime nam praesentium rem sint sit sunt voluptatibus!</span><span>Aliquam aliquid consequuntur cum ipsum itaque libero magni maxime, minima necessitatibus, odit, placeat quam quo ratione recusandae repudiandae sapiente tempore! Alias, id, rerum? Cum deserunt, dolorem explicabo illum numquam quibusdam?</span>
                        </p>
                        
                        
                        <p><a href="#">Link</a></p>
                        <hr>
                        <time>Date</time>
                    </li>


                </ul>

            </div>
        </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>
<!-- Wrapper End -->

<!-- JS Scripts -->
<script src="./js/bootstrap.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.8.0.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.22/jquery-ui.js"></script>

<script>
        $(function() {

        $( "#button-toggle" ).click(function() {
             $( "#menu-down" ).slideToggle( "slow" );
         });
    });

    $( function() {

        $("#responsive-btn").on("click", function(e){
            e.preventDefault();
            $(".sidebar").slideToggle("slow");
        });

         $(".dropdown-list-element").on("click", function(e) {
            $(this).children(".nav-second-level").slideToggle("fast");
        });

        $("#menu-toggle").on("click", function(e) {
            e.preventDefault();
            $("#sidebarid").toggleClass("sidebar-hide");
            $("#page-wrapper").toggleClass("wrapper-hide");
        });

        $( ".sortable" ).sortable();
        $( ".sortable" ).disableSelection();
 
  } );
</script>


<script src="./Timeline/js/jquery.js"></script>
<script src="./Timeline/js/jquery.timelify.js"></script>
    <script type="text/javascript">
        $('.timeline').timelify({
            animLeft: "fadeInLeft",
            animCenter: "fadeInUp",
            animRight: "fadeInRight",
            animSpeed: 600,
            offset: 150
        });

        //   $('.timeline').timelify({
        //     animRight: "fadeInRight",
        //     animCenter: "zoomIn"
        // })
        
    </script>
</body>
</html>