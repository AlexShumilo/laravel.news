@extends('layouts.layout')

@section('content')
    <div class="relative">

        <!-- Page Title -->

        <h1>Наши последние проекты</h1>

        <!-- END Title -->



        <!-- Filters -->

        <!-- Ensure all filter tags are in the "show all" data-filter -->
        <div class="portfolio-filtering">
            <ul id="portfolio-filters">
                <li><span class="filter active" data-filter="branding coding identity">Все</span></li>
                <li><span class="filter" data-filter="branding">Новые</span></li>
                <li><span class="filter" data-filter="coding">Популярные</span></li>
                <li><span class="filter" data-filter="identity">Лучшие</span></li>
            </ul>
        </div>

        <!-- END Filters -->

    </div>


    <!-- 4 Column Portfolio Grid -->

    <!-- Add filter tags to each li class -->
    <ul class="column-container grid" id="portfolio">


        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item branding">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview1.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item coding">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview2.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item branding identity">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview3.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item identity">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview4.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item coding">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview5.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item branding">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview6.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item identity">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview7.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item branding identity">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview8.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item branding">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview9.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item branding">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview10.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item branding">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview11.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->



        <!-- One Fourth -->

        <li class="column-one-fourth portfolio-item branding">
            <!-- Image -->
            <a href="#" class="image-link"><img alt="" src="{{ URL::asset('img/projects/preview12.jpg') }}" class="fullwidth"></a>
            <!-- Title -->
            <h3><a href="#">Название проекта</a></h3>
            <!-- Tags -->
            <div class="tags">Описание проекта</div>
        </li>

        <!-- END One Fourth -->


    </ul>

    <!-- END 4 Column Portfolio Grid -->

@endsection