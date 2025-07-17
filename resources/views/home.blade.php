@extends('layouts.menu')
@section('content')

<div class="container" style="font-family: 'Roboto', sans-serif; margin-top: 50px;">

<!-- Welcome Section-->
<div class="text-center" style="
  
    max-width: 1280px;
    margin: 20px auto 50px;
    padding: 30px 40px 70px;
    color: white;
">

 <!-- Logo -->
<div style="margin-bottom: 25px;">
  <img src="images/logo.png" alt="Logo" style="
    width: 110px;
    height: 110px;
    object-fit: cover;
    border-radius: 50%;
  ">
</div>

<!-- Title -->
<h1 id="welcome-title" style="
   font-size: 3.0rem;  /* diperbesar dari 2.4rem */
  font-weight: 700;
  letter-spacing: 1px;
  margin-bottom: 10px;
  color: #00325e;
 
  font-family: 'Montserrat', sans-serif;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 1s ease, transform 1s ease;
">
  Selamat Datang di Sistem Magang
</h1>

<!-- Subtitle -->
<p id="welcome-subtitle" style="
  font-size: 1.5rem;
  font-weight: 400;
  color: #00325e;
  
  margin-bottom: 30px;
  font-family: 'Open Sans', sans-serif;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 1s ease 0.5s, transform 1s ease 0.5s;
">
  Universitas Pendidikan Ganesha
</p>

  <!-- Search Bar -->
  <form action="/tempat_pkl" style="max-width: 800px; margin: 0 auto;">
    <div class="input-group input-group-lg" style="
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
      background: #ffffff;
      border: 1px solid #007bff;
    ">
      <input type="text" name="katakunci" class="form-control" placeholder="Cari Tempat Magang..." aria-label="Search tempat magang" style="
        border: none;
        padding-left: 20px;
        height: 52px;
        font-size: 16px;
        color: #333;
      ">
     <span class="input-group-btn"> 
  <button type="submit" class="btn btn-primary" style="
    padding: 0 24px;
    height: 52px;
    border: none;
    font-weight: 600;
    font-size: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
    background-color: #0065a3;
    color: white;
  ">
    <i class="glyphicon glyphicon-search"></i> CARI
  </button>
</span>
    </div>
  </form>

</div>

<div class="row text-center stats-container" style="margin-bottom: 40px;">
  <!-- Tempat Magang -->
  <div class="col-sm-4">
    <div class="well well-sm" style="border-radius: 10px; padding: 30px 20px; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
      <div style="width: 70px; height: 70px; margin: 0 auto 15px; background-color: #154360; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
        <i class="glyphicon glyphicon-map-marker" style="font-size: 30px; color: white;"></i>
      </div>
      <h3 id="count-tempat" style="margin: 10px 0 5px; font-weight: 700; color: #154360;">0</h3>
      <p style="color: #666; font-size: 14px;">Tempat Magang</p>
    </div>
  </div>

  <!-- Mahasiswa -->
  <div class="col-sm-4">
    <div class="well well-sm" style="border-radius: 10px; padding: 30px 20px; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
      <div style="width: 70px; height: 70px; margin: 0 auto 15px; background-color: #154360; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
        <i class="fa fa-users" style="font-size: 30px; color: white;"></i>
      </div>
      <h3 id="count-mahasiswa" style="margin: 10px 0 5px; font-weight: 700; color: #154360;">0</h3>
      <p style="color: #666; font-size: 14px;">Mahasiswa Yang Mengikuti Magang Saat Ini</p>
    </div>
  </div>

  <!-- Jurusan -->
  <div class="col-sm-4">
    <div class="well well-sm" style="border-radius: 10px; padding: 30px 20px; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
      <div style="width: 70px; height: 70px; margin: 0 auto 15px; background-color: #154360; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
        <i class="glyphicon glyphicon-education" style="font-size: 30px; color: white;"></i>
      </div>
      <h3 id="count-jurusan" style="margin: 10px 0 5px; font-weight: 700; color: #154360;">0</h3>
      <p style="color: #666; font-size: 14px;">Jurusan Yang Mengikuti Magang Saat Ini</p>
    </div>
  </div>
</div>


 <!-- Announcements -->
  <div class="panel panel-default" style="border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); margin-top: 100px;">
    <div class="panel-heading" style="background-color: #034081; color: white; border-radius: 8px 8px 0 0;">
      <h4 style="margin:0;"><i class="glyphicon glyphicon-info-sign"></i> Info Pengumuman</h4>
    </div>
    <ul class="list-group">
      <li class="list-group-item media" style="border: none; border-bottom: 1px solid #eee;">
        <div class="media-left">
          <img src="images/jpg_icon.png" alt="Pengumuman" class="media-object img-rounded"
            style="width: 100px; height: 70px; object-fit: contain;">
        </div>
        <div class="media-body">
          <h5 class="media-heading" style="font-weight: 600;">Contoh Pengumuman</h5>
          <small class="text-muted"><i class="glyphicon glyphicon-tag"></i> Pengumuman &nbsp;&nbsp;|&nbsp;&nbsp; 2025</small>
          <p class="text-muted">Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </li>
    </ul>
  </div>

  <!-- Footer -->
  <footer class="text-center text-muted" style="margin-top: 50px; font-size: 13px; color:rgb(0, 0, 0);" >
    &copy; 2025 <a href="https://upttik.undiksha.ac.id/" target="_blank" style="color: #0396FF;">UPT-TIK UNDIKSHA</a> &nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="http://lp3m.undiksha.ac.id/" target="_blank" style="color: #0396FF;">LP3M UNDIKSHA</a>
  </footer>

</div>

@endsection




