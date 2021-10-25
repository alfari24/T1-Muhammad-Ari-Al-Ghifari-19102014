window.alert('selamat datang');
document.getElementById("hitung").onclick = function() {hitung_luas_segitiga()};
function hitung_luas_segitiga(){
    var a = document.getElementById("alas").value;
    var t = document.getElementById("tinggi").value;
    var hasil = 0.5 * a * t;
    document.getElementById('hasil').innerHTML = hasil;
}

function konversi(){
    var nilai_angka = document.getElementsByClassName("nilai_angka");
    if(nilai_angka[0].value >= 90) grade = "A"
    else if(nilai_angka[0].value >= 80) grade ="B+"
    else if(nilai_angka[0].value >= 70) grade ="B"
    else if(nilai_angka[0].value >= 60) grade ="C+"
    else if(nilai_angka[0].value >= 50) grade ="C"
    else if(nilai_angka[0].value >= 40) grade ="D"
    else if(nilai_angka[0].value >= 30) grade ="E"
    else grade = "F";
    document.getElementById('hasil2').innerHTML = grade;
}

function hitung_total(){
    var jumlah = document.getElementById("jumlah").value;
    var harga = document.getElementById("harga").value;
    if(jumlah==""||harga==""){
        document.getElementById('total').value="0";
    }else{
        document.getElementById('total').value=jumlah*harga;
    }
}

function cetak(){
    window.print();
}