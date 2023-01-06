@extends('client.master')
@section('content')
<section class="blog-area blog-bg" data-background="/assets_client/img/bg/blog_bg.jpg" style="background-image: url(&quot;img/bg/blog_bg.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($baiViet as $key => $value )
                    @php
                        $hinh_anh = explode(',', $value->hinh_anh)
                    @endphp
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="{{$hinh_anh[0]}}" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <span class="date"><i class="far fa-clock"></i>{{$value->created_at}}</span>
                            <h2 class="title"><a href="/bai-viet/detail/{{$value->id}}">{{$value->tieu_de}}</a></h2>
                            <p>{{$value->mo_ta_ngan}}</p>
                            <div class="blog-post-meta">
                                <ul>
                                    <li><i class="far fa-user"></i> by <a href="#">Admin</a></li>
                                    <li><i class="far fa-thumbs-up"></i> 63</li>
                                    <li><i class="far fa-comments"></i><a href="#">12 Comments</a></li>
                                </ul>
                                <div class="read-more">
                                    <a href="blog-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination-wrap mt-60">
                    <nav>
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="blog-sidebar">
                    <div class="widget blog-widget">
                        <div class="widget-title mb-30">
                            <h5 class="title">Recent Posts</h5>
                        </div>
                        <div class="rc-post">
                            <ul>
                                <li class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img src="/assets_client/img/blog/rc_post_thumb01.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="blog-details.html">Express Management Effective</a></h5>
                                        <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                    </div>
                                </li>
                                <li class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img src="/assets_client/img/blog/rc_post_thumb02.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="blog-details.html">Where watch English movies free?</a></h5>
                                        <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                    </div>
                                </li>
                                <li class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img src="/assets_client/img/blog/rc_post_thumb03.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="blog-details.html">House movie streaming website</a></h5>
                                        <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')

@endsection
