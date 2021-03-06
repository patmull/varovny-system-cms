@if($errors->any())
<div class="alert alert-danger">
  Jedno nebo více polí nebylo vyplněno správně.
</div>
@endif
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
  <!-- Labels will cut '_' and add upper case letter. Can be overrided by 2nd argument. -->
  {!! Form::label('name', 'Jméno*') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}

  @if($errors->has('name'))
    <span class="help-block">{{ $errors->first('name') }}</span>
  @endif

</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
  <!-- Labels will cut '_' and add upper case letter. Can be overrided by 2nd argument. -->
  {!! Form::label('slug', 'Koncovka URL*') !!}
  {!! Form::text('slug', null, ['class' => 'form-control']) !!}

  @if($errors->has('slug'))
    <span class="help-block">{{ $errors->first('slug') }}</span>
  @endif
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
  {!! Form::label('email', 'E-mail*') !!}
  {!! Form::text('email', null, ['class' => 'form-control']) !!}

  @if($errors->has('email'))
    <span class="help-block">{{ $errors->first('email') }}</span>
  @endif
</div>

<div class="form-group {{ $errors->has('bio') ? 'has-error' : '' }}">
  {!! Form::label('bio', 'Bio*') !!}
  {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}

  @if($errors->has('bio'))
    <span class="help-block">{{ $errors->first('bio') }}</span>
  @endif
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
  {!! Form::label('password', 'Heslo*') !!}
  {!! Form::password('password', ['class' => 'form-control']) !!}

  @if($errors->has('password'))
    <span class="help-block">{{ $errors->first('password') }}</span>
  @endif
</div>

<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
  {!! Form::label('password_confirmation', 'Potvrzení hesla*') !!}
  {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

  @if($errors->has('password_confirmation'))
    <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
  @endif
</div>

<div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
  {!! Form::label('role') !!}
  @if($userFound->exists && ($userFound->id == config('cms.default_user_id') || !empty($hideRoleDropdown)))
    {!! Form::hidden('role', $userFound->roles->first()->id) !!}
    <p class="form-control-static">{{ $userFound->roles->first()->display_name }}</p>
  @else
  {!! Form::select('role', App\Role::pluck('display_name', 'id'), $userFound->exists ? $userFound->roles->first()->id : null, ['class' => 'form-control', 'placeholder' => 'Choose a role']) !!}
  @endif

  @if($errors->has('role'))
    <span class="help-block">{{ $errors->first('role') }}</span>
  @endif
</div>

<div class="box-footer">
  <h3>Publikovat uživatele</h3>
  <button type="submit" class="btn btn-primary">{{ $userFound->exists ? 'Aktualizovat' : 'Uložit změny' }}</button>
  <a href={{ route('administration.users.index') }}> <button class="btn btn-default">Zpět</button></a>
</div>


@push('scripts')

  <script type="text/javascript">
    $(document).ready(function(){
        $("#datetimepicker1").css('cursor','pointer');
          // Load of text editor
          var simplemde = new SimpleMDE({ element: $("#bio")[0] });

          $('#datetimepicker1').datetimepicker({
              format: 'Y-MM-DD HH:mm:ss',
              showClear: true
          });
          $('#draft-btn').click(function(e){
              e.preventDefault();
              $('#user-form').submit();
          });
      });
  </script>


  <script type="text/javascript">
  $(document).ready(function(){
      $('#name').on('blur', function(){
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
