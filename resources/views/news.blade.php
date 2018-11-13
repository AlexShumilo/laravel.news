@extends('layouts.layout')

@section('content')
        <!-- Main Column / Sidebar -->
        <div class="column-container">
            <!-- Main Column -->
            <div class="column-three-qtr">

                <!-- Blog Post -->
                @if(count($news) > 0)
                    @foreach($news as $news_item)
                    <div class="blog-post">
                        <!-- Title -->
                        <h1><a href="{{ route('news.detail', ['category'=>$news_item->category->category_code,'news_code'=>$news_item->news_code]) }}">{{ $news_item->news_title }}</a></h1>
                        <!-- Meta -->
                        <div class="blog-meta">
                            <div class="meta-item"><div class="meta-title published">Дата:</div><a href="#">{{ $news_item->created_at->format('d F Y') }}</a></div>
                            <div class="meta-item"><div class="meta-title views">Просмотры:</div><a href="#">{{ $news_item->news_views }}</a></div>
                            <div class="meta-item"><div class="meta-title comments">Комментарии:</div><a href="#">{{ $news_item->comments()->where('checked', 1)->count() }}</a></div>
                        </div>
                        <!-- Image -->
                        <a href="{{ route('news.detail', ['category'=>$news_item->category->category_code,'news_code'=>$news_item->news_code]) }}" class="media image-link"><img alt="" src="{{ $news_item->news_preview }}" class="fullwidth"></a>
                        <!-- Excerpt -->
                        <div class="blog-content">
                            <p>{{ $news_item->news_short_content }}</p>
                            <!-- Read More Button -->
                            <a href="{{ route('news.detail', ['category'=>$news_item->category->category_code,'news_code'=>$news_item->news_code]) }}" class="button accent">Читать далее</a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="blog-post">
                        <h3>По Вашему запросу новостей не найдено</h3>
                    </div>
                @endif

                <!-- END Blog Post -->

                <!-- Navigation -->
                <div class="blog-nav">
                    {{ $news->links() }}
                </div>
                <!-- END Navigation -->
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