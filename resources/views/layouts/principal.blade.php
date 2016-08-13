<!DOCTYPE html>
<html>
<head>
<title>Cinema</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- header-section-starts -->
    <div class="full">
            <div class="menu">
                <ul>
                    <li><a class="active" href="{{url('/')}}"><i class="home"></i></a></li>
                    <li><a href="{{url('reviews')}}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
                    <li><a href="{{url('contacto')}}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
                </ul>
            </div>
        <div class="main">
            
            @yield('content')



            <div class="footer">
                <h6>Disclaimer : </h6>
                <p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
                <a href="example@mail.com">example@mail.com</a>
                <div class="copyright">
                    <p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
                </div>
            </div>
        </div>  
    </div>

    <script type="text/javascript">
    $(window).load(function() {
        
      $("#flexiselDemo1").flexisel({
            visibleItems: 6,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,            
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 2
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 4
                }
            }
        });
        });
    </script>  
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>    
        
</body>
</html>