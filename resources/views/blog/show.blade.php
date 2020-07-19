@extends('blog.layout')

@section('content')

<header class="mt-0 pt-0 container-fluid" style="margin-top:-200px;background:{{false?null:'radial-gradient(circle, rgba(28,41,223,0.8799719716988358) 0%, rgba(5,96,203,1) 100%);'}}">
        <div style="background:{{false?null:'radial-gradient(circle, rgba(28,41,223,0.8799719716988358) 0%, rgba(5,96,203,1) 100%);'}} min-height:250px;min-width:100%;margin-top:-20px">
                <img src="" alt="">
                <div class="row d-flex justify-content-center">
                        <div class=" col-md-6 text-light align-self-baseline py-2">

                            <h2>{{ $post->title }}</h2>
                        </div>
                </div>
            </div>
        </header>
        <div class="container my-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item text-uppercase"> <a href="{{url('/')}}" class="text-primary">Home</a></li>
              <li class="breadcrumb-item active text-uppercase"><a href="{{url('/blog')}}" class="text-primary">Blog</a></li>
            </ol>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-item post-detail">
                    @if ($post->image_url)
                        <div class="post-item-image figure">
                            <img class="figure-img img-fluid rounded" src="{{ $post->image_url }}" alt="{{ $post->title }}">
                        </div>
                    @endif

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>{{ $post->title }}</h1>

                            <div class="post-meta no-border">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="{{ route('author', $post->author->slug) }}"> {{ $post->author->name }}</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> {{ $post->date }}</time></li>
                                    <li><i class="fa fa-folder"></i><a href="{{ route('category', $post->category->slug) }}"> {{ $post->category->title }}</a></li>
                                    <li><i class="fa fa-tag"></i>{!! $post->tags_html !!}</li>
                                    <li><i class="fa fa-comments"></i><a href="#post-comments">{{ $post->commentsNumber() }}</a></li>
                                </ul>
                            </div>

                            {{-- {!! $post->body_html !!} --}}
                            {!!$post->body!!}
                        </div>
                    </div>
                </article>

                <article class="post-author padding-10">
                    <div class="media">
                      <div class="media-left">
                        <?php $author = $post->author; ?>
                        <a href="{{ route('author', $author->slug) }}">
                          <img alt="{{ $author->name }}" width="100" height="100" src="{{ $author->gravatar() }}" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="{{ route('author', $author->slug) }}">{{ $author->name }}</a></h4>
                        <div class="post-author-count">
                          <a href="{{ route('author', $author->slug) }}">
                              <i class="fa fa-clone"></i>
                              <?php $postCount = $author->posts()->published()->count() ?>
                              {{ $postCount }} {{ str_plural('post', $postCount) }}
                          </a>
                        </div>
                        {!! $author->bio_html !!}
                      </div>
                    </div>
                </article>

                @include('blog.comments')
            </div>

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
