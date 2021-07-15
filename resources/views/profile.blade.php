@extends('layouts.app')
@section('title') {{Auth::user()->name}} @endsection
@section('main')
    <h1>Profile</h1>
@endsection
