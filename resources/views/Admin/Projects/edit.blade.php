
@extends('Admin.Projects.layouts.create-or-edit')

@section('page-title')
    Modifica {{$project ->nome}}
@endsection

@section('form-action')
    {{route('admin.projects.update', $project)}}
@endsection



@section('form-method')
    @method("PUT")
@endsection
