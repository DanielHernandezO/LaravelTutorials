@extends('layouts.app')
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
                <div class="card-header text-center">
                    <b>Order: {{ $viewData['order']['id'] }}</b>
                </div>
                <div class="card-body text-center">
                    <p class="card-text"><b>Status: </b>{{ $viewData['order']['status']}}</p>
                    <p class="card-text"><b>Comment: </b>{{ $viewData['order']['comment']}}</p>
                    <p class="card-text"><b>Price: </b>{{ $viewData['order']['price']}}</p>
                    <div>
                        
                        <form method="POST" action="{{route('order.delete',['id' => $viewData['order']['id']])}}">
                            @method('DELETE')
                            @csrf
                            <a type ="button" href="{{route('order.index')}}" class="btn btn-secondary">Go back</a>
                            <input type="submit" class="btn btn-primary" value="Delete" />  
                        </form>
                    </div>
                </div>
    </div>
@endsection
