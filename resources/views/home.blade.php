@extends('layouts.app')

@section('title', 'Home -MyApp')

@section('content')

<div class="jumbotron text-center bg-light py-5">
    <h1 class="display-4">Selamat Datang di MyApp</h1>
    <p class="lead">Aplikasi Laravel Sederhana dengan Laravel Blade</p>
    <a href="{{ route('profile')}} " class="btn btn-primary btn-lg">Lihat Profile</a>
</div>
<br>
<h2 class="text-center">Random</h2>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card">
                <img src="img1.jpg" class="card-img-top" alt="Large Image 1">
                <div class="card-body">
                    <h5 class="card-title">— Mahatma Gandhi</h5>
                    <p class="card-text">“Jadilah perubahan yang ingin kamu lihat di dunia.”</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img2.jpg" class="card-img-top" alt="Large Image 2">
                <div class="card-body">
                    <h5 class="card-title">— Banksy</h5>
                    <p class="card-text">“Jika kamu lelah, istirahatlah. Jangan berhenti.”</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img3.jpg" class="card-img-top" alt="Large Image 3">
                <div class="card-body">
                    <h5 class="card-title">— John Wooden</h5>
                    <p class="card-text">“Jangan takut gagal. Takutlah untuk tidak mencoba.”</p>
                </div>
            </div>
        </div>
    </div>
<br><br>
<div class="row mt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <blockquote class="blockquote mb-0">
                    <h2>Our Photo's</h2>
                </blockquote>
            </div>
        </div>
    </div>
</div>
    <br><br>
    <div class="row text-center" >
        <div class="col-md-2">
            <div class="card">
                <img src="img4.jpg" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h5 class="card-title">Pinky</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img5.jpg" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h5 class="card-title">poppy</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img6.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">angry</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img7.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">greys</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img8.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">stars</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="img9.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">caca</h5>
                </div>
            </div>
        </div>
    
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <blockquote class="blockquote mb-0">
                    <p>"Motivasi adalah kunci kesuksesan. Teruslah berusaha dan jangan pernah menyerah."</p>
                    <footer class="blockquote-footer">Anonim</footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<br><br>
@endsection