<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>Notice Slider</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background: #0b2f2a;
            padding: 40px 0;
        }

        .fullscreen-carousel {
            margin-left: 2vw;
            width: 95vw;
            height: 88vh;
        }

        #noticeCarousel {
            height: 90vh;
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
            background: linear-gradient(135deg, #0f3d36, #124b42);
            color: #ffffff;
            border-radius: 10px;
            padding: 25px;
            min-height: 260px;
        }

        .notice-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 18px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            padding-bottom: 10px;
        }

        .notice-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px dashed rgba(255,255,255,0.2);
            padding: 6px 0;
            font-size: 14px;
        }

        .notice-item:last-child {
            border-bottom: none;
        }

        .amount-box {
            background: rgba(0,0,0,0.25);
            padding: 5px 12px;
            border-radius: 5px;
            font-weight: bold;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        .carousel-control-prev {
            left: -15px !important;
        }
        .carousel-control-next
        {
            right: -15px !important;
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

        /* DISPLAY BASED */
        @media (max-width: 1366px) {
            .notice-card { font-size: 14px; }
        }

        @media (min-width: 1367px) and (max-width: 1600px) {
            .notice-card { font-size: 15px; width: 90%; }
        }

        @media (min-width: 1601px) and (max-width: 1919px) {
            .notice-card { font-size: 16px; width: 85%; }
        }

        @media (min-width: 1920px) {
            .notice-card {
                font-size: 18px;
                width: 80%;
                min-height: 65vh;
            }
        }

        @media (orientation: portrait) {
            .notice-card { width: 95%; }
        }
    </style>
</head>
<body>

<div class="fullscreen-carousel">
    <div id="noticeCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

        <div class="carousel-inner">
            @forelse($results as $key => $row)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="slide-content">

                        <div class="notice-card">
                            <div class="notice-title">
                                নির্মাণাধীন সিনেমা / নাটকের সংক্ষিপ্ত তথ্য
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="notice-item">
                                        <span>প্রযোজকের নাম :</span>
                                        <span class="amount-box">{{ $row->producer_name }}</span>
                                    </div>
                                    <div class="notice-item">
                                        <span>সেবার ধরণ ও নাম :</span>
                                        <span class="amount-box">{{ $row->service_type . ' - ' . $row->title }}</span>
                                    </div>
                                    <div class="notice-item">
                                        <span>কাজ শুরুর তারিখ :</span>
                                        <span class="amount-box">{{ \Carbon\Carbon::parse($row->start_date)->format('d M Y') }}</span>
                                    </div>
                                    <div class="notice-item">
                                        <span>নির্ধারিত মোট টাকার পরিমাণ :</span>
                                        <span class="amount-box"> {{ number_format($row->budget_amount) }} টাকা </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="notice-item">
                                        <span>নির্মাতা প্রতিষ্ঠানের নাম :</span>
                                        <span class="amount-box">{{ $row->production_house_name }}</span>
                                    </div>
                                    <div class="notice-item">
                                        <span> অনুমোদিত কাজের বিবরণ : </span>
                                        <span class="amount-box">{{ $row->project_description }}</span>
                                    </div>
                                    <div class="notice-item">
                                        <span>কাজ সমাপ্তির তারিখ :</span>
                                        <span class="amount-box">{{ \Carbon\Carbon::parse($row->end_date)->format('d M Y') }}</span>
                                    </div>
                                    <div class="notice-item">
                                        <span>পরিশোধিত টাকার পরিমাণ :</span>
                                        <span class="amount-box"> {{ number_format($row->amount) }} টাকা </span>
                                    </div>
                                </div>
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

