@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section">

        <div class="container">
            <span class="bolder-blog-category">
            Tax Tips
            </span>
            <br>
            <br>
            <div class="row ">
                @foreach ($posts_tax_tips as $post)
                    <a href="/blog?id={{$post->id}}">
                        <div class="col-md-4  ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="/blog?id={{$post->id}}" class="block-20 rounded"
                                   style="background-image: url('/images/uploads/posts/{{$post->post_image}}');">
                                </a>
                                <div class="text p-4">
                                    <div class="meta mb-2">
                                        <div><a href="/blog?id={{$post->id}}">{{$post->created_at}}</a></div>
                                        <div><a href="/blog?id={{$post->id}}">Admin</a></div>
                                    </div>
                                </div>
                                <h6 class="header-text" style="margin: 20px; padding-bottom: 20px;margin-top: -20px"><a style="color: orange"
                                        href="/blog?id={{$post->id}}">{{$post->title}}</a></h6>
                            </div>
                        </div>

                    </a>

                @endforeach

            </div>
        </div>

        <br> <br>


        <div class="container">
            @if(count($posts_investments)>0)
            <span class="bolder-blog-category">
                Investment & Planning
            </span>
            @endif
            <br>
            <br>


            <div class="row ">
                @foreach ($posts_investments as $post)
                    <a href="/blog?id={{$post->id}}">
                        <div class="col-md-4  ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="/blog?id={{$post->id}}" class="block-20 rounded"
                                   style="background-image: url('/images/uploads/posts/{{$post->post_image}}');">
                                </a>
                                <div class="text p-4">
                                    <div class="meta mb-2">
                                        <div><a href="/blog?id={{$post->id}}">{{$post->created_at}}</a></div>
                                        <div><a href="/blog?id={{$post->id}}">Admin</a></div>
                                    </div>
                                </div>
                                <h6 class="header-text" style="margin: 20px; padding-bottom: 20px;margin-top: -20px"><a style="color: orange"
                                        href="/blog?id={{$post->id}}">{{$post->title}}</a></h6>
                            </div>
                        </div>

                    </a>

                @endforeach

            </div>
        </div>
        <br> <br>

        <div class="container">
            @if(count($posts_insights)>0)
                <span class="bolder-blog-category">
                Insights & Advice
            </span>
            @endif
            <br>
            <br>
            <div class="row ">
                @foreach ($posts_insights as $post)
                    <a href="/blog?id={{$post->id}}">
                        <div class="col-md-4  ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="/blog?id={{$post->id}}" class="block-20 rounded"
                                   style="background-image: url('/images/uploads/posts/{{$post->post_image}}');">
                                </a>
                                <div class="text p-4">
                                    <div class="meta mb-2">
                                        <div><a href="/blog?id={{$post->id}}">{{$post->created_at}}</a></div>
                                        <div><a href="/blog?id={{$post->id}}">Admin</a></div>
                                    </div>
                                </div>
                                <h6 class="header-text" style="margin: 20px; padding-bottom: 20px;margin-top: -20px"><a style="color: orange"
                                        href="/blog?id={{$post->id}}">{{$post->title}}</a></h6>
                            </div>
                        </div>

                    </a>

                @endforeach

            </div>
        </div>

    </section>








    {{--<section class="s-content s-content--no-top-padding">

        <div class="s-bricks">

            <div class="masonry">
                <div class="bricks-wrapper h-group">

                    <div class="grid-sizer"></div>

                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    @foreach ($posts as $post)
                        <article class="brick entry" data-aos="fade-up">

                            <div class="entry__thumb">
                                <a href="{{ route('single_blog', $post->id) }}" class="thumb-link">
                                    <img src="{{ asset('images/uploads/posts/' . $post->post_image) }}" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->

                            <div class="entry__text">
                                <div class="entry__header">
                                    <h1 class="entry__title"><a
                                            href="{{ route('single_blog', $post->id) }}">{{ $post->title }}</a></h1>

                                    <div class="entry__meta">
                                            <span class="byline">By:
                                                <span class='author'>
                                                    --}}{{--<a href="#">{{ $post->user->name }}</a>--}}{{--
                                                </span>
                                            </span>
                                    </div>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        {{ $post->excerpt }}
                                    </p>
                                </div>
                                <a class="entry__more-link" href="{{ route('single_blog', $post->id) }}">Learn
                                    More</a>
                            </div> <!-- end entry__text -->

                        </article> <!-- end article -->
                    @endforeach

                </div> <!-- end brick-wrapper -->

            </div> <!-- end masonry -->

        </div> <!-- end s-bricks -->

    </section> <!-- end s-content -->--}}

@endsection















