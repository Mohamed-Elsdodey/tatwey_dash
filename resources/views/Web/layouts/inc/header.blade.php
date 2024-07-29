
<header>
    <nav>
        <!-- logo -->
        <a class="logo" href="{{route('frontend.index')}}">
            <img src="{{asset('web/')}}/img/logo (2).svg" alt="Enlarged Image" width="1000" height="1000">
            <p style="font-size: 22px; font-family: 'Your Font Family'; font-weight: bold;"> الُاندِلُۆس الُتعٍلُيَميَة </p>

        </a>
        <!-- nav menu -->
        <div class="navMenu">
            <a class="navLink" href="{{route('frontend.index')}}"> الرئيسية </a>
            <a class="navLink" href="{{route('web.about_us')}}"> من نحن </a>
            <a class="navLink" href="{{route('web.privacy_policy')}}"> الشروط و الاحكام </a>
            <a class="navLink" href="{{route('web.contact_us')}}">  تواصل </a>
            <div class="dropdown">
                <img class="icon me-2" src="{{asset('web/')}}/img/icons/language.svg" alt="">
                اللغة
                <div class="dropdown-content">
                    <a href="#!" id="arabicLanguage" class="dropdownItem">
                        <img src="{{asset('web/')}}/img/flag.svg" alt="">
                        عربي
                    </a>
                    <a href="#!" id="englishLanguage" class="dropdownItem">
                        <img src="{{asset('web/')}}/img/en_flag.svg" alt="">
                        English
                    </a>
                </div>
            </div>
        </div>
        <!-- toggle btn -->
        <div class="navBtn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>
