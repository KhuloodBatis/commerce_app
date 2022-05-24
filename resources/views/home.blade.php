@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                @foreach ($categories as $category)
                    <x-category :category="$category" />
                @endforeach

            </div>

        </div>
    </div>
@endsection
