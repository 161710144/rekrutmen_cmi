@extends('layouts.layout')


@section('title')
Apply
@endsection

@section('title-navbar')
Rekrutmen CMI
@endsection

@section('content')
<br><br>
<style>
.select {
  width: 100%;
  height: 60px;
  background-color: #F4FAFE;
  border: none;
  padding: 0px 20px;
  color: #314584;
  font-weight: 600;
  margin-bottom: 15px;
}
</style>


<!-- CONTACT SECTION -->
<section id="contact-us" class="contact">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h5>Silakan isi sesuai formulir !</h5>
        <h2>Form Pendaftaran Pekerjaan</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6 message">
        <select name="" class="select">
          <option value="">-- Posisi yang dilamar : (1) --</option>
          <option value="Analis Kesehatan">Analis Kesehatan</option>
          <option value="Apoteker">Apoteker</option>
          <option value="Bidan">Bidan</option>
          <option value="Dokter Spesialis">Dokter Spesialis</option>
          <option value="Dokter Umum">Dokter Umum</option>
          <option value="Patologi Klinik">Patologi Klinik</option>
          <option value="Perawat">Perawat</option>
          <option value="Rekam Medis">Rekam Medis</option>
        </select>
      </div>

      <div class="col-12 col-lg-6 message">
        <select name="" class="select">
          <option value="">-- Posisi yang dilamar : (2) --</option>
          <option value="Analis Kesehatan">Analis Kesehatan</option>
          <option value="Apoteker">Apoteker</option>
          <option value="Bidan">Bidan</option>
          <option value="Dokter Spesialis">Dokter Spesialis</option>
          <option value="Dokter Umum">Dokter Umum</option>
          <option value="Patologi Klinik">Patologi Klinik</option>
          <option value="Perawat">Perawat</option>
          <option value="Rekam Medis">Rekam Medis</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-6 email">
        <label for="">No. Kartu Keluarga</label>
        <input placeholder="No. Kartu Keluarga" type="text" id="nama_lengkap" maxlength="100" required>
      </div>
      <div class="col-12 col-lg-6 email">
        <label for="">No. KTP</label>
        <input placeholder="No. KTP" type="text" id="nama_panggilan" maxlength="100" size="30" required>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-6 email">
        <label for="">Nama Lengkap</label>
        <input placeholder="Nama Lengkap" type="text" id="nama_lengkap" maxlength="100" required>
      </div>
      <div class="col-12 col-lg-6 email">
        <label for="">Nama Panggilan</label>
        <input placeholder="Nama Panggilan" type="text" id="nama_panggilan" maxlength="100" size="30" required>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-6 email">
        <label for="">Tempat Lahir</label>
        <input placeholder="Tempat Lahir" type="text" id="tempat_lahir" maxlength="100" required>
      </div>
      <div class="col-12 col-lg-6 email">
        <label for="">Tanggal Lahir</label>
        <input placeholder="Tanggal Lahir" type="date" id="tanggal_lahir" required>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-3 email">
        <label for="">Jenis Kelamin</label>
        <select name="" class="select">
          <option value="">-- Pilih Jenis Kelamin : --</option>
          <option value="Laki - laki">Laki - laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="col-12 col-lg-3 email">
        <label for="">Tinggi Badan</label>
        <input placeholder="(cm)" type="text" id="tanggal_lahir" maxlength="3" required>
      </div>
      <div class="col-12 col-lg-3 email">
        <label for="">Berat Badan</label>
        <input placeholder="(kg)" type="text" id="tanggal_lahir" maxlength="3" required>
      </div>
      <div class="col-12 col-lg-3 email">
        <label for="">Golongan Darah</label>
        <select name="" class="select">
          <option value="">-- Golongan Darah : --</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="AB">AB</option>
          <option value="O">O</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-4 email">
      <label for="">Status Perkawinan</label>
        <select name="" class="select">
          <option value="">-- Pilih Status Perkawinan : --</option>
          <option value="1">Belum Menikah</option>
          <option value="2">Menikah</option>
          <option value="3">Cerai</option>
        </select>
      </div>
      <div class="col-12 col-lg-4 email">
        <label for="">Agama</label>
        <select name="" class="select">
          <option value="">-- Pilih Agama : --</option>
          <option value="1">Islam</option>
          <option value="2">Katolik</option>
          <option value="3">Kristen</option>
          <option value="4">Budha</option>
          <option value="5">Hindu</option>
        </select>
      </div>
      <div class="col-12 col-lg-4 email">
        <label for="">Suku Bangsa</label>
        <input placeholder="Suku Bangsa" type="text" id="tanggal_lahir" maxlength="15" required>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-12 email">
        <label for="">Alamat Sesuai KTP</label>
        <input placeholder="Nama jalan, rt/rw, kecamatan, kelurahan" type="text" id="nama_lengkap" maxlength="100" required>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-12 email">
        <label for="">Alamat Sekarang</label>
        <input placeholder="Nama jalan, rt/rw, kecamatan, kelurahan" type="text" id="nama_panggilan" maxlength="100" size="30" required>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-4 email">
        <label for="">Email</label>
        <input placeholder="Email Aktif" type="text" id="no_telp" maxlength="15" required>
      </div>
      <div class="col-12 col-lg-4 email">
        <label for="">No. Handphone</label>
        <input placeholder="Disarankan No. WhatApps" type="text" id="no_telp" maxlength="15" required>
      </div>
      <div class="col-12 col-lg-4 email">
        <label for="">No. Telp Rumah</label>
        <input placeholder="Isi jika ada" type="text" id="no_telp_rumah" maxlength="10">
      </div>
    </div>


    <div class="row">
      <div class="col-12 col-lg-4 email">
        <label for=""> Alat Transportasi</label>
        <select name="" class="select">
          <option value="">-- Alat Transportasi : --</option>
          <option value="1">Mobil</option>
          <option value="2">Motor</option>
          <option value="3">Kendaraan Umum</option>
          <option value="4">Jalan Kaki</option>
        </select>
      </div>
      <div class="col-12 col-lg-4 email">
        <label for="">Hobi</label>
        <input placeholder="contoh : Musik" type="text" id="no_telp" maxlength="100" required>
      </div>
      <div class="col-12 col-lg-4 email">
        <label for=""> Olahraga yang disukai</label>
        <input placeholder="contoh : Sepak bola" type="text" id="no_telp_rumah" maxlength="50">
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-4 email">
        <label for=""> Akun Instagram (jika ada)</label>
        <input placeholder="@" type="text" id="no_telp" maxlength="50">
      </div>
      <div class="col-12 col-lg-4 email">
        <label for=""> Akun Facebook (jika ada)</label>
        <input placeholder="@" type="text" id="no_telp" maxlength="50">
      </div>
      <div class="col-12 col-lg-4 email">
        <label for=""> Akun Twitter (jika ada)</label>
        <input placeholder="@" type="text" id="no_telp_rumah" maxlength="50">
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-5 email">
        <label for=""> Nama Sekolah / Nama Perguruan Tinggi</label>
        <input placeholder="Nama Sekolah / Nama Perguruan Tinggi" type="text" id="no_telp" maxlength="50">
      </div>
      <div class="col-12 col-lg-5 email">
        <label for=""> Jurusan Pendidikan</label>
        <input placeholder="Jurusan" type="text" id="no_telp" maxlength="50">
      </div>
      <div class="col-12 col-lg-2 email">
        <label for=""> Tahun Lulus</label>
        <input placeholder="Tahun Lulus" type="text" id="no_telp_rumah" maxlength="4">
      </div>
    </div>
    <br>

    <h5>Berkas Kelengkapan : (*pilih yang ada)</h5><br>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="1">
    <label for="vehicle1"> STR</label>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="1">
    <label for="vehicle1"> STRA</label>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="1">
    <label for="vehicle2"> SKCK</label>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="1">
    <label for="vehicle3"> Ijazah (Legalisir)</label>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="1">
    <label for="vehicle3"> Transkrip Nilai (Legalisir)</label>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="1">
    <label for="vehicle3"> Surat Keterangan Sehat</label>
    <br>
    <br>
    <br>
    <h5>Ketentuan lain :</h5><br>

      Bersedia melepaskan atribut keagamaan pada saat dinas kerja :<br><br>
      <input type="radio" id="male" name="rbHijab" value="Bersedia" checked>
      <label for="Bersedia">Ya</label>
      <input type="radio" id="female" name="rbHijab" value="Tidak Bersedia">
      <label for="Tidak Bersedia">Tidak</label>
      <br><br>

    <div class="row">
      <div class="col-12 message">
        <textarea id="message" name="message" rows="5" cols="1" placeholder="Ceritakan diri anda !"></textarea>
      </div>

      <div class="col-12">
        <div class="hero-btns contact-btn">
          <!-- Send Message Btn -->
          <a href="#">Send Message</a>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br><br><br><br><br>


@endsection
