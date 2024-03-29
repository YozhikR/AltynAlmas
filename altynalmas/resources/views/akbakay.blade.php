@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Акбакай
  @endif
  @if (app()->getLocale() == 'kz')
    Ақбақай
  @endif
  @if (app()->getLocale() == 'en')
    Akbakai
  @endif
@endsection

@section('main-content')

    <div class="activity-detail">
        <div class="mainTopSlider mainTopSlider-active mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/akbakai1.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai2.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai3.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai4.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai5.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai6.jpg');">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> @lang('messages.Акбакай') </h1>
                </div>
            </div>
            <div class="arrow-wrapper">
                <!-- Add Arrows -->
                <div class="btn-slide-prev">
                <i class="icon-left"></i>
                </div>
                <div class="btn-slide-next">
                <i class="icon-right"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="container-fluid">
        <div class="activity-detail-content">
            <div class="flex flex-wrap">
            <div class="article-wrap">
                <article>
                    @if (app()->getLocale() == 'ru')
                        <h2 class="underline_bottom-offset"> {{$akbakay[0]->title_ru}} </h2>
                        <div class="description activity-detail__description non-style">
                            {!!nl2br($akbakay[0]->text_ru)!!}
                        </div>

                    @endif
                    @if (app()->getLocale() == 'kz')
                        <h2 class="underline_bottom-offset"> {{$akbakay[0]->title_kz}} </h2>
                        <div class="description activity-detail__description non-style">
                            {!!nl2br($akbakay[0]->text_kz)!!}
                        </div>

                    @endif
                    @if (app()->getLocale() == 'en')
                        <h2 class="underline_bottom-offset activity-detail__description non-style"> {{$akbakay[0]->title_en}} </h2>
                        <div class="description">
                            {!!nl2br($akbakay[0]->text_en)!!}
                        </div>

                    @endif
                </article>
                @if (app()->getLocale() == 'ru')
                    <a href="/storage/{{$akbakay[0]->img_url}}" data-fancybox class="btn btn-detail"> @lang('messages.Посмотреть схему работы') </a>
                @endif
                @if (app()->getLocale() == 'kz')
                    <a href="/storage/{{$akbakay[0]->img_url_kz}}" data-fancybox class="btn btn-detail"> @lang('messages.Посмотреть схему работы') </a>
                @endif
                @if (app()->getLocale() == 'en')
                    <a href="/storage/{{$akbakay[0]->img_url_en}}" data-fancybox class="btn btn-detail"> @lang('messages.Посмотреть схему работы') </a>
                @endif
                <a href="{{route('gallery')}}" class="btn btn-detail" >@lang('messages.Фотогалерея')</a>
            </div>
            <div class="activity-detail__info-wrap">
                <div class="activity-detail__info">
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> @lang('messages.Способ добычи') </div>
                    <div class="activity-detail__item-desc"> @lang('messages.подземный и открытый') </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> @lang('messages.Содержание золота в товарном сырье') </div>
                    <div class="activity-detail__item-desc"> @lang('messages.2,79 г/т')  </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> @lang('messages.Производительность') </div>
                    <div class="activity-detail__item-desc"> @lang('messages.825 тыс. тонн руды в год') </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> @lang('messages.Технология обработки') </div>
                    <div class="activity-detail__item-desc"> @lang('messages.интенсивное цианидное выщелачивание и прямое выщелачивание') </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> @lang('messages.Конечный продукт') </div>
                    <div class="activity-detail__item-desc"> @lang('messages.золотосодержащий насыщенный раствор гравиоконцентрата, насыщенный активированный уголь cip, сплав доре') </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
