@extends('layouts.layout')

@section('content')
        <!-- Page Title -->
        <h1>Информация о нашей компании.</h1>
        <!-- END Title -->
        <!-- Intro -->
        <!-- Title -->
        <h3>Осведомленность о бренде синхронизирует креативный социальный статус, повышая конкуренцию. Воздействие на потребителя недостижимо. Психологическая среда позиционирует конвергентный сегмент рынка, работая над проектом.</h3>
        <!-- Text -->
        <p>Рыночная ситуация создает связанный конкурент. Агентская комиссия регулярно усиливает анализ зарубежного опыта, не считаясь с затратами. Креатив определяет обществвенный продукт. Искусство медиапланирования, как следует из вышесказанного, усиливает комплексный маркетинг. Потребление индуцирует конвергентный жизненный цикл продукции. Медийный канал обычно правомочен.</p>
        <!-- END Intro -->
        <!-- Content Spacer (20px gap) -->
        <div class="spacer"></div>
        <!-- END Content Spacer (20px gap) -->
        <!-- Three Columns + Big Icons -->
        <div class="column-container">
            <!-- One Third -->
            <div class="column-one-third center">
                <div class="icon-container big-icon">
                    <!-- Icon Backing -->
                    <div class="icon-backing" style="background-color: #63885F;">
                        <!-- Icon -->
                        <i class="fa fa-heart"></i>
                    </div>
                </div>
                <!-- Title -->
                <h3>Дизайн</h3>
                <!-- Text -->
                <p>Ребрендинг, конечно, недостаточно тормозит конструктивный рекламный бриф.</p>
            </div>
            <!-- END One Third -->
            <!-- One Third -->
            <div class="column-one-third center">
                <div class="icon-container big-icon">
                    <!-- Icon Backing -->
                    <div class="icon-backing" style="background-color: #d28762;">
                        <!-- Icon -->
                        <i class="fa fa-flag"></i>
                    </div>
                </div>
                <!-- Title -->
                <h3>Верстка</h3>
                <!-- Text -->
                <p>Ребрендинг, конечно, недостаточно тормозит конструктивный рекламный бриф.</p>
            </div>
            <!-- END One Third -->
            <!-- One Third -->
            <div class="column-one-third center">
                <div class="icon-container big-icon">
                    <!-- Icon Backing -->
                    <div class="icon-backing" style="background-color: #6E6588;">
                        <!-- Icon -->
                        <i class="fa fa-table"></i>
                    </div>
                </div>
                <!-- Title -->
                <h3>Разработка</h3>
                <!-- Text -->
                <p>Ребрендинг, конечно, недостаточно тормозит конструктивный рекламный бриф.</p>
            </div>
            <!-- END One Third -->
        </div>
        <!-- END Three Columns + Big Icons -->
        <!-- Divider -->
        <div class="divider"></div>
        <!-- END Divider -->
        <!-- The Team -->
        <ul class="team column-container">
            <!-- One Fourth -->

            @foreach($team as $employee)
            <li class="column-one-fourth">
                <!-- Image -->
                <div class="image-wrapper">
                    <img alt="" src="{{ $employee->emp_photo }}" class="fullwidth">
                </div>
                <!-- Title -->
                <h3>{{ $employee->emp_name }}</h3>
                <!-- Excerpt -->
                <p>{{ $employee->emp_comment }}</p>
                <!-- Social -->
                <ul class="social">
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                    </li>
                </ul>
            </li>
            @endforeach
            <!-- END One Fourth -->
        </ul>
        <!-- END The Team -->
@endsection