@if($errors->any())
<div class="alert alert-danger">
   Jedno nebo více polí nebylo správně vyplněno.
</div>
@endif
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
  <!-- Labels will cut '_' and add upper case letter. Can be overrided by 2nd argument. -->
  {!! Form::label('title', 'Název*') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}

  @if($errors->has('title'))
    <span class="help-block">{{ $errors->first('title') }}</span>
  @endif

</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
  {!! Form::label('slug', 'Koncovka URL*') !!}
  {!! Form::text('slug', null, ['class' => 'form-control']) !!}

  @if($errors->has('slug'))
    <span class="help-block">{{ $errors->first('slug') }}</span>
  @endif
</div>
<div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
  {!! Form::label('excerpt', 'Výňatek*') !!}
  {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}

  @if($errors->has('excerpt'))
    <span class="help-block">{{ $errors->first('excerpt') }}</span>
  @endif
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
  {!! Form::label('body', 'Text*') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

  @if($errors->has('body'))
    <span class="help-block">{{ $errors->first('body') }}</span>
  @endif
</div>
<div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
  {!! Form::label('published_at', 'Datum poslední změny*') !!}
  <div class='input-group date' id='datetimepicker1'>
    {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
      <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
      </span>
  </div>

  @if($errors->has('published_at'))
    <span class="help-block">{{ $errors->first('published_at') }}</span>
  @endif
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
  {!! Form::label('category_id', 'Kategorie*') !!}
  {!! Form::select('category_id', App\Category::pluck('title','id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}

  @if($errors->has('category_id'))
    <span class="help-block">{{ $errors->first('category_id') }}</span>
  @endif
</div>
<div class="form-group {{ $errors->has('post_tags') ? 'has-error' : '' }}">
  {!! Form::label('post_tags', 'Tagy') !!}
  {!! Form::text('post_tags', null, ['class' => 'form-control']) !!}

  @if($errors->has('post_tags'))
    <span class="help-block">{{ $errors->first('post_tags') }}</span>
  @endif
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
  {!! Form::label('image', 'Obrázek příspěvku') !!}
  <br>
  <div id="file-input-container" class="fileinput fileinput-new" data-provides="fileinput">
    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
      <img src="{{ $postFound->image_url != '' ?  url($postFound->image_url) : 'http://placehold.it/200x150&text=Insert+Image'}}" alt="Choose Image">
    </div>
    <div id="input-file-image" class="display-table fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
    <div>
      <span class="btn btn-default btn-file"><span class="fileinput-new">Vybrat obrázek</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
      <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Odstranit</a>
    </div>
  </div>

  @if($errors->has('image'))
    <span class="help-block">{{ $errors->first('image') }}</span>
  @endif
</div>


@push('scripts')

<script type="text/javascript">

  $(document).ready(function(){

     window.onbeforeunload = function(e) {
          return 'Jste si jistí, že chcete obnovit nebo opustit stránku? Váš vyplněný formulář se ztratí.';
      };

    // Form Submit
    $(document).on("submit", "form", function(event){          // disable warning
        window.onbeforeunload = null;
    });


      // tags
      var options = {};

      @if($postFound->exists)
          options = {
              initialTags: {!! json_encode($postFound->tags->pluck('name')) !!},
          };
      @endif

      $('input[name=post_tags]').tagEditor(options);

      // calendar
      $("#datetimepicker1").css('cursor','pointer');

        // Load of text editor
        var simplemde = new SimpleMDE({ element: $("#body")[0] });

        $('#datetimepicker1').datetimepicker({
            format: 'Y-MM-DD HH:mm:ss',
            showClear: true
        });

      //  var date = new Date().toISOString().substr(0,19).replace('T',' ');

        var pad = function(i) { return (i < 10) ? '0' + i : i; };

        var date = new Date();
        Y = date.getFullYear();
        m = date.getMonth() + 1;
        D = date.getDate();
        H = date.getHours();
        M = date.getMinutes();
        S = date.getSeconds();
        s = Y + '-' +  pad(m) + '-' + pad(D) + ' ' + pad(H) + ':' + pad(M) + ':' + pad(S);

        $('#published_at').val(s);

        $('#draft-btn').click(function(e){
            e.preventDefault();
            $('#published_at').val("");
            $('#post-form').submit();
        });

    });
</script>


<script type="text/javascript">

/*window.onbeforeunload = function(e) {
      return 'Are you sure you want to refresh or leave the page? Your form will be lost.';
  };*/

$(document).ready(function(){

  // Prevent image remove when error in form ---


  if(localStorage.getItem("imgUploaded") !== null){
      $("#input-file-image").append('<img src="' + localStorage.getItem("imgUploaded") + '">');
      $("#file-input-container").addClass('fileinput-exists').removeClass('fileinput-new');
  }

  $('#new-post-btn').click(function(e){
      localStorage.setItem("imgUploaded", $('#input-file-image img').attr('src'));
  });

  $('#draft-btn').click(function(e){
      localStorage.setItem("imgUploaded", $('#input-file-image img').attr('src'));
  });

  // ---

  $('#title').on('blur', function(){
      var postTitle = this.value.toLowerCase().trim(),
          slugInput = $('#slug'),
          postSlug = url_slug(postTitle);

          slugInput.val(postSlug);
    });
 });


/*
* @author Sean Murphy <sean@iamseanmurphy.com>
* @copyright Copyright 2012 Sean Murphy. All rights reserved.
* @license http://creativecommons.org/publicdomain/zero/1.0/
*
* @param string s
* @param object opt
* @return string
*/
function url_slug(s, opt) {
s = String(s);
opt = Object(opt);

var defaults = {
  'delimiter': '-',
  'limit': undefined,
  'lowercase': true,
  'replacements': {},
  'transliterate': (typeof(XRegExp) === 'undefined') ? true : false
};

// Merge options
for (var k in defaults) {
  if (!opt.hasOwnProperty(k)) {
    opt[k] = defaults[k];
  }
}

var char_map = {
  // Latin
  'À': 'A', 'Á': 'A', 'Â': 'A', 'Ã': 'A', 'Ä': 'A', 'Å': 'A', 'Æ': 'AE', 'Ç': 'C',
  'È': 'E', 'É': 'E', 'Ê': 'E', 'Ë': 'E', 'Ì': 'I', 'Í': 'I', 'Î': 'I', 'Ï': 'I',
  'Ð': 'D', 'Ñ': 'N', 'Ò': 'O', 'Ó': 'O', 'Ô': 'O', 'Õ': 'O', 'Ö': 'O', 'Ő': 'O',
  'Ø': 'O', 'Ù': 'U', 'Ú': 'U', 'Û': 'U', 'Ü': 'U', 'Ű': 'U', 'Ý': 'Y', 'Þ': 'TH',
  'ß': 'ss',
  'à': 'a', 'á': 'a', 'â': 'a', 'ã': 'a', 'ä': 'a', 'å': 'a', 'æ': 'ae', 'ç': 'c',
  'è': 'e', 'é': 'e', 'ê': 'e', 'ë': 'e', 'ì': 'i', 'í': 'i', 'î': 'i', 'ï': 'i',
  'ð': 'd', 'ñ': 'n', 'ò': 'o', 'ó': 'o', 'ô': 'o', 'õ': 'o', 'ö': 'o', 'ő': 'o',
  'ø': 'o', 'ù': 'u', 'ú': 'u', 'û': 'u', 'ü': 'u', 'ű': 'u', 'ý': 'y', 'þ': 'th',
  'ÿ': 'y',

  // Latin symbols
  '©': '(c)',

  // Greek
  'Α': 'A', 'Β': 'B', 'Γ': 'G', 'Δ': 'D', 'Ε': 'E', 'Ζ': 'Z', 'Η': 'H', 'Θ': '8',
  'Ι': 'I', 'Κ': 'K', 'Λ': 'L', 'Μ': 'M', 'Ν': 'N', 'Ξ': '3', 'Ο': 'O', 'Π': 'P',
  'Ρ': 'R', 'Σ': 'S', 'Τ': 'T', 'Υ': 'Y', 'Φ': 'F', 'Χ': 'X', 'Ψ': 'PS', 'Ω': 'W',
  'Ά': 'A', 'Έ': 'E', 'Ί': 'I', 'Ό': 'O', 'Ύ': 'Y', 'Ή': 'H', 'Ώ': 'W', 'Ϊ': 'I',
  'Ϋ': 'Y',
  'α': 'a', 'β': 'b', 'γ': 'g', 'δ': 'd', 'ε': 'e', 'ζ': 'z', 'η': 'h', 'θ': '8',
  'ι': 'i', 'κ': 'k', 'λ': 'l', 'μ': 'm', 'ν': 'n', 'ξ': '3', 'ο': 'o', 'π': 'p',
  'ρ': 'r', 'σ': 's', 'τ': 't', 'υ': 'y', 'φ': 'f', 'χ': 'x', 'ψ': 'ps', 'ω': 'w',
  'ά': 'a', 'έ': 'e', 'ί': 'i', 'ό': 'o', 'ύ': 'y', 'ή': 'h', 'ώ': 'w', 'ς': 's',
  'ϊ': 'i', 'ΰ': 'y', 'ϋ': 'y', 'ΐ': 'i',

  // Turkish
  'Ş': 'S', 'İ': 'I', 'Ç': 'C', 'Ü': 'U', 'Ö': 'O', 'Ğ': 'G',
  'ş': 's', 'ı': 'i', 'ç': 'c', 'ü': 'u', 'ö': 'o', 'ğ': 'g',

  // Russian
  'А': 'A', 'Б': 'B', 'В': 'V', 'Г': 'G', 'Д': 'D', 'Е': 'E', 'Ё': 'Yo', 'Ж': 'Zh',
  'З': 'Z', 'И': 'I', 'Й': 'J', 'К': 'K', 'Л': 'L', 'М': 'M', 'Н': 'N', 'О': 'O',
  'П': 'P', 'Р': 'R', 'С': 'S', 'Т': 'T', 'У': 'U', 'Ф': 'F', 'Х': 'H', 'Ц': 'C',
  'Ч': 'Ch', 'Ш': 'Sh', 'Щ': 'Sh', 'Ъ': '', 'Ы': 'Y', 'Ь': '', 'Э': 'E', 'Ю': 'Yu',
  'Я': 'Ya',
  'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'yo', 'ж': 'zh',
  'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o',
  'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h', 'ц': 'c',
  'ч': 'ch', 'ш': 'sh', 'щ': 'sh', 'ъ': '', 'ы': 'y', 'ь': '', 'э': 'e', 'ю': 'yu',
  'я': 'ya',

  // Ukrainian
  'Є': 'Ye', 'І': 'I', 'Ї': 'Yi', 'Ґ': 'G',
  'є': 'ye', 'і': 'i', 'ї': 'yi', 'ґ': 'g',

  // Czech
  'Č': 'C', 'Ď': 'D', 'Ě': 'E', 'Ň': 'N', 'Ř': 'R', 'Š': 'S', 'Ť': 'T', 'Ů': 'U',
  'Ž': 'Z',
  'č': 'c', 'ď': 'd', 'ě': 'e', 'ň': 'n', 'ř': 'r', 'š': 's', 'ť': 't', 'ů': 'u',
  'ž': 'z',

  // Polish
  'Ą': 'A', 'Ć': 'C', 'Ę': 'e', 'Ł': 'L', 'Ń': 'N', 'Ó': 'o', 'Ś': 'S', 'Ź': 'Z',
  'Ż': 'Z',
  'ą': 'a', 'ć': 'c', 'ę': 'e', 'ł': 'l', 'ń': 'n', 'ó': 'o', 'ś': 's', 'ź': 'z',
  'ż': 'z',

  // Latvian
  'Ā': 'A', 'Č': 'C', 'Ē': 'E', 'Ģ': 'G', 'Ī': 'i', 'Ķ': 'k', 'Ļ': 'L', 'Ņ': 'N',
  'Š': 'S', 'Ū': 'u', 'Ž': 'Z',
  'ā': 'a', 'č': 'c', 'ē': 'e', 'ģ': 'g', 'ī': 'i', 'ķ': 'k', 'ļ': 'l', 'ņ': 'n',
  'š': 's', 'ū': 'u', 'ž': 'z'
};

// Make custom replacements
for (var k in opt.replacements) {
  s = s.replace(RegExp(k, 'g'), opt.replacements[k]);
}

// Transliterate characters to ASCII
if (opt.transliterate) {
  for (var k in char_map) {
    s = s.replace(RegExp(k, 'g'), char_map[k]);
  }
}

// Replace non-alphanumeric characters with our delimiter
var alnum = (typeof(XRegExp) === 'undefined') ? RegExp('[^a-z0-9]+', 'ig') : XRegExp('[^\\p{L}\\p{N}]+', 'ig');
s = s.replace(alnum, opt.delimiter);

// Remove duplicate delimiters
s = s.replace(RegExp('[' + opt.delimiter + ']{2,}', 'g'), opt.delimiter);

// Truncate slug to max. characters
s = s.substring(0, opt.limit);

// Remove delimiter from ends
s = s.replace(RegExp('(^' + opt.delimiter + '|' + opt.delimiter + '$)', 'g'), '');

return opt.lowercase ? s.toLowerCase() : s;
}


</script>
@endpush
