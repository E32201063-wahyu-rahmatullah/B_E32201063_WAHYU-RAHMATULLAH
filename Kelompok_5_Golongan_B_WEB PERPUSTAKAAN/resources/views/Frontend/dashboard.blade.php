@extends('frontend/layouts.template')

@section('content')

<!--main content start-->

    <section id="main-content">
      <section class="wrapper">
        <!-- Begin News Ticker -->
        <div class="row margin-bottom-20">
        <div class="col-lg-12">
          <marquee>
            "Selamat Datang Di Perpustakaan"
            
          </marquee>
    </div>
    </div> 
    <!-- end begin news ticker-->
       <!-- Slider -->
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('frontend/img/perpus5.jpg')}}" class="d-block w-100" alt="gambar">
      <div class="carousel-caption d-none d-md-block">
          <h5>Welcome In Library</h5>
          <p>Perpustakaan Berbasis Online</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend/img/perpus6.jpg')}}" class="d-block w-100" alt="gambar">
      <div class="carousel-caption d-none d-md-block">
          <h5>PERPUSTAKAAN</h5>
          <p>Referensi Pendidikan</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend/img/perpus7.jpg')}}" class="d-block w-100" alt="gambar">
      <div class="carousel-caption d-none d-md-block">
          <p>Perpustakaan Berstandar Nasional</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slider-->
      </section>
      <div class="pre-footer">
        <div class="footer dark-bg">
          <div class="container">
            <div class="row margin-bottom-40" style="font-size:13px">
            <div class="col-sm-2 text-left">
              <h4>
                <b>Admin</b>
              </h4>
              <p>
                <br>
                <a href="https://www.instagram.com/wrahmat105/" target="_blank" class="text-white">Wahyu Rahmatullah</a>
                </br>
                <a href="https://www.instagram.com/ghovi_trihandika/" target="_blank" class="text-white">Ghovi Tri Y</a>
                </br>
                <a href="https://www.instagram.com/ravi_juu/" target="_blank" class="text-white">Ravi Tri J</a>
                </br>
                <a href="#" target="_blank" class="text-white">Lailatul Khusnia</a>
                </br>
                <a href="#" target="_blank" class="text-white">Bahrur Rosi</a>
              </p>        
            </div>
            <div class="col-sm-3 text-left">
              <h4> 
                <b>Kontak Kami </b>
              </h4>
              <p>
                <br>
                JL.Tadika Mesra no.103
                <br>
                JL.Syuu Jii no.301
                <br>
                Email :
                <a href="https://www.instagram.com/ravi_juu/" > info@perpustakaan </a>
                <br>
                <br>
                </p>
                </div>
                <div class="col-sm-3 text-left">
                <div class="widget-header">
                  <h2 class="widget-title">Follow Juga</h2>
                </div>
                <div class="textwidget custom-html-widget">
                  <div style="width:200px;">
                  <div style="float:left; width:58px; margin-right:8px;">
                  <a href="https://web.facebook.com/Gyzee-Gaming-107453587966018/">
                  <img src="frontend/img/fb_logo.png" alt="logo facebook">
</a>
</div>
              <div style="float:left; width:58px; margin-right:8px;">
                <a href="https://twitter.com/humaspolije">
                <img src="frontend/img/twitter_logo.png" alt="logo twitter">
</a>
</div>
                <div style="float:left; width:58px; margin-right:8px;">
                <a href="https://www.instagram.com/wrahmat105/">
                <img src="frontend/img/ig_logo.jpg" alt="logo instagram">
</a>
</div>
 </div>
          </div>
        </div>
        <div class="col-sm-4 text-left">
  <div class="widget-header">
    <h2 class="widget-tittle">TIME</h2>
</div>
<div id="clock"></div>
 <script type="text/javascript">
 <!--
 function showTime() {
     var a_p = "";
     var today = new Date();
     var curr_hour = today.getHours();
     var curr_minute = today.getMinutes();
     var curr_second = today.getSeconds();
     if (curr_hour < 12) {
         a_p = "AM";
     } else {
         a_p = "PM";
     }
     if (curr_hour == 0) {
         curr_hour = 12;
     }
     if (curr_hour > 12) {
         curr_hour = curr_hour - 12;
     }
     curr_hour = checkTime(curr_hour);
     curr_minute = checkTime(curr_minute);
     curr_second = checkTime(curr_second);
 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
     }
 
 function checkTime(i) {
     if (i < 10) {
         i = "0" + i;
     }
     return i;
 }
 setInterval(showTime, 500);
 //-->
 </script>
 
 <!-- Menampilkan Hari, Bulan dan Tahun -->
 <br>
 <script type='text/javascript'>
 <!--
 var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
 var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
 var date = new Date();
 var day = date.getDate();
 var month = date.getMonth();
 var thisDay = date.getDay(),
     thisDay = myDays[thisDay];
 var yy = date.getYear();
 var year = (yy < 1000) ? yy + 1900 : yy;
 document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
 //-->
 </script>
 </div>
</div>
           
      </div>
      
    </section>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--main content end-->
@endsection

