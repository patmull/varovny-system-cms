<div class="col-md-4">
    <aside class="right-sidebar">

      <form action="{{ route('posts') }}">
        <div class="search-widget">
            <div class="input-group">
              <input type="text" class="form-control input-lg" value="{{ request('term') }}" name="term" placeholder="Vyhledat...">
              <span class="input-group-btn">
                <button class="btn btn-lg btn-default" type="submit">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </div>
      </form>
      <div class="widget">
        <div class="widget-heading">
          <h4>Buď varován</h4>
        </div>
        <div class="widget-body">
              <div class="text-center">
                <a href="https://www.facebook.com/VarovnySystem"><i class="fab fa-facebook fa-3x m-10px"></i></a>
                <a href="https://twitter.com/VarovnySystem"><i class="fab fa-twitter fa-3x m-10px"></i></a>
                <a href="https://drive.google.com/file/d/1tJTFsIrMdiTO99pxhwC7b4rfUPB3CKqo/view?fbclid=IwAR1fnDGFaD6yhlcqhDUTmI4Spk3s01AY_Nsyj2gYSu4B6-OnXYOAYtpAQZg"><i class="fab fa-android fa-3x m-10px"></i></a>
                <a href="/be-warned"><i class="fas fa-envelope-square fa-3x m-10px"></i></a>
                <a href="/feed"><i class="fas fa-rss-square fa-3x m-10px"></i></a>
              </div>
            </div>
        </div>
        <div class="widget">
            <div class="widget-heading">
                <h4>Kategorie</h4>
            </div>
            <div class="widget-body">
                <ul class="categories">
                  @if(isset($categories))
                    @foreach ($categories as $category)
                      <li>
                          <a href="{{ route('category', $category->slug) }}"><i class="fa fa-angle-right"></i> {{ getCategory($category->title) }}</a>
                          <span class="badge pull-right">{{ $category->posts->count() }}</span>
                      </li>
                    @endforeach
                  @endif
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Archivy</h4>
            </div>
            <div class="widget-body">
                <ul class="categories">
                @if(isset($archives))
                  @foreach ($archives as $archive)
                      <li><a href="{{ route('posts', ['month' => $archive->month, 'year' => $archive->year]) }}">{{ month_name($archive->month)." ".$archive->year }}</a></li>
                  @endforeach
                @endif
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Nejvíce zobrazovaná varování</h4>
            </div>
            <div class="widget-body">
                <ul class="popular-posts">
                  @foreach($mostViewedPosts as $post)
                    <li>
                      @if(isset($post->image_url))
                        <div class="post-image">
                            <a href="{{ route('posts.show', $post->slug) }}">
                                <img src="{{ $post->image_thumb_url }}" />
                            </a>
                        </div>
                      @endif
                        <div class="post-body">
                            <h6><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h6>
                            <div class="post-meta">
                                <span>{{ $post->published_at }}</span>
                            </div>
                        </div>
                    </li>
                  @endforeach
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Tagy</h4>
            </div>
            <div class="widget-body">
                <ul class="tags">
                    @if(isset($tags))
                      @foreach ($tags as $tag)
                            <li><a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a></li>
                      @endforeach
                    @endif
                </ul>
            </div>
        </div>

    </aside>
</div>
