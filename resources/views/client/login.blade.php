@extends('client.layouts.app')

@section('title', 'login')

@section('content')
    <section class="banner login-registration">
        <div class="vector-img">
            <img src="{{ asset('images/baner.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="#" class="sl-form">
                        <div class="form-group">
                            <label>{{ __('messages.username') }}</label>
                            <input type="email" placeholder="{{ __('messages.username') }}" required>
                        </div>
                        <div class="form-group">
                            <label>{{ __('messages.password') }}</label>
                            <input type="password" placeholder="{{ __('messages.password') }}" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">{{ __('messages.remeber') }}</label>
                        </div>
                        <button class="btn btn-filled btn-round btn-login">{{ __('messages.login') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
