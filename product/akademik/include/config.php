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
if(ereg("config.php",$_SERVER['PHP_SELF'])) {
	header("location: ../index.php");
	exit();
}

//==============================================================================
if (file_exists('../include/mainconfig.php'))
	require('../include/mainconfig.php');
if (file_exists('../include/mainconfig.php'))
	require('../include/mainconfig.php');
if (file_exists('../include/mainconfig.php'))
	require('../include/mainconfig.php');
$db_name = "jbsakad";
//==============================================================================

$full_url = "http://".$G_SERVER_ADDR."/akademik/";
global $full_url;
?>