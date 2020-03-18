@extends('admin.layouts.master')

@section('title', 'list')

@section('content-header')
    {{ __('messages.list_course')  }}
@stop
@section('content')
    <table id="example" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>{{ __('messages.number') }}</th>
            <th>{{ __('messages.courses') }}</th>
            <th>{{ __('messages.time') }}</th>
            <th>{{ __('messages.created_at') }}</th>
            <th>{{ __('messages.action') }}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><!-- /.example-class --></td>
            <td><!-- /.example-class --></td>
            <td><!-- /.example-class --></td>
            <td><!-- /.example-class --></td>
            <td>
                <a href="#" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
