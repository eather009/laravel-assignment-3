@extends('layouts.master')
@section('content')
    <!--================ Start portfolio Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                    <h1>My Projects</h1>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Portfolio Banner Area =================-->

    <!--================ Start Portfolio Area =================-->
    <section class="section_gap ">
        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-lg-6 col-sm-6 col-sm-12 mb-1">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{!empty($project->project_url) ? $project->project_url : '#'}}">
                                    <h4>{{$project->project_name}}</h4>
                                </a>
                            </div>
                            <div class="card-body">
                                {!! nl2br($project->project_details) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================ End Portfolio Area =================-->

@endsection
