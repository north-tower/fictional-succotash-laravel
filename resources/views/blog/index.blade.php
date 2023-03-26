@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">Laravel</p>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12">
            <p class="post-title">{{  $post->title }} </p>
            <p>
                @foreach($post->tags as $tag)
                    - {{ $tag->name }} -
                @endforeach
            </p>
            <p>{{ $post->content }}</p>
            <p><a href="{{ route('blog.post', ['id' => $post->id]) }}">Read More</a></p>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-md-12 text-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

