@extends('layouts.app')
@section('content')

    <h1>Liste des articles</h1>
{{--<h2>{{$title}}</h2>--}}
    @if($posts->count() > 0)
@foreach($posts as $post)
<h2><a href="{{route('post.show', ['id' => $post->id])}}">{{ $post->title }}</a></h2>
@endforeach
    @else
    <h2>Aucun post en base de données</h2>
    @endif
<h1>Liste des vidéos</h1>
    @forelse($videos->comments as $comment)

        <div>{{$comment->content}} | crée en {{$comment->created_at->format('Y')}} </div>

    @empty

        Aucun commentaire pour ce post

    @endforelse
@endsection
