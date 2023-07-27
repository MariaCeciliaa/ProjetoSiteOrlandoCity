<footer>
			
			<div class="row row-cinzac">
				
				<div class="container">

                    <div class="row">

                        <div class="col-md-2 text-center">
                                        
                            <img class="logotipo" src="img/orlando-logo.png" alt="Logotipo">

                                    </div>
                                    <div class="col-md-10">
                                        
                                        <div class="row row-cols">
                                            <div class="col-md-4 col-popular-post">
                                                
                                                <h4>POPULAR POSTS</h4>

                                                <ul class="list-unstyled">
                                                    <li>
                                                        <h5>Neque porro quisquam est, quister.</h5>
                                                        <time>January 01, 2016</time>
                                                    </li>
                                                    <li>
                                                        <h5>Neque porro quisquam est, quister.</h5>
                                                        <time>January 01, 2016</time>
                                                    </li>

                                                </ul>

                                            </div>
                                            <div class="col-md-4 col-links">
                                                
                                                <h4>LINKS</h4>

                                                <ul class="list-unstyled">
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Tickets</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Schedule</a></li>
                                                </ul>

                                            </div>
                                            <div class="col-md-4 col-get-in-touch">
                                                
                                                <h4>GET IN TOUCH</h4>

                                                <address>
                                                    <i class="fa fa-map-marker"></i> <span>618 E. South Street, Suite 510<br/>Orlando, FL 32801</span>
                                                </address>

                                                <p><a href="tel:1855ORLCITY"><i class="fa fa-phone"></i>1.855.ORL.CITY</a></p>

                                                <ul class="list-unstyled list-socials">
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

			</div>

			<div class="row row-cinzae">
				
				<div class="container">
					
					<p class="text-left">Copyright © Orlando City Soccer 2016. All rights reserved.</p>
					<p class="text-roxo">Created by HCODE in Udemy</p>

				</div>

			</div>

		</footer>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>

        <script>

            $(document).ready(function () {

                $("#logotipo").on("mouseover", function(){

                    //essas expressoes mudam o css do elemento de acordo com algum evento no site
                    //$("#banner h1").css("color", "red");  
                    // OU
                    // $("#banner h1").css({"color": "purple", 
                    //                     "text-shadow": "10px 10px 10px rgba(9, 0, 0, .45);", 
                    //                     "transition": "1s", 
                    //                     "font-size": "12em"});

                    //por fim utilizando desta ultima maneira cria uma classe no css p fazer o efeito q será passado
                    
                    $("#banner h1").addClass("efeito");

                }).on("mouseout", function () {

                    $("#banner h1").removeClass("efeito");

                });

            });

        </script>

    </body>
</html>