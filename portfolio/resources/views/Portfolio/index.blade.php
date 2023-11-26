@extends('layouts.auth')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="p-5">

                @if(!empty($user->profile()->count()))
                    <table class="table table-borderless">
                        <tr>
                            <th rowspan="3">
                                @if(!empty($profile->profile_photo))
                                <img src="{{ asset('storage') .'/' . $user->profile->profile_photo }}"
                                                 alt="" width="120">
                                @endif
                            </th>
                            <td>{{$user->name}}<br/><small>{{nl2br($user->profile->bio)}}</small></td>
                        </tr>
                        <tr>
                            <th>{{\Carbon\Carbon::parse($user->profile->date_of_birth)->age}} years old</th>
                        </tr>
                    </table>
                @endif

                @if(!empty($user->workHistories()->count()))
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Company</th>
                            <th>Designation</th>
                            <th>Joining Date</th>
                            <th>Resigning Date</th>
                            <th>Company Address</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->workHistories as $work)
                            <tr>
                                <td><a href="{{$work->company->company_url}}"
                                       target="_blank">{{$work->company->company_name}}</a></td>
                                <td>{{$work->designation}}</td>
                                <td>{{$work->join_date}}</td>
                                <td>{{$work->resign_date}}</td>
                                <td>{!! nl2br($work->company->company_address) !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif

                @if(!empty($user->projects()->count()))
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->projects as $project)
                            <tr>
                                <td><a href="{{!empty($project->project_url) ? $project->project_url : '#'}}"
                                       target="_blank">{{$project->project_name}}</a></td>
                                <td>{!! nl2br($project->project_details) !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif

                @if(!empty($user->contacts()->count()))
                    <div class="text-center">
                        <ul class="list list-inline">
                            @foreach($user->contacts as $contact)
                                <li class="list-inline-item">
                                    <i class="fa fa-1x fa-{{strtolower($contact->contact_type)}}"></i>
                                    <a href="{{$contact->contact_value}}"
                                       target="_blank">{{ucfirst($contact->contact_type)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

