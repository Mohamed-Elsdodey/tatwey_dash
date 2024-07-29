<span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                 src="{{get_file(auth()->guard('saas')->user()->image)}}"
                                 alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span
                                    class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{auth()->guard('saas')->user()->name}}</span>
                            </span>
                        </span>  </span>
