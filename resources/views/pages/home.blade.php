@extends('master')

@section('title', 'چایخـــــونه')
@section('subtitle', 'یه خونه دنج برای علاقمندان به چای و (بقیه نوشیدنیها)')
@section('intro-header-image','img/home-bg.jpg')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach( $articles as $article)
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $article->subtitle }}
                        </h3>
                    </a>
                    {{--<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>--}}
                </div>
                <hr>
                @endforeach
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop