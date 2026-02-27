@extends("app")

@section("content")
    <x-alert :type="'failed'" :class="'green'"></x-alert>
    Hello world
@endsection