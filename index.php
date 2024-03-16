<!DOCTYPE html>
<html lang="en">
<?php require "layout/head.php";?>

<body>
    <div id="app">
        <?php require "layout/sidebar.php";?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>Dashboard</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Sistem Penunjang Keputusan Pemilihan Lokasi Lembaga Pendidikan (Les) Dengan
                                    Menggunakan Metode
                                    SAW (Simple Additive Weighting)</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">
                                        Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode
                                        penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan
                                        terbobot dari rating kinerja pada setiap alternatif pada semua atribut
                                        (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan
                                        intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM,
                                        karena fungsi linear additive dapat mewakili preferensi pembuat keputusan
                                        (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika
                                        asumsi preference independence (Keeney & Raiffa 1976) atau preference
                                        separability (Gorman 1968) terpenuhi.
                                    </p>
                                    <hr>
                                    <p class="card-text">
                                        Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut
                                        :
                                    </p>
                                    <ol type="1">
                                        <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan
                                            keputusan, yaitu Ci</i>
                                        <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria (X).
                                        </li>
                                        <li>Membuat matriks keputusan berdasarkan kriteria(Ci), kemudian melakukan
                                            normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis
                                            atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh
                                            matriks ternormalisasi R.</li>
                                        <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari
                                            perkalian matriks ternormalisasi R dengan vektor bobot sehingga
                                            diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik
                                            (Ai)sebagai solusi</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Pembahasan - Studi Kasus Pemilihan Lokasi Lembaga Pendidikan (Les) Dengan
                                    Menggunakan Metode
                                    SAW </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">
                                        SAW (Simple Additive Weighting) adalah salah satu metode dari SPK (Sistem
                                        Pendukung Keputusan). Beberapa langkah yaitu :
                                    <ol>
                                        <li>Menentukan kriteria</li>
                                        <li>Menentukan variable Kriteria</li>
                                        <li>Melakukan perhitungan</li>
                                        <li>Menarik kesimpulan</li>
                                    </ol>
                                    Pada Studi kasus ini, kita akan menentukan tempat bimbingan belajar bagi pelajar
                                    SMA.
                                    Adapun kriteria yang akan digunakan adalah sebagai berikut:
                                    <ul type="1">
                                        <li>C1 = Biaya (seberapa banyak biaya untuk bimbel)</li>
                                        <li>C2 = lokasi (seberapa jauh lokasi tempat bimbingan belajar dari rumah)</li>
                                        <li>C3 = Fasilitas (seberapa lengkap fasilitas tempat bimbingan belajar).</li>
                                        <li>C4 = Kualitas pengajar (dilihat dri gelar akademik para pengajar di tempat
                                            bimbel)</li>
                                    </ul>
                                    Dari masing-masing kriteria tersebut, akan dibuat variable-variabelnya. Dimana dari
                                    setiap
                                    variable akan diberi sebuah nilai bobot dalam bentuk angka.
                                    Angka-angka ini bebas mau ditentukan, misl range dari 1-5 atau 1-100 atau 0-1. Pada
                                    studi
                                    diatas kita akan mengambil range dari 1-5.
                                    Dibeberapa referensi ada yang menyebut ini dengan nama variable atau ada juga yang
                                    menyebutnya dengan nama subkriteria. Tapi intinya sama saja. Dan di sini kita akan
                                    menyebutnya dengan nama kriteria
                                    </p>
                                    <hr>
                                    <p class="card-text">
                                        <b>C1 – Kriteria Biaya</b>
                                        <br>
                                        Nilai bobot dari variable yang akan digunakan untuk kriteria biaya yaitu semakin
                                        kecil
                                        nilainya semakin baik. Kenapa?
                                        Tentu kita sendiri ingin mencari tempat bimbel dengan biaya yang semurah mungkin
                                        kah?
                                        Jadi, semakin kecil biaya yang harus dikeluarkan tentu lebih baik.
                                        Artinya semakin kecil nilai bobot maka semakin baik.
                                        Nilai bobot untuk setiap variable dari kriteria biaya yaitu:
                                        <br>
                                    <table class="table table-table-responsive-md  table-bordered d-flex">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Biaya</th>
                                            <th class="text-center">Nilai</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <=1.500.000 </td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1.500.000 – 2.500.000 </td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>2.500.000 – 3.500.000 </td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>>= 3.500.000 </td>
                                            <td>5</td>
                                        </tr>
                                    </table>
                                    Karena disini nilai bobot yang semakin kecil semakin baik, maka kriteria Biaya masuk
                                    kedalam kategori Cost.
                                    </p>
                                    <p class="card-text">
                                        <b>C2 - Kriteria Lokasi</b>
                                        <br>
                                        Nilai bobot dari variable yang akan digunakan untuk kriteria lokasi juga sama
                                        yaitu semakin
                                        kecil nilainya semakin baik.
                                        Kita ingin mencari tempat bimbel dengan lokasi yang sedekat mungkin dengan
                                        rumah, jadi
                                        semakin dekat jaraknya dengan rumah tentu lebih baik.
                                        Artinya semakin kecil nilai bobot maka semakin baik.
                                        Nilai bobot untuk setiap variable dari kriteria lokasi yaitu:
                                        <br>
                                    <table class="table table-responsive-sm table-bordered d-flex">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Lokasi</th>
                                            <th class="text-center">Nilai</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <= 5 km </td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5 – 10 km </td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>10 – 15 km </td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>>= 15 km</td>
                                            <td>5</td>
                                        </tr>
                                    </table>
                                    Aturannya sama dengan kriteria biaya, karea nilai bobot yang semakin kecil semakin
                                    baik,
                                    maka kriteria Lokasi juga masuk kedalam kategori cost.
                                    </p>
                                    <p class="card-text">
                                        <b>C3 - Kriteria Fasilitas</b>
                                        <br>
                                        Nilai bobot dari variable yang akan digunakan untuk kriteria fasilitas yaitu
                                        semakin besar
                                        nilainya semakin baik.
                                        Tentu kita ingin tempat bimbel yang fasilitasnya selengkap dan senyaman mungkin.
                                        Jadi
                                        semakin lengkap fasilitasnya tentu lebih baik.
                                        Artinya semakin besar nilai bobot maka semakin baik.
                                        Nilai bobot untuk setiap variable dari kriteria fasilitas yaitu:
                                        <br>
                                    <table class="table table-responsive-sm table-bordered d-flex">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Fasilitas</th>
                                            <th class="text-center">Nilai</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                Tidak Lengkap </td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Cukup Lengkap</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sangat Lengkap</td>
                                            <td>5</td>
                                        </tr>
                                    </table>
                                    Sekarang aturannya berbeda dengan dua kriteria sebelumnya.
                                    Karena nilai bobot yang semakin besar semakin baik, maka kriteria Fasilitas masuk
                                    kedalam
                                    kategori benefit.
                                    </p>
                                    <p class="card-text">
                                        <b>C4 - Kriteria Kualitas Pengajar</b>
                                        <br>
                                        Tentu kita ingin mencari tempat bimbel dengan pengajar yang berkualitas.
                                        Darimana kita tahu pengajar tersebut berkualitas? Misalnya bisa dilihat dari
                                        gelar akademik
                                        dan alumni Universitasnya. Semakin tinggi gelar akademiknya tentu kita berasumsi
                                        bahwa
                                        pengajar tersebut berkualitas.
                                        Nilai bobot untuk setiap variable dari kriteria kualitas pengajar yaitu:
                                        <br>
                                    <table class="table table-responsive-sm table-bordered d-flex">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Pengajar</th>
                                            <th class="text-center">Nilai</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                Lulusan D1/D2/D3 </td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Lulusan S1 </td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Lulusan S2</td>
                                            <td>5</td>
                                        </tr>
                                    </table>
                                    Aturannya sama dengan kriteria sebelumnya.
                                    Karena nilai bobot yang semakin besar semakin baik, maka kriteria Kualitas Pengajar
                                    masuk kedalam kriteria benefit.
                                    <br>
                                    Jadi kriteria C1 dan C2 masuk kategori cost, kriteria C3 dan C4 masuk kategori
                                    benefit.
                                    </p>
                                    <hr>
                                    <p class="card-text">
                                        <b>Bobot Kriteria</b>
                                        <br>
                                    <table class="table table-responsive-sm table-bordered d-flex">
                                        <tr>
                                            <th class="text-center">Kriteria</th>
                                            <th class="text-center" colspan="2">Bobot</th>
                                        </tr>
                                        <tr>
                                            <td>C1</td>
                                            <td>40</td>
                                            <td>0,4</td>
                                        </tr>
                                        <tr>
                                            <td>C2</td>
                                            <td>30</td>
                                            <td>0,3</td>
                                        </tr>
                                        <tr>
                                            <td>C3</td>
                                            <td>20</td>
                                            <td>0,2</td>
                                        </tr>
                                        <tr>
                                            <td>C4</td>
                                            <td>10</td>
                                            <td>0,1</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>100</td>
                                            <td>1</td>
                                        </tr>
                                    </table>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require "layout/footer.php";?>
        </div>
    </div>
    <?php require "layout/js.php";?>
</body>

</html>