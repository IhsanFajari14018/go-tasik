$( document ).ready(function() {
  var allHarga = document.getElementsByClassName("rupiah");
  for (var i = 0; i < allHarga.length; i++) {
    var harga = document.getElementById('rp'+i).innerHTML;
    console.log(harga);
    //jika benar angka, maka
    if (!isNaN(harga)) {
      var newHarga = formatRupiah(harga, 'Rp ');
      document.getElementById('rp'+i).innerHTML = newHarga;
    }else{
      document.getElementById('rp'+i).innerHTML = harga;
    }
  }

  console.log("X");
  var hargaTiket = document.getElementById('tiket').innerHTML;
  console.log(hargaTiket);
  var newHargaTiket = formatRupiah(hargaTiket, 'Rp ');
  document.getElementById('tiket').innerHTML = newHargaTiket;

});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix){
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
  split   		= number_string.split(','),
  sisa     		= split[0].length % 3,
  rupiah     		= split[0].substr(0, sisa),
  ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if(ribuan){
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }

  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
}
