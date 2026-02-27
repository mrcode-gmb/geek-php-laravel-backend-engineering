@extends('app')

@section('content')
    <x-alert :type="'failed'" :class="'green'"></x-alert>
    Hello world


    <form method="POST" action="{{ route('user.store') }}">
        @method("POST")
        @csrf
        <input type="text" name="name" placeholder="Your name">
        {{  }}
        <input type="email" name="email" placeholder="Your email">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit">Send</button>
    </form>
@endsection
