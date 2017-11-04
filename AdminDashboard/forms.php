<?php 

include "templates/header.php";


 ?>
        <!-- Page container -->
        <div id="page-wrapper" class="page-wrapper">
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Forms</h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="panel panel-light-blue">
                                <div class="panel-heading"></div>
                                <div class="panel-body panel-h">

                                        <div class="formContainer">
                                            <h3>Log In</h3>
                                            <div class ="LogIn">
                                              <form action="" method="post">

                                                <!-- Username -->
                                                <div class="formElement">
                                                  <label class="srOnly" for="Username">Username:</label>
                                                  <input type="text" name="username" id="Username" required placeholder="Username" />
                                                </div>

                                                <!-- Password -->
                                                <div class="formElement">
                                                  <label class="srOnly" for="Password">Password:</label>
                                                  <input type="password" name="password" id="Password" required placeholder="Password" />
                                                </div>

                                                <!-- LogIn Button -->
                                                <div class="formElement">
                                                  <input type="submit" class="btn btn-primary" value="Log in" />
                                                </div>

                                              </form>
                                            </div>
                                          </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="panel panel-magenta">
                                <div class="panel-heading"></div>
                                <div class="panel-body panel-h">

                                      <!-- Contact Form -->
                                      <div class="formContainer">

                                        <h3>Contact us</h3>
                                        <div id="Contact">
                                          <form action="" method="post">

                                            <!-- First Name -->
                                            <div class="inputGroup">
                                              <label for="firstName" class="srOnly">First Name:</label>
                                              <input type="text" name="firstName" id="firstName" required placeholder="First Name" />
                                            </div>


                                            <!-- Last Name -->
                                            <div class="inputGroup">
                                              <label for="lastName" class="srOnly">Last Name:</label>
                                              <input type="text" name="lastName" id="lastName" required placeholder="Last Name" />
                                            </div>


                                            <!-- Email -->
                                            <div class="inputGroup">
                                              <label for="email" class="srOnly">Email:</label>
                                              <input type="email" name="email" id="email" required placeholder="Email" />
                                            </div>

                                            <!-- Message -->
                                            <div class="inputGroup">
                                              <label for="message" class="srOnly">Message:</label>
                                              <textarea name="message" id="message" required placeholder="Your Message"></textarea>
                                            </div>


                                            <!-- Submit Button -->
                                            <div class="inputGroup">
                                              <input type="submit" class="btn btn-primary" value="Send" />
                                            </div>

                                          </form>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12"> 
                    <div class="panel panel-light-yellow">
                        <div class="panel-heading"></div>
                            <div class="panel-body panel-h">
                                    <!-- Register-->
                                    <div class="formContainer">  

                                        <h3>Register</h3>
                                            <div id="Register">
                                              <form action="" method="post">
                                                
                                                <!-- First Name -->
                                                <div class="inputGroup">
                                                  <label for="firstName" class="srOnly">First Name:</label>
                                                  <input type="text" name="firstName" id="firstName" required placeholder="First Name" />
                                                </div>


                                                <!-- Last Name -->
                                                <div class="inputGroup">
                                                  <label for="lastName" class="srOnly">Last Name:</label>
                                                  <input type="text" name="lastName" id="lastName" required placeholder="Last Name" />
                                                </div>


                                                <!-- Email -->
                                                <div class="inputGroup">
                                                  <label for="email" class="srOnly">Email:</label>
                                                  <input type="email" name="email" id="email" required placeholder="Email" />
                                                </div>

                                                <!-- Password -->
                                                <div class="inputGroup">
                                                  <label class="srOnly" for="Password">Password:</label>
                                                  <input type="password" name="password" id="Password" required placeholder="Password" />
                                                </div>

                                                <!-- Confirm Password -->
                                                <div class="inputGroup">
                                                  <label class="srOnly" for="confirmPassword">Confirm Password</label>
                                                  <input type="password" name="confirmPassword" id="confirmPassword" required placeholder="Confirm Password"/>
                                                </div>

                                                <!-- Terms and Conditions -->
                                                <div class="inputGroup">
                                                  <input type="checkbox" name="Conditions" value="Conditions" required id="Conditions"/><span>I agree to the terms and conditions.</span>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="inputGroup">
                                                  <input type="submit" class="btn btn-primary" value="Register" />
                                                </div>
                                              </form>
                                            </div>
                                    </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="panel panel-pastel-green">
                        <div class="panel-heading"></div>
                        <div class="panel-body panel-h">
                            <!-- Register-->
                            <div class="formContainer">

                                <h3>Form Types</h3>
                                <br/>

                                        <!-- Success -->
                                        <div class="form-group">
                                            <div class="has-feedback">
                                                <label id="success" for="inputSuccess"><i class="fa fa-check" aria-hidden="true"></i> Input with success</label>
                                                <input type="text" name="inputSuccess" class="has-success" id="inputSuccess" required placeholder="Enter..." />
                                                <p>Successfully done</p>
                                            </div>
                                        </div>

                                        <!-- Warning -->
                                        <div class="form-group">
                                            <div class="has-feedback">
                                                <label id="warning" for="inputWarning"><i class=" fa fa-bell-o" aria-hidden="true"></i> Input with warning</label>
                                                <input type="text" name="inputWarning" class="has-warning" id="inputWarning" required placeholder="Enter..." />
                                                <p>Something went wrong</p>
                                            </div>
                                        </div>


                                        <!-- Error -->
                                        <div class="form-group">
                                            <div class="has-feedback">
                                                <label id="error" for="inputError"><i class="fa fa-times-circle" aria-hidden="true"></i> Input with error</label>
                                                <input type="text" name="inputError" class="has-error" id="inputError" required placeholder="Enter..." />
                                                <p>You gave a wrong info</p>
                                            </div>
                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
<!-- Wrapper End -->
    
<!-- JS Scripts -->
<?php 

    include "templates/footer.php";



?>
 

    </script>
</body>
</html>