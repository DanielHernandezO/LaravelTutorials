@extends('layouts.app')
@section('subtitle', 'Create Order')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                            <ul id="errors" class="alert alert-danger list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    @endif
                    <form method="POST" action="{{ route('order.save') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputStatus" class="col-sm-2 col-form-label"><b>STATUS</b></label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="statusP" value="pending" checked>
                                    <label class="form-check-label" for="status">
                                        PENDING
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="statusP1" value="paid">
                                    <label class="form-check-label" for="status">
                                        PAID
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="statusP2" value="refunded">
                                    <label class="form-check-label" for="status">
                                        REFUNDED
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputComment" class="col-sm-2 col-form-label"><b>COMMENT</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control mb-2" placeholder="Enter the comment" name="comment"
                                    value="{{ old('comment') }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPrice" class="col-sm-2 col-form-label"><b>PRICE</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control mb-2" placeholder="Enter the total price" name="price"
                                    value="{{ old('price') }}" />
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Send" />                  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection