@extends('layouts.master')
@section('content')
    <!--================ About Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!--================End About Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="about-area section_gap gray-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 about-left">
                    @if(!empty($profile->profile_photo))
                    <img class="img-fluid" src="{{asset('storage') . '/' . $profile->profile_photo}}" alt="">
                    @endif
                </div>
                <div class="col-lg-6 col-md-12 about-right">
                    <div class="main-title text-left">
                        <h1>about myself</h1>
                    </div>
                    <div class="mb-50 wow fadeIn" data-wow-duration=".8s">
                        {{$profile->user->name}}<br/>
                        {{\Carbon\Carbon::parse($profile->date_of_birth)->age}} years old<br/>
                        <small>{{$profile->bio}}</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area section_gap gray-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 col-md-12">
                    <div class="main-title text-left">
                        <h1>about education</h1>
                    </div>
                    <div class="mb-50 wow fadeIn" data-wow-duration=".8s">
                        <table class="table  table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Degree
                                </th>
                                <th>
                                    Year/Location
                                </th>
                                <th>
                                    Grade
                                </th>
                                <th>
                                    Institute
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($educations))
                                @foreach($educations as $education)
                                    <tr>
                                        <td>{{$education->education_degree}}</td>
                                        <td>{{$education->year_of_pass}}/{{$education->location}}</td>
                                        <td>{{!empty($education->grade) ? $education->grade : 'hidden'}}</td>
                                        <td>{{$education->institute_name}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area section_gap ">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-12 col-md-12 about-right">
                    <div class="main-title text-left">
                        <h1>about skills</h1>
                    </div>
                    <div class="mb-50 wow fadeIn" data-wow-duration=".8s">
                        <div class="d-flex justify-content-between flex-wrap">
                            @if(!empty($skills))
                                @foreach($skills as $skill)
                                    <label class="d-inline">
                                        {{$skill->skill_name}}
                                        <progress
                                            value="{{$skill->value_of_ten}}"
                                            max="10"
                                            aria-label="{{$skill->skill_name}}"
                                            class="progress progress-bar"
                                        ></progress>
                                    </label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Area =================-->

@endsection
