
@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
          @if($posts->count() <= 0)
                <div class="alert alert-info">
                  <p>Nejsou zde žádná varování.</p>
                </div>
          @else

              @include('posts.messages')

              @foreach($posts as $post)
              <article class="post-item">
                @if($post->image_url)
                    <div class="post-item-image">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <img src="{{ $post->image_url }}" alt="">
                        </a>
                    </div>
                  @endif
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
              @endforeach
            @endif

                  <!--
                  <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                  </ul>
                -->
                {{ $posts->appends(request()->only(['term']))->links() }}

            </div>

            @include('layouts.sidemenu')

        </div>

    </div>

@endsection
