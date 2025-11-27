@extends('frontend.layout.app')
@section('content')
<!-- Featured Products -->
    
<section class="section">
    <h2 class="section-title">Our Products Range</h2>
    <div class="product-grid">
        @foreach ($products as $product)
        <div class="product-card">
            <div class="product-image">
            @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="main-image">
                        @elseif($produect->icon)
                        <i class="{{ $product->icon }}"></i>
                        @else
                        <i class="fas fa-box"></i> <!-- Default icon -->
                        @endif
            </div>
            <div class="product-info">
                <h3 class="product-title">
                    {{ $product->name }}
                </h3>
                <p>{{$product->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
    @section('bottomscript')
<!-- @section('scripts') -->
<script src="{{ asset('js/product.js') }}"></script>
<!-- @endsection -->
@endsection