@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Основные направления
  @endif
  @if (app()->getLocale() == 'kz')
    Қызметтің негізгі бағыттары
  @endif
  @if (app()->getLocale() == 'en')
    Operations
  @endif
@endsection

@section('main-content')

    <div class="main-deposits" data-template="main-deposits" data-namespace="main-deposits">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/hotline-banner.jpg');">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> @lang('messages.Основные<br> направления<br> деятельности') </h1>
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
        <div class="main-deposits__items flex-wrap flex">
            <div class="main-deposits__item">
            <div class="main-deposits__item-photo" style="background-image: url('img/main-deposits1.jpg')"></div>
            <div class="main-deposits__item-title"> @lang('messages.Добыча и переработка золотосодержащей руды') </div>
            </div>
            <div class="main-deposits__item">
            <div class="main-deposits__item-photo" style="background-image: url('img/main-deposits2.jpg')"></div>
            <div class="main-deposits__item-title"> @lang('messages.Геологоразведочные работы') </div>
            </div>
            <div class="main-deposits__item">
            <div class="main-deposits__item-photo" style="background-image: url('img/main-deposits3.jpg')"></div>
            <div class="main-deposits__item-title"> @lang('messages.Проектные и строительно-монтажные работы') </div>
            </div>
            <div class="main-deposits__item">
            <div class="main-deposits__item-photo" style="background-image: url('img/main-deposits4.jpg')"></div>
            <div class="main-deposits__item-title"> @lang('messages.Финансирование научно-исследовательских, проектных и изыскательных работ') </div>
            </div>
            <div class="main-deposits__item">
            <div class="main-deposits__item-photo" style="background-image: url('img/main-deposits5.jpg')"></div>
            <div class="main-deposits__item-title"> @lang('messages.Строительство и реконструкция производств по разведке, добыче и переработке драгоценных металлов') </div>
            </div>
        </div>
        </div>
    </div>

@endsection
