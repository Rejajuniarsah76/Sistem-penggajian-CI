<form method="post" id="form">
    <div class="form-group">
        <label for="nama_jabatan">Nama Jabatan</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nama_jabatan; ?>" name="nama_jabatan_baru" placeholder="Masukan Nama Jabatan">
    </div>
    <input type="hidden" name="nama_jabatan_lama" value="<?php echo $hasil->nama_jabatan;?>">
    <button id="tombol_edit" type="button" class="btn btn-sm btn-info" data-dismiss="modal" ><i class="fas fa-edit"></i></button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>admin/data_jabatan/editJabatan",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>admin/data_jabatan/tampilJabatan");    
                    }
                });
            });
        });
</script> 