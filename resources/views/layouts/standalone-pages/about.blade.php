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

                        <h1>O nás</h1>

                          <div class="post-meta no-border">
                            <p>Varovný systém proti přírodním katastrofám ČR je bezplatná veřejná služba vytvořena pro všechny, kteří chtějí být informováni o nebezpečných přírodních, či lidmi vytvořených jevech vyskytujících se na území České republiky.

                               Včasné varování nabízí způsob, jak zmírnit škody způsobené nebezpečnými jevy způsobené meteorologickými, geologickými, epidemickými, popřípadě dalšími jevy. Díky včasnému informování je možné zabránit lidským i materiálním ztrátám.
                            </p>
                            <p>
                                Tento varovný systém má za úkol zlepšit informovanost obyvatel České republiky nebo lidí zde pobývajících a tím zlepšit jejich reakci na možná materiální, či zdravotní (fyzická i psychologická) nebezpečí.
                            </p>
                            <p>
                                Způsoby, jakým varujeme (kromě tohoto webu):
                            </p>
                            <p>
                              <ul class="categories">
                                <a href="{{ route('be-warned') }}"><li>V této sekci se můžete přihlásit k odběru.</li></a>
                                <a href="https://twitter.com/VarovnySystem"><li>Sledujte náš účet na Twitter, kde jsou zveřejňovány automaticky přidaná příspěvky.</li></a>
                                <a href="https://facebook.com/VarovnySystem"><li>Sledujte naši facebookovou stránku, kde jsou zveřejňovány automaticky přidaná příspěvky.</li></a>
                                <a href="https://drive.google.com/open?id=1tJTFsIrMdiTO99pxhwC7b4rfUPB3CKqo"><li>Mobilní aplikace pro Android, která zobrazuje upozornění.</li></a>
                                <a href="https://varovny-system.herokuapp.com/feed"><li>RSS kanál</li></a>
                              </ul>
                            </p>
                            <p>
                                Z jakých zdrojů jsou přebírána varování a informace o nich:
                            </p>
                            <ul class="categories">
                              <a href="http://portal.chmi.cz/" target="_blank"><li>Český hydrometeorologický ústav</li></a>
                              <a href="https://www.emsc-csem.org/" target="_blank"><li>Evropsko-středomořské seismologické centrum (EMCS)</li></a>
                              <a href="http://www.hygpraha.cz/" target="_blank"><li>Hygienická stanice hlavního města Prahy</li></a>
                              <a href="https://www.mzcr.cz/" target="_blank"><li>Ministerstvo zdravotnictví České republiky</li></a>
                            </ul>
                          </div>
                          <p>
                            Připravujeme varování pro více zdrojů s ohledem na největší aktuální rizika.
                          </p>
                          <p><b>Upozornění:</b></p>
                          <p>
                             Tento varovný systém je soukromým neziskovým projektem. Nejedná se státem financovaný projekt. Jeho neustálá funkcionalita není zaručena, avšak systém je schopen samovolný způsobem fungovat i několik let.
                          </p>
                          <p>Přesnost a správnost vydaných informací u automaticky zveřejněných zpráv závisí na relevantních informacích poskytnutých uvedenými organizacemi a intitucemi.</p>
                      </div>

                  </div>
              </article>


          </div>

      </div>
  </div>
@endsection
