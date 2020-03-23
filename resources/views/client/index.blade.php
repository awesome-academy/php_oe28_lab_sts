@extends('client.layouts.app')

@section('title', 'List')

@section('content')
    <div class="container mt-4">
        <a href="#">{{ __('messages.time_training') }}</a><br>
        <div class="row">
            <div class="col">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>{{ __('messages.number') }}</th>
                        <th>{{ __('messages.course') }}</th>
                        <th>{{ __('messages.start_date') }}</th>
                        <th>{{ __('messages.end_date') }}</th>
                        <th>{{ __('messages.status') }}</th>
                        <th>{{ __('messages.creator') }}</th>
                        <th>{{ __('messages.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->courses as $key => $course)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->pivot->start_time }}</td>
                                <td>{{ $course->pivot->end_time }}</td>
                                <td>
                                    @if ($course->pivot->status == \App\Enums\StatusType::StatusInactive)
                                        <span class="badge badge-warning">{{ __('messages.status_inactive') }}</span>
                                    @elseif ($course->pivot->status == \App\Enums\StatusType::StatusActive)
                                        <span class="badge badge-primary">{{ __('messages.status_active') }}</span>
                                    @elseif ($course->pivot->status == \App\Enums\StatusType::StatusDone)
                                        <span class="badge badge-success">{{ __('messages.status_done') }}</span>
                                    @endif
                                </td>
                                <td>{{ $user->full_name }}</td>
                                <td>
                                    <a href="{{ route('courses.detail', $course->id) }}" class="btn btn-lg btn-success"><i class="fas fa-eye-slash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
