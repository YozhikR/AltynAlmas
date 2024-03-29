@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Окружающая среда
  @endif
  @if (app()->getLocale() == 'kz')
    Қоршаған орта
  @endif
  @if (app()->getLocale() == 'en')
    Environment
  @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-environment.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small">@lang('messages.Окружающая среда') </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="environment">
        <div class="container-fluid">
        <div class="environment__description">
            <p>@lang('messages.В своей ежедневной деятельности Алтыналмас стремится минимизировать воздействие на окружающую среду.')</p>
            <p>@lang('messages.Снижение негативного влияния на окружающую среду, рациональное использование недр и защита окружающей среды – приоритетные задачи деятельности компании.')</p>
            <p>@lang('messages.Экологическая политика компании основывается на принципах рационального природопользования и максимального сохранения природной среды.')</p>
        </div>
        <div class="tabs-wrapper">
            <div class="tabs_head">
                @isset($developmentEcology)

                    @if (count($developmentEcology) > 0)
                        @if ($developmentEcology[0]->is_active == 1)
                            @if (app()->getLocale() == 'ru')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{$developmentEcology[0]->title_ru}}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentEcology[0]->text_ru !!}
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'kz')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{$developmentEcology[0]->title_kz}}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentEcology[0]->text_kz !!}
                                    </div>
                                </div>                            
                            @endif
                            @if (app()->getLocale() == 'en')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{$developmentEcology[0]->title_en}}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentEcology[0]->text_en !!}
                                    </div>
                                </div>                            
                            @endif                            
                        @endif
                    @endif

                    @if (count($developmentEcology) > 1)
                        @if ($developmentEcology[1]->is_active == 1)
                            @if (app()->getLocale() == 'ru')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{$developmentEcology[1]->title_ru}}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentEcology[1]->text_ru !!}
                                    </div>
                                </div>

                            @endif
                            @if (app()->getLocale() == 'kz')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{$developmentEcology[1]->title_kz}}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentEcology[1]->text_kz !!}
                                    </div>
                                </div>
                            
                            @endif
                            @if (app()->getLocale() == 'en')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{$developmentEcology[1]->title_en}}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentEcology[1]->text_en !!}
                                    </div>
                                </div>
                            
                            @endif                            
                        @endif
                    @endif

                @endisset


            </div>
        </div>


        @isset($developmentEcology)
            @if (count($developmentEcology) > 2)

            <div class="environment__security">
                <div class="article-title-wrap">
                <div class="article-title">@lang('messages.Охрана окружающей среды')<span class="article-title-after"></span></div>
                </div>
                <div class="tabs-wrapper-environment">
                <div class="tabs_head">

                @for ($i = 2; $i < count($developmentEcology); $i++)
                    @if ($developmentEcology[$i]->is_active == 1)
                        @if (app()->getLocale() == 'ru')
                            <div class="tab-security">
                                <div class="tab_point">
                                    <div>{{ $developmentEcology[$i]->title_ru }}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div>
                                </div>
                                <div class="tab_item-security">
                                    {!! $developmentEcology[$i]->text_ru !!}
                                </div>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'kz')
                            <div class="tab-security">
                                <div class="tab_point">
                                    <div>{{ $developmentEcology[$i]->title_kz }}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div>
                                </div>
                                <div class="tab_item-security">
                                    {!! $developmentEcology[$i]->text_kz !!}
                                </div>
                            </div>
                        @endif
                        @if (app()->getLocale() == 'en')
                            <div class="tab-security">
                                <div class="tab_point">
                                    <div>{{ $developmentEcology[$i]->title_en }}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div>
                                </div>
                                <div class="tab_item-security">
                                    {!! $developmentEcology[$i]->text_en !!}
                                </div>
                            </div>
                        @endif                        
                    @endif
                @endfor
            @endif

        @endisset
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
