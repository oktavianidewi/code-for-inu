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
require_once('../include/config.php');
require_once('../include/db_functions.php');
require_once('../include/common.php');
require_once('../include/imageresizer.php');
$foto1 = $_FILES['foto'];
$uploadedfile = $foto1['tmp_name'];
$uploadedtypefile = $foto1['type'];
$uploadedsizefile = $foto1['size'];
if (strlen($uploadedfile)!=0){
	$filename="../tmp/tmp.jpg";
	ResizeImage($foto1, 100, 90, 100, $filename);
}
?>
<script language="javascript">
	setTimeout("kembali()",1);
</script>
<script language="javascript">
function kembali(){
	document.location.href = "logo2.php?gbrbaru=1&departemen=<?=$_REQUEST['departemen']?>";
}	
</script>