@extends('layouts.layout')

@section('content')
        <!-- Main Column / Sidebar -->
        <div class="column-container">
            <!-- Main Column -->
            <div class="column-three-qtr">
                <!-- Blog Post -->
                <div class="blog-post actual-post">
                    <!-- Title -->
                    <h1>{{ $news->news_title }}</h1>
                    <!-- Meta -->
                    <div class="blog-meta">
                        <div class="meta-item"><div class="meta-title published">Дата:</div><a href="#">{{ $news->created_at->format('d F Y') }}</a></div>
                        <div class="meta-item"><div class="meta-title views">Просмотры:</div><a href="#">{{ $news->news_views }}</a></div>
                        <div class="meta-item"><div class="meta-title comments">Комментарии:</div><a href="#">{{ $news->comments()->where('checked', 1)->count() }}</a></div>
                    </div>
                    <!-- Content -->
                    <div class="blog-content">
                        <!-- Paragraph -->
                        <p>{{ $news->news_short_content }}</p>
                        <div class="media">
                            <div id="portfolio-blog-slider-container">
                                <div id="portfolio-blog-slider">
                                    <!-- Actual Images -->
                                    <img alt="" src="{{ $news->news_preview }}" class="fullwidth">
                                    <!-- END Actual Images -->
                                </div>
                                <!-- Slide Controls -->
                                <div class="portfolio-blog-slider-controls">
                                    <div id="portfolio-blog-slider-prev"></div>
                                    <div id="portfolio-blog-slider-next"></div>
                                </div>
                                <!-- END Slide Controls -->
                            </div>
                        </div>
                        <!-- END Image -->

                        <!-- H3 Title -->
                        <h3>{{ $news->news_short_content }}</h3>
                        <!-- Paragraph -->
                        <div>{!! $news->news_content !!}</div>
                    </div>
                    <!-- END Content -->
                </div>
                <!-- END Blog Post -->
                <!-- Share Links -->
                <ul class="post-sharing">
                    <li><a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Поделиться в Facebook</div></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Поделиться в Twitter</div></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">Поделиться в LinkedIn</div></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i><div class="tooltip">Поделиться в Pinterest</div></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Поделиться в Google+</div></a></li>
                </ul>
                <!-- END Share Links -->

                @if(count($comments) > 0)
                    <!-- Divider -->
                    <div class="divider"></div>
                    <!-- END Divider -->
                    <!-- Reader Comments -->

                    <div id="news_comments" class="comments">
                        <h2>Комментарии к статьи</h2>

                        <!-- Comment -->
                        @foreach($comments as $comment)
                            @if($comment->checked == true)
                                <div class="comment">
                                    <!-- Username -->
                                    <div class="username">
                                        <p>{{ $comment->user_name }} пишет:</p>
                                    </div>
                                    <!-- Date -->
                                    <div class="date">
                                        {{ $comment->created_at->format('d F Y') }}
                                    </div>
                                    <!-- Message -->
                                    <p>{{ $comment->comment_text }}</p>
                                </div>
                                <hr>
                            @endif
                        @endforeach
                        <div id="news-comments-paginator">
                            {{ $comments->fragment('news_comments')->links() }}
                        </div>
                        <!-- END Comment -->
                    </div>
                @endif
                <!-- END Reader Comments -->
                <!-- Divider -->
                <div class="divider"></div>
                <!-- END Divider -->

                <!-- Post Comment Form -->

                <div class="comment-form">
                    @if(Auth::check())
                    <h2>Оставить комментарий</h2>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form id="comment-form" name="comment-form" method="post" action="{{ route('comments') }}">
                        @csrf
                        <input type="hidden" name="news_id" value="{{ $news->id }}">
                        <!-- Textbox -->
                        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                        <!-- Textbox -->
                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                        <!-- Textbox -->
                        <input type="text" name="theme" placeholder="Тема *">
                        <!-- Comment box -->
                        <textarea name="comment" placeholder="Сообщение *"></textarea>
                        <!-- Submit Button -->
                        <input type="submit" name="submit" class="accent" value="Готово">
                    </form>
                        @else
                    <p>Чтобы оставлять комментарии, Вам необходимо <a href="/login">войти на сайт</a>.</p>
                        @endif
                </div>
                <!-- END Post Comment Form -->
            </div>
            <!-- END Main Column -->

            <!-- Sidebar -->

            <div class="column-one-fourth sidebar">

                @include('layouts.news_right_sidebar')

            </div>
            <!-- END Sidebar -->
        </div>
        <!-- END Main Column / Sidebar -->
@endsection