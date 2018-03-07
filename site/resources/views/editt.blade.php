<!DOCTYPE HTML>
<!--
    Aesthetic by gettemplates.co
    Twitter: http://twitter.com/gettemplateco
    URL: http://gettemplates.co
-->
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="GetTemplates.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('theme/css/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{asset('theme/css/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">

    <!-- Bootstrap DateTimePicker -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap-datetimepicker.min.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('theme/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
    <div class="gtco-loader"></div>
    
    <div id="page">

    
    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="/">KHAYR <em>.</em>com</a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="/home">Menu</a></li>
                        <li class="has-dropdown">
                            <a href="services.html">Services</a>
                            <ul class="dropdown">
                                <li><a href="#">Food Catering</a></li>
                                <li><a href="#">Wedding Celebration</a></li>
                                <li><a href="#">Birthday's Celebration</a></li>
                            </ul>
                        </li>
                        <li><a href="contact">Contact</a></li>
                        <li class="btn-cta"><a href="#"><span>Reservation</span></a></li>
                    </ul>   
                </div>
            </div>
            
        </div>
    </nav>





    <header id="gtco-header"  role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
    

<div class="fb-page" style=" margin-top: 10%;  margin-left:70%; width: 50%;position:absolute; position: fixed;" data-href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/">‏‎Youssef Ait Taher‎‏</a></blockquote></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                  @foreach ($cnb as $ncnb)
                  <div class="panel-group">
  <div class="panel panel-default " style="margin-top: 20%;">
    <div class="panel-body">
                <div class="card-header"><center><h3><strong>  <img src="{{asset('edite.png')}}"  height="70" width="250"> </strong></strong></h3></div></center>

                <div class="card-body">
                    <form method="POST" action="{{ url('update/'.$ncnb->id) }}" enctype="multipart/form-data">
                        @csrf
</br>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $ncnb->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">text</label>

                            <div class="col-md-6">
                             

                                 <textarea rows="4" cols="50" id="text" type="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="text" value="{{ $ncnb->text }}" required autofocus>
{{ $ncnb->text }}
</textarea> 

                                @if ($errors->has('text'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       







                        <div class="form-group row">
                            <label for="type_cnb" class="col-md-4 col-form-label text-md-right">type_cnb</label>

                            <div class="col-md-6">
                           <select name="type_cnb">
  <option value="{{$ncnb->type_cnb}}">{{$ncnb->type_cnb}}</option>
   

</select> 
                            </div>
                        </div>


  <div class="form-group row">
                            <label for="type_cnb" class="col-md-4 col-form-label text-md-right">photo </label>
 <img src="{{asset($ncnb->photo_cnb)}}"  style="
       float:left;"  height="150" width="150">

                            <div class="col-md-6">
 
            
 </div>
                        </div><center>  <input type="file" name="photo_cnb"></center>

  <div class="form-group row">
                            <label for="type_cnb" class="col-md-4 col-form-label text-md-right">video </label>
                            @if($ncnb->video!=null)
 <video width="400" height="300" controls>
  <source src="{{asset(''.$ncnb->video)}}" type="video/mp4">



</video> @endif
                            <div class="col-md-6">

            

                        </div>


                        <div class="form-group row mb-0"><input type="file" name="video" >
                            <div class="col-md-6 offset-md-4">
                                 </div> 
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>Panel Content</div>
  </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div></header>




 <footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg) " data-stellar-background-ratio="0.5" >
        <div class="overlay" ></div>
        <div class="gtco-container"    ">
            <div class="row row-pb-md">

                

                
                <div class="col-md-12 text-center">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                    <div class="gtco-widget">
                        <h3>Get Social</h3>
                        <ul class="gtco-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 text-center copyright">
                    <p><small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
                        <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
                </div>

            </div>

            

        </div>
    </footer>
    <!-- </div> -->

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="{{asset('theme/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('theme/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('theme/js/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
    <!-- countTo -->
    <script src="{{asset('theme/js/jquery.countTo.js')}}"></script>

    <!-- Stellar Parallax -->
    <script src="{{asset('theme/js/jquery.stellar.min.js')}}"></script>

    <!-- Magnific Popup -->
    <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/js/magnific-popup-options.js')}}"></script>
    
    <script src="{{asset('theme/js/moment.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap-datetimepicker.min.js')}}"></script>


    <!-- Main -->
    <script src="{{asset('theme/js/main.js')}}"></script>

    </body>
</html>





