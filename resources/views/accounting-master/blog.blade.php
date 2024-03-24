@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p>
                        <img src="/uploads/images/posts/{{$post->post_image}}" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3" style="color: orange">{{$post->title}}</h2>
                    <p>
                        {!! $post->body !!}
                    </p>

                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

                    <div class="sidebar-box ftco-animate" style="padding-left: 10px">
                        <h3>Recent Blog</h3>
                        @foreach ($posts as $item)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" href="/blog?id={{$item->id}}"
                                   style="background-image: url('/images/uploads/posts/{{$item->post_image}}');">
                                </a>
                                <div class="text">
                                    <h3 class="heading"><a style="color: orange" href="/blog?id={{$item->id}}">{{$item->title}}</a></h3>
                                    <div class="meta">
                                        <div><a href="/blog?id={{$item->id}}"><span
                                                    class="icon-calendar"></span> {{$post->created_at}}</a></div>
                                        <div><a href="/blog?id={{$item->id}}"><span class="icon-person"></span>
                                                Admin</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </section> <!-- .section -->

@endsection















