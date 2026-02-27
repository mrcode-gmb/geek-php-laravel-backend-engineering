@extends('app')

@section('content')
    <x-alert :type="'failed'" :class="'green'"></x-alert>
    Hello world


    <form method="POST" action="{{ route('user.store') }}">
        @method("POST")
        @csrf
        <input type="text" name="name" placeholder="Your name">
        {{ $errors->first("name") }}
        <input type="email" name="email" placeholder="Your email">
        {{ $errors->first("email") }}
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit">Send</button>
    </form>
@endsection
