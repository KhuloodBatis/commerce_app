@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="media border p-3">

            <img src="cinqueterre.jpg" class="rounded" alt="Cinque Terre">
            <h3> Image</h3>

            <div class="media-body">
                <div class="form-group">
                    <h3>{{ $product->title }}</h3>
                </div>
                <div class="form-group">
                    <h5>{{ $product->formattedPrice() }}</h5>
                </div>
                <div class="form-group">
                    <h3>{{ $product->description }}</h3>

                </div>
                <div class="form-group">
                    <h6>{{ $product->variation->sortBy('order')->groupBy('type')->first() }}</h6>

                </div>
            </div>
        </div>

    </div>
@endsection
