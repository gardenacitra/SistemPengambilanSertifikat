<?php
	$id_user = $_GET ['id'];
	$koneksi->query("DELETE FROM tb_user WHERE id_user ='$id_user'");
?>

<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=pengguna";
</script>