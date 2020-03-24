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
                        <h3>{{ $task->title }}<span class="badge"><!-- /.example-class --></span></h3><br>
                        <p>{{ $task->content }}</p>
                    </div>

                    <div class="comment-form">
                        <h4 class="comment-title">{{ __('messages.report') }}<span class="text-danger">*</span></h4>
                        <form action="{{ route('courses.report', $task->id) }}" method="post">
                            @csrf
                            <textarea name="report" placeholder="{{ __('messages.report') }}"></textarea>
                            @if ($errors->first('report'))
                                <span class="text-danger"> {{ $errors->first('report') }} </span>
                            @endif
                            <button class="btn btn-success btn-report" type="submit">{{ __('messages.submit') }}</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget categories">
                            <h3 class="widget-title">{{ $task->subject->title }}</h3>
                            <ul>
                                @foreach ($tasks as $task)
                                    <li><a href="{{ route('courses.task', $task->id) }}">{{ $task->title }}</a>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
