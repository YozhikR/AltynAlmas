@extends('header-footer.header-footer')

@section('title')
    @if (app()->getLocale() == 'ru')
        Корпоративное Управление
    @endif
    @if (app()->getLocale() == 'kz')
        Корпоративтік Басқару
    @endif
    @if (app()->getLocale() == 'en')
        Corporate Governance
    @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('img/corporate-banner.jpg');">
        <div class="container-fluid">
            <div class="flex align-items-baseline">
                <div class="title-wrapper">
                    <div class="h1-wrap">
                        <h1 class="small"> @lang('messages.Корпоративное управление') </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="corporate">
        <div class="container-fluid">
            <div class="flex flex-wrap">
                <div class="corporate__codex">
                    <div class="article-title-wrap">
                        <div class="article-title">@lang('messages.Кодекс корпоративного управления')<span class="article-title-after"></span></div>
                    </div>
                    <div class="corporate__codex-description">
                        <p>@lang('messages.Кодекс корпоративного управления компании (далее - Кодекс) был утвержден внеочередным общим собранием акционеров 20 декабря 2005 года. Компания неукоснительно следует положениям Кодекса, который строится на принципах справедливости, честности, ответственности, прозрачности, профессионализма и компетентности. Эффективная структура корпоративного управления предполагает уважение прав и интересов всех заинтересованных в деятельности компании лиц и способствует успешной деятельности компании, в том числе росту его ценности, поддержанию финансовой стабильности и прибыльности. Основополагающими принципами Кодекса являются:') </p>
                        <ul>
                            <li>@lang('messages.принцип защиты прав и интересов акционеров')</li>
                            <li>@lang('messages.принцип эффективного управления компанией Советом Директоров и исполнительным органом')</li>
                            <li>@lang('messages.принципы прозрачности и объективности раскрытия информации о деятельности компании')</li>
                            <li>@lang('messages.принципы законности и этики')</li>
                            <li>@lang('messages.принципы эффективной дивидендной политики')</li>
                            <li>@lang('messages.принципы эффективной кадровой политики')</li>
                            <li>@lang('messages.охрана окружающей среды')</li>
                            <li>@lang('messages.политика регулирования корпоративных конфликтов')</li>
                        </ul>
                    </div>
                </div>
                <div class="advantages__banner-wrap-outside">
                    <div class="advantages__banner-wrap">
                        <div class="advantages__banner" style="background-image:url('img/advantages3.jpg') ">
                        </div>
                        <div class="advantages-buttons">
                            <div class="advantages-buttons__title"> @lang('messages.Корпоративные документы')<br> @lang('messages.акционерного общества «АК Алтыналмас»') </div>
                            <div class="flex advantages-buttons__btn-wrap">
                                <p>@lang('messages.Кодекс противодействия коррупции')</p>
                                <span id="doc1" class="btn btn-detail"> @lang('messages.Подробнее') </span>
                            </div>
                            <div class="flex advantages-buttons__btn-wrap">
                                <p>@lang('messages.Устав Акционерного общества')</p>
                                <span id="doc2" class="btn btn-detail"> @lang('messages.Подробнее') </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.flex flex-wrap -->
        </div>
    </section>

@endsection
