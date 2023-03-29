@extends('layouts.app')
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['orders'] as $order)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <div class="card-header text-center"><b>Order {{$order['id']}}</b></div>
                    <div class="card-body">
                        <p><b>status: </b>{{$order['status']}}</p>
                        <p><b>Price: </b>{{$order['price']}}</p>
                        <a type="button" href="{{ route('order.show', ['id' => $order['id']]) }}"
                            class="btn btn-primary">details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
