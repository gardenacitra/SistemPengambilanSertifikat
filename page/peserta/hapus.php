<?php
	$nim = $_GET ['nim'];
	$koneksi->query("DELETE FROM tb_peserta WHERE nim ='$nim'");
?>

<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=peserta";
</script>