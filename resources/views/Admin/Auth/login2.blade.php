<!DOCTYPE html>
<html>
<head>
    <title>تقييم ومتابعة | تسجيل الدخول</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('assets/AE_style/images/fav.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <style>
        @font-face{font-family:montserrat;src:url("{{asset('assets/AE_style/font/ArbFONTS-Montserrat-Arabic-Regular.ttf')}}")}

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            font-family: "montserrat", sans-serif;
            overflow: hidden;
            background-color: #efefef;
        }

        .wave{
            position: fixed;
            bottom: 0;
            left: 0;
            height: 100%;
            z-index: -1;
        }

        .container{
            width: 100vw;
            height: 100vh;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 7rem;
            padding: 0 2rem;
        }

        .img{
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .login-content{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }

        .img img{
            max-width: 55vh;
            height: 100vh;
        }

        form{
            width: 500px;
        }

        .login-content img{
            height: 250px;
        }

        .login-content h2{
            margin: 5px 0 40px 0;
            color: #57565a;
            text-transform: uppercase;
            font-size: 2.1rem;
        }

        .login-content .input-div{
            position: relative;
            display: grid;
            grid-template-columns: 7% 93%;
            margin: 25px 0;
            padding: 5px 0;
            border-bottom: 2px solid #d9d9d9;
        }

        .login-content .input-div.one{
            margin-top: 0;
        }

        .i{
            color: #d9d9d9;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .i i{
            transition: .3s;
        }

        .input-div > div{
            position: relative;
            height: 45px;
        }

        .input-div > div > h5{
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 16px;
            transition: .3s;
        }

        .input-div:before, .input-div:after{
            content: '';
            position: absolute;
            bottom: -2px;
            width: 0%;
            height: 2px;
            background-color: #38d39f;
            transition: .4s;
        }

        .input-div:before{
            right: 50%;
        }

        .input-div:after{
            left: 50%;
        }

        .input-div.focus:before, .input-div.focus:after{
            width: 50%;
        }

        .input-div.focus > div > h5{
            top: -5px;
            font-size: 15px;
        }

        .input-div.focus > .i > i{
            color: #38d39f;
        }

        .input-div > div > input{
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: none;
            padding: 0.5rem 0.7rem;
            font-size: 1.1rem;
            color: #57565a;
            font-family: 'montserrat', sans-serif;
        }

        .input-div.pass{
            margin-bottom: 4px;
        }

        a{
            display: block;
            text-align: right;
            text-decoration: none;
            color: #999;
            font-size: 0.8rem;
            transition: .3s;
        }

        a:hover{
            color: #38d39f;
        }

        .btn{
            display: block;
            width: 100%;
            height: 50px;
            border-radius: 25px;
            outline: none;
            border: none;
            background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
            background-size: 200%;
            font-size: 1.1rem;
            color: #fff;
            font-family: 'montserrat', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            cursor: pointer;
            transition: .5s;
        }
        .btn i{
            margin-right: 6px;
        }
        .btn:hover{
            background-position: right;
        }


        @media screen and (max-width: 1050px){
            .container{
                grid-gap: 5rem;
            }
        }

        @media screen and (max-width: 1000px){
            form{
                width: 290px;
            }

            .login-content h2{
                font-size: 2.1rem;
                margin: 8px 0;
            }

            .img img{
                width: 400px;
            }
        }

        @media screen and (max-width: 900px){
            .container{
                grid-template-columns: 1fr;
            }

            .img{
                display: none;
            }

            .wave{
                display: none;
            }

            .login-content{
                justify-content: center;
            }
        }

        /* Floating Images */
        .swinging-images {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .swinging-images img {
            position: absolute;
            width: 60px;
            height: 60px;
            z-index: 0;
            animation: float 12s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0);
            }
            50% {
                transform: translate(30px, 20px);
            }
            100% {
                transform: translate(0, 0);
            }
        }

        /* Custom positions and animation durations */
        .swinging-images img:nth-child(1) {
            top: 14%;
            left: 8%;
            animation-duration: 7s;
        }

        .swinging-images img:nth-child(2) {
            top: 30%;
            left: 80%;
            animation-duration: 9s;
        }

        .swinging-images img:nth-child(3) {
            top: 8%;
            left: 50%;
            animation-duration: 11s;
        }
        .swinging-images img:nth-child(4) {
            top: 60%;
            left: 14%;
            animation-duration: 13s;
        }

    </style>
</head>
<body>
<div class="swinging-images">
    <img src="{{ url('assets/AE_style/images/fav4.png') }}" alt="image1">
    <img src="{{ url('assets/AE_style/images/fav2.png') }}" alt="image2">
    <img src="{{ url('assets/AE_style/images/fav5.png') }}" alt="image3">
    <img src="{{ url('assets/AE_style/images/fav3.png') }}" alt="image3">
</div>
<img class="wave" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/wave.png">
<div class="container">
    <div class="img">
        <img src="{{ url('assets/AE_style/images/student-login2.png') }}" alt="login student">
    </div>
    <div class="login-content">
        <form>
            <img src="{{ url('assets/AE_style/images/logo.png') }}" alt="logo">
            <h2 class="title">مرحبا بعودتك</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>البريد الالكتروني</h5>
                    <input type="text" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>كلمة المرور</h5>
                    <input type="password" class="input">
                </div>
            </div>
            <button type="submit" class="btn"><i class="fas fa-lock"></i>تسجيل الدخول  </button>
        </form>
    </div>
</div>
<script>
    const inputs = document.querySelectorAll(".input");

    function addcl(){
        let parent = this.parentNode.parentNode;
        parent.classList.add("focus");
    }

    function remcl(){
        let parent = this.parentNode.parentNode;
        if(this.value === ""){
            parent.classList.remove("focus");
        }
    }

    inputs.forEach(input => {
        input.addEventListener("focus", addcl);
        input.addEventListener("blur", remcl);
    });
</script>
</body>
</html>
