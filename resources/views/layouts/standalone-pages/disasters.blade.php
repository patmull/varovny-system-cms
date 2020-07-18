@extends('layouts.main')

<style type="text/css">
  body a {
    font-size: 16px !important;
  }
</style>

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
                      <div class="wrapper-article">
                        <h1>Katastrofy na území ČR</h1>
                        <p class="mt-10px">O katastrofách, které se staly a mohou stát. Následující text nemá nikoho vystrašit. Součástí života je však být připraven na nečekané události a je tedy dobré o nich vědět dříve než přijdou a nebo se alespoň nechat informovat v jejich průběhu.</p>

                          <div class="description-conent" class="post-meta no-border">
                            <h2>Dělení katastrof</h2>
                            <p>
                               Rizika lze dělit dle rozsahu jejich dopadu, závažnoti či typu nástupu katastrofy. V práci švédského filozofa a futurologa z oxfordské univerzity <a href="https://www.existential-risk.org/concept.pdf">Existential Risk Prevention as Global Priority</a> jsou rizika
                               rozděleny do dvou os, přičemž jedna znázorňuje rozsah katastrofy a druhá závažnost.
                            </p>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/X-risk-chart-en-01a.svg/1024px-X-risk-chart-en-01a.svg.png"></img>
                            <figcaption>Obrázek: Dělení rizik</figcaption>
                            <p class="mt-10px">
                              Dle závažnosti se dělí rizika na:
                            </p>
                            <p>
                              <ul class="categories">
                                <li>Neznatelné.</li>
                                <li>Vydržitelné.</li>
                                <li>Zdrcující.</li>
                                <li>Těžko představitelné (Bostrom píše přímo „pekelné”).</li>
                              </ul>
                            </p>
                            <p>
                              Dle rozsahu se dělí rizika na:
                            </p>
                            <p>
                              <ul class="categories">
                                <li>Osobní.</li>
                                <li>Lokální.</li>
                                <li>Globální.</li>
                                <li>Mezigenerační.</li>
                                <li>Pan-generační.</li>
                                <li>Kosmické.</li>
                              </ul>
                            </p>
                          </div>
                          <p>
                            Dle časového rozsahu se katastrofy mohou dělit dle <a href="https://na.unep.net/geas/docs/Early_Warning_System_Report.pdf">Enviromentálního programu Spojených národů</a> na katastrofy s náhlým (např. povodně nebo zemětřesení) a pomalejším nástupem (např. sucho, epidemie, znečištění).
                          </p>
                          <p>
                            Katastrofy, které jsou způsobeny meteorologickými, hydrometeorologický nebo geologickými jevy se obvykle označují jako přírodní katastrofy. Nebezpečné jevy způsobené přímou lidskou činností,
                            jako například průmyslové havárie, teroristické útoky nebo válečné konflikty se do kategorie přírodních katastrof pochopitelně neřadí.
                          </p>
                          <p>
                            Obvykle se však do kategorie přírodních katastrof neřadí ani jev přírodní, jakou jsou epidemie a pandemie.
                          </p>
                          <p>
                            Nelze dle žádného z těchto členění přesně určit, před jakými katastrofami má smysl varovat, avšak jedná se v podstatě o jakoukoliv událost,
                            u které můžeme díky včasnému varování a informování zabránit materiálním a hlavně lidským ztrátám. Stejně tak u těch událostí, kdy je potřebné informovat lidi o opatřeních, či zavedených změnách, které nastaly z důvodu dané události.
                            Obecně však platí, že čím rychlejší je nástup katastrofy, čím je nečekanější a čím je závažnější, tím jsou varováni a následné informace více potřebné.
                          </p>
                          <h2>Povodně</h2>
                          <p>
                            I v období, kdy České republice hrozí období sucha a v menších obcích začínají být problémy s dostatkem vody patří pořád mezi jedny z největších rizik povodně, které nelze vyloučit. Jak uvedl například hydrolog Ladislav Bartoš pro Právo: <a href="https://www.novinky.cz/domaci/clanek/sucho-zvysilo-riziko-bleskovych-povodni-40066189">sucho snižuje schopnost půdy vstřebávat vodu a hrozí tak bleskové povodně</a> na lokálních územích.
                            Obzvláště starším čtenářům asi ani není příliš nutné připomínat, jak ničivé povodně byly v České republice v letech 2002 (Labe a Vltava) a 1997 (Morava, Slezsko, Východní Čechy) způsobené abnormálně vydatnými dešti na našem území. Tehdy si <a href="https://web.archive.org/web/20100520021431/http://aktualne.centrum.cz/domaci/grafika/2010/05/18/nejnicivejsi-povodne-v-novodobe-historii-cr/">vyžádaly 17, resp. 50 obětí.</a>
                            Škody byly v řádech desítek miliard a rozsáhlé povodně nějakým způosbem ovlivnily život téměř každého u nás. Další oběti si vyžádaly z nedávných povodní povodně v letech 2006, 2009, 2010 a 2013.
                          </p>
                          <figure>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Pisek_povoden.jpg/1200px-Pisek_povoden.jpg" alt="Obrázek povodně z roku 2002 ve městě Písek">
                            <figcaption>Obrázek: V roce 2002 se některá města v České republice změnila v řeku.</figcaption>
                          </figure>
                          <h2 class="mt-10px">Protržené hráze</h2>
                          <p>
                              S povodněmi můžou souviset protržené hráze. Jedna z největších náhlých katastrof na území dnešní ČR -- <a href="http://www.pla.cz/planet/public/dokumenty/publikace/2016_%20Prehrada%20na%20Bile%20Desne.pdf">protržení přehrady Desná způsobilo smrt 65 lidem.</a> Protržení nastalo z důvdu špatného projektování přehrady, špatné konstrukce přehrady a neprovedení.
                              Při povodních 2002 nevydržely nápor vody přehrady Zlatá Kiš. Voda ze Ktiše protrhla část hráze, povodňová vlna zcela zdevastovala asi dva kilometry dlouhý úsek k elektrárně a seberala spolu další vodní nádrž Soběnov. Toto dvojité částečné protržení se naštěstí obešlo bez obětí. V roce 2010 přetékala voda přes přehradu Mlýnice u Nové Vsi na liberecku. Armáda a IZS museli kvůli povodním a obavám z protržení evakuovat obec.
                          </p>
                          <p>
                              Jak prozradil <a href="https://www.idnes.cz/zpravy/domaci/pred-povodni-ochranily-liberecko-prehrady-ale-mohly-prinest-i-zkazu.A100809_095511_domaci_sfo">projektant přehrad Stanislav Kněnický</a>, v přehradách jsou tzv. bezpečnostní přepady, které na hrázích slouží právě jako pojistky proti povodním. Pokud nezvládnou nápor vody a zmizí pod hladinou, hrozí protržení přehrady, kterou může voda ze strany podemlít. Voda pak podemílá základy. Stačí poté, aby hráz pohnula, udělají se praskliny a průvalu nelze zabránit.
                          </p>
                          <figure>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Desna_1916-2.jpg" alt="Obrázek povodně z roku 2002 ve městě Písek">
                            <figcaption>Obrázek: Přehrada Desná po protržení.</figcaption>
                          </figure>
                          <h2 class="mt-10px">Orkány a větrné bouře</h2>
                          <p>
                            Jakmile vítr dosáhne rychlosti 118 km/h a více, označuje se jako orkán. Poslední roky zasahují orkány Českou republiku prakticky každý rok a některé roky i víckrát. Orkány se nejčastěji vyskytují na podzim nebo v zimě. <a href="https://ct24.ceskatelevize.cz/domaci/2289463-vichrice-ma-ctvrtou-obet-kalamitni-stav-trva-v-osmi-okresech">Orkán Kyril si v roce 2007 vyžádal 4 oběti, orkán Herwart v roce 2017 rovněž 4.</a>
                            Škody způsobené orkány se u nás vyšplhaly i do částek několika miliard.
                          </p>
                          <figure>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/2017-10-29_Europa_mit_Sturmtief_Herwart_MODIS_Terra_True_Color_1000m.jpg/1280px-2017-10-29_Europa_mit_Sturmtief_Herwart_MODIS_Terra_True_Color_1000m.jpg" alt="Satelitní snímek hurikánu Herwart z roku 2017">
                            <figcaption>Obrázek: Satelitní snímek hurikánu Herwart z roku 2017.</figcaption>
                          </figure>
                          <h2 class="mt-10px">Pandemie a epidemie</h2>
                          <h3>Pandemie COVID-19 (Nový koronavirus Sars-CoV-2)</h3>
                          <p class="mt-10px">
                            Jak ukázala globální krize způsobená pandemií koronaviru SARS-CoV-2, moderní globalizovaná společnost může být i přes neustálý  pokrok v lékařství velice náchylná vůči infekčním chorobám.
                            Smrtnost nemoci byla nakonec sice menší než se původně předpokládalo, nemoc COVID-19 však má asi desekrát větší smrtnost než chřipkový vir typu A a díky tomu, že je nový, i větší přenositelnost.
                            Jak se ukázalo v Itálii a New Yorku, může způsobovat zahlcení nemocnic a tím i ochromení schopnosti léčit jiné nemoci. Nutná opatření pro zamezení šíření mají negativní následky na světovou ekonomiku, kulturu, sociální život i psychologii jedinců.
                            Ke konci května 2020 způsobila pandemie SARS-CoV-2 způsobující nemoc COVID-19 smrt 350 000 lidí, v České republice 320.
                          </p>
                          <p>V březnu 2020 se ve většině zemí světa naprosto proměnil způsob života a ačkoliv se nakonec nevyskytly žádné masové nepokoje, změnil se nečekaně a velice rychle životní styl vyspělé civilizace. Ačkoliv se řadí onemocnění do kategorie katastrof s pomalým nástupem,
                            díky letecké dopravě, či hromadným akcím, probíhá vypuknutí nákazy velice rychle.
                          </p>
                          <p>
                          Úmrtnost nemoci se <a href="https://linkinghub.elsevier.com/retrieve/pii/S1473309920302437">dle vědecké studie aktualizované v květnu 2020</a>odhaduje mezi 0,6% a 0,9%. Ohroženi jsou hlavně lidé vysokého věku, relativně obézní lidé a lidé se současnými chronickými nemocemi.
                          </p>
                          <figure>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b3/COVID-19-outbreak-timeline.gif" alt="Animace roy395en9 nemoci COVID-19">
                            <figcaption>Animace: Přenos nemoci COVID-19.</figcaption>
                          </figure>
                          <h3>Prasečí chřipka (Podtyp viru chřipky A H1N1)</h3>
                          <p class="mt-10px">
                            K přenosu na člověka došlo u prasečí chřipky pravděpodobně na začátku <a href="http://hxnxflu.blogspot.com/2009/05/can-science-save-us-from-second-wave.html">listopadu 2008 v Mexiku</a>, odkud se dostal do USA.
                          </p>
                          <p><a href="https://web.archive.org/web/20100304031110/http://www.cdc.gov/h1n1flu/qa.htm">Virus není přenosný skrze vepřové maso</a>, jak se zpočátku někteří lidé kvůli falešným zprávám domnívali, ale je stejně jako jiné chřipkové viry přenosný respirační, resp. kapénkovou cestou. Symptomy trvají většinou 4 až 6 dní.
                          </p>
                          <p>
                            Úmrtnost na prasečí chřipku odhaduje americké <a href="https://www.cdc.gov/flu/pandemic-resources/2009-h1n1-pandemic.html">Cetrum pro kontrolu nemocí (CDC)</a> na 0,001% až 0,007%. Prasečí chřipka postihovala spíše lidi mladší a 80% úmrtí bylo pod 65 let. I přes relativně malou úmetnost je vzhledem k velkému rozšíření viru odhadována prasečí chřipka, resp. komplikace, které způsobila v roce 2012 mezi 151 700–až 575 400 případy. Testování však trvalo pouze několik měsíců po vypuknutí onemocnění a po zjištění malé úmrtnosti se s testováním přestalo. V roce 2009 byla vydána vakcína na prasečí chřipku.
                          </p>
                          <h3>Španělská chřipka (Podtyp viru chřipky A H1N1)</h3>
                          <p class="mt-10px">
                            Jedna z největších pandemií všech dob v letech 1918–20 probíhala ve třech vlnách, počínaje jarem a létem 1918. Tento vzor tří vln však nebyl univerzální. V některých lokalitách se zdá, že chřipka přetrvávala do nebo se vrátila v roce 1920. Dobové zaznamenané statistiky morbidity a úmrtnosti budou nejspíše podhodnocené. Dokument z roku 1991 revidoval úmrtnost jako v rozmezí 24,7 - 39,3 milionu. Další studie vědců z John Hopkins University z roku 2002 naznačuje, že to  bylo však ještě více -- řádově 50 milionů.
                          </p>
                          <p>
                            Reprodukční číso viru se po roce 1920 zmenšovalo a virus se stal méně rozšířeným. Vracel se však s ostatními chřipkovými viry o chřipkových sezónách, mutoval a vracel se ke svým zvířecím hostitelům. Prasečí chřipka je dle odborníků (Morens, Taubenberger a Fauci), kteří publikovali <a href="https://www.nejm.org/doi/full/10.1056/NEJMp0904819">studii viru z roku 1918 v odborném časopise The New England Journal of Medicine</a> už čtvrtou generací viru z roku 1918.
                          </p>
                          <figure>
                            <img src="https://www.nejm.org/na101/home/literatum/publisher/mms/journals/content/nejm/2009/nejm_2009.361.issue-3/nejmp0904819/production/images/img_large/nejmp0904819_f1.jpeg" alt="Schéma vývoje chřipkových virů typu A">
                            <figcaption>Obrázek: Schéma vývoje chřipkových virů typu A. (Zdroj: The New England Journal of Medicine)</figcaption>
                          </figure>
                          <h3 class="mt-10px">Potenciální budoucí hrozby</h3>
                          <p>
                              Michael Osterholm, PHD, MPH -- jeden z největších světových expertů na epidemie a šéf amerického Centra pro prevenci a výzkum infekčních chorob CIDRAP (Center for Infectioous Disease Reseach and Policy) ve své knize Deadliest Enemy (Our War Against the Killer Germs) z roku 2017, při jejíž psaní čerpal ze svých celoživotních zkušenosti z oboru sepsal tyto možné budoucí infekční hrozby pro světovou populaci.
                          </p>
                          <ol>
                            <li><p><b>Chřipka</b> - Ač nám asi slovo chřipka moc hrůzu nenahání, Osterholm se obává další mutace chřipky, která pravděpodobně může vzniknout v Číně. Všem nahání strach subtyp H5N1 vysoce nebezpečné ptačí chřipky, jejíž smrtnost se dnes odhaduje na 60%. H5N1 je snadno přenosná mezi ptáky a zatím naštěstí těžce přenositelná z ptáků na lidi a ještě raritněji dochází k přenosu z lidí na lidi. Odborníci se však obávají, že by mohlo docházet k dalším mutacím a virus by mohl získat lepší schopnost přenosu.
                            Mohou ale rychle mutovat nebo vzniknout i ne tolik smrtící subtypy, které budou snadno přenositelné a způsobí podobný problém jako prasečí chřipka nebo nový koronavirus. Podle Osterholma by bylo řešením těchto problémů vyvinout univerzáílní vakcínu proti všech chřipkovým typům. Právě rychlá schopnost mutace je hlavním důvodem, proč Osterholm považuje chřipku za pandemickou hrozbu. Stejně jako častý výskyt v rizikové oblasti pro rozešíření pandemíí Číně.</p></li>
                            <li><p><b>Rezistence proti antibiotikům</b> - nadměrné užívání antibiotik nejen lidmi, ale také i hromadné podávání chovné zvěři může způsobit rezistenci mikrobů vůči antibiotikům.</p></li>
                            <li><p><b>Ebola</b> - Obzvláště pro méně rozvinutou část světa je nebezpečná Ebola, ktrá ukázala své zuby při epidemii v roce 2013. Odborníci se obávají také rozšíření z Afriky do Evropy.</p></li>
                            <li><p><b>MERS</b> - Middle East Respiratory Syndrome je nebezpečný bratranec koronavirů SARS-CoV-2 a SARS je rozšířen zemích blízkého východu odkud se na lidi přenáší z velbloudů nebo při blízkém kontaktu lidí. Podle mnohých odbníků je jen otázkou času, kdy se stane něco podobného nebo ještě daleko horšího než se stalo v roce 2015 v Jižní Koreji, kde přicestoval s MERS muž, jenž předtím navštívil Saudskou Arábii, Spojené arabské emiráty a Bahrajn a nakazil 150 lidé, na čež 19 lidí zemřelo.</p></li>
                            <li><p><b>Zika</b> - Virus, který si řada lidí spojuje pouze s exotickými destinacemi se bohužel z důvodu rozšíření komára tygrovaného (Aedes albopictus) velmi rozšířil po východu USA a vyskytuje se rovněž ve Francii a Itálii. Panují obavy z většího rozšíření tohoto komára přenášející virus Zika. Virus je nebezpečný hlavně kvůli ukončení předčasného vývoje mozku u plodů. V ČR v roce 2016 16 lidí.<a href="http://www.rozhlas.cz/zpravy/domaci/_zprava/1666859"></a></p></li>
                            <li><p><b>Bioterorismus</b> - Scénář znějící jako z katatrofického filmu je bohužel kvůli mnohým zemím, které ignorují bezpečnostní rizika velmi výrazný.</p></li>
                          </ol>
                          <h2>Sesuvy půdy</h2>
                          <p>
                            O sesuvech půdy se nanatáčejí hollywoodské filmy a možná proto se jedná o jedno z nejvíce podceňovaných rizik. V roce 2013 sesuvy půdy zavalily dálnici D8 a železniční trať u ní. Ve stejném roce proudový sesuv půdy pohřbil pod chatou muže a ženu v obci Třebenice, nedaleko Slap a Štěchovic.
                          </p>
                          <p>
                            Pokud se váš dům nebo chata nachází ve svahu nebo u svahu, můžete si zobrazit <a href="https://mapy.geology.cz/svahove_nestability/">na webu Geology.cz České geologické služby mapu svahové nestability</a> aktivních a potenciálních sesuvů.
                            Aktuality o sesuvách půdy si můžete zobrazit na <a href="http://www.geology.cz/svahovenestability/aktuality">webových stránkách Geology.cz</a>
                          </p
                          <h2 class="mt-10px">Zemětřesení</h2>
                          <p>
                            Zemětřesení v ČR -- pro mnohé to může znít spíše jako začátek nějakého vtipu. Pokud jej u nás někdo zažil, nejspíše slyšel řinčení sklenic na skříni nebo chvilkové vibrace zaměnitelné s projíždějícím kamionem nebo nákladním vlakem. Mnohdy měly hrozivé následky také důlní otřesy. Nejhorší důlní otřes z doby samostatné ČR v Karviné způsobil v roce 2004 smrt 7 horníků.
                            Silnější zemětřesení v ČR jsou skutečně vzácná, mnoho lidí však proto zapomnělo že vůbec existují. Obzvláště na východním a západním cípu České republiky by si lidé mělidát pozor. Nejvýznamnější bylo zemětřesení, resp. zemětřesný roj z let 1985 až 1986. Jeho nejsilnější otřes z 21.12.1985 byl znát v obcích Skalná, Dolní Žandov, Nový Kostel a Plesná a měl podle Richterovy stupnice magnitudo 4,6. Došlo k poškození domovů a studen. Stejně silné zemětřesení se objevilo v roce 2017 ve stejné oblasti. Způsobilo zde <a href="https://www.lidovky.cz/domov/zemetreseni-na-chebsku-bylo-nejnicivejsi-v-historii.A140604_161714_ln_domov_ele">škody za 10 milonů korun</a> (2017). Pořád si říkáte, že zemětřesení v ČR není problém? Tak čtěte dále.
                          </p>
                          <p>
                            Pohled nejen veřejnosti na zemětřesení by se měl změnit poté, co se podíváme více do minulosti. Pomocí paleoseizmologie se přišlo na to, že v letech 1134 až 192 před naším letopočtem a v letech 792 až 1020 zasáhlo chebsko zemětřesení 6,5 až 6,6 resp. 6,3 až 6,5. Jen bychom měli připomenout, že ze seismologického hlediska je 1000 let velmi krátká doba a nedávné zemětřesní v Záhřebu způsobilo <a href="https://www.bloomberg.com/news/articles/2020-04-23/new-quake-hits-croatia-after-march-tremor-left-6-billion-damage">škody 6 miliard</a>. Zabilo 1 člověka a zranilo 26. Toto zemětřesní bylo magnitudy 5,5 až 5,6. <a href="https://www.irsm.cas.cz/materialy/oddeleni/6/propagacni_video.mp4">Podle pana RNDr. Jiřího Málka, Ph.D.</a> z oddělení Seismotektoniky Akademie věd ČR se takové zemětřesení v ČR vyskytuje jednou za zhruba 1000 let. To znamená, že další takové už si dává na čas a musíme poděkovat odborníkům za to, že jsme o tom dozvěděli dříve, než by nás takto silné zemětřesení překvapilo. Je nutné také pamatovat na to, že v rizikové oblasti zemětřesných rojů u obci Nový Kostel na karlovarsku leží vodní nádrž Horka.
                          </p>
                          <p>
                            Zemětřesné roje se vyznačují několika podobně intenzivními otřesy, většinou ne tak silnými. „Klasické“ zemětřesení se vyznačuje jedním silným a ostatními slabými otřesy.
                          </p>
                          <h2>Vulkanismus</h2>
                          <h3>Na území ČR</h3>
                          <p>Česká republika má na svém území pouze vyhaslé sopky. Nejmladší česká sopka je Železná hůrka u obce Lipová na chebsku. ČR má asi <a href="https://www.idnes.cz/cestovani/po-cesku/sopky.A110905_162838_igcechy_web">200 bahenních sopek (tzv. mofety) u Františkových lázní</a>, které jsou výronem suchého oxidu uhličitého a pozůstatkem sopečné činnosti.</p>
                          <p>Distribuce sopečného prachu po velkých historických erupcích. Mapa ukazuje dosah sopečného prachu z islandské sopky (pravděpodobně sopka Catla) na území ČR</p>
                          <p>Vědci z německého Geologického výzkumného centra Potsdam <a href="https://www.ufz.de/index.php?de=35767&print=1"> předpokládají znovuobnovení sopečné činnosti, avšak až za stovky tisíc let<a/>.</p>
                          <p><a href="https://www.respekt.cz/zkumavka/zahadna-fluida-pod-chebskem">Není úplně jasné, co se nachází pod povrchem této oblasti, ale mají zde být tekutiny a plyny, které jsou pozůstatkem vulkanické činnosti.</a>Tyto tekutiny a plyny souvisí se zemětřesením v dané oblasti; vulkanologové a seismologové však zatím tento vliv zkoumají. </p>
                          <h3>Mimo území ČR</h3>
                          <p>U sopek obecně platí, že čím jsou sopky větší, tedy čím dokážou vyvrhnout více sopečného prachu, tím je jejich výskyt vzácnější.</p>
                          <p>Jedná se spíše o teoretické a málo pravděpodobné hrozby, avšak území ČR by mohly zasáhnout i některé zahraniční velké sopky.</p>
                          <p>Nejbližším aktivním vulkánem je kaldera německého jezero Laacher, která naposledy vybuchl 12 900 let před Kristem a vychrlil množství popelu srovnatelné s výbuchem filipínského Mount Pinatubo v roce 1991.</p>
                          <p>Kaldera u italské Neapole pod flegrejskými poli byla v historii schopna vyprodukovat výbuch VEI 7. <a href="http://seismo.berkeley.edu/~manga/blacketal2015.pdf">Spekuluje se o možném vlivu výbuchu před cca 39 000 lety na hromadné vymírání neandrtálců.</a>Jedná se však o nejhorší možný scénář a na kaldeře je možné pozorovat spíše menší výbuchy. Ty nemusí být ohrožující pro nás, ale mohou být ohrožující pro místní obyvatele a početné množství turistů, kteří se do této oblasti sjíždějí.</p>
                          <p>Při zkoumání pozůstatku historických spadů sopečného prachu na Evropu z velkých výbuchů se načrtly tyto map:</p>
                          <img src="https://letterstocreationists.files.wordpress.com/2019/03/ashfall-map.jpg?w=640&h=631">
                          <figcaption>LST = prach z vulkánu pod Laacherovým jezerem (cca 12 900 př. n. l.); NYT = Neapolský výbuch (cca 14 230 př. n. l.); Vedde Ash = islandský výbuch (cca 12 140 př. n. l.)</figcaption>
                          <p><a href="">http://ochab.ezin.cz/O-a-B_2015_C/2015_C_03_kunicky.pdf</a></p>
                          <img src="https://www.researchgate.net/profile/Alejandro_Marti2/publication/293756222/figure/fig3/AS:330075749797897@1455707599419/Isopach-maps-cm-from-inversion-a-Plinian-phase-b-co-ignimbrite-phase-c_W640.jpg">
                          <figcaption>Model dopadu popelu z Campi Flegrei dle různých fází sopky (typů erupcí) (a) Plinská fáze, b) Ignimbritová fáze, c) Kombinovaná dvojfázová fáze a d) Jednofázová fáze. Spodní grafy ukazují simulované versus pozorované tloušťky pro (e) plinské a coignimbrite fáze a (f) dvoufázové přiblížení.</figcaption>
                          <p>Jak je vidět, sopečný prach z Laacher sice byl pozorován pouze u českého pohraničí (černá tečka u českých hranic), ale později byl proveden výzkum Mgr. Daniela Vondráka a dalších, při kterém se našlo stopy výbuchy tohoto vulkánu -- tefry, čili sopečné pyroklastické sedimenty -- také na jihu Čech a lze předpokládat jejich výskyt i v širším okolí.</p>
                          <img src="https://www.researchgate.net/profile/Marco_Heurich/publication/331309374/figure/fig1/AS:763126874116097@1558955033777/Lake-Rachelsee-48582958-N-1324589-E-1057m-asl-shown-in-context-of-the-LST_W640.jpg">
                          <figcaption>Nálezy tefer (sopečných sedimentů) po výbuchu jezera Laacher okolo 12 900 př.n.l.</figcaption>
                          <p>Při zkoumání pozůstatků pylu však byly nalezeny minimální změny během období výbuchu Laacher, což naznačuje, že i přes nález pyroklastických sedimentů, neměl výbuch znatelný vliv na vegetaci ve východním Bavorsku a jižní části České republiky.</p>
                          <p><a href="http://ochab.ezin.cz/O-a-B_2015_C/2015_C_03_kunicky.pdf">Při výbuchu flegrejských polí by měly ochranu proti sopečnému prachu poskytnout Alpy</a></p>
                          <p>Rozsáhlý výbuch na Islandu může česko zasáhnout tenkou vrstvou prachu. Pozůstatky tefry nazvané jako popel Vedde, která je pozorován ve Skandidávii, střední Evropě včetně ČR, severu Velké Británie až Grónsku nejspíše<a href="https://www.sciencedirect.com/science/article/pii/S0305440311004055"> způsobila štítová islandská sopka Katla</a>.</p>
                          <p>Je potřeba také mít na paměti, že výbuch supervulkánu -- tzn. velké kaldery o rozlohy několika kilometrů, u které se při výbuchu propadne půda v jeho diametru a která je schopna vyvrhnout více než 1000 km<sub>3</sub> a vyhubit okamžitě vše v oblasti 100 km, by nějakým způsobem ovlivnila život na celé planetě. Není bohužel zcela jasné, jak moc dokážou ovlivnit takové velké výbuchy klima a civilizaci. Věřilo se například, že supervulkán Toba zatím nejvyššího zjištěného <a href="https://en.wikipedia.org/wiki/Volcanic_Explosivity_Index">vulkanického indexu VEI*</a> 8 před asi 75 000 lety <a href="https://www.sciencedirect.com/science/article/abs/pii/S0047248498902196?via%3Dihub">způsobil hromadné vymírání lidského druhu</a>, kdy mělo přežít prý pouchýh 1 000 až 10 000 jedinců. Novější výzkumy však naznačují spíše, že ač měl výbuch samozřejmě obrovské zničující následky v oblasti Sumatry a Indonésie, na populaci v Africe a dokonce i bližší Indii tento <a href="https://www.nature.com/news/2007/070702/full/news070702-15.html">
                          výbuch supervulkánu Toba neměl prakticky žádný vliv</a>. Výbuch takto velkého vulkánu by ale i tak znamenal ochlazení klimatu, velké zemědělské škody, které by odnesly hlavně chudé regiony, avšak i na ty vyspělejší by katastrofa dopadla ekonomickou krizí a změnami způsobu života kvůli extrémnímu počasí. Velkou katastrofou by bylo také zastavení letecké dopravy ve velké části světa nebo globálně. Záleží navíc na tom, jestli je výbuch explozivní (supevulkán vybuchne naráz) nebo vybuchuje a chrlí lávu postupně jako to v minulosti udělaly např. sibiřské trapy, které <a href="https://www.national-geographic.cz/clanky/pripad-nejvetsi-masove-vrazdy-v-dejinach.html">dokážou způsobit patrně ještě daleko více škod.</a> Známé aktivní supervulkány indexu VEI 8 jsou supervulkány pod jezerem Toba v Indonésii, jezerem Taupo na Novém Zélandu a Yellowstonským národním parkem v USA.</p> Kaldery s potenciálem VEI 7 jsou například Long Valley's ve Spojených státech amerických, Pacana Caldera v Chile, Řecké Sanorini (zde se však vedou spory, zda nešlo o VEI 6) a již zmiňovaná Flegrejská pole (Campi Flegrei v blízkosti Neapole v Itálii. Mezi VEI 7 se řadí i klasická aktivní kuželovitá sopka Mount Rinjani v Indonésii, hora Tambora v Indonésii nebo Paektu na hranicích Severní Koreje a Číny.
                          <p>*pozn.: VEI je logaritmická škála, tzn. VEI 6 je 10x silnější než VEI 5.</p>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Indonesia_-_Lake_Toba_%2826224127503%29.jpg">
                          <figcaption>Jezero Toba, které vzniklo na místě erupce</figcaption>
                          <p>U velkých vulkánů naštěstí platí, že velké erupce jsou vzácné a čím je erupce větší, tím je vzácnější. VEI 8 se naposledy vyskytlo před 26 500 lety (jezero Taupo). Dle analýzy historických výbuchů se odhadují na asi jednou za 50 000 let (Dosseto, A. (2011). Turner, S. P.; Van-Orman, J. A. (eds.). Timescales of Magmatic Processes: From Core to Atmosphere. Wiley-Blackwell. ISBN 978-1-4443-3260-5.). Dalo se vystopovat asi pouze 40 takovýchto známých výbuchů.
                          VEI 7 je naopak daleko častější. Posedním byl výbuch Maount Tambora v roce 1815 a <a href="https://pubs.geoscienceworld.org/gsa/geosphere/article/14/2/572/529016/Anticipating-future-Volcanic-Explosivity-Index-VEI">frekvence erupcí VEI 7 se odhahuje na 1 až 2 výbuchy za 1000 let, blíže ale ke 2</a>.</p>
                          <h2>Hrozby z vesmíru</h2>
                          <p>Jako poslední by bylo ještě dobré zmínit kosmické hrozby. V oboru katastrof, jak se zdá, platí nastěstí pravdilo, že čím větší katastrofa nastane, tím menší je její pravděpoodobnost. Není to sice úplně přesné pro menší, ale skutečně velké vulkány nevybuchují ani zdaleka tak často jako ty, které vyvrhnou méně materiálu – a to je obecně známo a historicky dokázáno. Stejně tak je to i se záplavami. Proto se říká například stoletá nebo tisíciletá voda. A čím větší je tahle číslovka, tím více je vody. Z historie se dá vyčíst, že stejně tak u kosmických událostí platí, že čím větší tato událost je, tím méně pravděpodobnější je.</p>
                          <p>
                            Stejně jako tomu je i u vulkanismu, víme, že i <a href="https://evolution.berkeley.edu/evolibrary/article/massextinct_08">vesmírné jevy, konkrétně tedy pády asteroidů, způsobily ty vůbec nejhorší možné katastrofy – vymírání celých živočišných druhů. Stejně tak se ale z historie zdá, že ne každý velký pád asteroidu mohl způsobit vymírání druhů. Některé dokonce větší nezpůsobily a některé o něco menší (i když, pravda, pořád velké) naopak způsobily. Jde tedy vždy o souhru různých okolností</a>. Asi nejvíce diskutované hromadné vymírání druhů – dinoasurů – způsobil asteroid Chicxulub, protože narazil do poměrně plytkého oceánu, na jehož dně bylo mnoho kamenů bohatých na uhlík. Tyto horniny pravděpodobně vedly k okyselení oceánu, a tedy k narušení tvorby útesů a oceánské potravinové sítě. </p>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Chicxulub_impact_-_artist_impression.jpg">
                            <figcaption>Umělecké znázornění dopadu asteroidu na Zemi</figcaption>
                          <p>Kromě žhavého proudu, obrovské tlakové vlny, vlny tsunami a jednoho z největších zemětřesení, jakého Země po svém zformování zažila (magnitudo 10 nebo 11), které byly devastující hlavně lokálně, následovalo obrovské vzedmutí prachu. To způsobilo prudké změny klimatu v řádu dní. Nejspíše celou Zeměkouli oběhla vlna žáru. V rámci let pak následovalo to, co známe dnes jako „nukleární zima“, kdy byl zablokován sluneční svit na několik let a země se ochladila.
                            <a href="https://www.sciencedaily.com/releases/2017/10/171031111446.html">Nové výsledky ukazují </a>dopad pravděpodobně uvolněný přibližně 325 gigatonů síry a 425 gigatonů oxidu uhličitého do atmosféry, což je více než desetinásobek celosvětových emisí oxidu uhličitého, který byl vyprodukován za rok 2014.
                            <a href="https://www.businessinsider.com/chicxulub-asteroid-impact-triggered-underwater-volcanic-eruptions-2018-2">Náraz zřejmě také vyvolal větší vulkansmus</a>, což ještě přispělo ke skáze dinosaurů.
                          </p>
                          <p>Asteroidy s průměrem 1 km (0,62 mi) zasáhly v průměru každých 500 000 let. Velké srážky - s 5 km (3 mi) objekty - se dějí přibližně jednou za dvacet milionů let.</p>
                        <p>Další nebezpečnou vesmírnou událostí jsou sluneční bouře. Carringtonova událost v roce 1859 spálila tehdejší telegrafní sítě a vyvolává nepříjemnou otázku. Dokázala by podobná sluneční bouře způsobit globální výpadek elektrické energie? Jak by dnešní svět dokázal -- byť jen několik dní existovat bez elektrické energie? <a href="https://ieeexplore.ieee.org/abstract/document/1263877">Za předpokladu, že distribuce protonové energie pro takovou událost by mohly být pro citlivé elektronické přístroje katastrofické, pokud nebude zajištěno účinné stínění</a>.</p>
                      <h2>Dovětek</h2>
                      <p>
                        Slovy spisovatelky Kim Edwardsové z knihy “The Memory Keeper's Daughter”: A Novel: „Nemůžeš strávit zbytek života tak, že budeš po špičkách cupitat kolem a pokoušet se zabránit katastrofě. To nebude fungovat. Nakonec přijdeš o život, který máš.“ Tento text nevznikl proto, aby někoho děsil a udělal z něj někoho, kdo se schová do krytu se zásobami a raději nevyleze. Nikdy ale nevíte, co se může stát a pak se nám znalosti historických a možnách budoucích událostí mohou velice hodit. Katastrof, i když menších rozměrů, je plný i náš osobní život. Vědomí existence katastrof tohoto velkého měřítka a to, že se s nimi lidé prozatím dokázali vždy nějak vypořádat, může být posilující, pokud uvízneme v dopravní zácpě a nebo nám někdo ukradne kolo.
                        <img src="https://s3.amazonaws.com/lowres.cartoonstock.com/history-ship-sinking_ship-abandon_ship-titanic-sink-gra050913_low.jpg">
                        <figcaption>Vtip o jedné z takových katastrof nepřírodního rázu (i když příroda v tom měla také prsty v podobě ledovce). „Jediné věci, které lituji je to, že neuvidím ten film.“</figcaption>
                      </p>
                    </div>
                  </div>

              </article>

          </div>

      </div>
    </div>
  </div>
@endsection
