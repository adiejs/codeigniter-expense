$(document).ready(function () {
	$(".js-example-basic-single").select2({
        dropdownParent: $("#exampleModal")
    });
});

$(document).on('select2:open', () => {
    document.querySelector('.select2-search__field').focus();
});

function openModal() {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
        keyboard: false
      });

      myModal.show();
}

function autocompleted() {
    var select = document.getElementById("nama-produk");
    var hargaModalInput = document.getElementById("harga-modal");
    var hargaJualInput = document.getElementById("harga-jual");
    var kodeProdukInput = document.getElementById("kode-produk");
    var jumlahInput = document.getElementById("jumlah");
    var totalInput = document.getElementById("total");
    var labaInput = document.getElementById("laba");
    var hargaModal = select.options[select.selectedIndex].getAttribute("data-modal");
    var hargaJual = select.options[select.selectedIndex].getAttribute("data-jual");
    var kodeProduk = select.options[select.selectedIndex].getAttribute("data-kode");
    hargaModalInput.value = hargaModal;
    hargaJualInput.value = hargaJual;
    kodeProdukInput.value = kodeProduk;

    var hitungHargaJual = parseInt(hargaJual);
    var hitungHargaModal = parseInt(hargaModal);
    var hitungJumlah = parseInt(jumlahInput.value);

    if (hitungJumlah && hitungJumlah > 0) {
        var totalHarga = hitungHargaJual * hitungJumlah;
        var totalModal = hitungHargaModal * hitungJumlah;
        var totalLaba = totalHarga - totalModal;
        totalInput.value = totalHarga;
        labaInput.value = totalLaba;
    } else {
        totalInput.value = "0";
        labaInput.value = "0";
    }
}


