@extends('layouts.base')

@section('title')
    Магазин Тортов
@endsection

@section('sidebar')
    @parent

@endsection

//add test comment

@section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img class="card-img-top" src="{{ $product->imagePath }}" alt="Card image cap">
                        <div class="card-body">
                        <div class="caption">
                            <h3 class="card-title">{{ $product->title }}</h3>
                            <p class="description">{{ $product->description }}</p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" disabled>{{ $product->price }} рублей</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Положить в корзину</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
