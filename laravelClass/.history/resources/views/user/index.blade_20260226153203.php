@extends("app")

@section("content")
    <x-alert :type="'failed'" :class="'red'"></x-alert>
    Hello world
@endsection