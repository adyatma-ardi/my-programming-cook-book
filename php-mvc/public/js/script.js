$(document).ready(function() {

    $('.tambah-data-mhs').on('click', function() {

        $('#modal-judul').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    // prevent bug from outside modal
    // $('.myModal').on('hidden.bs.modal', function () {
    //
    //     $('.myModal').modal({
    //         backdrop: 'static',
    //         keyboard: false
    //     });
    //     $('.myModal').modal('show');
    //
    // })

    $('.ubah-data-mhs').on('click',function() {

        $('#modal-judul').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost:81/PHP_learning/_php-mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');

        // console.log(id);

        $.ajax({
            url:'http://localhost:81/PHP_learning/_php-mvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                // console.log(data);

                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }

        });

    });

});
