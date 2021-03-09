@extends('layouts.app', [
    'title' => __('page_headers.docTypes')
])

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="custom-accordion" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <a href="#" class="custom-accordion__button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Фаьолият оид ба истифодаи сарватхои зеризамини
                        </a>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза дар бораи додани ичозатнома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Шаходатномаи бакайдгирии давлатии довталаби ичозатнома ба сифати шахси хукуки</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Иктибос</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Оинома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби ичозатнома дар макомоти андоз (раками мушаххаси андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Хуччате, ки пардохти чакки ичозатномаро барои барраси шудани аризаи довталаби ичозатнома тасдик мекунад</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Розигии макомоти ичроияи мачалии чокимияти давлати</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оид ба имкониятчои молияви (кафолати бонки)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оид ба имкониятхои техники, технологи (дар шакли чадвал)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумонома оид ба хайати кадрхо (дар шакли чадвал)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оид ба нишондодхои техникию иктисодии фаъолият дар 5 соли охир, ба гайр аз маротибаи аввал ба истифодаи каъри замин гирифтани ичозатнома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оид ба омўзиши геологии китъаи ичозатномашавандаи каъри замин</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Накшаи тичорати оид ба истифодаи каъри замини ичозатномашаванда</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Хулосаи экспертизаи давлатии экологи</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <a href="#" class="custom-accordion__button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Истеҳсол  ва фурўши яклухти спирти этилӣ, машрубот ва маҳсулоти спиртдор
                        </a>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оиди бонки хизматрасон ва раками суратхисоб</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи хуччатхои таъсиси ва нусхаи шаходатномаи ба кайдгирии давлати ба сифати шахси хукуки</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби иҷозатнома дар макомоти андоз (гувохномаи андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумот дар бораи дараҷаи ихтисоси кормандони довталаби иҷозатнома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Шиносномаи завод</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Хулосаи мақомоти санитарию эпидемиологӣ</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Сертификати мутобиқат оид ба нишондиҳандаҳои бехатарӣ, ки бо тартиби муқарраргардидаи мақомоти сертификатсия ва метрология дода шудааст</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Дар моликият ва ё бо дигар асоси қонунии довталаби иҷозатнома мавҷуд будани фондҳои асосӣ (воситаҳо), биноҳо, иншоот, таҷҳизот, аз ҷумла лабораторияи истеҳсолию технологии барои анҷомдиҳии фаъолияти дахлдор</p>
                                </li>
                            </ul>

                            <p class="main-color h5 m-3">Шарту талаботхои иловаги</p>

                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Риояи технологияи истеҳсолот, регламентҳои техникӣ, қоидаҳои тамгакунӣ ва фурўш</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Таҷҳизоти технологӣ бояд ба талаботи истеҳсоли пива, шампан, арақ, коняк, спирти этилӣ ва дигар маҳсулоти спиртдор мувофиқ бошад</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Мавҷуд будани ченкунакҳо дар хатҳои технологӣ, ки миқдори истеҳсолотро муайян месозад ва барои андозбандӣ мусоидат мекунад</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Фмалигардонии фаъолияти иҷозатномавӣ дар муддати на камтар як сол пас аз гирифтани иҷозатнома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотномаи фаъолияти ичозатномави дар давраи амали ичозатнома (ба гайр аз маротибаи аввал гирифтани иҷозатнома)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <a href="#" class="custom-accordion__button collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Истеҳсоли маҳсулоти тамоку
                        </a>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оиди бонки хизматрасон ва раками суратхисоб</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи хуччатхои таъсиси ва нусхаи шаходатномаи ба кайдгирии давлати ба сифати шахси хукуки</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби иҷозатнома дар макомоти андоз (гувохномаи андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумот дар бораи дараҷаи ихтисоси кормандони довталаби иҷозатнома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">дар моликият ва ё бо дигар асоси қонунии довталаби иҷозатнома мавҷуд будани фондҳои асосӣ (воситаҳо), биноҳо, иншоот, таҷҳизот, аз ҷумла лабораторияи истеҳсолию технологии барои анҷомдиҳии фаъолият;</p>
                                </li>
                            </ul>

                            <p class="main-color h5 m-3">Шарту талаботхои иловаги</p>

                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Риояи технологияи истеҳсолот</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Риояи коидахои тамгакунони ва фурўш; </p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотномаи фаъолияти ичозатномави дар давраи амали ичозатнома (ба гайр аз маротибаи аввал гирифтани иҷозатнома)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <a href="#" class="custom-accordion__button collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Фаъолият вобаста ба муомилоти металлҳои қиматбаҳо ва сангхои қиматбаҳо(коркарди пораву партови металлҳои қиматбаҳо бо мақсади ба  даст овардани натиҷаи ниҳоии маҳсулот, холис кардани металлҳои 

                        </a>
                    </div>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оиди бонки хизматрасон ва раками суратхисоб (шахси хукуки)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи хуччатхои таъсиси ва нусхаи шаходатномаи ба кайдгирии давлати ба сифати шахси хукуки ва сохибкори инфироди</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби иҷозатнома дар макомоти андоз (гувохномаи андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">маълумотнома аз мақомоти корҳои дохилӣ дар бораи таъмини бехатарии бинои корӣ ва санҷиши коргарон ба системаи иҷозатдиҳӣ</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">мавҷудияти тарозуи махсус барои баркашидани металлҳои қиматбаҳо сангҳои қиматбаҳо ва маълумотнома дар бораи дурустии тарозу</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">мавҷудияти таҷҳизот ва асбобу анҷоми барои кор зарурӣ</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">барои коркарди шикастапораҳо ва партовҳои металлҳои қиматбаҳо; печҳои муфелӣ, шкафҳои ҳавокаш, сейфҳо ва дигар асбобҳои зарурӣ</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">барои рекуператсияи сангҳои қиматбаҳо: микроскоп, печҳои муфелӣ, шкафҳои хушккунӣ, дастгоҳҳои арракунӣ ва дигар асбобҳои зарурӣ</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">маълумот дар бораи тахассуси касбии кормандони довталаби иҷозатнома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">мавҷудияти бинои мувофиқ ва шароити нигоҳдорӣ ва фурўш</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">.мавҷуд будани хулосаи экспертии мақомоти иҷозатномадиҳанда оид ба мувофиқ будани шароити фаъолият ба талаботҳои муқарраршуда</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <a href="#" class="custom-accordion__button collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Фаъолият оид ба тайёр кардан, коркард ва фурўши пораву партови металлҳои сиёҳ ва ранга
                        </a>
                    </div>

                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            <p class="main-color h5 m-3">Барои шахсони хукуки</p>

                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оиди бонки хизматрасон ва раками суратхисоб</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи хуччатхои таъсиси ва нусхаи шаходатномаи ба кайдгирии давлати ба сифати шахси хукуки</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби иҷозатнома дар макомоти андоз (гувохномаи андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумот дар бораи дараҷаи ихтисоси кормандони довталаби иҷозатнома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома дар бораи таъмини техникӣ ва технологии намуди дархостшудаи  фаъолият</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Мавҷуд будани хулосаи экспертии мақомоти иҷозатномадиҳанда оид ба мувофиқ будани шароити фаъолият ба талаботҳои муқарраршуда</p>
                                </li>
                            </ul>

                            <p class="main-color h5 m-3">Барои сохибкори инфироди</p>
                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи хуччатхои таъсиси ва нусхаи шаходатномаи ба кайдгирии давлати ба сифати сохибкори инфироди</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби иҷозатнома дар макомоти андоз (гувохномаи андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумот дар бораи дараҷаи ихтисоси довталаби иҷозатнома</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома дар бораи таъмини техникӣ ва технологии намуди дархостшудаи  фаъолият</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Мавҷуд будани хулосаи экспертии мақомоти иҷозатномадиҳанда оид ба мувофиқ будани шароити фаъолият ба талаботҳои муқарраршуда</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <a href="#" class="custom-accordion__button collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Фаъолият оид ба фурўши чаканаи маҳсулоти тамоку
                        </a>
                    </div>

                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оиди бонки хизматрасон ва раками суратхисоб (шахси хукуки)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи хуччатхои таъсиси ва нусхаи шаходатномаи ба кайдгирии давлати ба сифати шахси хукуки ва сохибкори инфироди</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби иҷозатнома дар макомоти андоз (гувохномаи андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Хулосаи санитарию эпидемиологи</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Мавчуд будани нуктаи савдо, ки ба талаботи фурўши чаканаи махсулоти тамоку чавобгў мебошад</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <a href="#" class="custom-accordion__button collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Фаъолият оид ба фурўши чаканаи машрубот
                        </a>
                    </div>

                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оиди бонки хизматрасон ва раками суратхисоб (шахси хукуки)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи хуччатхои таъсиси ва нусхаи шаходатномаи ба кайдгирии давлати ба сифати шахси хукуки ва сохибкори инфироди</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби иҷозатнома дар макомоти андоз (гувохномаи андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Карори мақомоти иҷроияи ҳокимияти давлатии шаҳру ноҳия (ноҳияҳои шаҳри Душанбе) оид ба муайян намудани ҷои фурўши чаканаи машрубот</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">дар моликият ё бо дигар асоси қонунии довталаби иҷозатнома мавҷуд будани иморатҳо, магазинҳо, дўконҳо, анборҳо, нуқтаҳо ё ошхонаҳои хўроки умумӣ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <a href="#" class="custom-accordion__button collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Фаъолият оид ба фурўши яклухти маҳсулоти тамоку
                        </a>
                    </div>

                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="links-table">
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Ариза</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Маълумотнома оиди бонки хизматрасон ва раками суратхисоб (шахси хукуки)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи хуччатхои таъсиси ва нусхаи шаходатномаи ба кайдгирии давлати ба сифати шахси хукуки ва сохибкори инфироди</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">Нусхаи шаходатномаи ба кайд гирифтани довталаби иҷозатнома дар макомоти андоз (гувохномаи андозсупоранда)</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">хулосаи санитарию эпидемиологї</p>
                                </li>
                                <li class="links-table__item">
                                    <p href="#" class="links-table__item__download">мављуд будани амбор</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
