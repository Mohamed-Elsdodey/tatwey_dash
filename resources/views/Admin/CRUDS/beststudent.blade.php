<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Primary Meta Tags -->
    <title>الطلاب المميزين</title>
    <meta name="title" content="الطلاب المميزين">
    <meta name="description" content="">
    <!-- Light Theme Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ get_file(setting()->logo_header) }}"/>
    <!-- main -->
    <link rel="stylesheet" href="{{asset('assets/best/css/swiper.css')}}"/>
    <!-- Custom style  -->
    <link rel="stylesheet" href="{{asset('assets/best/css/style.css')}}"/>
</head>

<body>

<section class="swiper mainSlider">
    <img src="{{asset('assets/best/img/1.gif')}}" class="float-cele">
    <img src="{{asset('assets/best/img/2.gif')}}" class="float-cele2">
    <img src="{{asset('assets/best/img/2.gif')}}" class="float-cele3">
    <img src="{{asset('assets/best/img/2.gif')}}" class="float-cele4">
    <img src="{{asset('assets/best/img/2.gif')}}" class="float-cele5">
    <div class="back-home">
        <a href="{{route('admin.index')}}">
            <img src="{{asset('assets/AE_style/images/newlogo.png')}}">
        </a>
        {{--        <a href="{{route('admin.index')}}">لوحة التحكم</a>--}}
    </div>
    <div class="swiper-wrapper">
        <!-- slide 1 -->
        <div class="swiper-slide blue">
            <!-- main cards -->
            <div class="mainCards">
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 1</div>
                    <h3 class="name"> سابع 2 </h3>
                    <h4 class="count"> 17.312 </h4>
                </div>
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 2</div>
                    <h3 class="name"> سابع 3 </h3>
                    <h4 class="count"> 20.32 </h4>
                </div>
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 3</div>
                    <h3 class="name"> سابع 4 </h3>
                    <h4 class="count"> 12.94 </h4>
                </div>
            </div>
            <!-- students cards -->
            <div class="studentsCards">
                <!-- col 1 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolboy.png" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num">
                                3
                            </h4>
                            <img src="{{asset('assets/best/img')}}/medal.png" class="medal">
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolboy.png" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolboy.png" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 2 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolboy.png" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolboy.png" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 3 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 4 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 5 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/schoolgirl.png" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 6 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <img src="{{asset('assets/best/img')}}/medal.png" class="medal">
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 7 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 8 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <img src="{{asset('assets/best/img')}}/medal.png" class="medal">
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 9 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 10 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 11 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 12 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 2 -->
        <div class="swiper-slide">
            <!-- main cards -->
            <div class="mainCards">
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 1</div>
                    <h3 class="name"> سابع 3 </h3>
                    <p class="count"> 17.312 </p>
                </div>
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 2</div>
                    <h3 class="name"> سابع 1 </h3>
                    <p class="count"> 20.32 </p>
                </div>
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 3</div>
                    <h3 class="name"> سابع 10 </h3>
                    <p class="count"> 12.94312 </p>
                </div>
            </div>
            <!-- students cards -->
            <div class="studentsCards">
                <!-- col 1 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 2 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 3 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 4 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 5 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 6 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 7 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 8 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 9 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 10 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 11 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 12 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 3 -->
        <div class="swiper-slide green">
            <!-- main cards -->
            <div class="mainCards">
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 1</div>
                    <h3 class="name"> سابع 3 </h3>
                    <p class="count"> 17.312 </p>
                </div>
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 2</div>
                    <h3 class="name"> سابع 1 </h3>
                    <p class="count"> 20.32 </p>
                </div>
                <!-- card -->
                <div class="topCard">
                    <div class="num"> 3</div>
                    <h3 class="name"> سابع 10 </h3>
                    <p class="count"> 12.94312 </p>
                </div>
            </div>
            <!-- students cards -->
            <!-- students cards -->
            <div class="studentsCards">
                <!-- col 1 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 2 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 3 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 4 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 5 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 6 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 7 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 8 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 9 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 10 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 11 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col 12 -->
                <div class="col">
                    <!-- student 1 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> عبدالله محمد العتيبي </h4>
                            <h4 class="num"> 3 </h4>
                            <h5 class="order"> سادس 3 </h5>
                            <div class="total">
                                <span>نقاط تميز : 52  </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 2 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> طلال محمد احمد جابر عبدالله </h4>
                            <h4 class="num"> 9 </h4>
                            <h5 class="order"> ثامن 8 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span> المتوسط : 47 </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                    <!-- student 3 -->
                    <div class="student">
                        <img src="{{asset('assets/best/img')}}/student1.webp" alt="">
                        <div class="data">
                            <h4 class="name"> محمد سعيد الشهري </h4>
                            <h4 class="num"> 92 </h4>
                            <h5 class="order"> تاسع 5 </h5>
                            <div class="total">
                                <span> نقاط التميز : 52 </span>
                                <span>نقاط تميز : 52  </span>
                                <span> نقاط العقوبة : 4 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- swiper Control -->
    <div class="swiperControl">
        <div class="cardsPagination swiper-pagination"></div>
        <div class="swiperBtns">
            <div class="cardsPrev swiper-button-prev"></div>
            <div class="cardsNext swiper-button-next"></div>
        </div>
    </div>
</section>
<script src="{{asset('assets/best/js/swiper.js')}}"></script>
<script>
    var mainSlider = new Swiper(".mainSlider", {
        navigation: {
            nextEl: ".cardsNext",
            prevEl: ".cardsPrev",
        },
        pagination: {
            el: ".cardsPagination",
            clickable: true,
        },
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        loop: true,
    });
</script>
</body>

</html>
