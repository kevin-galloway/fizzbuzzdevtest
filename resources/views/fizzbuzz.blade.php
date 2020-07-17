<!-- resources/views/fizzbuzz.blade.php -->
@extends('index')
@section('title', ' FizzBuzz')
@section('content')
<div class="container my-5">
    <div class="row">
        @for($i=1; $i<=100; $i++)
            @if ($i % 15 == 0)
                FizzBuzz
            @elseif ($i % 3 == 0)
                Fizz
            @elseif ($i % 5 ==0)
                Buzz
            @else 
                {{ $i }}
            @endif
        @endfor
    </div>
</div>
@endsection