@extends('header-footer.header-footer')

@section('main-content')

    <div class="photo-gallery">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('/img/place-of-birth.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> Фотогалерея </h1>
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
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> Фотогалерея </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> Видеогалерея </a>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active flex-tab flex-wrap" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="photo-item-wrap">
                <div class="photo-item">
                    <div class="img-wrap">
                    <a href="/img/photo-img.jpg" class="img ratio link-block" data-fancybox="gallery" data-caption="Caption #22">
                        <img src="/img/photo-img.jpg">
                    </a>
                    </div>
                    <div class="info">
                    <div class="date"> 03.12.2019 </div>
                    <div class="title"> Снабжение питьевой водой жителей поселка Акбакай </div>
                    </div>
                </div>
                </div>
                <div class="photo-item-wrap">
                <div class="photo-item">
                    <div class="img-wrap">
                    <a href="/img/photo-img.jpg" class="img ratio link-block" data-fancybox="gallery" data-caption="Caption #22">
                        <img src="/img/photo-img.jpg">
                    </a>
                    </div>
                    <div class="info">
                    <div class="date"> 03.12.2019 </div>
                    <div class="title"> Снабжение питьевой водой жителей поселка Акбакай </div>
                    </div>
                </div>
                </div>
                <div class="photo-item-wrap">
                <div class="photo-item">
                    <div class="img-wrap">
                    <a href="/img/photo-img.jpg" class="img ratio link-block" data-fancybox="gallery" data-caption="Caption #22">
                        <img src="/img/photo-img.jpg">
                    </a>
                    </div>
                    <div class="info">
                    <div class="date"> 03.12.2019 </div>
                    <div class="title"> Снабжение питьевой водой жителей поселка Акбакай </div>
                    </div>
                </div>
                </div>
                <div class="photo-item-wrap">
                <div class="photo-item">
                    <div class="img-wrap">
                    <a href="/img/photo-img.jpg" class="img ratio link-block" data-fancybox="gallery" data-caption="Caption #22">
                        <img src="/img/photo-img.jpg">
                    </a>
                    </div>
                    <div class="info">
                    <div class="date"> 03.12.2019 </div>
                    <div class="title"> Снабжение питьевой водой жителей поселка Акбакай </div>
                    </div>
                </div>
                </div>
                <div class="photo-item-wrap">
                <div class="photo-item">
                    <div class="img-wrap">
                    <a href="/img/photo-img.jpg" class="img ratio link-block" data-fancybox="gallery" data-caption="Caption #22">
                        <img src="/img/photo-img.jpg">
                    </a>
                    </div>
                    <div class="info">
                    <div class="date"> 03.12.2019 </div>
                    <div class="title"> Снабжение питьевой водой жителей поселка Акбакай </div>
                    </div>
                </div>
                </div>
                <div class="photo-item-wrap">
                <div class="photo-item">
                    <div class="img-wrap">
                    <a href="/img/photo-img.jpg" class="img ratio link-block" data-fancybox="gallery" data-caption="Caption #22">
                        <img src="/img/photo-img.jpg">
                    </a>
                    </div>
                    <div class="info">
                    <div class="date"> 03.12.2019 </div>
                    <div class="title"> Снабжение питьевой водой жителей поселка Акбакай </div>
                    </div>
                </div>
                </div>
                <div class="photo-item-wrap">
                <div class="photo-item">
                    <div class="img-wrap">
                    <a href="/img/photo-img.jpg" class="img ratio link-block" data-fancybox="gallery" data-caption="Caption #22">
                        <img src="/img/photo-img.jpg">
                    </a>
                    </div>
                    <div class="info">
                    <div class="date"> 03.12.2019 </div>
                    <div class="title"> Снабжение питьевой водой жителей поселка Акбакай </div>
                    </div>
                </div>
                </div>
                <div class="photo-item-wrap">
                <div class="photo-item">
                    <div class="img-wrap">
                    <a href="/img/photo-img.jpg" class="img ratio link-block" data-fancybox="gallery" data-caption="Caption #22">
                        <img src="/img/photo-img.jpg">
                    </a>
                    </div>
                    <div class="info">
                    <div class="date"> 03.12.2019 </div>
                    <div class="title"> Снабжение питьевой водой жителей поселка Акбакай </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">456 </div>
            </div>
        </div>
        </div>
    </div>

@endsection