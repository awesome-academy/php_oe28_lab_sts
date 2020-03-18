@extends('admin.layouts.master')

@section('title', 'Add course')

@section('content-header')
    {{ __('messages.create_course') }}
@stop
@section('content')
    <div class="container-fluid">
        <form role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ __('messages.name_course') }}</label>
                                <input type="text" class="form-control" placeholder="{{ __('messages.name_course') }}">
                            </div>
                            <div class="form-group" id="form-profile">
                                <input type="file" name="image" id="course-img" class="btn btn-outline-info">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('images/def_img.png') }}" id="img-course">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ __('messages.time') }}</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="{{ __('messages.time') }}">
                            </div>
                            <div class="form-group">
                                <label>{{ __('messages.description') }}</label>
                                <textarea class="form-control" placeholder="{{ __('messages.description') }}" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    <a href="#" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </div>
        </form>
    </div>
@endsection
