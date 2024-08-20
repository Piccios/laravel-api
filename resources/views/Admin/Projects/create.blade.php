@extends('Admin.Projects.layouts.create-or-edit')

@section('page-title')
    Aggiungi un nuovo progetto
@endsection

@section('form-action')
    {{route('admin.projects.store')}}
@endsection



@section('form-method')
    @method("POST")
@endsection
