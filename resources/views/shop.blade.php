@extends("layout")

@section("naslov")
Shop
@endsection

@section("sadrzajStranice")

<div class="p-4 bg-light rounded shadow-sm">

    <h2 class="text-primary mb-4">Shop</h2>

        @foreach($products as $product)
            <h1>
                {{ $product }}
                @if(str_contains(mb_strtolower($product), 'šnicla'))
                    - akcija
                @endif
            </h1>
        @endforeach

</div>

@endsection
