@extends('temp')

@section('content')

<div>
    <h1>Home page</h1>
    <div>
        <form action="/productsTable" method="POST">
            @csrf
            <label for="name">Name</label><br/>
            <input type="text" name="name" id="name" value="" placeholder="Enter your name"><br/>

            <label for="description">Description</label><br/>
            <textarea name="description" id="description" cols="30" rows="8"></textarea><br/>

            <Button type="submit">Create</Button>
        </form>
    </div>
</div>

@endsection