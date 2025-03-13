@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="card">
        <div class="card-header">
        <center><h1>Tentang Saya</h1></center>
        </div>
</div>

<br>
<br>


<div class="card bg-light py-5">
<ul>
   <center> <h3>Perjalanan Saya</h3></center>
   <br>
    <p>
        Aku lahir di sebuah kota kecil yang penuh dengan kehangatan keluarga. Masa kecilku dihabiskan dengan bermain di halaman rumah, berlari-lari di bawah sinar matahari, dan sesekali menangis saat jatuh dari sepeda. Saat masuk sekolah dasar, aku mulai mengenal teman-teman baru dan belajar membaca, menulis, serta berhitung</p>

    <p>
    Di bangku sekolah menengah, aku mulai menyadari bahwa hidup bukan hanya tentang bermain. Ada tanggung jawab, ujian, dan tentu saja, PR yang menumpuk. Aku mulai menentukan cita-cita, meskipun sering berubah-ubah—dari ingin jadi dokter, insinyur, hingga astronot (meskipun takut ketinggian).
    </p>

    <p>
    Setelah lulus SMA, aku melanjutkan pendidikan ke perguruan tinggi. Ini adalah masa yang penuh tantangan—belajar mandiri, menghadapi dosen killer, dan tentu saja, bertahan dengan uang saku pas-pasan. Aku mulai merasakan dunia kerja lewat magang dan pekerjaan paruh waktu.
    </p>
    <p>
    Setelah bertahun-tahun berjuang, akhirnya aku mendapatkan pekerjaan pertamaku. Awalnya penuh dengan kebingungan dan kesalahan, tapi seiring waktu aku mulai terbiasa dan menikmati prosesnya. Dunia kerja mengajarkanku bahwa hidup bukan hanya tentang mencari uang, tetapi juga tentang terus belajar dan berkembang.
    </p>
    <p>
    Perjalanan ini belum berakhir. Aku masih memiliki banyak impian yang ingin kucapai. Namun, satu hal yang pasti—setiap langkah yang telah kulalui membentuk diriku menjadi seperti Sekarang
    </p>
    </ul>
</div>

<br><br>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <center>
                <img src="ank1.jpg"  alt="Image 1"  width="150">
                </center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <center>
                <img src="wsd.jpg" alt="Image 2"  width="150">
                
                </center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <center>
                <img src="krj.jpg" alt="Image 3"  width="150">
                
                </center>
            </div>
        </div>
    </div>

<br> <br>
<div class="card">
        <div class="card-header">
        <div class="mb-5">
            <h5 class="text-center">Hubungi Kami</h5>
            <p class="text-center">
                Jika anda memiliki pertanyaan atau masukan, silahkan hubungi kami melalui:
            </p>
            <div class="text-center">
                <a href="{{ route('contact')}} " class="btn btn-primary btn-lg">Hubungi Kami</a>
            </div>
    
</div>
</div>
</div>


@endsection