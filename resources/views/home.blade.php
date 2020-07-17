<!-- resources/views/home.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Home" -->
@section('title', 'Home')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')



<div class="jumbotron text-light" style="background-image: url('https://images.unsplash.com/photo-1550645612-83f5d594b671?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80')">
    <div class="container">
            <h1 class="display-4">Welcome to my devtest site!</h1>
            <p class="lead">Where all your fizzing and buzzing comes true.</p>
            <a href="/fizzbuzz" class="btn btn-success btn-lg my-2">View FizzBuzz Program</a>
                 
    </div>
</div>


@endsection