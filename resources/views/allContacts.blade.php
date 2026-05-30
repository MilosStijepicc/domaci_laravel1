@extends("layout")

@section("naslov")
    Svi kontakti
@endsection

@section("sadrzajStranice")

    <div class="container mt-5">

        <h1 class="text-center text-primary mb-5">
            📩 Poslati kontakti
        </h1>

        <div class="row">

            @foreach($allContacts as $allContact)

                <div class="col-md-6 mb-4">

                    <div class="card shadow border-0 h-100">

                        <div class="card-body d-flex flex-column">

                            <h5 class="text-primary mb-3">
                                {{ $allContact->subject }}
                            </h5>

                            <p class="mb-2">
                                <strong>Email:</strong>
                                {{ $allContact->email }}
                            </p>

                            <p class="mb-3">
                                <strong>Poruka:</strong><br>
                                {{ $allContact->message }}
                            </p>

                            <div class="mt-auto d-flex gap-2">

                                <a href="/contacts/edit/{{ $allContact->id }}" class="btn btn-warning">
                                    Edit
                                </a>

                                <a href="/admin/delete-contact/{{ $allContact->id }}" class="btn btn-danger">
                                    🗑️ Obriši
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

@endsection
