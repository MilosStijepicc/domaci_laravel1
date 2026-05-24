@extends("layout")

@section("naslov")
    Shop
@endsection

@section("sadrzajStranice")

    <div class="container mt-5">

        <h1 class="text-primary text-center mb-5">🛒 Shop</h1>

        <div class="row">
            @foreach($products as $product)

                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100 border-0">

                        <div class="card-body d-flex flex-column">

                            <h3 class="card-title text-dark">
                                {{ $product->name }}
                            </h3>

                            <p class="card-text text-muted">
                                {{ $product->description }}
                            </p>

                            <div class="mt-auto">
                                <p class="mb-1">
                                    <strong>Cijena:</strong>
                                    {{ $product->price }} KM
                                </p>

                                <p class="mb-0">
                                    <strong>Količina:</strong>
                                    {{ $product->amount }}
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

            @endforeach
        </div>

    </div>

@endsection
