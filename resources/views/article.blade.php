@extends('layouts.app')

@section('content')
<h1>{{ $post->content }}</h1>
{{--
<span>{{$post->image ? $post->image->path : 'Pas d\'image'}}</span>
--}}


<img src="{{$post->image ? Storage::url($post->image->path) : asset('img/fillette.jpg') }} " alt="" width="100%">

<hr>
    @forelse($post->comments as $comment)

<div>{{$comment->content}} | crée en {{$comment->created_at->format('Y')}} </div>

    @empty

        Aucun commentaire pour ce post

    @endforelse

<hr>

@forelse($post->tags as $tag)

    <div>{{$tag->name}} | crée en {{$tag->created_at->format('Y')}} </div>

@empty

    Aucun tag pour ce post

@endforelse



<hr>


    <span>Nom de l'artiste de l'image: {{$post->imageArtist ? $post->imageArtist->name :
 'Pas d\'artiste pour cette image'}}</span>


<hr>

{{--    <span>Commentaire le plus récent : {{$post->comments->latestComment ?$post->latestComment->content :
 'Pas de commentaires récénts'}} </span>--}}

<hr>
{{--    <span>Commentaire le plus ancien : {{$post->comments->oldestComment ?$post->oldestComment->content :
'Pas de commentaires anciens'}} </span>--}}


@endsection


