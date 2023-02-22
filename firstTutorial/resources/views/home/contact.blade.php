@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead"><b>Email:</b> {{ $email }}</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead"><b>Address:</b> {{ $address }}</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead"><b>Phone Number:</b> {{ $phoneNumber }}</p>
            </div>
        </div>
    </div>
@endsection
