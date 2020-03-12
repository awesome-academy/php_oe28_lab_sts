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
                    <tr>
                        <td><!-- /.example-class --></td>
                        <td><!-- /.example-class --></td>
                        <td><!-- /.example-class --></td>
                        <td><!-- /.example-class --></td>
                        <td><!-- /.example-class --></td>
                        <td>
                            <span class="badge badge-success"><!-- /.example-class --></span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-lg btn-success">{{ __('messages.view') }}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
