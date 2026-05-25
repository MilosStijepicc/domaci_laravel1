@extends("layout")

@section("naslov")
    Početna
@endsection

@section("sadrzajStranice")

    <div class="container mt-5">

        <div class="p-4 bg-light rounded shadow-sm mb-5">

            <h1 class="text-primary">
                Dobrodošli
            </h1>

            <p>
                Trenutno vrijeme:
                <strong>{{ $trenutnoVrijeme }}</strong>
            </p>

        </div>

        <h2 class="mb-4 text-center">
            Najnoviji proizvodi
        </h2>

        <div class="row">

            @foreach($products as $product)

                <div class="col-md-4 mb-4">

                    <div class="card shadow h-100 border-0">

                        <div class="card-body d-flex flex-column">

                            <h3 class="card-title">
                                {{ $product->name }}
                            </h3>

                            <p class="text-muted">
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


    <form method="post" action="/send-contact">

        @if($errors->any())
            <p> Greska: {{ $errors->first() }}</p>
        @endif

        {{ csrf_field() }}
        <input name="email" type="email" placeholder="Unesite vas email">
        <input name="subject" type="text" placeholder="Unesite naslov poruke">
        <textarea name="description" placeholder="Unesite vas poruku"> </textarea>
        <button> Posalji poruku </button>
    </form>

@endsection
