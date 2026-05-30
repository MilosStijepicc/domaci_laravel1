@extends("layout")

@section("sadrzajStranice")

<form action="/contacts/update/{{$contact->id}}" method="POST">
    {{ csrf_field() }}

    <input type="email"
           name="email"
           class="form-control mb-3"
           value="{{$contact->email}}">

    <input type="text"
           name="subject"
           class="form-control mb-3"
           value="{{$contact->subject}}">

    <textarea name="message"
              class="form-control mb-3">{{$contact->message}}</textarea>

    <button class="btn btn-success">
        Save Changes
    </button>
</form>

@endsection
