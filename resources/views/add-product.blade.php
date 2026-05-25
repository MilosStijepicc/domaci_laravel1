@extends("layout")

@section("naslov")
    Dodaj proizvod
@endsection

@section("sadrzajStranice")

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h1 class="text-primary mb-4">
                Dodavanje proizvoda
            </h1>

            @if($errors->any())

                <div class="alert alert-danger">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="/admin/save-product" method="POST">

                @csrf

                <div class="mb-3">

                    <label>Naziv proizvoda</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                    >

                </div>

                <div class="mb-3">

                    <label>Opis proizvoda</label>

                    <textarea
                        name="description"
                        class="form-control"
                        rows="4"
                    >{{ old('description') }}</textarea>

                </div>

                <div class="mb-3">

                    <label>Količina</label>

                    <input
                        type="number"
                        name="amount"
                        class="form-control"
                        value="{{ old('amount') }}"
                    >

                </div>

                <div class="mb-4">

                    <label>Cijena</label>

                    <input
                        type="number"
                        step="0.01"
                        name="price"
                        class="form-control"
                        value="{{ old('price') }}"
                    >

                </div>

                <button class="btn btn-primary">

                    Dodaj proizvod

                </button>

            </form>

        </div>

    </div>

@endsection
