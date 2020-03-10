@extends('template')
@section('title', 'Fuzzy Topsis')
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-black">

  </header>
  <!-- END : Header -->
@endsection

  <!-- Main -->
  <br><br><br><br>
  <div class="container">
    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Kriteria')">Data Kriteria</button>
  <button class="tablinks" onclick="openCity(event, 'Mahasiswa')">Data Mahasiswa</button>
  <button class="tablinks" onclick="openCity(event, 'Penilaian')">Data Penilaian</button>
  <button class="tablinks" onclick="openCity(event, 'Perhitungan')">Data alu</button>
</div>

<!-- Tab content -->
<div id="Kriteria" class="tabcontent">
  <h3>Kriteria</h3>
  <table class="table table-light">
    <th>No</th>
    <th>Kode</th>
    <th>Kriteria</th>
    <th>Nilai Atribut</th>
    <th>Keterangan</th>
    <th>Bobot</th>
    <th>Action</th>
    <th>
      <a href="#" onclick="openCity(event, 'tabtambahdata')">
      <img class="img-fluid" alt="Responsive image" src="template_madan/images/iconplus.png">
      Tambah Data</label>
    </a>
    </th>
    <tr>
      <td>sdasda</td>
      <td>asd</td>
      <td>asd</td>
      <td>asda</td>
      <td>asda</td>
      <td>adasda</td>
      <td>
        <a href="#" onclick="openCity(event, 'tabeditdata')">
          <img style="width:10%; height: auto;" alt="Responsive image" src="template_madan/images/edit.png">
        </a>
          <img style="width:10%; height: auto;" src="template_madan/images/delete.png" alt="Responsive image">
      </td>
    </tr>
  </table>
</div>

<div class="tabcontent" id="tabtambahdata">
  <h4>Tambah Kriteria</h4>
      <form method="" action="">
        <table>
          <tr>
            <td>Kode</td>
            <td><input type="text" onkeyup="isi_otomatis()" name="kode"></td>
          </tr>
          <tr>
            <td>Kriteria</td>
            <td><input type="text" name="kriteria"></td>
          </tr>
          <tr>
            <td>Nilai Attribut</td>
            <td>
              <select name="attribut">
                <option value="benefit">Benefit</option>
                <option value="cost">Cost</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Bobot</td>
            <td><input type="text" name="bobot"></td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td> <textarea name="keterangan" rows="4" cols="40"></textarea> </td>
          </tr>
          <tr>
            <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
          </tr>
        </table>
</div>

<div class="tabcontent" id="tabeditdata">
  <h4>Edit Kriteria</h4>
      <form method="" action="">
        <table>
          <tr>
            <td>Kode</td>
            <td><input type="text" onkeyup="isi_otomatis()" name="kode"></td>
          </tr>
          <tr>
            <td>Kriteria</td>
            <td><input type="text" name="kriteria"></td>
          </tr>
          <tr>
            <td>Nilai Attribut</td>
            <td>
              <select name="attribut">
                <option value="benefit">Benefit</option>
                <option value="cost">Cost</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Bobot</td>
            <td><input type="text" name="bobot"></td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td> <textarea name="keterangan" rows="4" cols="40"></textarea> </td>
          </tr>
          <tr>
            <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
          </tr>
        </table>
</div>

<div id="Mahasiswa" class="tabcontent">
  <h3>Mahasiswa</h3>
  <table class="table">
    <th>No</th>
    <th>Nama</th>
    <th>Nilai IPK</th>
    <th>Nilai Prilaku</th>
  <tr>
    <td>sdasda</td>
    <td>asd</td>
    <td>asd</td>
    <td>asda</td>
  </tr>
</table>
</div>

<div id="Penilaian" class="tabcontent">
  <h3>Penilaian</h3>
  <table class="table">
    <th>No</th>
    <th>Nama</th>
    <th>Nilai IPK</th>
    <th>Nilai Prilaku</th>
  <tr>
    <td>sdasda</td>
    <td>asd</td>
    <td>asd</td>
    <td>asda</td>
  </tr>
</table>
  <button type="button" name="button">Seleksi</button>
</div>

<div id="Perhitungan" class="tabcontent">
  <h3>Kriteria</h3>
  <table class="table">
    <th>No</th>
    <th>Alternatif</th>
    <th>C01</th>
    <th>C02</th>
    <th>SKKM</th>
<tr>
  <td>sdasda</td>
  <td>asd</td>
  <td>asd</td>
  <td>asda</td>
  <td>asda</td>
