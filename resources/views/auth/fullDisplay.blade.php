<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>Notice Slider</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #ffff00;
            /* background: #6495ed; */
            /* background: #57c6e1; */
            color: #000000;
            text-shadow: 2px 1px 10px white;
            font-size: 18px;ol.
            font-family: sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            height: 80px;
        }

        .slide-number {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .main-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .col-sm-7 {
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
            font-weight: bold;
        }

        .col-form-label {
            font-weight: bold;
            text-align: left;
        }

        .blue-box {
            width: 100%;
            padding: 3px;
            border: 1px solid #3b5998;
        }

        .blue-box.wide {
            width: 100%;
        }

        .footer {
            text-align: right;
            font-weight: bold;
            padding-top: 30px;
            padding-bottom: 50px;
        }
        .form-group {
            margin-bottom: 0.4rem;
        }




        .fullscreen-carousel {
            margin-left: 5vw;
            width: 90vw;
            height: 88vh;
        }

        #noticeCarousel {
            height: 90vh;
            top: 20px;
        }
        .carousel-inner {
            height: 90vh;
        }
        .carousel-item {
            height: 90vh;
        }
        .slide-content {
            height: 90vh;
        }

        .notice-card {
            height: 90vh;
            /* background: linear-gradient(135deg, #0f3d36, #124b42); */
            /* color: #ffffff; */
            /* border-radius: 10px; */
            /* padding: 25px; */
            /* min-height: 260px; */
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }
        .carousel-control-prev {
            left: -40px !important;
        }
        .carousel-control-next
        {
            right: -40px !important;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon
        {
            width: 15px !important;
            height: 15px !important;
        }

        #noticeCarousel .carousel-control-prev,
        #noticeCarousel .carousel-control-next {
            opacity: 0;
            pointer-events: none;
        }
        #noticeCarousel:hover .carousel-control-prev,
        #noticeCarousel:hover .carousel-control-next {
            opacity: 1;
            pointer-events: auto;
        }
    </style>
</head>
<body>

<div class="fullscreen-carousel">
    <div id="noticeCarousel" class="carousel slide" data-ride="carousel" data-interval="{{ $interval }}">

        <div class="carousel-inner">
            @forelse($results as $key => $row)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="slide-content">
                        <div class="notice-card">
                            <div class="header">
                                <!-- <img src="logo.svg" alt="Logo" class="logo"> -->
                                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
                                <div class="slide-number">স্লাইড নং- {{ en2bn($key+1) }} / {{ en2bn(count($results)) }}</div>
                            </div>

                            <h3 class="main-title">অনুমোদিত সেবার সিডিউল</h3>

                            <div class="form-section">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">প্রযোজকের নামঃ</label>
                                            <div class="col-sm-7">
                                                <div class="blue-box"> {{ $row->producer_name }} </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">নির্মাতা প্রতিষ্ঠানের নামঃ</label>
                                            <div class="col-sm-7">
                                                <div class="blue-box">{{ $row->production_house_name }}</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">সেবার ধরন ও নামঃ</label>
                                            <div class="col-sm-7">
                                                <div class="blue-box">{{ $row->service_type . ' - ' . $row->title }}</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">অনুমোদিত সেবার বর্ণনাঃ</label>
                                            <div class="col-sm-7">
                                                <div class="blue-box">{{ $row->project_description }} </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">কাজ শুরুর তারিখঃ</label>
                                            <div class="col-sm-7">
                                                <div class="blue-box">
                                                    {{ \Carbon\Carbon::parse($row->start_date)->format('d M Y') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">কাজ সমাপ্তির তারিখঃ</label>
                                            <div class="col-sm-7">
                                                <div class="blue-box">
                                                    {{ \Carbon\Carbon::parse($row->end_date)->format('d M Y') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">বিলের পরিমাণঃ</label>
                                            <div class="col-sm-7">
                                                <div class="blue-box">{{ en2bn($row->budget_amount) }} টাকা</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">পরিশোধিত টাকার পরিমাণঃ</label>
                                            <div class="col-sm-7">
                                                <div class="blue-box">{{ en2bn($row->amount) }} টাকা</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer">
                                সর্বশেষ হালনাগাদ তারিখঃ {{ \Carbon\Carbon::parse($row->updated_at)->format('d M Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="carousel-item active">
                    <div class="slide-content">
                        <div class="notice-card text-center">
                            কোনো তথ্য পাওয়া যায়নি
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#noticeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#noticeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

