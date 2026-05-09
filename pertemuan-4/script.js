/**
 * Fungsi untuk mengubah nilai angka menjadi indeks huruf
 * dan menampilkan rincian hasil ke dalam DOM.
 */
function ubahHuruf() {
    // Ambil elemen input
    const inputNpm = document.getElementById("npm");
    const inputMk = document.getElementById("mk");
    const inputNilai = document.getElementById("nilai");

    // Ambil elemen output
    const resContainer = document.getElementById("result-container");
    const resNpm = document.getElementById("res-npm");
    const resMk = document.getElementById("res-mk");
    const resHasil = document.getElementById("hasil");

    // Validasi data input
    const npm = inputNpm.value.trim();
    const mk = inputMk.value.trim();
    const nilaiRaw = inputNilai.value;

    if (!npm || !mk || nilaiRaw === "") {
        alert("Harap lengkapi semua data (NPM, Mata Kuliah, dan Nilai)!");
        return;
    }

    const nilai = parseInt(nilaiRaw);
    let grade = "";

    // Logika penentuan grade
    if (nilai < 0 || nilai > 100) {
        alert("Nilai yang Anda masukkan tidak valid (harus 0-100)!");
        resContainer.style.display = "none";
        return;
    } else if (nilai >= 80) {
        grade = "A";
    } else if (nilai >= 70) {
        grade = "B";
    } else if (nilai >= 60) {
        grade = "C";
    } else if (nilai >= 50) {
        grade = "D";
    } else {
        grade = "E";
    }

    // Tampilkan hasil ke dalam DOM
    resNpm.innerText = npm;
    resMk.innerText = mk;
    resHasil.innerText = grade;

    // Tampilkan kontainer hasil dengan efek
    resContainer.style.display = "block";
}