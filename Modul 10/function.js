var dataBarang = [
    "Buku",
    "Pulpen",
    "Kursi",
    "Hapusan"
];

function tampilan() {
    var listBarang = document.getElementById("list");
    listBarang.innerHTML="";

    for(let i=0;i<dataBarang.length; i++){
        var btnedit = "<a href='#' onclick='edit("+i+")'>Edit</a>";
        var btnhapus = "<a href='#' onclick='hapus("+i+")'>Hapus</a>";
    
        listBarang.innerHTML += "<li>" + dataBarang[i] + " ["+btnedit+"|"+btnhapus+"]</li>";
    }
}

function tambah() {
    var input = document.querySelector("input[name=barang]");
    dataBarang.push(input.value);
    tampilan();
}

function edit(id) {
    var newBarang = prompt("Nama baru : ", dataBarang[id]);
    dataBarang[id]=newBarang;
    tampilan();
}

function hapus(id) {
    dataBarang.splice(id, 1);
    tampilan();
}

tampilan()