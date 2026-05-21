@extends("layout")
@section("naslov")
Welcome
@endsection
@section("sadrzajStranice")
<div class="alert alert-info">
    <p>Trenutno vrijeme je {{ date("h:i:s") }}</p>
</div>

@endsection