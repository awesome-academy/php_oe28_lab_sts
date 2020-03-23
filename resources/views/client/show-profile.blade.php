@extends('client.layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('profile.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{ __('messages.full_name') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="full_name" value="{{ Auth::user()->full_name }}"
                            placeholder="{{ __('messages.full_name') }}">
                        @if ($errors->first('full_name'))
                            <span class="text-danger"> {{ $errors->first('full_name') }} </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{ __('messages.email') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}"
                            placeholder="{{ __('messages.email') }}">
                        @if ($errors->first('email'))
                            <span class="text-danger"> {{ $errors->first('email') }} </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{ __('messages.phone') }} <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="phone" value="{{ Auth::user()->phone }}"
                            placeholder="{{ __('messages.phone') }}">
                        @if ($errors->first('phone'))
                            <span class="text-danger"> {{ $errors->first('phone') }} </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{ __('messages.avatar') }} <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="avatar" value="{{ Auth::user()->avatar }}">
                        @if ($errors->first('avatar'))
                            <span class="text-danger"> {{ $errors->first('avatar') }} </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-success">{{ __('messages.submit') }}</button>
            </div>
        </form>
    </div>
@endsection
