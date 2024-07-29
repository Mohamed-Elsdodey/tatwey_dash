@extends('Web.layouts.inc.app')

@section('content')

    <content>
        <!-- banner -->
        <section class="banner">
            <div class="routeNav">
                <button onclick="history.back()" class="Back">
                    <img src="{{asset('web/')}}/img/icons/arrow.svg" alt="">
                </button>
                <div class="navigetor">
                    <h1> كن علي اتصال </h1>
                    <div class="links">
                        <a href="index.html">
                            الرئيسية
                        </a>
                        <a href="#!">
                            اتصل بنا
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="contactUs">
            <!-- contact form -->
            <div class="contactForm">
                <!-- form -->
                <form action="">
                    <div class="col">
                        <div class="inputFeild">
                            <label for=""> الاسم </label>
                            <input type="text" id="" placeholder=" الاسم بالكامل ">
                        </div>
                        <div class="inputFeild">
                            <label for=""> الهاتف </label>
                            <input type="text" id="" placeholder=" مثال : 009650000000 ">
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputFeild">
                            <label for=""> البريد الالكتروني </label>
                            <input type="text" id="" placeholder=" مثال : mail@mail.com">
                        </div>
                        <div class="inputFeild">
                            <label for=""> الموضوع </label>
                            <input type="text" id="" placeholder=" اكتب هنا ">
                        </div>
                    </div>
                    <div class="inputFeild">
                        <label for=""> الرسالة </label>
                        <textarea name="" id="" rows="5" placeholder=" اكتب رسالتك "></textarea>
                    </div>
                    <button type="submit" class="btn"> ارسال </button>
                </form>
                <!-- animated map -->
                <div class="worldMap">
                    <div class="earth"></div>
                    <div class="orbic">
                        <svg viewBox="0 0 500 500" width="0" height="0">
                            <g id="orbic_path">
                                <ellipse cx="250" cy="250" rx="240" ry="100" transform="rotate(-10,250,250)"></ellipse>
                                <path d="M230,192Q300,25 375,146"></path>
                                <path d="M375,146Q450,175 410,301"></path>
                                <path d="M40,234Q300,125 410,301"></path>
                                <path d="M410,301Q260,165 125,354"></path>
                                <path d="M125,354Q150,220 230,192"></path>
                                <path d="M40,234Q130,200 125,354"></path>
                            </g>
                            <g id="orbic_dots">
                                <defs>
                                    <circle id="orbic_dot" cx="0" cy="0" r="6"></circle>
                                </defs>
                                <use id="orbic_dot1" xlink:href="#orbic_dot"></use>
                                <use id="orbic_dot2" xlink:href="#orbic_dot"></use>
                                <use id="orbic_dot3" xlink:href="#orbic_dot"></use>
                                <use id="orbic_dot4" xlink:href="#orbic_dot"></use>
                                <use id="orbic_dot5" xlink:href="#orbic_dot"></use>
                            </g>
                            <g id="orbic_users">
                                <image id="orbic_user1" xlink:href="{{asset('web/')}}/img/user1.webp" width="20%" height="20%"></image>
                                <image id="orbic_user2" xlink:href="{{asset('web/')}}/img/user2.webp" width="20%" height="20%"></image>
                                <image id="orbic_user3" xlink:href="{{asset('web/')}}/img/user3.webp" width="20%" height="20%"></image>
                                <image id="orbic_user4" xlink:href="{{asset('web/')}}/img/user4.webp" width="20%" height="20%"></image>
                                <image id="orbic_user5" xlink:href="{{asset('web/')}}/img/user5.webp" width="20%" height="20%"></image>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- contact -->
            <div class="contact">
                <!-- col -->
                <div class="col">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 64 64"
                             style="enable-background:new 0 0 512 512" xml:space="preserve">
              <path
                  d="m32 0a24.0319 24.0319 0 0 0 -24 24c0 17.23 22.36 38.81 23.31 39.72a.99.99 0 0 0 1.38 0c.95-.91 23.31-22.49 23.31-39.72a24.0319 24.0319 0 0 0 -24-24zm0 35a11 11 0 1 1 11-11 11.0066 11.0066 0 0 1 -11 11z"
                  fill="#c71610" data-original="#c71610"></path>
            </svg>
                    </div>
                    <div class="data">
                        <h4> موقعنا </h4>
                        <a target="_blank" href="https://goo.gl/maps/oaFKYhx5tUXXgEVL9"> الرياض - السعودية </a>
                    </div>
                </div>
                <!-- col -->
                <div class="col">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 512 512"
                             style="enable-background:new 0 0 512 512" xml:space="preserve">
              <path d="M136,210c-24.814,0-45,20.186-45,45v122c0,24.814,20.186,45,45,45c24.814,0,45-20.186,45-45V255
          C181,230.186,160.814,210,136,210z" fill="#c71610" data-original="#c71610"></path>
                            <path d="M61,255c0-4.327,0.571-8.507,1.278-12.634C44.2,248.209,31,265.001,31,285v62c0,19.999,13.2,36.791,31.278,42.634
          C61.571,385.507,61,381.327,61,377V255z" fill="#c71610" data-original="#c71610"></path>
                            <path d="M376,210c-24.814,0-45,20.186-45,45v122c0,24.814,20.186,45,45,45c4.51,0,8.782-0.868,12.892-2.108
          C383.308,438.401,366.305,452,346,452h-47.763c-6.213-17.422-22.707-30-42.237-30c-24.814,0-45,20.186-45,45
          c0,24.814,20.186,45,45,45c19.53,0,36.024-12.578,42.237-30H346c41.353,0,75-33.647,75-75v-30V255
          C421,230.186,400.814,210,376,210z" fill="#c71610" data-original="#c71610"></path>
                            <path d="M449.722,242.366C450.429,246.493,451,250.673,451,255v122c0,4.327-0.571,8.507-1.278,12.634
          C467.8,383.791,481,366.999,481,347v-62C481,265.001,467.8,248.209,449.722,242.366z" fill="#c71610"
                                  data-original="#c71610"></path>
                            <path d="M256,0C131.928,0,31,100.928,31,225v0.383c8.937-6.766,19.277-11.717,30.687-13.934C68.698,110.251,153.054,30,256,30
              s187.302,80.251,194.313,181.448c11.409,2.217,21.749,7.169,30.687,13.934V225C481,100.928,380.072,0,256,0z"
                                  fill="#c71610" data-original="#c71610"></path>
            </svg>
                    </div>
                    <div class="data">
                        <h4> ارقام التواصل </h4>
                        <!-- whatsapp -->
                        <div class="info">
                            <a href="https://api.whatsapp.com/send/?phone=%2B201010871488&text&type=phone_number&app_absent=0"
                               target="_blank" class="whatsapp">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512" xml:space="preserve">
                  <g>
                      <path
                          d="m10.894531 512c-2.875 0-5.671875-1.136719-7.746093-3.234375-2.734376-2.765625-3.789063-6.78125-2.761719-10.535156l33.285156-121.546875c-20.722656-37.472656-31.648437-79.863282-31.632813-122.894532.058594-139.941406 113.941407-253.789062 253.871094-253.789062 67.871094.0273438 131.644532 26.464844 179.578125 74.433594 47.925781 47.972656 74.308594 111.742187 74.289063 179.558594-.0625 139.945312-113.945313 253.800781-253.867188 253.800781 0 0-.105468 0-.109375 0-40.871093-.015625-81.390625-9.976563-117.46875-28.84375l-124.675781 32.695312c-.914062.238281-1.84375.355469-2.761719.355469zm0 0"
                          fill="#E5E5E5" data-original="#e5e5e5"></path>
                      <path
                          d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0"
                          fill="#FFFFFF" data-original="#ffffff"></path>
                      <path
                          d="m19.34375 492.625 33.277344-121.519531c-20.53125-35.5625-31.324219-75.910157-31.3125-117.234375.050781-129.296875 105.273437-234.488282 234.558594-234.488282 62.75.027344 121.644531 24.449219 165.921874 68.773438 44.289063 44.324219 68.664063 103.242188 68.640626 165.898438-.054688 129.300781-105.28125 234.503906-234.550782 234.503906-.011718 0 .003906 0 0 0h-.105468c-39.253907-.015625-77.828126-9.867188-112.085938-28.539063zm0 0"
                          fill="#64B161" data-original="#64b161"></path>
                      <g fill="#FFFFFF">
                          <path
                              d="m10.894531 501.105469 34.46875-125.871094c-21.261719-36.839844-32.445312-78.628906-32.429687-121.441406.054687-133.933594 109.046875-242.898438 242.976562-242.898438 64.992188.027344 125.996094 25.324219 171.871094 71.238281 45.871094 45.914063 71.125 106.945313 71.101562 171.855469-.058593 133.929688-109.066406 242.910157-242.972656 242.910157-.007812 0 .003906 0 0 0h-.105468c-40.664063-.015626-80.617188-10.214844-116.105469-29.570313zm134.769531-77.75 7.378907 4.371093c31 18.398438 66.542969 28.128907 102.789062 28.148438h.078125c111.304688 0 201.898438-90.578125 201.945313-201.902344.019531-53.949218-20.964844-104.679687-59.09375-142.839844-38.132813-38.160156-88.832031-59.1875-142.777344-59.210937-111.394531 0-201.984375 90.566406-202.027344 201.886719-.015625 38.148437 10.65625 75.296875 30.875 107.445312l4.804688 7.640625-20.40625 74.5zm0 0"
                              fill="#FFFFFF" data-original="#ffffff"></path>
                          <path
                              d="m195.183594 152.246094c-4.546875-10.109375-9.335938-10.3125-13.664063-10.488282-3.539062-.152343-7.589843-.144531-11.632812-.144531-4.046875 0-10.625 1.523438-16.1875 7.597657-5.566407 6.074218-21.253907 20.761718-21.253907 50.632812 0 29.875 21.757813 58.738281 24.792969 62.792969 3.035157 4.050781 42 67.308593 103.707031 91.644531 51.285157 20.226562 61.71875 16.203125 72.851563 15.191406 11.132813-1.011718 35.917969-14.6875 40.976563-28.863281 5.0625-14.175781 5.0625-26.324219 3.542968-28.867187-1.519531-2.527344-5.566406-4.046876-11.636718-7.082032-6.070313-3.035156-35.917969-17.726562-41.484376-19.75-5.566406-2.027344-9.613281-3.035156-13.660156 3.042969-4.050781 6.070313-15.675781 19.742187-19.21875 23.789063-3.542968 4.058593-7.085937 4.566406-13.15625 1.527343-6.070312-3.042969-25.625-9.449219-48.820312-30.132812-18.046875-16.089844-30.234375-35.964844-33.777344-42.042969-3.539062-6.070312-.058594-9.070312 2.667969-12.386719 4.910156-5.972656 13.148437-16.710937 15.171875-20.757812 2.023437-4.054688 1.011718-7.597657-.503906-10.636719-1.519532-3.035156-13.320313-33.058594-18.714844-45.066406zm0 0"
                              fill-rule="evenodd" fill="#FFFFFF" data-original="#ffffff"></path>
                      </g>
                  </g>
                </svg>
                                01010871488
                            </a>
                            <!-- call -->
                            <a href="tel:0500000000" target="_blank" class="call">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 32 32"
                                     style="enable-background:new 0 0 512 512" xml:space="preserve">
                  <path
                      d="m29.393 23.36c-.874-.733-6-3.979-6.852-3.83-.4.071-.706.412-1.525 1.389a11.687 11.687 0 0 1 -1.244 1.347 10.757 10.757 0 0 1 -2.374-.88 14.7 14.7 0 0 1 -6.784-6.786 10.757 10.757 0 0 1 -.88-2.374 11.687 11.687 0 0 1 1.347-1.244c.976-.819 1.318-1.123 1.389-1.525.149-.854-3.1-5.978-3.83-6.852-.306-.362-.584-.605-.94-.605-1.032 0-5.7 5.772-5.7 6.52 0 .061.1 6.07 7.689 13.791 7.721 7.589 13.73 7.689 13.791 7.689.748 0 6.52-4.668 6.52-5.7 0-.356-.243-.634-.607-.94z"
                      fill="#34b7f1" data-original="#34b7f1"></path>
                                    <path d="m23 15h2a8.009 8.009 0 0 0 -8-8v2a6.006 6.006 0 0 1 6 6z" fill="#34b7f1"
                                          data-original="#34b7f1">
                                    </path>
                                    <path d="m28 15h2a13.015 13.015 0 0 0 -13-13v2a11.013 11.013 0 0 1 11 11z" fill="#34b7f1"
                                          data-original="#34b7f1"></path>
                </svg>
                                01050177198
                            </a>
                        </div>
                    </div>
                </div>
                <!-- col -->
                <div class="col">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 512 512"
                             style="enable-background:new 0 0 512 512" xml:space="preserve">
              <path
                  d="m34.909 448.047h81.455v-197.818l-53.338-93.138-63.026 5.865v250.182c0 19.287 15.622 34.909 34.909 34.909z"
                  fill="#0085F7" data-original="#0085f7"></path>
                            <path
                                d="m395.636 448.047h81.455c19.287 0 34.909-15.622 34.909-34.909v-250.182l-62.935-5.865-53.428 93.138v197.818z"
                                fill="#00A94B" data-original="#00a94b"></path>
                            <path
                                d="m395.636 98.956-47.847 91.303 47.847 59.97 116.364-87.273v-46.545c0-43.142-49.251-67.782-83.782-41.891z"
                                fill="#FFBC00" data-original="#ffbc00"></path>
                            <path clip-rule="evenodd"
                                  d="m116.364 250.229-45.593-96.31 45.593-54.963 139.636 104.727 139.636-104.727v151.273l-139.636 104.727z"
                                  fill="#FF4131" fill-rule="evenodd" data-original="#ff4131"></path>
                            <path
                                d="m0 116.411v46.545l116.364 87.273v-151.273l-32.582-24.436c-34.531-25.891-83.782-1.251-83.782 41.891z"
                                fill="#E51C19" data-original="#e51c19"></path>
            </svg>
                    </div>
                    <div class="data">
                        <h4> البريد اللإلكتروني </h4>
                        <a target="_blank" href="mailto:mail@mail.com.com"> mohamedelsdodey1996@gmail.com </a>
                    </div>
                </div>
            </div>
            <!-- map -->
            <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463878.29488595825!2d46.82252880000001!3d24.725191849999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2INin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1674119472261!5m2!1sar!2seg"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </content>

@endsection
