@extends("app")

@section("content")
    <x-alert :type="'failed'" :class="'green'" sty></x-alert>
    Hello world
@endsection