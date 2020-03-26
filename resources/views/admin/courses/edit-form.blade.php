@extends('admin.layouts.master')

@section('title', 'Edit course')

@section('content-header')
    {{ __('messages.edit_course') }}
@stop
@section('content')
    <div class="container-fluid">
        <div class="text-danger">
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{$e}}</li>
                @endforeach
            </ul>
        </div>
        <form action="{{route('courses.update', $courses->id)}}" role="form" method="post" >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ __('messages.name_course') }}</label>
                                <input name="name" type="text" class="form-control" placeholder="{{ __('messages.name_course') }}" value="{{$courses->name}}">
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
                                <input name="time" type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ __('messages.time') }}" value="{{$courses->time}}">
                            </div>
                            <div class="form-group">
                                <label>{{ __('messages.description') }}</label>
                                <textarea name="description" class="form-control" placeholder="{{ __('messages.description') }}" rows="10">
                                    {{$courses->description}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
                    <a href="{{route('adminIndex')}}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </div>
        </form>
    </div>
@endsection
