@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <a type="button" href="{{route('order.create')}}" class="btn btn-primary">Create Order </a>
                    <a type ="button" href="{{route('order.index')}}" class="btn btn-primary">List Order</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection