
<!DOCTYPE HTML>
<head>
<title>Larvel Ecomm Store</title>
<link href="/images/logo.png" rel="icon">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/padding.css" />
    <link rel="stylesheet" type="text/css" href="/css/styles.css?v=7" />
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css" />
    <script src="/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="/lightbox/dist/css/lightbox.css">
    <script src="/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="/js/jquery.matchHeight-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <style>

        #q::-ms-clear {
            display: none;
        }

	.hideVideo{ visibility:hidden }

.breadcrumb li a, .breadcrumb li{ color:#000;font-size:14px !important }
.breadcrumb{ background:#f4f4f4;padding-top:10px;padding-bottom:10px;font-size:16px }

    </style>
    <script>

        $(function(){

            $('.search-input-icon').click(function(){

                if( $('#pc-search-form').val() == '' ){

                    alert('Please enter a search term');
                    $('#pc-search-form').focus();
                    return false;
                }

                $('#search1-form').submit();

            });

            $('#icon-search').click(function(){

                $('#mobile-search-form').submit();

            });



        });

    </script>
    <script>
        $(function() {
            $('.pc-product-holder').matchHeight({byRow : true});
            $('.search-height').matchHeight({byRow : false});
            $('.footer-subscribe-block').matchHeight({byRow : false});
            $('.footer-subscribe-block-left').matchHeight({byRow : false});
            $('.footer-main-block').matchHeight({byRow : false});

        });
    </script>
    
    
        
<style>

@media  ( min-width: 992px ) {

#hidden-video-div { z-index:9;width:355px;position:fixed;top:62px;right:10px }

}

@media  ( max-width: 991px ) {

	#hidden-video-div { z-index:9;width:200px;position:fixed;bottom:30px;right:10px }
	.mobile-padding-off{
		padding: 0 !important;
	}

}

#hideVideo{ display:none !important }

</style>
    
<script>
 $(window).on('load', function () {
	$('.mob-product-holder').matchHeight({byRow : true});
	$('.mob-product-holder-img').matchHeight({byRow : true});
	$('.mob-product-holder-text').matchHeight({byRow : true});
	$('.mob-product-holder-stamp-club').matchHeight({byRow : true});
 });
</script>
<script>
 $(window).on('load', function () {
 
	$('.pc-product-image').matchHeight({byRow : true});
	$('.pc-product-title').matchHeight({byRow : true});
	$('.pc-product-title-holder').matchHeight({byRow : true});

 });
</script>
    
</head>
<body style="overflow-x: hidden">

<div id="hidden-video-div">
	
	<div id="mini-live-video-banner"></div>
	<div id="mini-live-video"></div>
	<div id="watch-the-show"></div>
	<div id="close-the-show"></div>
	<div id="open-the-show"></div>

</div>





<style>
    @media(max-width: 991px){
        .navbar-toggle{
            display: unset !important;
        }
	

	
    }
    @media(min-width: 992px){
        .navbar-toggle{
            display: none !important;
        }
    }
    .dark-bg{
        background: #696969 !important;
        color:white;
        padding: 10px;
    }
    .container-fluid-1400{
        max-width: 1600px;
        margin: auto;
    }
    .half-block{
        width: 50%;
        float:left;
    }
    .search-input{
        border-radius: 40px;
        height: 40px;
        width: 100%;
        font-weight: 700;
        font-size: 15px;



    }
    .search-input-icon{
        width: 30px;
        height: 30px;
        border-radius: 100%;
        background: #cb889a;
        position: absolute;
        right:5px;top:5px;
        cursor: pointer;
        color:white;
    }
    .search-input-categories{
        width: 200px;
        height: 40px;
        border-radius: 28px;
        background: #cb889a;
        position: absolute;
        left:0px;
        top:0px;
        color:white;
        cursor: pointer;
        line-height: 35px;
    }
    
        
    input::placeholder {
        font-weight: normal;
        font-size: 15px;
        color:#A0A0A0 !important;
    }
    
        
    </style>
<div class="container-fluid dark-bg visible-md visible-lg " style="padding-bottom: 4px !important;">
    <div style="max-width: 1400px;margin: auto;width: 95%;">
        <div class="row">
            <div class="col-md-6">
                <span style="position: relative;top:8px;">
                    <span><i class="far fa-envelope pr-5" style="color:#cb889a;font-size: 12px;position: relative;top:1px;"></i> <span style="font-weight: 600;font-size: 12px;"><a href="mailto:info@">info@</a></span></span>
                </span>

		
            </div>
            <div class="col-md-6">

                <a href="/basket">
                    <div style="width: fit-content;position: relative;height: auto;float: right">
                        <div class="same-nav-cart-block" style="float:left;margin-right: 20px;margin-top:5px">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="same-nav-cart-block" style="float:left;">
                            <p style="font-weight: 900;font-size: 13px;margin-bottom:-3px !important;margin-top:5px">My Cart</p>
                            <span id="count_items" style="font-weight: 900;font-size: 13px;color:#c6c6c6">{{ $cartCount }} item(s)</span>
                        </div>
                    </div>
                </a>

                <div style="float: right;position: relative;top:8px;left:-50px;">

@guest

                     <span class="pr-20" style="font-size: 13px;font-weight: 600;">
                                            <a href="/login" style="font-size: 12px;padding:7px;padding-top:6px !important;padding-bottom:6px !important;background:#CB889A;color:#fff;text-decoration:none"><i class="fa fa-user"></i> Sign In</a>
                                        </span>

@endguest

@auth

Welcome {{ auth()->user()->first_name }}

&nbsp;&nbsp;&nbsp;

                     <span class="pr-20" style="font-size: 13px;font-weight: 600;">
                                            <a href="/account" style="font-size: 12px;padding:7px;padding-top:6px !important;padding-bottom:6px !important;background:#CB889A;color:#fff;text-decoration:none"><i class="fa fa-user"></i> Account</a>
                                        </span>


                     <span class="pr-20" style="font-size: 13px;font-weight: 600;">
                                            <a href="/logout" style="font-size: 12px;padding:7px;padding-top:6px !important;padding-bottom:6px !important;background:#CB889A;color:#fff;text-decoration:none"><i class="fa fa-user"></i> Sign Out</a>
                                        </span>

@endauth




                    
                                        </div>
		
		
		<div style="float: right;position: relative;top:8px;left:-150px;display:none">
		
		<a href="/wishlist" style="font-size: 12px;padding:7px;padding-top:6px !important;padding-bottom:6px !important;background:#CB889A;color:#fff;text-decoration:none"><i class="fa fa-heart"></i> 1</a>
                    
		</div>
		
		
            </div>
        </div>

    </div>
    <div class="row mt-10">
        <hr style="margin:0;border-color: #e3bfcc !important;">
    </div>
</div>

<div class="container-fluid visible-md visible-lg " style="padding: 0 !important;">

<form action="/search/" method="get" id="search1-form">

    <div class="container">
        <div class="row">
            <div class="col-md-2 pt-10">
                <a href="">
                    <a href="/"><img src="/images/logo-search-grid-desktop.png" width="100%"></a>
                </a>

            </div>
            <div class="col-md-7 pt-50">
	    
                <div style="width: 100%; position: relative">
                    
                        <input class="form-control search-input" id="pc-search-form" autocomplete="off" placeholder="Search products..." name="q" value=""> 
                    
                    <div class="search-input-icon">
                        <i class="fas fa-search" style="position: absolute;left:50%;top:50%;transform: translate(-50%,-50%);font-size: 15px;"></i>
                    </div>
		    

		    
                </div>	
		
	 

		
            </div>
            <div class="col-md-3">  test   </div>


        </div>
    </div>
    



</form>


</div>
<div class="container-fluid dark-bg visible-md visible-lg" style="padding: 0 !important;background: #696969 !important;display:none">
    <div style="margin: auto;width: 95%;background: #696969;position: relative;display:none">
        <div style="position: absolute;top:50%;right:0;transform: translate(0,-50%);">
            <div style="background: linear-gradient(to right,#e4c2cd,#e4c2cd,#eae3f5) !important;" class="social-media fb pull-right"><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram" style="color:#696969;position:relative;top:-4.5px;left:0.5px;font-size: 14px;"></i></a></div>
            <div style="background: linear-gradient(to right,#e4c2cd,#e4c2cd,#eae3f5) !important;" class="social-media fb pull-right"><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" style="color:#696969;font-size: 14px;top:-5px;left:1px;position: relative"></i></a></div>
            <div style="background: linear-gradient(to right,#e4c2cd,#e4c2cd,#eae3f5) !important;" class="social-media fb pull-right"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter" style="color:#696969;position:relative;top:-4px;font-size: 14px;"></i></a></div>
            <div style="background: linear-gradient(to right,#e4c2cd,#e4c2cd,#eae3f5) !important;" class="social-media fb pull-right ml-5"><a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f" style="color:#696969;position:relative;top:-5px;left:1px;font-size: 14px;"></i> </a> </div>

        </div>
        <div class="row" style="width: fit-content;margin: auto">
            <ul class="nav navbar-nav">
                <li class="link ">

                    <a class="visible-lg" href="">Home</a>
                    <a class="hidden-lg" href="">Home</a>
                </li>
                <li class="link ">

                    <a class="visible-lg" href="/about-us">About Us</a>
                    <a class="hidden-lg" href="/about-us">About Us</a>
                </li>
                <li class="link ">

                    <a class="visible-lg" href="/latest-videos">Latest Videos</a>
                    <a class="hidden-lg" href="/latest-videos">Latest Videos</a>
                </li>
                <li class="link ">

                    <a class="visible-lg" href="/previous-videos">Videos Last 2 Weeks</a>
                    <a class="hidden-lg" href="/previous-videos">Videos Last 2 Weeks</a>
                </li>
                <li class="link ">

                    <a class="visible-lg" href="/contact">Contact</a>
                    <a class="hidden-lg" href="/contact">Contact</a>
                </li>
            </ul>

        </div>
    </div>

</div>



<div class="hidden-md hidden-lg text-right pr-15 pt-7" style="width:100%;background:#CB889A;height:35px;font-size:16px">

          
                <a style="color:#fff !important;text-decoration:none !important" href="/login"><i class="fa fa-user"></i> Sign in</a>
       
            
</div>

<style>
.mobile-logo{
	top:9px;
	max-width: 77px !important;
	width: 77px !important;
}

@media(max-width: 359px){

	#sbm-shop-button{ display:none !important }

}

</style>

<nav class="navbar navbar-default navbar-static-top mt-0 mb-0 container-fluid no-padding  visible-sm visible-xs" style="padding: 0 !important;min-height: 85px;" >

    <div class="container no-padding pr-6 pl-6">

        <a href="">
            <img alt="logo" class="mobile-logo" src="/images/logo-search-grid-desktop.png">
        </a>

        <div class="navbar-header">	
	
            <button onclick="$('.toggle-btn').slideToggle()" style="position: absolute;right:10px;top:62%;transform: translate(0,-75%);margin-right: 5px !important;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <script>
                var search1Var = false;

                function handleSearch2(){
                    search1Var = !search1Var;

                    if(search1Var == true){
                        $("#mySearch2").stop().animate({
                            height: "125px"
                        });
                    }
                    if(search1Var == false){
                        $("#mySearch2").stop().animate({
                            height: "0"
                        });
                    }
                }
            </script>
                <i  onclick="handleSearch2()" class="fa fa-search fa-2x" style="color:#CB889A; position: absolute;right:115px;top:61%;transform: translate(0,-50%);margin-right: 5px !important;padding: 10px;"></i>

            <button style="position: absolute;right:60px;top:62%;transform: translate(0,-75%);margin-right: 5px !important;" type="button" class="navbar-toggle collapsed pt-5 pb-5 white">
                <span class="sr-only">Toggle navigation</span>
                <a id="count_items_mobile" style="color:#fff" class="white" href="/basket"> <i class="fa fa-shopping-cart white"></i> {{ $cartCount }} </a>
            </button>
	    


        </div>
    </div> <!-- mobile -->
</nav>

<div class="container-fluid toggle-btn" style="display: none;">
    <ul class="nav navbar-nav mt-0 mb-10 pt-10 pb-10">
        <li class="link ">

            <a class="visible-sm visible-xs" href="">Home</a>
        </li>
        <li class="link ">

            <a class="visible-sm visible-xs" href="/about-us">About us</a>
        </li>
        <li class="link ">
            <a class="visible-sm visible-xs" href="/catch-up-tv">Catch Up TV</a>
        </li>
        <li class="link ">
            <a class="visible-sm visible-xs" href="/tv-schedule">TV Schedule</a>
        </li>
        <li class="link ">
            <a class="visible-sm visible-xs" href="/awesome-deals">Awesome Deals</a>
        </li>
        <li class="link ">
            <a class="visible-sm visible-xs" href="/video-gallery">Video Gallery</a>
        </li>
        <li class="link ">
            <a class="visible-sm visible-xs" href="/sbm-shop">SBM Shop</a>
        </li>
	
	        <li class="link ">
            <a class="visible-sm visible-xs" href="/loyalty-points">Loyalty Scheme</a>
        </li>
		
        <li class="link ">

            <a class="visible-sm visible-xs" href="/contact">Contact</a>
        </li>



    </ul>

    </div>
</div>
<style>
    .text-test{
        font-size: 17px;
    }
</style>
<style>

    @media (max-width: 767px ) {

        .dropdown-menu{ position:relative }
        .dropdown-menu>li>a { font-size:18px }
        .link{ float:left }
        .dropdown-menu{ box-shadow: 0 0px 0px rgba(0,0,0,0); }
    }

</style>
<script>
    $(function(){

        if(screen.width > 1024){

            $('.link').hover(function(){

                $(this).find('.dropdown-menu').toggle();

            });

        }

        if(screen.width < 1025){

            $('.link').click(function(){

                $(this).find('.dropdown-menu').toggle();

            });

        }


    });

</script>

<script>
    $(function () {
        $('.same-height').matchHeight({byRow: false});
        $('.same-height3').matchHeight({byRow: false});
        $('.same-height2').matchHeight({byRow: false});
        $('.same-nav-col').matchHeight({byRow: false});
        $('.same-nav-cart-block').matchHeight({byRow: false});
        $('.sub-banner-height').matchHeight({byRow: false});
    });
</script>

<style>
    #mySearch2{
        height: 0;
        overflow: hidden;
    }

@media ( max-width: 992px ) {

    .page-heading h1, .page-heading h2{
	font-size: 15px !important;
	font-weight: 600 !important;
	color:white !important;
	padding:0 !important;
	margin:0 !important
    }
    
    .page-heading{ padding:10px !important }
    h3{ font-size:15px }
    .text-center-mob{ text-align:center }
    
	
	p, body{ font-weight:600 }
    

}

</style>
<div class="pl-20 pr-20 visible-sm visible-xs" id="mySearch2" style="">

    <div class="row mt-10">

        <form action="/search" method="get">
	
	
                    <div class="text-center mt-10" style="display:block;height:60px">
 <label style="cursor:pointer;font-size:13px" for="searchVideosMob">Videos</label>
			&nbsp;
			<input checked type="checkbox" id="searchProductsMob" name="seach_type_products" value="yes"> <label style="cursor:pointer;font-size:13px" for="searchProductsMob">Products</label>
			
					
                    </div>

            <div class="col-xs-10">

                <input autocomplete="off" required class="form-control" placeholder="HTCN, Separate by comma for multiple search terms" type="text" name="q" value="">

            </div>

            <div class="col-xs-2 pl-0 pr-10">

                <button type="submit" class="btn btn-default more-info form-control"><i class="fa fa-search"></i></button>

            </div>

        </form>

    </div>   

</div>

		



    <style>
        .banner-block{
            background: #9f3e69;
            color:white;
            font-size: 20px;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }
        .product-item{
            margin-bottom: 20px;
        }
        .product-item button{
            float:right !important;
            background: #9f3e69 !important;
            border-radius: 30px !important;
            position: relative !important;
            top:15px !important;
            color:white !important;
            border: 1px solid #9f3e60 !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
            text-transform: uppercase;

        }
        .product-item button:hover{
            opacity: .8;
            cursor: pointer;
            background: #9f3e69 !important;
            border: 1px solid #9f3e60 !important;
            color:white !important;
        }
        .youtube-video{
            width: 100%;
            height: 500px;
            border: 0 !important;
        }
        .p-1{
            text-align: center;
            color:#333;
            margin-bottom: 0;
            font-size: 13px;
            font-weight: 900;
        }
        .p-2{
            text-align: center;
            color:white;
            margin-bottom: 0;
            font-size: 13px;
            font-weight: 600;
        }
        @media(max-width: 991px){
            .banner-block{
                font-size: 17px;
                padding: 5px;
            }
        }

        @media(max-width: 767px){
            .banner-block{
                font-size: 14px;
                padding: 5px;
            }
            .mobile-padding-off{
                padding: 0 !important;
            }
        }
    </style>
    <script>
        $(function () {
            $('.same-height').matchHeight({byRow: false});
        });
    </script>


@if(session()->has('success'))
<div class="container">
    <p class="alert alert-success mt-20 mb-30">{{ session('success') }} <i class="fa fa-check"></i></p>
</div>
@endif


@if(session()->has('error'))
<div class="container">
    <p class="alert alert-danger mt-20 mb-30"><i class="fa fa-times"></i> {{ session('error') }} </p>
</div>
@endif


@if (count($errors) > 0)
<div class="container">
<div class="alert alert-danger mt-20 mb-30">
        @foreach ($errors->all() as $error)
            <p><i class="fa fa-times"></i> {{ $error }}</p>
        @endforeach
</div>
</div>
@endif


@yield('content')


<script>

    $(function(){

        $('.top-link').on('click', function(e){
                    $('html, body').animate({ scrollTop: (0) },500);
                    
        });
        

        $(window).scroll(function(){
        

            var scrollTop = $(window).scrollTop();

            if(scrollTop > 0){

                $('.top-link').show();

            } else {

                $('.top-link').hide();
                
            }

        });

    });


</script>

<style> .top-link{ color:#fff !important; border-radius:0 !important; position:fixed;z-index:9;right:0;width:150px;text-align: center; bottom:40px; display:none }  </style>

<a class="btn top-link" style='background:#CB889A !important;color:#fff'>TOP <i class="fa fa-chevron-up"></i></a>

<footer id="scroll-footer-subscribe" class="container-fluid footer-fluid-bg no-padding pl-0 pr-0">
<!-- change footer-fluid-bg to same colour as footer if it needs to be fluid - default to white -->
    
    
    <div class="container-fluid pb-30-mob" style="background: #696969;">
    
    
        
	<div class="container pt-30">

            <div class="col-md-3 text-center-mob">
                <div class=" " >
                    <p style="font-weight: 900;font-size: 14px;color:#e3bfcc;">Information</p>
                    <p style="font-size: 14px;" class=""><a href="">Home</a></p>
                    <p style="font-size: 14px;" class=""><a href="/about-us">About Us</a></p>
                    <p style="font-size: 14px;" class=""><a href="/contact">Contact</a></p>
                    <p style="font-size: 14px;" class=""><a href="/sbm-shop">SBM Shop</a></p>
                    <p style="font-size: 14px;" class=""><a href="/loyalty-points">Loyalty Scheme</a></p>

                </div>

            </div>
            <div class="col-md-3 text-center-mob">

		<p class="hidden-xs hidden-sm" style="font-weight: 900;font-size: 14px;color:#e3bfcc;">Information</p>
                    <p style="font-size: 14px;" class=""><a href="/catch-up-tv">Catch Up TV</a></p>
                    <p style="font-size: 14px;" class=""><a href="/tv-schedule">TV Schedule</a></p>
                    <p style="font-size: 14px;" class=""><a href="/awesome-deals">Awesome Deals</a></p>
                    <p style="font-size: 14px;" class=""><a href="/video-gallery">Video Gallery</a></p>

                
            </div>

            <div class="col-md-3 text-center-mob mt-40-mob">
                    <p style="font-weight: 900;font-size: 14px;color:#e3bfcc;">Extras</p>
                    <p style="font-size: 14px;" class=""><a href="/privacy">Privacy Policy</a></p>
                    <p style="font-size: 14px;" class=""><a href="/cookies">Cookie Policy</a></p>
                    <p style="font-size: 14px;" class=""><a href="/delivery">Delivery Information</a></p>
            </div>
	    
            <div class="col-md-3 mt-40-mob">
                <div id="">
                    <p style="font-weight: 900;font-size: 14px;color:#DFB9C2" class="footer-urls-block mb-mb-0 text-left">Follow Us</p>
                    <div class="mt-10 social-footer">
                        <div style="background: linear-gradient(to right,#e4c2cd,#e4c2cd,#eae3f5) !important;" class="social-media fb pull-left"><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram" style="color:#696969;position:relative;top:-4.5px;left:0.5px;font-size: 14px;"></i></a></div>
                        <div style="background: linear-gradient(to right,#e4c2cd,#e4c2cd,#eae3f5) !important;" class="social-media fb pull-left"><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" style="color:#696969;font-size: 14px;top:-5px;left:1px;position: relative"></i></a></div>
                        <div style="background: linear-gradient(to right,#e4c2cd,#e4c2cd,#eae3f5) !important;" class="social-media fb pull-left"><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter" style="color:#696969;position:relative;top:-4px;font-size: 14px;"></i></a></div>
                        <div style="background: linear-gradient(to right,#e4c2cd,#e4c2cd,#eae3f5) !important;" class="social-media fb pull-left ml-5"><a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f" style="color:#696969;position:relative;top:-5px;left:1px;font-size: 14px;"></i> </a> </div>

                    </div>
		    

		
		    
                </div>
		
		<div class="col-md-6 mt-80 text-center visible-xs visible-sm"> <span style="color:#fff;font-size:14px">Copyright 2021 HTCN</span>  </div>
     

        </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid pl-0 pr-0 hidden-xs hidden-sm" style="background: #696969;">
        <hr style="border-color: #e3bfcc !important;">
    </div>

    <div class="container-fluid" style="background: #696969;">
    <div class="container">
	
        <div class="row hidden-xs hidden-sm" style="color:white;padding-bottom: 5px !important;">
            <p class="text-right" style="font-weight: 900;font-size: 12px;">
                <span class="mr-20">Copyright 2021 HTCN</span>
                <span><a target="_blank" href="https://www.wtstechnologies.co.uk/" target="_blank">Web Design WTS Technologies</a></span>
            </p>
        </div>
	
	
	</div>
    </div>



</footer>

</body>
</html>

