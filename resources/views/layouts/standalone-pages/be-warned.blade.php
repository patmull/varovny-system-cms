@extends('layouts.main')

@section('content')

  <!-- Begin Mailchimp Signup Form -->
      <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v7.0&appId=753110705214412&autoLogAppEvents=1"></script>
      <style type="text/css">
      #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
      /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
         We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
      <style type="text/css">
      #mc-embedded-subscribe-form input[type=checkbox]{display: inline; width: auto;margin-right: 10px;}
      #mergeRow-gdpr {margin-top: 20px;}
      #mergeRow-gdpr fieldset label {font-weight: normal;}
      #mc-embedded-subscribe-form .mc_fieldset{border:none;min-height: 0px;padding-bottom:0px;}
      </style>

<div id="about" class="container">
  <div class="row">
    <div class="col-md-8">
      <article class="post-item post-detail">
        <div class="post-item-body">
            <div class="padding-10">
              <h1>Odběr varování</h1>
              <h2>Sociální sítě Facebook a Twitter</h2>
              <p>Na náš profil na sociálních sítích Facebook a Twitter jsou automaticky i manuálně přidávány nová varování a důležité informace ohledně hrozeb.</p>
              <p><div class="fb-page" data-href="https://www.facebook.com/VarovnySystem/" data-tabs="timeline" data-width="864" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/VarovnySystem/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VarovnySystem/">Varovný systém proti přírodním katastrofám ČR</a></blockquote></div></p>
              <p><a class="twitter-timeline" data-height="500" href="https://twitter.com/VarovnySystem?ref_src=twsrc%5Etfw">Tweets by VarovnySystem</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
              <div id="mc_embed_signup">
                  <form action="https://herokuapp.us4.list-manage.com/subscribe/post?u=faa1d0d57f96bfa3b1849baf0&amp;id=c52f3d1bc0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mb-20px" target="_blank" novalidate>
                  {{ csrf_field() }}
                    <div id="mc_embed_signup_scroll">
                    <h2>E-mail</h2>
                    <div class="indicates-required"><span class="asterisk">*</span>Povinné údaje</div>
                      <div class="mc-field-group">
                        <label for="mce-EMAIL">E-mailová adresa <span class="asterisk">*</span>
                        </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                      </div>
                      <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                        <div class="content__gdpr">
                          <label>Marketingová povolení</label>
                          <p>Vyberte prosím všechny způsoby, kterými byste se chtěli nechat varovat Varovným systémem ČR před katastrofami. <b>Pro správnou funkci doporučujeme vybrat všechny možnosti.</b>
                          <br>Naše služba neposílá e-mailem reklamy, jedná se pouze o formální souhlas pro zpracování osobních údajů.</p>
                          <fieldset class="form-check mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                            <label class="checkbox subfield" for="gdpr_38871">
                              <input type="checkbox" id="gdpr_38871" name="gdpr[38871]" value="Y" class="av-checkbox "><span>Email</span>
                            </label>
                            <label class="checkbox subfield" for="gdpr_38875">
                              <input type="checkbox" id="gdpr_38875" name="gdpr[38875]" value="Y" class="av-checkbox"><span>Přímý email</span>
                            </label>
                            <label class="checkbox subfield" for="gdpr_38879">
                              <input type="checkbox" id="gdpr_38879" name="gdpr[38879]" value="Y" class="av-checkbox "><span>Online reklamní kampaně</span>
                            </label>
                          </fieldset>
                          <p class="mt-10px">Odběr můžete kdykoli zrušit kliknutím na odkaz v zápatí našich e-mailů. Informace o ochraně osobních údajů naleznete na našich webových stránkách.</p>
                        </div>
                        <div class="content__gdprLegal">
                            <p>Jako marketingovou platformu používáme službu Mailchimp. Kliknutím níže se přihlásíte k odběru a potvrzujete, že vaše informace budou převedeny ke zpracování službě Mailchimp.</p>
                            <p class="mt-10px">
                              <a href="https://mailchimp.com/legal/" target="_blank">
                                Další informace o postupech ochrany osobních údajů společnosti Mailchimp najdete zde.
                              </a>
                            </p>
                        </div>
                      </div>
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_faa1d0d57f96bfa3b1849baf0_c52f3d1bc0" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Odebírat" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                  </div>
                </form>
              </div>
              <h2>Mobilní aplikace (testovací verze)</h2>
              <p>
                  V mobilní verzi aplikace máte rychlý přístup k vydaným varováním a hlavně nabízí upozornění pomocí zabzučení a notifikačního oznámení.
              </p>
              <p>
                Pro instalaci aplikace povolte instalace z neznámých zdrojů. Pokud s tím máte problém, může vám pomoci například toto video. Pokud máte jakýkoliv problém, neváhejte nás kontaktovat na e-mailové adrese varovnysystemcr@gmail.com.
              </p>
              <p><h4><a href="https://drive.google.com/file/d/1tJTFsIrMdiTO99pxhwC7b4rfUPB3CKqo/view?fbclid=IwAR1fnDGFaD6yhlcqhDUTmI4Spk3s01AY_Nsyj2gYSu4B6-OnXYOAYtpAQZg">Stahujte z Google Drive.</a></h4></p>
              <div class="images">
                <img class="image-center" style="padding-left: 0; max-width: 300px" src="https://i.postimg.cc/sgRy7Q59/Screenshot-2020-06-04-20-02-18-639-io-ionic-starter.png" alt="Screenshot-2020-06-04-20-02-18-639-io-ionic-starter"/>
                <img class="image-center" style="max-width: 300px" src='https://i.postimg.cc/XYcW8j8M/Screenshot-2020-04-27-18-53-46-077-com-miui-home.png' border='0' alt='Screenshot-2020-04-27-18-53-46-077-com-miui-home'/>
              </div>
              <h2 class="mt-30px">RSS kanál</h2>
              <a href="https://varovny-system.herokuapp.com/feed">Zde můžete přistoupit k RSS.</a>
              RSS si můžete vložit na svůj web zkopírování kódu níže.
              <p>
                <div class="feedgrabbr_widget" id="fgid_a16f836701ee74adfafc2e347"></div>
                <script>if (typeof (fg_widgets) === "undefined") fg_widgets = new Array(); fg_widgets.push("fgid_a16f836701ee74adfafc2e347");</script>
                <script async src="https://www.feedgrabbr.com/widget/fgwidget.js"></script>
              </p>
              <p>
                <pre><code>&#60;div class="feedgrabbr_widget" id="fgid_a16f836701ee74adfafc2e347"&#62;&#60;/div&#62; &#60;script&#62;if (typeof (fg_widgets) === "undefined") fg_widgets = new Array(); fg_widgets.push("fgid_a16f836701ee74adfafc2e347");&#60;/script&#62; &#60;script async src="https://www.feedgrabbr.com/widget/fgwidget.js"&#62;&#60;/script&#62;</code></pre>
              </p>
          </div>
        </article>
      </div>

      @include('layouts.sidemenu-mini')

    </div>

  </div>
</div>

    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->

@endsection
