<?php
	$nim = $_GET ['nim'];
	$koneksi->query("DELETE FROM tb_sertifikat WHERE nim ='$nim'");
?>

<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=sertifikat";
</script>