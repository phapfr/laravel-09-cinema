@extends('client.master')
@section('content')
    <!-- contact-area -->
    <section class="contact-area contact-bg" data-background="/assets_client/img/bg/contact_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h5 class="title">Contact Form</h5>
                        </div>
                        <div class="contact-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="You Name *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="You  Email *">
                                    </div>
                                </div>
                                <input type="text" placeholder="Subject *">
                                <textarea name="message" placeholder="Type Your Message..."></textarea>
                                <button class="btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="widget-title mb-50">
                        <h5 class="title">Thông Tin Về Chúng Tôi</h5>
                    </div>
                    <div class="contact-info-wrap">
                        <p><span>DZFullStack Cinema :</span> Tận hưởng từng khoảnh khắc của bạn</p>
                        <div class="contact-info-list">
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <p><span>Address :</span> 32 Xuân Diệu, Thuận Phước, Hải Châu, Đà Nẵng</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                    <p><span>Phone :</span> 0905523543</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-envelope"></i></div>
                                    <p><span>Email :</span> dzfullstack@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
@endsection
