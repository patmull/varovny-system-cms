<article id="post-comments" class="post-comments">
    <h3><i class="fa fa-comments"></i>{{ $post->commentsCount() }} Komentáře</h3>

    <div class="comment-body padding-10">
        <ul class="comments-list">
            @foreach ($post->comments as $comment)
              <li class="comment-item">
                  <div class="comment-heading clearfix">
                      <div class="comment-author-meta">
                          <h4>{{ $comment->author_name  }}<small class="ml-2">{{ $comment->date }}</small></h4>
                      </div>
                  </div>
                  <div class="comment-content">
                    {{ $comment->body }}
                  </div>
              </li>
            @endforeach
        </ul>
    </div>

    <div class="comment-footer padding-10">
        <h3>Leave a comment</h3>
        {!! Form::open(['route' => ['posts.comments', $post->slug]]) !!}
            <div class="form-group required {{ $errors->has('author_name') ? 'has-error' : '' }}">
                <label for="name">Jméno</label>
                {!! Form::text('author_name', null, ['class' => 'form-control']) !!}
                @if($errors->has('author_name'))
                <span class="help-block">
                  <p>{{ $errors->first('author_name') }}</p>
                </span>
                @endif
            </div>
            <div class="form-group required {{ $errors->has('author_email') ? 'has-error' : '' }}">
                <label for="email">E-mail</label>
                {!! Form::text('author_email', null, ['class' => 'form-control']) !!}
                @if($errors->has('author_email'))
                  <span class="help-block">
                    <p>{{ $errors->first('author_email') }}</p>
                  </span>
                @endif
            </div>
            <div class="form-group">
                <label for="website">Webové stránky</label>
                {!! Form::text('author_url', null, ['class' => 'form-control']) !!}
                @if($errors->has('author_url'))
                <span class="help-block">
                  <p>{{ $errors->first('author_url') }}</p>
                </span>
                @endif
            </div>
            <div class="form-group required {{ $errors->has('body') ? 'has-error' : '' }}">
                <label for="comment">Komentář</label>
                {!! Form::textarea('body', null, ['rows' => 6, 'class' => 'form-control']) !!}
                @if($errors->has('body'))
                <span class="help-block">
                  <p>{{ $errors->first('body') }}</p>
                </span>
                @endif
            </div>
            <div class="clearfix">
                <div class="pull-left">
                    <button type="submit" class="btn btn-lg btn-success">Odeslat</button>
                </div>
                <div class="pull-right">
                    <p class="text-muted">
                        <span class="required">*</span>
                        <em>Povinná pole</em>
                    </p>
                </div>
            </div>
        </form>
    </div>

</article>
