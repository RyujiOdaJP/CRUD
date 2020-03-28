<!-- individual template -->
@extends('../layouts/app')
@section('title', $title)
@section('content')
    {{-- 個別ベージの内容 --}}
    <h2>{{ $title }}</h2>
    <p>{{ $body }}</p>
@endsection
