
//ini error script nya ngebaca di pertemuan 19

$(document).ready(function(){
    //hilangkan tombol car
    $('#tombol-cari').hide();

    //event ketika keyword ditulis
    $('keyword').on('keyup',function(){
        //munculkan icon loading
        $('.loader').show();

        //ajax menggunakan load
        // $('container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        //$.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){

            $('#container').html(data);
            $('.loader').hide();
        });

    });

});