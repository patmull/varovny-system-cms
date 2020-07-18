<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:media="http://search.yahoo.com/mrss/">';
echo '<channel>';
echo    '<title>RSS kanál: Varovný systém České republiky</title>';
echo     '<link>';
?>
{{ url('/feed') }}
<?php
echo '</link>';
echo    '<description>New Published Warnings on Disaster Warning System Czech Republic</description>';
echo    '<atom:link href="';?>{{ action('PostController@feed') }}<?php
echo '"';
echo ' rel="self" type="application/atom+xml" />';
echo '    <lastBuildDate>';
?>
{{ $posts->first()->updated_at->format(DateTime::RSS) }}
<?php
echo '</lastBuildDate>';
?>
    @foreach($posts as $post)

    @php

    $post->title = str_replace("&", "&amp;", $post->title);
    $post->description = str_replace("&rdquo;", "”", $post->description);
    $post->description = str_replace("&ldquo;", "“", $post->description);

    $post->title = stripslashes($post->title);
    $post->description = stripslashes($post->description);
    $post->slug = stripslashes($post->slug);

    if ($post->image !='') {
        $img = "<img src='".url($post->image)."' alt='".$post->title."' width='600'>";
    } else {
        $img = null;
    }

    @endphp

<?php
echo '<item>';
echo '<category>';
?>
{{ $post->category->title }}
<?php
echo '</category>';
echo '<title><![CDATA[';
?>
{{ $post->title }}
<?php
echo ']]></title>';
echo '<senderName><![CDATA[';
$sender = explode(":", $post->title, 2)[0];
echo $sender;
echo ']]></senderName>';
echo '<guid isPermaLink="true">';
?>
{{ route('posts.show', $post->slug) }}
<?php
echo '</guid>';
echo '<description><![CDATA[';
?>
{!! $post->excerpt !!}
<?php
echo ']]></description>';
echo '<content:encoded><![CDATA[';
?>
{!! $post->body !!}
<?php
echo ']]></content:encoded>';
echo '<dc:creator xmlns:dc="http://purl.org/dc/elements/1.1/"><![CDATA[';
?>
{{ $post->author->name }}
<?php
echo ']]></dc:creator>';

echo '<pubDate>';
?>
{{ $post->published_at->format(DateTime::RSS) }}
<?php
echo '</pubDate>';
echo  '</item>';
?>
@endforeach
<?php
echo '</channel>';
echo '</rss>';
?>
