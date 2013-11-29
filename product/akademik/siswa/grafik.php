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
require_once('../include/sessioninfo.php');
require_once('../include/common.php');
require_once('../include/config.php');
require_once('../include/db_functions.php');
require_once('../cek.php');

$dasar=$_REQUEST['dasar'];
$departemen=$_REQUEST['departemen'];
$idangkatan=$_REQUEST['idangkatan'];
$tabel=$_REQUEST['tabel'];
$iddasar=$_REQUEST['iddasar'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="../script/tools.js"></script>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body topmargin="0" leftmargin="0">
<table width="50%" border="0" cellpadding="2" cellspacing="2">
<tr>
    <td align="center">
    <!--calon_statistik_cetak.php?dasar=<?=$dasar?>&departemen=<?=$departemen?>&idproses=<?=$idproses?>&tabel=<?=$tabel?>&nama_judul=<?=$judul?>&iddasar=<?=$iddasar?>&lup=no'--->
    <a href="#" onclick="newWindow('statistik_cetak.php?dasar=<?=$dasar?>&departemen=<?=$departemen?>&idangkatan=<?=$idangkatan?>&tabel=<?=$tabel?>&iddasar=<?=$iddasar?>&lup=no','Cetak',787,551,'resizable=1,scrollbars=1,status=0,toolbar=0');"><img src="../images/ico/print.png" border="0"/>&nbsp;Cetak</a>
    </td>
</tr>
<tr>
    <td>
    <img src="statistik_batang.php?iddasar=<?=$iddasar?>&departemen=<?=$departemen?>&idangkatan=<?=$idangkatan?>"/>
    <p>
    <img src="statistik_pie.php?iddasar=<?=$iddasar?>&departemen=<?=$departemen?>&idangkatan=<?=$idangkatan?>" />
    </td>
</tr>
</table>

</body>
</html>