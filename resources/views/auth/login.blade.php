@extends("layouts.app")

@section("title" , "login page")

@section("content")

<form action="{{route("login.post")}}" method="POST">
    @csrf
    <div>
        <label for="name">name:</label>
        <input name="name" id="name" type="text">
    </div>
    <div>
        <label for="phone">phone number:</label>
        <input name="phone" id="phone" type="tel">
    </div>
    <div>
        <label for="age">age:</label>
        <input name="age" id="age" type="number">
    </div>

    <button type="submit">Submit</button>
</form>

@endsection
