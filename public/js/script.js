$(function(){

  $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nis').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });

// Ubah Data menggunakan AJAX
  $('.tampilModalUbah').on('click',function(){
    $('#formModalLabel').html('Ubah data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah data');

    $('.modal-body form').attr('action','http://localhost/phpmvc/public/siswa/ubah');

    const id= $(this).data('id');


    // MENGGUNAKAN AJAX
    $.ajax({
      url:'http://localhost/phpmvc/public/siswa/getubah',
      data:{id:id},
      method:'post',
      dataType:'json',
      success:function(data){
        $('#nama').val(data.nama);
        $('#nis').val(data.nis);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      }
    });

  });


});
