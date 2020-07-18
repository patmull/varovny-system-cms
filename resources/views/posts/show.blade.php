
@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-item post-detail">
                  <!-- if post->image_url -->
                    <div class="post-item-image">
                        <a href="{{ $post->image_url }}">
                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                        </a>
                    </div>

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
                            <p>{!! $post->excerpt !!}</p>
                        </div>

                        <div class="post-meta padding-10 clearfix">
                            <div class="pull-left">
                                <ul class="post-meta-group font-size-off">
                                    <li class=""><i class="fa fa-user float-and-font-size-off"></i><a href="{{ route('author', $post->author->slug) }}"> {{ $post->author->name }}</a></li>
                                    <li class=""><i class="fa fa-clock-o float-and-font-size-off"></i><time> {{ $post->published_at }}</time></li>
                                    <!-- CHECK CARBON DOCUMENTATION  -->
                                    <li class="">
                                    @foreach ($post->tags as $tag)
                                      <i class="fa fa-tags float-and-font-size-off" aria-hidden="true"></i><a href={{ route('tag', $tag->slug) }}>{{ $tag->name }}</a>
                                    @endforeach
                                    </li>
                                    <li class=""><i class="fa fa-list-alt float-and-font-size-off" aria-hidden="true"></i><a href="{{ route('category', $post->category->slug) }}"> {{ getCategory($post->category->title) }}</a></li>
                                    <li class=""><i class="fa fa-comments float-and-font-size-off"></i><a href="{{ route('posts.show', $post->slug) }}#post-comments"> {{ $post->commentsCount() }} Komentářů</a></li>
                                </ul>
                            </div>
                            <div class="pull-right mt-30px">
                                <a href="{{ route('posts.show', $post->slug) }}">Zobrazit více &raquo;</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="post-author padding-10">
                    <div class="media">
                      <div class="media-left">
                        <a href="{{ route('author', $post->author->slug) }}#">
                          <img alt="{{ $post->author->name }}" width="100" height="100" src="{{ $post->author->avatar() }}" class="media-object">
                          <!-- $author = $post->$author-->
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="{{ route('author', $post->author->slug) }}">{{ $post->author->name }}</a></h4>
                        <div class="post-author-count">
                          <a href="#">
                              <i class="fa fa-clone"></i>
                              {{ $post->author->posts->count() }} posts
                          </a>
                        </div>
                        @if (!is_null($post->author->bio))
                          {!! Markdown::convertToHtml($post->author->bio) !!}
                        @endif
                      </div>
                    </div>
                </article>

            @include('posts.comments')

            </div>
            @include('layouts.sidemenu')

        </div>
    </div>

@endsection
