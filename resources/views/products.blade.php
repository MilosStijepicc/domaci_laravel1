@extends("layout")

@section("naslov")
    Svi proizvodi
@endsection

@section("sadrzajStranice")

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h1 class="text-primary mb-4">
                Svi proizvodi
            </h1>

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                <tr>

                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Opis</th>
                    <th>Količina</th>
                    <th>Cijena</th>

                </tr>

                </thead>

                <tbody>

                @foreach($products as $product)

                    <tr>

                        <td>{{ $product->id }}</td>

                        <td>{{ $product->name }}</td>

                        <td>{{ $product->description }}</td>

                        <td>{{ $product->amount }}</td>

                        <td>{{ $product->price }} KM</td>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>

@endsection
