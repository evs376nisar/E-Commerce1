<head>
    <title>Bootstrap Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{url('/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <script src="{{url('/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{url('/js/custom.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

</head>
<body>
    <section>

        <div class="container-fluid top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 " >
                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>
                    <div class="col-sm-9 contact-info text-right" >
                        <span class="far fa-envelope-open"></span>abc786gmail.com
                        <span class="fas fa-phone"></span>0000099999
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">
                <a class="navbar-brand" href="#">PAK TIGERS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/home')}}">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PRICING</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SOLUTIONS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">for Entrepreneurs & Small Businesses</a>
                                <a class="dropdown-item" href="#">for Accountants</a>
                                <a class="dropdown-item" href="#">SBDC, WBC, VBOC </a>
                                <a class="dropdown-item" href="#">for Educators and Incubators</a>
                                <a class="dropdown-item" href="#">for Enterprises</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/Registration')}}">REGISTRATION</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>

                </div>
            </div>
            <button class="btn  ">Log In</button>
            <button class="btn btn-success ml-2">SignUp</button>
            <!-- Modal -->
            <!--                                <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    Content
                                                    <div class="modal-content form-elegant">
                                                        Header
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        Body
                                                        <div class="modal-body mx-4">
                                                            Body
                                                            <div class="md-form mb-5">
                                                                <input type="email" id="Form-email1" class="form-control validate">
                                                                <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                                                            </div>
                            
                                                            <div class="md-form pb-3">
                                                                <input type="password" id="Form-pass1" class="form-control validate">
                                                                <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
                                                                <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>
                                                            </div>
                            
                                                            <div class="text-center mb-3">
                                                                <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
                                                            </div>
                                                            <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:</p>
                            
                                                            <div class="row my-3 d-flex justify-content-center">
                                                                Facebook
                                                                <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-facebook text-center"></i></button>
                                                                Twitter
                                                                <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-twitter"></i></button>
                                                                Google +
                                                                <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fa fa-google-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        Footer
                                                        <div class="modal-footer mx-5 pt-3 mb-1">
                                                            <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1"> Sign Up</a></p>
                                                        </div>
                                                    </div>
                                                    /.Content
                                                </div>
                                            </div>
                                             Modal 
                            
                                            <div class="text-center">
                                                <a href="" class="btn btn-success" data-toggle="modal" data-target="#elegantModalForm">Login Form</a>
                                            </div>-->
        </nav>
        <section class="header-bottom position-static">

            <marquee width="100%" direction="left" >
                PAK TIGERS

            </marquee>

        </section>
    </div>
    <h2 align="center">REGISTRATION</h2>
    <div class="container">
        <form method="post" action="#">

            <div class="row">

                <div class="col-sm-6">
                    <label for="first_name">First Name</label>

                    <input type="text" class="form-control mt-3" name="first_name"/>
                    <!--<input type="text" class="form-control" name="first_name"/>-->
                </div>
                <div class="col-sm-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control mt-3" name="last_name"/>

                </div>
            </div>
            <div class="row">

                <div class="col-sm-6">
                    <label for="user_name">user Name</label>
                    <input type="text" class="form-control mt-3" name="user_name"/>
                    <!--<input type="text" class="form-control" name="first_name"/>-->
                </div>
                <div class="col-sm-6">
                    <label for="email">Eamil</label>
                    <input type="email" class="form-control mt-3" name="email"/>
                </div>

            </div>
            <div class="row">

                <div class="col-sm-6">
                    <label for="password">password</label>
                    <input type="password" class="form-control mt-3" name="password"/>
                    <!--<input type="text" class="form-control" name="first_name"/>-->
                </div>
                <div class="col-sm-6">
                    <label for="re_type_password">re-type password</label>
                    <input type="password" class="form-control mt-3" name="re_type_password"/>
                </div>
                <div class="col-sm-6">
                    <label for="Contact_Numbers">Contact Number</label>
                    <input type="text" class="form-control mt-3" name="contact_number"/>
                </div>
                <div class="col-xs-12 ">
                    <label for="upload_image">Select Profile Image:</label>
                    <input type="file" name="upload_image" id="upload_image" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="countries">Select Country:</label>
              
                </div>
                <div class="col-sm-6">
                    <label for="Contact_Numbers">Date of Birth</label>
                    
                </div>
                <div class="col-sm-6 ">
                    <label for="Gender">Select Gender:</label>
                    <br/>
                    male<input type="radio" class="" name="male"/>
                    Fe-male<input type="radio" class="" name="fe_male"/>
                </div>

                <button class="btn btn-secondary btn-block">submit</button>

            </div>


        </form>
    </div>

    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #f0f0f0;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 ">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold text-white"><u>PAK TIGERS</u></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="text-white">Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold text-white">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!" class="text-white">Link 1</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Link 2</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">link 3</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">link 4</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold text-white">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!"  class="text-white">Your Account</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Help</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold text-white">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3 text-white"></i> adress</p>
                    <p>
                        <i class="fa fa-envelope mr-3 text-white"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3 text-white"></i> + 01 234 567 89</p>
                    <p>
                        <i class="fa fa-print mr-3 text-white"></i> + 01 234 567 89</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->



    </footer>
    <div class="footer-copyright text-center py-3 text-white " >© 2018 Copyright:
        <a href="#" >www.PakTigers.com</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{url('/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>

</body>