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

OpenDb();
BeginTrans();
$success=0;	

$sql_get_nau_per_nis="SELECT nilaiAU,replid,keterangan FROM jbsakad.nau WHERE idkelas=$_REQUEST[kelas] AND idsemester=$_REQUEST[semester] AND idaturan=$_REQUEST[idaturan]";
$result_nau = QueryDb($sql_get_nau_per_nis);
if (mysql_num_rows($result_nau) > 0) {	
	$sql_hapus_nau="DELETE FROM jbsakad.nau WHERE idkelas=$_REQUEST[kelas] AND idsemester=$_REQUEST[semester] AND idaturan=$_REQUEST[idaturan]";
	QueryDbTrans($sql_hapus_nau,$success);	
}

$tanggal = TglDb($_REQUEST['tanggal']);	
$rpp="";
if ($_REQUEST[idrpp]!='') {
	$rpp = " ,idrpp=$_REQUEST[idrpp]";
}

$sql1="INSERT INTO ujian SET idpelajaran = $_REQUEST[pelajaran], idkelas = $_REQUEST[kelas], idsemester = $_REQUEST[semester], idjenis = $_REQUEST[jenis], deskripsi = '$_REQUEST[deskripsi]', tanggal = '$tanggal', idaturan = $_REQUEST[idaturan], kode = '$_REQUEST[kode]' $rpp";
QueryDbTrans($sql1,$success);

$sql2 = "SELECT replid FROM ujian ORDER BY replid DESC LIMIT 1";
$result1 = QueryDbTrans($sql2, $success);
$row = mysql_fetch_row($result1);
$id = $row[0];

$a = $_REQUEST['nilaiujian'];	
foreach($a as $key => $value) {	
	$sql="INSERT INTO nilaiujian SET nilaiujian=$value[0], nis='$key',idujian = $id, keterangan='$value[1]'";
	QueryDbTrans($sql,$success);
}

	
if ($success) { 
	CommitTrans();
	
	?>
	<script language="javascript">
		parent.opener.refresh();		
		window.close();
	</script>
	<? 	
} else { 
	RollbackTrans();
	?>
	<script language="javascript">
		alert ('Data gagal disimpan');
	</script>
	<? 
}		
?>