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
                       
                        <li class="has-dropdown">
                            <a href="">Cree votre compte </a>
                            <ul class="dropdown">
                              
                                <li><a href="/register">Vous voulez être Bénéficiaire ? </a></li>
                                  <li><a href="/registerbini">Vous voulez être Bénévole ?</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="contact">Contact</a></li>
             






                    </ul>   


                </div>

          <li class="has-dropdown">
                            <a href="services.html">Qu'est-ce que vous voulez?</a>
                            <ul class="dropdown">
                                <li><a href="/services">Consulter les activitées disponibles</a></li>
                                <li><a href="/acch">Consulter les besoins des gens </a></li>
                                <li><a href="/cmpcreate">Organiser une Campagne</a></li>
                            </ul>
                        </li>
               
             
                    </ul>   
            </div>
            
        </div>

           <ul>
                       
              

       </nav> 
   
    <header id="gtco-header"  role="banner" style="background-image:url('{{asset('z.png')}}');" data-stellar-background-ratio="0.5">
    



<div class="fb-page" style=" margin-top: 10%;  margin-left:70%; width: 50%;position:absolute; position: fixed;" data-href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/">‏‎Youssef Ait Taher‎‏</a></blockquote></div>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">

  @foreach ($cnb as $ncnb)
 






<div class="panel panel-default" style="margin-top: 20%;">
  <div class="panel-heading"> <strong><i>{{$ncnb->title}}  <h6> {{$ncnb->type_cnb}}</h6>   </i></strong></div>
  <div class="panel-body" style="width: 700px ; word-wrap: break-word;" >

   <center> <img src="{{asset($ncnb->photo_cnb)}}"  style="
       "  height="150" width="150"></center>

 <p >       {{$ncnb->text}}</p>
 
   <video width="700" height="500" controls>
  <source src="{{asset(''.$ncnb->video)}}" type="video/mp4">


</video> 

  </div>
  <font color="black " style="
       float:right;"  ><h3> Vue :  {{$ncnb->nbr_vue}}</h3></font> 





  {{$ncnb->created_at}}
 


  <center><p><a href=<?php echo "/home#".$ncnb->id; ?> class="btn btn-primary" role="button"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Voire</a> </p></center>
     <div class="fb-share-button" data-href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/?ref=bookmarks" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FYoussef-Ait-Taher-306941643080355%2F%3Fref%3Dbookmarks&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">PArtager</a></div></div>
</div>

</div>
</div>



<div class="panel panel-default"   style="margin-left: 10%; top: 70px; right:20px; width: 50%; height: 100%;"   >
  <div class="panel-heading"> Autre Video</div>
  <?php  $a=0;?>
  @foreach ($allcnb as $allncnb )
  <?php  
  $a=$a+1; ?>
@if($a<'7')
 <strong><center>{{$allncnb->title}}  ({{$ncnb->type_cnb}})</center> </strong>
  <div class="panel-body">

  <a href="{{url('watch/'.$allncnb->id)}}"> <video width="200" height="200" controls>
  <source src="{{asset(''.$allncnb->video)}}" type="video/mp4">



</video> 
 <img src="{{asset($allncnb->photo_cnb)}}"  style="
       float:left;"  height="200" width="300" class="img-circle"></a>
</br>
<center>{{$allncnb->created_at}}</center>
 Vue : {{$ncnb->nbr_vue }}
<hr>
  </div> @endif  @endforeach @endforeach  
</div>


</header>
    <footer id="gtco-footer" role="contentinfo"  style="background-image:url('{{asset('aa.png')}}');" data-stellar-background-ratio="0.5" >
        <div class="overlay" ></div>
        <div class="gtco-container"  style="margin-top: 10%;  ">
            <div class="row row-pb-md">

                

                
                <div class="col-md-12 text-center">
                    <div class="gtco-widget">
                        <h3>Contactez nous </h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                    <div class="gtco-widget">
                        <h3>Reseaux sociaux</h3>
                        <ul class="gtco-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 text-center copyright">
                    <p><small class="block">&copy; 2018 Tous droits réservés.</small> 
                     
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

