@extends('layouts.master')
@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner-area owl-carousel" id="home">
        <div class="single_slide_banner " style="background: url('{{asset('common')}}/img/background.jpg') no-repeat center center/cover">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center">
                    <div class="banner-content col-lg-12 justify-content-center">
                        <h1>{{$user->name}}</h1>
                        <h3>Personal portfolio Website for Laravel Assignment</h3>
                        <a href="https://www.facebook.com/Iftekhar.Eather" class="primary-btn">Follow Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
@endsection
