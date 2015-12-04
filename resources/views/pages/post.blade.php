@extends('master')

@section('title', $article->title )
@section('subtitle', $article->subtitle)
@section('intro-header-image', $article->thumb_image)

@section('content')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {{ $article->body }}
                </div>
            </div>
        </div>
    </article>

    <hr>
@stop