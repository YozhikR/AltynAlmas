@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Корпоративная газета
  @endif
  @if (app()->getLocale() == 'kz')
    Корпоративтік газет
  @endif
  @if (app()->getLocale() == 'en')
    Corporate newspaper
  @endif
@endsection

@section('main-content')

    <div class="corporate-newspaper" data-namespace="corporate-newspaper" data-template="corporate-newspaper">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('/img/newpaper.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> @lang('messages.Корпоративная газета') </h1>
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
        <div class="corporate-newspaper-content">
            <div class="corporate-newspaper__items flex flex-wrap">
                @isset($corporateNewspaper)
                    @foreach ($corporateNewspaper as $newspaper)
                        @if ($newspaper->is_active == 1)
                            @if (app()->getLocale() == 'ru')
                                <div class="corporate-newspaper__item">
                                    <a href="/storage/{{$newspaper->file_ru}}" data-fancybox class="link-block img ratio">
                                        <img src="/storage/{{$newspaper->img_ru}}">
                                    </a>
                                    <a href="/storage/{{$newspaper->file_ru}}" data-fancybox class="btn btn-detail"> @lang('messages.Смотреть') </a>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'kz')
                                <div class="corporate-newspaper__item">
                                    <a href="/storage/{{$newspaper->file_kz}}" data-fancybox class="link-block img ratio">
                                        <img src="/storage/{{$newspaper->img_kz}}">
                                    </a>
                                    <a href="/storage/{{$newspaper->file_kz}}" class="btn btn-detail"> @lang('messages.Смотреть') </a>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'en')
                                <div class="corporate-newspaper__item">
                                    <a href="/storage/{{$newspaper->file_en}}" data-fancybox class="link-block img ratio">
                                        <img src="/storage/{{$newspaper->img_en}}">
                                    </a>
                                    <a href="/storage/{{$newspaper->file_en}}" data-fancybox class="btn btn-detail"> @lang('messages.Смотреть') </a>
                                </div>                            
                            @endif                            
                        @endif
                    @endforeach
                @endisset
            </div>
        </div>
        </div>
    </div>

@endsection
