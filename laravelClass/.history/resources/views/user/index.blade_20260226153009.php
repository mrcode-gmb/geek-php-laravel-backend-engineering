@extends("app")

@section("content")
    <x-alert :type="'failed'" :class="'bg-r'"></x-alert>
    Hello world
@endsection