<!DOCTYPE html>
	<!--[if gt IE 8]><!-->
	<html class="no-js">
	<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>YouChat - Stay Connected</title>
	<meta name="description" content="YouChat - Stay Connected">
	<meta name="keywords" content="YouChat - Stay Connected">
	<meta name="author" content="Steve Renner">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
	
	<!-- modernizr -->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    <!-- favicon -->
    <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    
</head>

<body data-spy="scroll" data-target=".navscroll" id="home" onload="translateOnLoad();">
	<a name="top"></a>
	
	
	<!-- top navigation start -->
	<div class="navbar navbar-default navbar-fixed-top nav2">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navscroll"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="img/white_youchat.png" width="100" height="26" alt="youchat"></a> </div>
			<div class="navbar-collapse collapse navscroll">
				<div class="navbar-form navbar-right"> <a href="#download" class="btn btn-default download-link"><i class="icon_cloud-download_alt"></i><span data-trans="download"></span></a></div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php#home" data-trans="home"></a></li>
					<li><a href="index.php#features" data-trans="features"></a></li>
					<li><a href="index.php#screens" data-trans="screens"></a></li>
					<li><a href="index.php#faq" data-trans="faq"></a></li>
					<li><a href="index.php#stickers" data-trans="stickers"></a></li>
					<li class="language">
						<a href="javascript:void(0);" data-trans="language"></a>
						<ul class="sub">
	                        <li><a href="javascript:void(0);" id="en">English</a></li>
	                        <li><a href="javascript:void(0);" id="cn">简体中文</a></li>
	                        <li><a href="javascript:void(0);" id="tc">繁體中文</a></li>
	                        <li><a href="javascript:void(0);" id="ru">Pусский</a></li>
	                        <li><a href="javascript:void(0);" id="jp">日本語</a></li>
	                        <li><a href="javascript:void(0);" id="kr">한국어</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!--/.navbar-collapse --> 
		</div>
	</div>
	<!-- top navigation end -->
	
	<div id="hero"></div>
	<!-- main banner start -->
	<div class="banner">
		<div class="container">
			<h1 class="big">Contact</h1>
		</div>
	</div>
	<!-- main banner end -->
	
	
	<!-- features section start -->
	<div class="contact section" id="contact" style="background: #fff;">
		<div class="container">		
		<div id="contact-form">        
			<div class="form_contact margin-bottom-20">
	            <div id="result"></div>
	            <fieldset id="contact_form">
	                <input type="text" name="name" class="form-control margin-bottom-25" placeholder="Name  (Required)" />
	                <input type="email" name="email" class="form-control margin-bottom-25" placeholder="Email  (Required)" />
	                <textarea name="msg" class="form-control margin-bottom-25 contact_textarea" placeholder="Your message (Required)" rows="7"></textarea>
	                <input id="submit_btn" type="submit" value="Send Message">
	            </fieldset>
	        </div>  
	     </div>
		</div>
	</div>
	<!-- features section end -->	
    
	<!-- trial download CTA start -->
	<div class="trial-download section" id="download">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
					<h2 class="h1 text-center" data-trans="downloadfree"></h2>
					<!-- <h4 class="text-center" data-trans="nowavailable"></h4> -->
					<p class="text-center"><a href="https://play.google.com/store/apps/details?id=com.mobiblocks.youchat" target="blank"><img src="img/google.png" border="0" height="50" /></a><img src="img/guitar_ace.png" border="0" height="120" id="ace-guitar" /><!-- <a href="#" target="blank"><img src="img/apple.png" border="0" height="50" /></a> --><a href="http://store.appmart.pro/marketplaceitemdetails.aspx?appid=C0WbIo0iy5Fxo1APq63yEDBWMmjHlVXm&u_id=J3Ctgdr1vR8aMq1R5Gt2VbbdpyG9lYdE" target="blank"><img src="img/appmart.png" border="0" height="50" /></a></p>
					<!-- <br>
					<p class="text-center"><a href="http://store.appmart.pro/marketplaceitemdetails.aspx?appid=C0WbIo0iy5Fxo1APq63yEDBWMmjHlVXm&u_id=J3Ctgdr1vR8aMq1R5Gt2VbbdpyG9lYdE" target="blank"><img src="img/appmart.png" border="0" height="50" /></a></p> -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- trial download CTA start -->
	
	<!-- footer start -->
	<footer class="footer section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<ul class="ft-links">
						<li><a href="privacy-policy.php" >Privacy Policy</a></li>
						<li><a href="contacts.php" >Contact Us</a></li>
					</ul>
					<p class="copyright">&copy; 2016 <span data-trans="copyright">YouChat, All Rights Reserved.</span></p>
				</div>
				<div class="col-sm-6">
					<ul class="social text-right">
						<li><img src="img/mobileSoft.png" width="180" height="35" style="margin-bottom: 12px;"></li>
						<li><a href="#top" class="tool-tip"><i class="fa fa-arrow-up"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end -->
	
		
	<!-- javascript/jquery plugins -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/fitvids.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/scroll-to-top.js"></script>
    <script src="js/wow.js"></script>
	<script src="lang/en.js"></script>
	<script src="lang/cn.js"></script>
	<script src="lang/tc.js"></script>
	<script src="lang/ru.js"></script>
	<script src="lang/jp.js"></script>
	<script src="lang/kr.js"></script>
	<!-- Theme Initializer --> 
	<script src="js/jQCookie.js"></script>
	<script type="text/javascript">
	  
	$(function(){ // Translation Links
	  $("ul.nav li .sub li a").click(function () {
	    var data = $en; 
	    if ($(this).is('#cn')) {$('html').removeClass(); $('html').addClass('cn'); data = $cn; $.cookie('lang', 'cn', 360)}
	    else if ($(this).is('#tc')) {$('html').removeClass(); $('html').addClass('tc');  data = $tc; $.cookie('lang', 'tc', 360)}
	    else if ($(this).is('#ru')) {$('html').removeClass(); $('html').addClass('ru');  data = $ru; $.cookie('lang', 'ru', 360)}
	    else if ($(this).is('#jp')) {$('html').removeClass(); $('html').addClass('jp');  data = $jp; $.cookie('lang', 'jp', 360)}
	    else if ($(this).is('#kr')) {$('html').removeClass(); $('html').addClass('kr');  data = $kr; $.cookie('lang', 'kr', 360)}
	    else if ($(this).is('#en')) {$('html').removeClass(); $('html').addClass('en'); data = $en; $.cookie('lang', 'en', 360)}
	    else $.removeCookie('lang');
	    location.reload();
	    setTimeout(function(){
	       translate(data);
	    },3050);
	  }); 
	});

	// Translations Functions
	function translate(data){
	  $.each(data,function( key, value ){
	    $('[data-trans=' + key + ']').html(value);
	  });
	}
	function translateOnLoad(){
	  lang = $.cookie('lang') || 'en';
	  var data = $en;
	  if (lang === 'cn') {$('html').removeClass(); $('html').addClass('cn'); data = $cn; $.cookie('lang', 'cn', 360)};
	  if (lang === 'tc') {$('html').removeClass(); data = $tc; $('html').addClass('tc'); $.cookie('lang', 'tc', 360)};
	  if (lang === 'ru') {$('html').removeClass(); $('html').addClass('ru'); data = $ru; $.cookie('lang', 'ru', 360)};
	  if (lang === 'jp') {$('html').removeClass(); $('html').addClass('jp'); data = $jp; $.cookie('lang', 'jp', 360)};
	  if (lang === 'kr') {$('html').removeClass(); $('html').addClass('kr'); data = $kr; $.cookie('lang', 'kr', 360)};
	  if (lang === 'en') {$('html').removeClass(); $('html').addClass('en'); data = $en; $.cookie('lang', 'en', 360)};
	  translate(data);
	}

	</script>
    <script src="js/main.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 
        //collect input field values
        var user_name       = $("input[name='name']").val(); 
        var user_email      = $("input[name='email']").val();
        var user_message    = $("textarea[name='msg']").val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $("input[name='name']").css("border", "1px solid #cc2f1e"); 
            proceed = false;
        } else {
      $("input[name='name']").css("border", "1px solid #ccc");
    }
        if(user_email==""){ 
            $("input[name='email']").css("border", "1px solid #cc2f1e"); 
            proceed = false;
        } else {
      $("input[name='email']").css("border", "1px solid #ccc");
    }
        if(user_message=="") {  
            $("textarea[name='msg']").css("border", "1px solid #cc2f1e"); 
            proceed = false;
        } else {
      $("textarea[name='msg']").css("border", "1px solid #ccc");
    }
        
        //everything looks good! proceed...
        if(proceed) {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userMessage':user_message};
            
            //Ajax post data to server
            $.post('form.php', post_data, function(data){  
                
                //load success massage in #result div element, with slide effect.       
                $("#result").hide().html('<div class="success">'+data+'</div>').slideDown();
                
                //reset values in all input fields
                $('#contact_form input[type="text"]').val('');
        $('#contact_form input[type="email"]').val(''); 
                $('#contact_form textarea').val(''); 
                
            }).fail(function(err) {  //load any error data
                $("#result").hide().html('<div class="error">'+err.statusText+'</div>').slideDown();
            });
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    
});
</script> 
</body>

</html>