@extends('layouts.front')
@section('title','Contact Page')

@section('sections')
    <section class="banner-page-section">
        <div class="container">
            <h1>İletişim</h1>
            <p>Bize mesaj gönderin..</p>
        </div>
    </section>
    <section class="contact-info-section">
        <div class="container">
            <div class="title-section"></div>
            <div class="info-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info-post">
                            <span aria-hidden="true" class="icon_pin_alt"></span>
                            <h2>Adres</h2>
                            <p>PO Box 16122 Collins Street <br>
                                West Victoria 8007 </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-post">
                            <span aria-hidden="true" class="icon_mobile"></span>
                            <h2>Telefon</h2>
                            <p>+0114 5544 9876<br>
                                +0114 5544 9877</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-post third">
                            <span aria-hidden="true" class="icon_mail_alt"></span>
                            <h2>E-mail</h2>
                            <p>office@creon.com<br>
                                your@creon.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form-section">
        <div id="map"></div>
        <div class="container">
            <div class="contact-form-box">
                <div class="row">
                    <div class="col-sm-5">
                        <h1>Say <br>Hello</h1>
                    </div>
                    <div class="col-sm-7">
                        <form id="contact-form" method="POST" action="" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <input name="name" id="name" type="text" placeholder="İsim*">
                                </div>
                                <div class="col-sm-6">
                                    <input name="mail" id="mail" type="text" placeholder="Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input name="website" id="website" type="text" placeholder="Website">
                                </div>
                                <div class="col-sm-6">
                                    <input name="subject" id="subject" type="text" placeholder="Konu">
                                </div>
                            </div>
                            <textarea name="comment" id="comment" placeholder="Mesaj*"></textarea>
                            {{--                            <button class="btn-large w100 blue accent-4" type="submit">Meesaj Gönder</button>--}}
                            <input type="submit" id="submit_contact" value="Mesaj Gönder">
                            <div id="msg" class="message alert">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script>

        $(document).ready(function ()
        {

            $('#submit_contact').click(function ()
            {
                var frm = document.getElementById('contact-form');
                frm.submit();
            });

        });


    </script>
@endsection
