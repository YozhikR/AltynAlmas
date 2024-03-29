@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Актуальные вакансии
  @endif
  @if (app()->getLocale() == 'kz')
    Өзекті вакансиялар
  @endif
  @if (app()->getLocale() == 'en')
    Current vacancies
  @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-vacancy.jpg');">
        <div class="container-fluid">
            <div class="flex align-items-baseline">
                <div class="title-wrapper">
                    <div class="h1-wrap">
                        <h1 class="small"> @lang('messages.Актуальные вакансии') </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="vacancy">
        <div class="container-fluid">
            <div class="tabs-wrapper">
                <div class="tabs_head">
                    @isset($vacancies)
                        @foreach ($vacancies as $vacancy)
                            @if ($vacancy->is_active == 1)
                                <div class="tab">
                                    @if (app()->getLocale() == 'ru')
                                        <div class="tab_point">
                                            <div>{{$vacancy->name_ru}}</div>
                                            <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                        </div>
                                        <div class="tab_item">
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Требования:')</div>
                                                {!! nl2br($vacancy->requirements_ru) !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Условия:')</div>
                                                {!! nl2br($vacancy->conditions_ru) !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Обязанности:')</div>
                                                {!! nl2br($vacancy->duties_ru) !!}
                                            </div>
                                    @endif
                                    @if (app()->getLocale() == 'kz')
                                        <div class="tab_point">
                                            <div>{{$vacancy->name_kz}}</div>
                                            <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                        </div>
                                        <div class="tab_item">
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Требования:')</div>
                                                {!! nl2br($vacancy->requirements_kz) !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Условия:')</div>
                                                {!! nl2br($vacancy->conditions_kz) !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Обязанности:')</div>
                                                {!! nl2br($vacancy->duties_kz) !!}
                                            </div>
                                    @endif
                                    @if (app()->getLocale() == 'en')
                                        <div class="tab_point">
                                            <div>{{$vacancy->name_en}}</div>
                                            <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                        </div>
                                        <div class="tab_item">
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Требования:')</div>
                                                {!! nl2br($vacancy->requirements_en) !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Условия:')</div>
                                                {!! nl2br($vacancy->conditions_en) !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Обязанности:')</div>
                                                {!! nl2br($vacancy->duties_en) !!}
                                            </div>
                                    @endif

                                        <div class="tab_links">
                                            <a href="{{$vacancy->hh_url}}" class="btn btn-detail"> @lang('messages.Откликнуться') </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
