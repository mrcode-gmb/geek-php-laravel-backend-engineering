@extends("app")

@section("content")
    <x-alert :type="'failed'" :class="'bg-red-500'"></x-alert>
    Hello world
@endsection