@if (isset($categoryName))
<div class="alert alert-info">
  <p>Typ hrozby: <strong> {{ $categoryName }} </strong> </p>
</div>
@endif

@if (isset($tagName))
<div class="alert alert-info">
  <p>Název štítku: <strong> {{ $tagName }} </strong> </p>
</div>
@endif

@if (isset($authorName))
<div class="alert alert-info">
  <p>Autor: <strong> {{ $authorName }} </strong> </p>
</div>
@endif

@if ($keyword = request('keyword'))
<div class="alert alert-info">
  <p>Výsledky vyhledávání pro: <strong> {{ $term }} </strong> </p>
</div>
@endif
