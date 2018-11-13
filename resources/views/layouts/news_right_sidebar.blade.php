<!-- Categories -->
<div class="sidebar-widget categories">
    <!-- Title -->
    <h3>Категории новостей</h3>
    <!-- Category Links -->
    @foreach($sidebarCategories as $category)
        <a href="{{ route('news', ['category'=>$category->category_code]) }}">{{ $category->category_name }}</a>
    @endforeach
</div>
<!-- END Categories -->

<!-- Search -->
<div class="sidebar-widget search">
    <!-- Title -->
    <h3>Поиск по сайту</h3>
    <!-- Search Form -->
    <form name="blog-search" method="post" action="{{ route('search') }}">
        @csrf
        <div class="container">
            <!-- Textbox -->
            <input type="text" id="blog-search" name="news_search" placeholder="Искать">
            <!-- Search Button -->
            <input type="submit" id="go" class="go" value="&#xf002;">
        </div>
    </form>
</div>
<!-- END Search -->

<!-- Latest Project -->
<div class="sidebar-widget project">
    <!-- Title -->
    <h3>Новость дня</h3>
    <!-- Image -->
    <a href="{{ route('news.detail', ['category'=>$dayNews->category->category_code, 'news_code'=>$dayNews->news_code]) }}" class="image-link">
        <img alt="" src="{{ $dayNews->news_preview }}" class="fullwidth">
    </a>
    <!-- Project Title -->
    <h3 class="sub-title"><a href="{{ route('news.detail', ['category'=>$dayNews->category->category_code, 'news_code'=>$dayNews->news_code]) }}">{{ $dayNews->news_title }}</a></h3>
    <!-- Tags -->
    <div class="tags">{{ $dayNews->category->category_name }}</div>
</div>
<!-- END Latest Project -->

<!-- Popular Posts -->
<div class="sidebar-widget posts">
    <!-- Title -->
    <h3>Последнее</h3>
    <!-- Post -->
    @foreach($sidebarLastNews as $news)
        <div class="post">
            <!-- Image Column -->
            <div class="img-column">
                <a href="{{ route('news.detail', ['category'=>$news->category->category_code, 'news_code'=>$news->news_code]) }}" class="image-link mini">
                    <img alt="" src="{{ $news->news_preview }}" class="fullwidth">
                </a>
            </div>
            <!-- Content Column -->
            <div class="content-column">
                <!-- Post Title -->
                <h3 class="sub-title"><a href="{{ route('news.detail', ['category'=>$news->category->category_code, 'news_code'=>$news->news_code]) }}">{{ $news->news_title }}</a></h3>
                <!-- Date -->
                <div class="date">{{ $news->created_at->format('d F Y') }}</div>
            </div>
        </div>
    @endforeach
    <!-- END Post -->

</div>
<!-- END Popular Posts -->