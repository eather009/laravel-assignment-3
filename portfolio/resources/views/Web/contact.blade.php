@extends('layouts.master')
@section('content')
    <!--================ Start Contact Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                    <h1>Contact Me</h1>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Contact Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="contact_info d-flex justify-content-around ">
                <form id="contact-form" name="contact-form" action="{{route('web.contact')}}" method="POST">
                    @csrf
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" required value="{{ old('subject') }}">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea @error('message') is-invalid @enderror" ></textarea>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form text-center mt-2">
                                <input type="submit" class="btn btn-primary btn-block" value="Send">
                            </div>
                            <div class="alert alert-success mt-2 {{$sentMessage?'d-block':'d-none'}}" >
                                Message sent successfully
                            </div>
                        </div>
                    </div>
                </form>
                <div class="d-flex flex-column align-middle">
                    @foreach($contacts as $contact)
                        <div class="info_item d-block">
                            <a href="{{$contact->contact_value}}"  target="_blank">
                                <i class="fa fa-1x fa-{{strtolower($contact->contact_type)}}"></i>
                                <h6>{{ucfirst($contact->contact_type)}}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection
