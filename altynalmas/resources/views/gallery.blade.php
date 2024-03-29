@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Фотогалерея
  @endif
  @if (app()->getLocale() == 'kz')
    Фотогалерея
  @endif
  @if (app()->getLocale() == 'en')
    Photo gallery
  @endif
@endsection

@section('main-content')

    <div class="photo-gallery" data-namespace="photo-gallery" data-template="photo-gallery">
        <div class="mainTopSlider mainDepositsSlider">
            <!-- Swiper -->
            <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('img/place-of-birth.jpg')">
                </div>
            </div>
            </div>
            <div class="container-fluid">
            <div class="flex align-items-baseline">
                <div class="title-wrapper">
                <div class="h1-wrap">
                    <h1> @lang('messages.Фотогалерея') </h1>
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
            <div class="photo-gallery-content">
                <ul class="nav nav-tabs hidden" id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> @lang('messages.Фотогалерея') </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    @if ($categories != null)
                        @foreach ($categories as $category)
                            @if (count($category->galleries) == 0)
                                @continue
                            @endif
                                @if (app()->getLocale() == 'ru')
                                    <h2 class="underline_bottom-offset"> {{$category->name_ru}} </h2>
                                    <div class="tab-pane fade show active flex-tab flex-wrap" id="{{$category->name_ru}}" role="tabpanel" aria-labelledby="home-tab">                        
                                        @foreach ($category->galleries as $gallery)
                                            <div class="photo-item-wrap">
                                                <div class="photo-item">
                                                <div class="img-wrap">
                                                    <a href="{{asset('storage/').'/app/public/'.$gallery->images}}" class="img ratio link-block" data-fancybox="gallery" data-caption="{{$category->name_ru}} - {{$gallery->text_ru}}">
                                                        <img src="{{asset('storage/').'/app/public/'.$gallery->images}}">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="date"> {{ date("d.m.Y", strtotime($gallery->date)) }}</div>
                                                    <div class="title"> {{$gallery->text_ru}} </div>
                                                </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                @if (app()->getLocale() == 'kz')
                                    <h2 class="underline_bottom-offset"> {{$category->name_kz}} </h2>
                                    <div class="tab-pane fade show active flex-tab flex-wrap" id="{{$category->name_kz}}" role="tabpanel" aria-labelledby="home-tab">                        
                                        @foreach ($category->galleries as $gallery)
                                            <div class="photo-item-wrap">
                                                <div class="photo-item">
                                                <div class="img-wrap">
                                                    <a href="{{asset('storage/').'/app/public/'.$gallery->images}}" class="img ratio link-block" data-fancybox="gallery" data-caption="{{$category->name_kz}} - {{$gallery->text_kz}}">
                                                        <img src="{{asset('storage/').'/app/public/'.$gallery->images}}">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="date"> {{ date("d.m.Y", strtotime($gallery->date)) }}</div>
                                                    <div class="title"> {{$gallery->text_kz}} </div>
                                                </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                @endif
                                @if (app()->getLocale() == 'en')
                                    <h2 class="underline_bottom-offset"> {{$category->name_en}} </h2>
                                    <div class="tab-pane fade show active flex-tab flex-wrap" id="{{$category->name_en}}" role="tabpanel" aria-labelledby="home-tab">                        
                                        @foreach ($category->galleries as $gallery)
                                            <div class="photo-item-wrap">
                                                <div class="photo-item">
                                                <div class="img-wrap">
                                                    <a href="{{asset('storage/').'/app/public/'.$gallery->images}}" class="img ratio link-block" data-fancybox="gallery" data-caption="{{$category->name_en}} - {{$gallery->text_en}}">
                                                        <img src="{{asset('storage/').'/app/public/'.$gallery->images}}">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="date"> {{ date("d.m.Y", strtotime($gallery->date)) }}</div>
                                                    <div class="title"> {{$gallery->text_en}} </div>
                                                </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                        @endforeach
                    @endif                
                </div>
            </div>
        </div>
    </div>

@endsection
