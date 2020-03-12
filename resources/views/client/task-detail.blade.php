@extends('client.layouts.app')

@section('title', 'Task detail')

@section('content')
    <section class="page-feature">
        <div class="container text-center">
            <h2>{{ __('messages.task_detail') }}</h2>
            <div class="breadcrumb">
                <a href="#">{{ __('messages.home') }}</a>
            </div>
        </div>
    </section>

    <section class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-content">
                        <h3><!-- /.example-class --> <span class="badge"><!-- /.example-class --></span></h3>
                        <p><!-- /.example-class --></p>
                    </div>

                    <div class="comment-form">
                        <h4 class="comment-title">{{ __('messages.report') }}<span class="text-danger">*</span></h4>
                        <form action="#">
                            <textarea placeholder="Write Report"></textarea>
                            <button class="btn btn-success btn-report" type="submit">{{ __('messages.sumbit') }}</button>
                        </form>
                    </div>

                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget categories">
                            <h3 class="widget-title"><!-- /.example-class --></h3>
                            <ul>
                                <li><a href="#"><!-- /.example-class --></a>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
