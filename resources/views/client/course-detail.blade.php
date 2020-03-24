@extends('client.layouts.app')

@section('title', 'Course detail')

@section('content')
    <section class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-preview">
                        <img src="{{ $course->image }}" alt="">
                    </div>
                    <div class="course-content">
                        <h3>{{ $course->name }} <span class="badge"></span></h3>
                        <div class="details">
                            <span>{{ __('messages.creator') }} <a href="#">{{ $course->creator->full_name }}</a></span>
                            <span>{{ __('messages.time') }}</span> {{ $course->created_at }}
                        </div>
                    </div>

                    <div class="course-curriculum">
                        <ul class="nav nav-tabs">
                            <li><a class="active" data-toggle="tab" href="#overview">{{ __('messages.overview') }}</a></li>
                            <li><a data-toggle="tab" href="#curriculum">{{ __('messages.curriculum') }}</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="overview" class="tab-pane fade in show active">
                                <p>{{ $course->description }}</p>
                            </div>
                            <div id="curriculum" class="tab-pane fade">
                                @foreach ($subjects as $subject)
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item">
                                            <h5 class="" data-toggle="collapse" data-target="#{{ $subject->title }}" aria-expanded="false">
                                                {{ $subject->title }}
                                                <span><i class="fas fa-angle-down"></i></span>
                                            </h5>
                                            <div id="{{ $subject->title }}" class="collapse" data-parent="#accordion">
                                                <div class="acr-body">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="ti-control-play"></i>
                                                                @foreach ($subject->tasks as $task)
                                                                    {{ $task['title'] }}
                                                                    <span class="badge badge-success"></span>
                                                                @endforeach
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget categories">
                            <h3 class="widget-title">{{ __('messages.list_trainee') }}</h3>
                                @foreach ($users as $user)
                                    <ul>
                                        <li>
                                            <a href="#" type="button" data-toggle="modal" data-target="#profile"
                                                data-user-avatar="{{ $user->avatar }}" data-user-name="{{ $user->full_name }}"
                                                data-user-phone="{{ $user->phone }}" data-user-email="{{ $user->email }}">
                                                <img src="{{ $user->avatar }}" alt="" class="avatar1">
                                                <p class="mt-3 ml-2">{{ $user->full_name }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                @endforeach
                            <a href="#">{{ __('messages.see_more') }}</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('client.profile')
@endsection
