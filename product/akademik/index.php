<?
/**[N]**
 * JIBAS Road To Community
 * Jaringan Informasi Bersama Antar Sekolah
 * 
 * @version: 2.4.1 (January 7, 2011)
 * @notes: JIBAS Education Community will be managed by Yayasan Indonesia Membaca (http://www.indonesiamembaca.net)
 * 
 * Copyright (C) 2009 PT.Galileo Mitra Solusitama (http://www.galileoms.com)
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 **[N]**/ ?>
<?
require_once('include/config.php');
session_name("jbsakad");
session_start();

if (isset($_SESSION['namasimaka'])){ 
		header("Location:index2.php");
}  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
Akademik
</title>
<link href="images/jibas.ico" rel="shortcut icon" />
<link rel="stylesheet" type="text/css" href="style/style.css">
<script language="JavaScript" src="script/tools.js"></script>
<script language="JavaScript" src="script/resizing_background.js"></script>
<script src="script/SpryValidationTextField.js" type="text/javascript"></script>
<link href="script/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
function cek_form() 
{
	var user,pass;
	user = document.form.username.value;
	pass = document.form.password.value;
	if(user.length == 0 || pass.length == 0) 
	{
		alert("Anda harus mengisi username dan password sebelum masuk ke dalam sistem!");
		document.form.username.focus();
		return false;
	} 
}

function credit()
{
	newWindow('credit.html','Credit','190','229','resizable=1,scrollbars=0,statusbar=0,toolbar=0');
}
function focusNext(elemName, evt) 
{
	var aktif = 1;
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode :
        ((evt.which) ? evt.which : evt.keyCode);
		
    if (charCode == 13) 
	{
		if (elemName == 'submit')
		{ 
			return cek_form();
		} 
		else
		{ 
			document.getElementById(elemName).focus();
			return false;
		}
    } 
    return true;
}

function panggil(elem)
{
	var lain = new Array('username','password');
	for (i=0;i<lain.length;i++) 
	{
		if (lain[i] == elem) 
		{
			document.getElementById(elem).style.background='#4cff15';
		} 
		else 
		{
			document.getElementById(lain[i]).style.background='#FFFFFF';
		}
	}
}
function alertSize() {
  var WinHeight = 0;
  var WinWidth = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    WinHeight = window.innerHeight;
	WinWidth = window.innerWidth;
  } else if( document.documentElement &&
      ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    WinHeight = document.documentElement.clientHeight;
	WinWidth = document.documentElement.clientWidth;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    WinHeight = document.body.clientHeight;
	WinWidth = document.body.clientWidth;
  }
  document.getElementById('Main').style.left = (parseInt(WinWidth)/2-200)+"px";
  document.getElementById('Main').style.top = (parseInt(WinHeight)/2-80)+"px";
  document.getElementById('Footer').style.top = (parseInt(WinHeight)-50)+"px";
  document.getElementById('Footer').style.left = (parseInt(WinWidth)-370)+"px";
}
function ChgInputPass(s,d,status){
	var Vs = document.getElementById(s);
	var Vd = document.getElementById(d);
	if (status=='1')
	{
		Vs.style.display='none';
		Vd.style.display='block';
		document.getElementById(d).focus();
	} else {
		if (Vd.value.length==0){
			Vs.style.display='block';
			Vd.style.display='none';
		} else {
			Vs.style.display='none';
			Vd.style.display='block';
		}
	}
}
function InputHover(txt,id,state){
	var x = document.getElementById(id).value;
	if (state=='1'){
		if (x==txt){
			document.getElementById(id).value='';
			document.getElementById(id).style.color='#000';
		} else {
			document.getElementById(id).style.color='#000';			
		}
	} else {
		if (x==txt || x==''){
			document.getElementById(id).style.color='#636363';
			document.getElementById(id).value=txt;
		} else {
			document.getElementById(id).style.color='#000';
		}
	}
}
</script>
<style type="text/css">
<!--
#Main {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	top:50px;
	left: 50px;
}
#Footer {
	position:absolute;
	z-index:1;
	top:303px;
	left:51px;
}
html, body{overflow:hidden}
-->
</style>
<!-- Copyright 2000, 2001, 2002, 2003 Macromedia, Inc. All rights reserved. -->
</head>

<body onload="alertSize(); document.getElementById('username').focus()" onresize="alertSize()" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="padding:0px; margin:0px; background-color:#bcbdb9; background-image:url(../images/BG.jpg);background-position:center; background-repeat:no-repeat;background-attachment:fixed;  ">
<form action="redirect.php" method="post" name="form" id="form" onSubmit="return cek_form()">
<div style="overflow-x:hidden;">
<table width="100%" border="0">
  <tr>
    <td width="100%">
    <div id="Main" align="center" style="width:511px; height:234px">
        <table id="Table_01" width="510" height="206" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td rowspan="4">
                    <img src="images/LOGIN_AKADEMIK_01.png" width="147" height="206" alt=""></td>
                <td>
                    <img src="images/LOGIN_AKADEMIK_02.png" width="363" height="89" alt=""></td>
            </tr>
            <tr>
                <td background="../images/LOGIN_AKADEMIK_03.png" width="363" height="24">
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="padding-right:4px"><input type="text" name="username" id="username" class="InputTxt" onfocus="InputHover('Username','username','1')" onblur="InputHover('Username','username','0')" style="color:#636363;width:80px; border:1px #666666 solid" value="Username"  /></td>
                    <td style="padding-right:4px"><input name="passwordfake" id="passwordsfake" style="color:#636363; display:block;width:80px; border:1px #666666 solid" value="Password" onfocus="ChgInputPass('passwordsfake','passwords','1')" type="text"    />
                <input name="password" id="passwords" style="color:#000000; display:none;width:80px; border:1px #666666 solid" value="" onblur="ChgInputPass('passwordsfake','passwords','0')"  type="password"    /></td>
                    <td style="padding-right:4px"><input type="submit" style=" background-color:#c9c9c9;font-weight:bold; border:#666666 1px solid;" value="Login" /></td>
                                    </tr>
                </table>                
                </td>
            </tr>
            <tr>
                <td background="../images/LOGIN_AKADEMIK_04.png" width="363" height="18">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="../images/LOGIN_AKADEMIK_05.png" width="363" height="75" alt=""></td>
            </tr>
        </table>
    </div> <!-- Main -->
      
    </td>
  </tr>
</table>
</div>       
</form>

</body>
</html>