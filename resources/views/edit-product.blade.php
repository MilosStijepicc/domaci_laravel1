@extends("layout")

@section("sadrzajStranice")

    <div class="container mt-5">

        <h2>Edit Product</h2>

        <form action="/products/update/{{$product->id}}" method="POST">
            {{ csrf_field() }}

            <input type="text"
                   name="name"
                   class="form-control mb-3"
                   value="{{$product->name}}">

            <textarea name="description"
                      class="form-control mb-3">{{$product->description}}</textarea>

            <input type="number"
                   name="amount"
                   class="form-control mb-3"
                   value="{{$product->amount}}">

            <input type="number"
                   step="0.01"
                   name="price"
                   class="form-control mb-3"
                   value="{{$product->price}}">

            <button class="btn btn-success">
                Save Changes
            </button>

        </form>

    </div>

@endsection
