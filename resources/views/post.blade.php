
@extends('layouts.main')

@section('container')
<article>
    <h2>{{  $post["title"] }}</h2>
    <p>{{ $post["body"] }}</p>
</article>

<a href="/blog">Back to posts</a>
@endsection