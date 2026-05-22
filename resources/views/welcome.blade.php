@extends("layout")
@section("naslov")
Welcome
@endsection
@section("sadrzajStranice")
<div class="alert alert-info">

    @if($sat >= 0 && $sat <= 12)
        <p> Dobro jutro !</p>

    @else
        <p>Dobar dan!</p>

    @endif

    <p>Trenutno sati: {{ $sat }}</p>
    <p>Trenutno vrijeme je {{ $trenutnoVrijeme }}</p>
</div>

@endsection
