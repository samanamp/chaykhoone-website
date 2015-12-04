@extends('master')

@section('title', 'چایخـــــونه')
@section('subtitle', '')
@section('intro-header-image','img/home-bg.jpg')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach( $articles as $article)
                    <a  href="/{{$article->id}}">
                <div class="post-preview">


                    <div class="intro-header" style="background-image: url({{$article->thumb_image}}); padding: 1em; color: #e5e5e5;">
                        <div class="h1 text-center" style="margin-bottom: 1em">~ {{$article->id}} ~</div>


                            <h2 class="text-center" style="color: #e5e5e5;">
                                {{ $article->title }}
                            </h2>
                            <h3 class="text-center">
                                {{ $article->subtitle }}
                            </h3>
                    </div>

                </div>
                    </a>
                <hr>
                @endforeach
                <!-- Pager -->
                {{--<ul class="pager">--}}
                    {{--<li class="next">--}}
                        {{--<a href="#">Older Posts &rarr;</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </div>
@stop