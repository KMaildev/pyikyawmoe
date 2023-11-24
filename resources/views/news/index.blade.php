@extends('layouts.main')
@section('content')
    <section class="blog-page section-space">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__posts-wrapper sidebar__single">
                                <h4 class="sidebar__title">
                                    <a href="{{ route('employer.index') }}">
                                        @if (session('key') == 'jp')
                                            出国・入国・配属情報
                                        @else
                                            Departure/entry/assignment information
                                        @endif
                                    </a>
                                </h4>
                                <ul class="sidebar__posts list-unstyled">
                                    @foreach ($news->where('type', 'Departure') as $departure)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="{{ $departure->photo }}" alt="Latest posts"
                                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover;">
                                            </div>
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta">
                                                    <a href="{{ route('news.show', $departure->id) }}">
                                                        <span class="icon-user"></span>
                                                        {{ $departure->news_date ?? '' }}
                                                    </a>
                                                </p>
                                                <h4 class="sidebar__posts__title">
                                                    <a href="{{ route('news.show', $departure->id) }}">
                                                        @if (session('key') == 'jp')
                                                            {{ $departure->title_jp ?? '' }}
                                                        @else
                                                            {{ $departure->title_en ?? '' }}
                                                        @endif
                                                    </a>
                                                </h4>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__posts-wrapper sidebar__single">
                                <h4 class="sidebar__title">
                                    <a href="{{ route('employer.index') }}">
                                        @if (session('key') == 'jp')
                                            新着情報・セミナー情報
                                        @else
                                            Latest information/seminar information
                                        @endif
                                    </a>
                                </h4>
                                <ul class="sidebar__posts list-unstyled">

                                    @foreach ($news->where('type', 'News') as $new)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="{{ $new->photo }}" alt="Latest posts"
                                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover;">
                                            </div>
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta">
                                                    <a href="{{ route('news.show', $new->id) }}">
                                                        <span class="icon-user"></span>
                                                        {{ $departure->news_date ?? '' }}
                                                    </a>
                                                </p>
                                                <h4 class="sidebar__posts__title">
                                                    <a href="{{ route('news.show', $new->id) }}">
                                                        @if (session('key') == 'jp')
                                                            {{ $new->title_jp ?? '' }}
                                                        @else
                                                            {{ $new->title_en ?? '' }}
                                                        @endif
                                                    </a>
                                                </h4>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
