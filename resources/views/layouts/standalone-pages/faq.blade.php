@extends('layouts.main')

@section('content')


  <div id="about" class="container">
      <div class="row">
          <div class="col-md-8">
              <article class="post-item post-detail">
                <!-- if post->image_url -->
                  <div class="post-item-image">
                  </div>

                  <div class="post-item-body">

                      <div class="padding-10">

                        <h1>Často kladené dotazy (FAQ)</h1>

                          <div class="description-conent" class="post-meta no-border">
                            <p>Odpovědi na otázky, na které se často ptáte.</p>
                            <p>
                              <h2>Jak služba funguje?</h2>
                            </p>
                            <p>
                              Varovný systém ČR přebírá informace od institucí, které varování vydávají, ale většnou jen na omezené množství platforem.
                              S Varovným systémem ČR máte k dispozici všechna důležitá varování a informace o nebezpečných jevech v ČR a to hned na více platofrmách jako tento web, sociální sítě Facebook a Twitter nebo mobilní aplikace.
                              Informace jsou
                            </p>
                            <p>
                              <h2>Kdo varování vydává?</h2>
                            </p>
                            <p>
                              Varovný systém ČR pomocí skriptu automaticky přebírá informace od institucí jako ČHMÚ, EMSC, Ministerstvo zdravotnictví apod. (soušasný přehled zdrojů viz sekce O nás).
                              V případě, že je potřeba dolpnit informace, využíváme informací jiných ústavů nebo institutů, či veřejnoprávních médií.
                            </p>
                            <p>
                              <h2>Proč není dostupná aplikace na iOS?</h2>
                            </p>
                            <p>
                              Važíme si Vašeho zájmu o aplikaci pro iOS, ale musíte brát v potaz, že je služba nezisková a nemá žádné příjmy. K vytvoření aplikace pro iOS je zapotřebí placeného vývojářského účtu Applu.
                              Platforma je ale připraven a jakmile se podaří získat finance a nebo přístup k takovému účtu, aplikace pro iOS bude zveřejněna.
                            </p>
                            <p>
                              <h2>Proč nenabízíte varování pomocí SMS?</h2>
                            </p>
                            <p>
                              Jedná se o podobnou záležitost. Takovou službu není možné zajistit bezplatně. V budoucnosti bychom samozřejmě rádi našli způsob, jak toto provést.
                            </p>
                            <p>
                              <h2>Proč není aplikace na Google Play?</h2>
                            </p>
                            <p>
                              Jedná se o podobnou záležitost, avšak registrace na Google Play není finančně tolik nákladná, proto by v blízké době měla být aplikace dostupná i na Google Play.
                            </p>
                            <p>
                              <h2>Jak je samotný systém odolný proti zničení?</h2>
                            </p>
                            <p>
                                Servery jsou provozovány v jiných zemí než v České republice. Automatický sript v Irsku, webové stránky v americké Virginii. Ani u těžko představitelné katastrofy se ted není nutné obávat zničení.
                            </p>
                            <p>
                              <h2>Kdo je tvůrcem aplikace?</h2>
                            </p>
                            <p>
                              Aplikace byla vytvořena v rámci bakalářské práce. Jejím autorem je Patrik Müller. Student Aplikované informatiky na Ostravské univerzitě. V průběhu její tvorby bylo využito poznatků, zkušeností a přizpůsobených nástrojů odborníků z amerického US National Tsunami Warning Center nebo Evropsko-středomořského geologického centra. Ostatní informace jsou veřejně dostupné.
                            </p>
                            <p>
                              <h2>Na co je v České republice potřeba varovný systém, když zde žádné nebezpečí nehrozí?</h2>
                            </p>
                            <p>
                                To samozřejmě není pravda. Naše území se sice zdá být meteorologicky i geologicky relativně klidné a je daleko od moře,
                                jak se ale historicky ukazuje, ani našemu území se nevyhýbají povodně, orkány, ničivé bouřky a dokonce ani zemětřesení.
                                Česká republika, stejně jako jakákoliv jiná část světa, není odolná ani proti epidemiím, resp. pandemiím.
                                Více si přečtěte o hrozbách v sekci Katastrofy v ČR.
                            </p>

                      </div>
                  </div>
              </article>

          </div>

      </div>
  </div>
@endsection
