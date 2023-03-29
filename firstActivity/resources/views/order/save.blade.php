@extends('layouts.app')
@section('subtitle', 'Order Created')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <a type="button" href="{{route('order.create')}}" class="btn btn-primary"> Go Back </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection