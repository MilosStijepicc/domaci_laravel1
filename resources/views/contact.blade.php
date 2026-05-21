@extends("layout")

@section("naslov")
Contact
@endsection

@section("sadrzajStranice")

<div class="row">

    {{-- FORM --}}
    <div class="col-md-6">

        <h2 class="mb-3 text-primary">Kontaktiraj nas</h2>

        <form>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Unesite email">
            </div>

            <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control" placeholder="Tema poruke">
            </div>

            <div class="mb-3">
                <label class="form-label">Poruka</label>
                <textarea class="form-control" rows="5" placeholder="Unesite poruku"></textarea>
            </div>

            <button class="btn btn-primary">Pošalji</button>

        </form>

    </div>

</div>

@endsection