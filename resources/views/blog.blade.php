@extends('master')
@section('title')
    practice
@endsection
@section('contant')


    <div id="fh5co-consult">
        <div class="video fh5co-video" style="background-image: url({{asset('frontend')}}/assets/images/picture1.jpg);">
        </div>
        <div class="choose animate-box">
            <div class="fh5co-heading">
                <h2>Free Legal Consultation</h2>
            </div>
            <form action="#">
                <div class="row form-group">
                    <div class="col-md-6">
                        <!-- <label for="fname">First Name</label> -->
                        <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                    </div>
                    <div class="col-md-6">
                        <!-- <label for="lname">Last Name</label> -->
                        <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <!-- <label for="email">Email</label> -->
                        <input type="text" id="email" class="form-control" placeholder="Your email address">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <!-- <label for="subject">Subject</label> -->
                        <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <!-- <label for="message">Message</label> -->
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>

@endsection