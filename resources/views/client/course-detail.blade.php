@extends('client.layouts.app')

@section('title', 'Course detail')

@section('content')
    <section class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-preview">
                        <img src="{{ asset('images/course-preview.jpg') }}" alt="">
                    </div>
                    <div class="course-content">
                        <h3>{{ __('messages.course') }} <span class="badge"></span></h3>
                        <p>{{ __('messages.description') }}</p>
                        <div class="details">
                            <span>{{ __('messages.creator') }}<a href="#"><!-- /.username --></a></span>
                            <span>{{ __('messages.time') }}</span>
                        </div>
                    </div>

                    <div class="course-curriculum">
                        <ul class="nav nav-tabs">
                            <li><a class="active" data-toggle="tab" href="#overview">{{ __('messages.overview') }}</a></li>
                            <li><a data-toggle="tab" href="#curriculum">{{ __('messages.curriculum') }}</a></li>
                            <li><a data-toggle="tab" href="#courseObj">{{ __('messages.subject') }}</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="overview" class="tab-pane fade in show active">
                                <h4 class="tab-title"><!-- /.example-class --></h4>
                                <ul class="tab-list-2col mb-4">
                                    <li><i class="ti-video-camera"></i><!-- /.example-class --></li>
                                </ul>

                                <h4 class="tab-title"><!-- /.example-class --></h4>
                                <p><!-- /.example-class --></p>

                                <h4 class="tab-title"><!-- /.example-class --></h4>
                                <ul>
                                    <li><!-- /.example-class --></li>
                                </ul>
                            </div>
                            <div id="curriculum" class="tab-pane fade">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item active">
                                        <h5 class="" data-toggle="collapse" data-target="#acpan1" aria-expanded="true">
                                            <!-- /.example-class -->
                                            <span><!-- /.08 lectures --></span>
                                        </h5>
                                        <div id="acpan1" class="collapse show" data-parent="#accordion">
                                            <div class="acr-body">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="ti-control-play"></i><!-- /.example-class --> <span class="badge badge-success">Kích hoạt</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="courseObj" class="tab-pane fade">
                                <h3><!-- /.example-class --></h3>
                                <ul>
                                    <li><!-- /.example-class --></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget instractors">
                            <figure>
                                <a href="#" type="button" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/img_avatar.png') }}" alt="" class="avatar-md circle">
                                </a>
                            </figure>
                            <h4><!-- /.username --></h4>
                            <span><!-- /.example-class --></span>
                        </div>
                        <div class="widget categories">
                            <h3 class="widget-title"><!-- /.list trainee --></h3>
                            <ul>
                                <li>
                                    <a href="#" type="button" data-toggle="modal" data-target="#exampleModal">
                                        <img src="{{ asset('images/img_avatar.png') }}" alt="" class="avatar1">
                                        <p class="mt-3 ml-2"><!-- /.username --></p>
                                    </a>
                                </li>
                                <a href="#">{{ __('messages.see_more') }}</a>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('client.profile')
@endsection
