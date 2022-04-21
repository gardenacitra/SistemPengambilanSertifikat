<div class="panel panel-default">
    <div class="panel-heading"> Tambah Data Pengambilan Sertifikat </div> 
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> NIM </label>
                            <input class="form-control" name="nim"/>  
                        </div>
                        <div class="form-group">
                            <label> Nama </label>
                            <input class="form-control" name="nama"/>  
                        </div>
                        <div class="form-group">
                            <label> Kursus </label>
                            <select class="form-control" name="kursus">
                                <option> == Pilih == </option>
                                <option value="SAP">SAP</option>
                                <option value="CISCO">CISCO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Periode </label>
                            <input class="form-control" name="periode"/>    
                        </div>
                        <div class="form-group">
                            <label> Status </label>
                            <input class="form-control" name="status"/>    
                        </div>
                        <div class="col-md-12 bg-light text-right">
                            <a href="?page=pengambilan&aksi=cancel" class="btn btn-danger"> Kembali </a>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>  
</div>