</tr>
</table>
<button type="button" name="button">Seleksi SKKM</button>
<h4>Hasil Ranking</h4>
<table class="table">
<th>No</th>
<th>Alternatif</th>
<th>Ranking</th>
<tr>
<td>sdasda</td>
<td>asd</td>
<td>asd</td>
</tr>
</table>
  <span onclick="this.parentElement.style.display='none'">x</span>
</div>




















    <!-- <ul class="tabs">
      <div class="container text-center">
        <h1>Fuzzy Topsis</h1>
        <p class="lead">Halaman Fuzzy Topsis</p>
      </div>
            <li class="labels">
                <label for="tab1" id="label1">Data Kriteria</label>
                <label for="tab2" id="label2">Data Mahasiswa</label>
                <label for="tab3" id="label3">Data Penilaian</label>
                <label for="tab4" id="label4">Data Perhitungan</label>
            </li>
            <li>
              <input type="radio" checked name="tabs" id="tab1">
                 <div id="tab-content1" class="tab-content">
                    <table class="table">
                      <th>No</th>
                      <th>Kode</th>
                      <th>Kriteria</th>
                      <th>Nilai Atribut</th>
                      <th>Keterangan</th>
                      <th>Bobot</th>
                      <th>Action</th>
                      <th>
                        <label for="tabtambahdata" id="tambahdata">
                        <img class="img-fluid" alt="Responsive image" src="template_madan/images/iconplus.png">
                        Tambah Data</label>
                      </th>
                      <tr>
                        <td>sdasda</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asda</td>
                        <td>asda</td>
                        <td>adasda</td>
                        <td>
                          <label for="tabeditdata" id="editdata">
                            <img style="width:25%; height: auto;" alt="Responsive image" src="template_madan/images/edit.png">
                          </label>
                            <img style="width:25%; height: auto;" src="template_madan/images/delete.png" alt="Responsive Image">
                        </td>
                      </tr>
                    </table>
                </div>
            </li>

            <li>
                <input type="radio" name="tabs" id="tab2">
                  <div id="tab-content2" class="tab-content">
                    <table class="table">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nilai IPK</th>
                      <th>Nilai Prilaku</th>
                    <tr>
                      <td>sdasda</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asda</td>
                    </tr>
                  </table>
                </div>
            </li>

            <li>
                <input type="radio" name="tabs" id="tab3">
                  <div id="tab-content3" class="tab-content">
                    <table class="table">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nilai IPK</th>
                      <th>Nilai Prilaku</th>
                    <tr>
                      <td>sdasda</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asda</td>
                    </tr>
                  </table>
                    <button type="button" name="button">Seleksi</button>
                </div>
            </li>

            <li>
                <input type="radio" name="tabs" id="tab4">
                  <div id="tab-content2" class="tab-content">
                    <h4>Perhitungan Bobot CCi</h4>
                      <table class="table">
                        <th>No</th>
                        <th>Alternatif</th>
                        <th>C01</th>
                        <th>C02</th>
                        <th>SKKM</th>
                    <tr>
                      <td>sdasda</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asda</td>
                      <td>asda</td>
                    </tr>
                  </table>
                  <button type="button" name="button">Seleksi SKKM</button>
                  <h4>Hasil Ranking</h4>
                  <table class="table">
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Ranking</th>
                <tr>
                  <td>sdasda</td>
                  <td>asd</td>
                  <td>asd</td>
                </tr>
              </table>
                </div>
            </li>

            <li>
              <input type="radio" name="tabs" id="tabtambahdata">
                <div id="tab-content2" class="tab-content">
                    <h4>Tambah Kriteria</h4>
                        <form method="" action="">
                          <table>
                            <tr>
                              <td>Kode</td>
                              <td><input type="text" onkeyup="isi_otomatis()" name="kode"></td>
                            </tr>
                            <tr>
                              <td>Kriteria</td>
                              <td><input type="text" name="kriteria"></td>
                            </tr>
                            <tr>
                              <td>Nilai Attribut</td>
                              <td>
                                <select name="attribut">
                                  <option value="benefit">Benefit</option>
                                  <option value="cost">Cost</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <td>Bobot</td>
                              <td><input type="text" name="bobot"></td>
                            </tr>
                            <tr>
                              <td>Keterangan</td>
                              <td> <textarea name="keterangan" rows="4" cols="40"></textarea> </td>
                            </tr>
                            <tr>
                              <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                            </tr>
                          </table>
                </div>
          </li>
        </ul> -->
  </div>
