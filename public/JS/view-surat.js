// script.js
let tanggal;
let bulan;
let tahun;

function cariTanggal() {
    tanggal = new Date().getDate();
    let getBulan = new Date().getMonth();
    bulan;
    tahun = new Date().getFullYear();

    switch (getBulan) {
        case 0:
            bulan = "Januari";
            break;
        case 1:
            bulan = "Februari";
            break;
        case 2:
            bulan = "Maret";
            break;
        case 3:
            bulan = "April";
            break;
        case 4:
            bulan = "Mei";
            break;
        case 5:
            bulan = "Juni";
            break;
        case 6:
            bulan = "Juli";
            break;
        case 7:
            bulan = "Agustus";
            break;
        case 8:
            bulan = "September";
            break;
        case 9:
            bulan = "Oktober";
            break;
        case 10:
            bulan = "November";
            break;
        case 11:
            bulan = "Desember";
            break;
        default:
            bulan = "Tidak ditemukan";
            break;
    }
    return { tanggal, bulan, tahun };
}

// Fungsi ini akan dipanggil saat file script.js dieksekusi
function displayTanggal() {
    const { tanggal, bulan, tahun } = cariTanggal();
    const displayDate = document.getElementById("date");
    const displayMonth = document.getElementById("month");
    const displayYear = document.getElementById("year");

    displayDate.textContent = tanggal;
    displayMonth.textContent = bulan;
    displayYear.textContent = tahun;
}

document.addEventListener("DOMContentLoaded", displayTanggal);

