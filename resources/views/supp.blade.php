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
                       
                            <ul class="dropdown">
                              
                                <li><a href="/register">Vous voulez être Bénéficiaire ? </a></li>
                                  <li><a href="/registerbini">Vous voulez être Bénévole ?</a></li>
                                
                            </ul>
                        </li>
                       
              <li class="btn-cta"><a href="/contact"><span>Contact</span></a></li>
 <li class="btn-cta"><a href="/create"><span>Postez une annonce</span></a></li>
 <li class="btn-cta"><a href="/logout"><span>Déconnecter</span></a></li>




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
    



<div class="fb-page" style=" margin-top: 19%;  margin-left:70%; width: 50%;position:absolute; position: fixed;" data-href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Youssef-Ait-Taher-306941643080355/">‏‎Youssef Ait Taher‎‏</a></blockquote></div>


 

<div class="container" style="margin-top: 0%;" >

  <div  style="width: 70%; margin-top: 19%; margin-left: 0%;" class="panel panel-primary" >
    <div class="panel-body"> 
    <div class="form-group">
        <form method="POST" action="{{ url('hhh') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
      <label for="sel1">Ville</label>
      <select class="form-control" style="width: 50%;" name="ville">
              <option></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
          <label for="sel1">type de contribution </label>
       <select class="form-control" style="width: 50%; " name="type_cnb">
        <option></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
   
 <button type="submit" class="btn btn-warning">
                                   Rechercher
                                </button></form></div>
 
                            

                                
</div>
 </div>

             



 <?php $count=0; ?>

 <div class="panel panel-info" style="width: 70%;"  >


















<h1>@include('sweet::alert')  </h1>

 
 <div class="alert alert-warning">
 @if(session()->has('eroor'))
{{session()->get('eroor')}}  @endif </div>

      <div class="panel panel-default"><h2>  <font color="#FF8C00">MES CONTRIBUTIONS</font>    </h2> </div>
      <div class="panel-body">


<div class="fb-share-button"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>


  @foreach ($cnb as $ncnb) <?php $count=$count+1 ;  ?>


 <a id=<?php echo $ncnb->id; ?> ></a>


      <div >
      <div >
<center>
        <img src="{{asset($ncnb->photo_user)}}" class="img-circle" height="42" width="42"> 

        <strong>{{$ncnb->name}}      </strong>         
     </div> </center>

      <div class="panel-body"> <strong>{{$ncnb->title}}       </strong>

 
  <div class="row">
 
   
     
      <div class="caption">
        <h3></h3>
        <p></p>



<div class="panel panel-default" style="float:left; width: 90%;" height="420" width="420">
  <div class="panel-heading" ><strong> text</strong> </div>
  <div class="panel-body">
   <p style="width: 30%;"    {{$ncnb->text}} </p>
    <img src="{{asset($ncnb->photo_cnb)}}"  style="
       float:left;"  height="150" width="150">
 

  </div>
     <div class="panel-footer"> <img src="{{asset('email.jpg')}}" class="img-circle" height="42" width="42"> {{$ncnb->email}} 
<img src="{{asset('tele.jpg')}}" class="img-circle" height="42" width="42"> {{$ncnb->tel}} 
<img src="{{asset('ville.jpg')}}" class="img-circle" height="42" width="42"> {{$ncnb->ville}}




     </div>
</div>
@if($ncnb->video!=null)
<a href="{{url('watch/'.$ncnb->id)}}"><img src="{{asset('Video.jpg')}}" class="img-circle" height="200" width="50"></a>@endif
        

</div></div>

 <center><p><a href="{{url('home')}}" class="btn btn-info" role="button">Annuler</a> <a href="{{url('delete/'.$ncnb->id)}}" role="button" class="btn btn-danger">Vous êtes sûre de supprimé cette annonce </a></p>
 {{$ncnb->created_at}}

 </center>
 <hr>
  
</div></div>
@endforeach 
@if($count==5)

 <center> <ul class="pagination">
    <li><a href="{{url('/home')}}">Acchueih</a></li>
    <?php  $ncnb->id=$ncnb->id-10; ?>
   
    <li class="active"><a href="{{url('indexusers/'.$ncnb->id)}}">page précedent</a></li>
   <?php  $ncnb->id=$ncnb->id+10; ?>
    <li><a href="{{url('indexusers/'.$ncnb->id)}}">page suvaint </a></li>
   
  </ul>



@endif









 </div>
   </div>


</div></div>




</div>

</div>


    <footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5" >
        <div class="overlay" ></div>
        <div class="gtco-container"  style="margin-top: 0%;  ">
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

