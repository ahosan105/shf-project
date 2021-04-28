@extends('master')
@section('title')
    home
@endsection
@section('contant')
    <div id="fh5co-blog" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Recent Post</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{asset('frontend')}}/assets/images/picture2.jpg" alt=""></a>
                        <div class="blog-text">
                            <h3><a href="#">Legal Consultation</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{asset('frontend')}}/assets/images/picture3.jpg" alt=""></a>
                        <div class="blog-text">
                            <h3><a href="#">Criminal Case</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{asset('frontend')}}/assets/images/picture4.jpg" alt=""></a>
                        <div class="blog-text">
                            <h3><a href="#">Business Law</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{asset('frontend')}}/assets/images/picture5.jpg" alt=""></a>
                        <div class="blog-text">
                            <h3><a href="#">Business Law</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-started" style="background-image:url({{asset('frontend')}}/assets/images/picture6.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Legal Advice</h2>
                    <p>We help people effectively fight their offenders back and successfully defend their own stand!</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p><a href="#" class="btn btn-default btn-lg">Consultation</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection