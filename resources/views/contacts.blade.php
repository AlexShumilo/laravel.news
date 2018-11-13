@extends('layouts.layout')

@section('content')
        <!-- Page Title -->
        <h1>Наши контакты</h1>
        <!-- END Title -->

        <!-- Intro -->
        <p>Позиционирование на рынке, как следует из вышесказанного, индуцирует анализ зарубежного опыта. Можно
            предположить, что точечное воздействие нетривиально. По сути, структура рынка очевидна не для всех.</p>
        <!-- END Intro -->

        <!-- Spacer x 2 -->
        <div class="spacer"></div>
        <div class="spacer"></div>
        <!-- END Spacer x 2 -->

        <!-- Left Aligned Icons & Text (Vertically centered) -->
        <div class="column-container">

            <!-- One Third -->
            <div class="column-one-third">
                <div class="icons-column vertical-center">
                    <!-- Icon Backing -->
                    <div class="icon-backing">
                        <!-- Icon -->
                        <i class="fa fa-phone"></i>
                    </div>
                </div>
                <div class="content-column vertical-center">
                    <!-- Title -->
                    <h3 class="no-margin">Телефоны</h3>
                    <!-- Text -->
                    <p>111-111-1111</p>
                </div>
            </div>
            <!-- END One Third -->

            <!-- One Third -->
            <div class="column-one-third">
                <div class="icons-column vertical-center">
                    <!-- Icon Backing -->
                    <div class="icon-backing">
                        <!-- Icon -->
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="content-column vertical-center">
                    <!-- Title -->
                    <h3 class="no-margin">Email</h3>
                    <!-- Text -->
                    <p><a href="#">mail@mail.com</a></p>
                </div>
            </div>
            <!-- END One Third -->

            <!-- One Third -->
            <div class="column-one-third">
                <div class="icons-column vertical-center">
                    <!-- Icon Backing -->
                    <div class="icon-backing">
                        <!-- Icon -->
                        <i class="fa fa-map-marker"></i>
                    </div>
                </div>
                <div class="content-column vertical-center">
                    <!-- Title -->
                    <h3 class="no-margin">Адрес</h3>
                    <!-- Text -->
                    <p>Москва, ул. Пушкина 23а</p>
                </div>
            </div>
            <!-- END One Third -->
        </div>
        <!-- END Left Aligned Icons & Text -->

        <!-- Spacer x 3 -->
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <!-- END Spacer x 3 -->
        @if (count($errors) > 0)
            <div id="alert" class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Contact Form -->
        <div class="contact-form">
            <form id="comment-form" name="contact-form" method="post" action="{{ route('send_contacts') }}">
                @csrf
                <!-- Textbox -->
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Имя *" required>
                <!-- Textbox -->
                <input type="email" name="email"  value="{{ old('email') }} "placeholder="Email *" required>
                <!-- Textbox -->
                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Телефон в формате 0111111111 *" required>
                <!-- Message Box -->
                <textarea name="message" placeholder="Сообщение *" required style="resize: none">{{ old('message') }}</textarea>
                <!-- Submit Button -->
                <input type="submit" name="submit" class="accent" value="Готово">
            </form>
        </div>
        <!-- END Contact Form -->
@endsection