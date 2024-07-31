@extends('component.master')
@section('content')
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <div id="content-wrap">
        <div id="page-header" class="ph-full ph-bg-image ph-image-shadow ph-image-cover-5 ph-content-parallax">
            <div class="page-header-inner tt-wrap">

                <div class="ph-image">
                    <div class="ph-image-inner">
                        <img src="assets/img/page-header/project-ph/project-ph-1.jpg" alt="Image">
                    </div>
                </div>

                <div class="ph-caption">
                    <h2 class="ph-caption-title ph-appear">{{ $subcat->sub_cat_name }}</h2>
                </div>
                <div class="project-info-list anim-fadeinup margin-top-60">
                    <ul>
                        <li>
                            <div class="pi-list-heading">Client</div>
                            <div class="pi-list-cont">{{ $portfolio->client }}</div>
                        </li>
                        <li>
                            <div class="pi-list-heading">Year</div>
                            <div class="pi-list-cont">{{ $portfolio->year }}</div>
                        </li>
                        <li>
                            <div class="pi-list-heading">Role</div>
                            <div class="pi-list-cont">{{ $portfolio->role }}</div>
                        </li>
                    </ul>
                </div>

            </div>

            <a href="#page-content" class="scroll-down-circle" data-offset="30">
                <div class="sdc-inner ph-appear">
                    <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                    <svg viewBox="0 0 500 500">
                        <defs>
                            <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                id="textcircle"></path>
                        </defs>
                        <text dy="30">
                            <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                        </text>
                    </svg>
                </div>
            </a>


            <div class="made-with-love ph-appear">
                <div class="mwl-inner">
                    <div class="mwl-text">Made with</div>
                    <div class="mwl-icon"><i class="far fa-heart"></i></div>
                </div>
            </div>
        </div>

        <div id="page-content">

            <div class="tt-section">
                <div class="tt-section-inner tt-wrap max-width-1600">

                    <div class="tt-gallery ttga-hover">

                        <div class="tt-grid ttgr-layout-2 ttgr-not-cropped ttgr-gap-4">

                            <div class="tt-grid-items-wrap isotope-items-wrap lightgallery">
                                @if (!empty($portfolio_details))
                                    @foreach ($portfolio_details as $item)
                                        <div class="tt-grid-item isotope-item">
                                            <div class="ttgr-item-inner">

                                                <a href="{{ asset($item->image) }}" class="tt-gallery-item lg-trigger"
                                                    data-cursor="View">
                                                    <div class="tt-gallery-item-inner">
                                                        <div class="tt-gallery-image-wrap anim-zoomin">
                                                            <figure class="tt-gallery-image ttgr-height">
                                                                <img src="{{ asset($item->image) }}" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h3>No data found</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tt-portfolio-carousel pci-caption-center cursor-drag-mouse-down pc-scale-down bg-black"
                data-simulate-touch="true" data-mousewheel="true" data-keyboard="true" data-grab-cursor="true"
                data-pagination-type="fraction">

                <div class="swiper">
                    <div class="container">
                        <div class="st-section-heading st-style1 mt-3">
                            {{-- <h4 class="st-section-heading-title">Next Project</h4> --}}
                            <h2 class="st-section-heading-subtitle">Next Project</h2>
                        </div>
                        <div class="st-height-b25 st-height-lg-b25"></div>
                    </div>
                    <div class="swiper-wrapper">

                        @if (!empty($nextproject))
                            @foreach ($nextproject as $item)
                                <div class="swiper-slide">

                                    <a href="{{ url('portfolio-detail/' . $item->scat_slug . '/' . $item->slug) }}"
                                        class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                        <figure class="tt-pci-image-wrap cover-opacity-3">
                                            <img class="tt-pci-image swiper-lazy" src="{{ asset($item->main_image) }}"
                                                data-src="{{ asset($item->main_image) }}" alt="Image">
                                        </figure>
                                        <div class="tt-pci-caption-front">
                                            <div class="tt-pci-caption">
                                                <div class="tt-pci-caption-inner">
                                                    <h2 class="tt-pci-title">{{ $item->title }}</h2>
                                                    <div class="tt-pci-categories">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tt-pci-caption tt-pci-caption-back">
                                            <div class="tt-pci-caption-inner">
                                                <h2 class="tt-pci-title">{{ $item->title }}</h2>
                                                <div class="tt-pci-categories">


                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>


                <div class="tt-pc-navigation tt-swiper-nav">
                    <div class="tt-pc-nav-prev">
                        <div class="tt-pc-arrow tt-pc-arrow-prev magnetic-item"></div>
                    </div>
                    <div class="tt-pc-nav-next">
                        <div class="tt-pc-arrow tt-pc-arrow-next magnetic-item"></div>
                    </div>
                    <div class="tt-pc-pagination"></div>
                </div>

            </div>

        </div>
    </div>
@endsection
