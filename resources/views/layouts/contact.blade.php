<x-layout>
    <div class="card overflow-hidden chat-application">
        <div class="d-flex align-items-center justify-content-between gap-3 m-3 d-lg-none">

            <form class="position-relative w-100">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
        </div>
        <div class="d-flex w-100">
            <div class="d-flex w-100">
                <div class="min-width-340">
                    <div class="border-end user-chat-box h-100">
                        <div class="px-4 pt-9 pb-6 d-none d-lg-block">
                            <form class="position-relative">
                                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                    placeholder="Search">
                                <i
                                    class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </form>
                        </div>
                        <div class="app-chat">
                            <ul class="chat-users simplebar-scrollable-y" style="height: calc(100vh - 400px)"
                                data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                aria-label="scrollable content"
                                                style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    @foreach ($contacts as $contact)
                                                        <li>
                                                            <a href="/inbox/{{ Crypt::encryptString($contact['id']) }}"
                                                                class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user bg-light border-bottom"
                                                                id="chat_user_1" data-user-id="1">
                                                                <div class="position-relative w-100 ms-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <h6 class="mb-0">{{ $contact['name'] }}</h6>
                                                                    </div>
                                                                    <p class="text-dark fw-light text-truncate">
                                                                        {{ $contact['message'] }}</p>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                        </div>
                                                                        <p class="mb-0 fs-2 text-muted">
                                                                            {{ $contact['created_at']->format('l,  h.i A') }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 902px; height: 846px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar"
                                        style="height: 129px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="chat-container h-100 w-100">
                        <div class="chat-box-inner-part h-100">
                            <div class="chatting-box app-email-chatting-box">
                                <div class="p-9 py-3 border-bottom chat-meta-user">
                                    <ul class="list-unstyled mb-0 d-flex align-items-center">
                                        <li class="me-3 d-lg-none">
                                            <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
                                                <i class="ti ti-inbox fs-5"></i>
                                            </button>
                                        </li>
                                        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Delete">
                                            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                                                href="delete/{{ Request::is('inbox/*') ? $contactById['id'] : '' }}">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="w-100 p-3 position-relative"
                                    style="height: calc(100vh - 400px); overflow: auto;">
                                    @if (Request::is('inbox/*'))
                                        <div class="row">
                                            <div class="col">
                                                <h2>{{ $contactById['name'] }}</h2>
                                                <a class="text-gray"
                                                    href="mailto:{{ $contactById['email'] }}">{{ $contactById['email'] }}</a>
                                                <br>
                                                <a class="text-gray"
                                                    href="tel:{{ $contactById['phone_number'] }}">{{ $contactById['phone_number'] }}</a>
                                            </div>
                                            <div class="col text-end">
                                                <small>{{ $contactById['created_at']->format('d/m/Y') }}</small>
                                            </div>
                                        </div>
                                        <div class="row mt-5 h-100">
                                            <div class="col">
                                                {{ $contactById['message'] }}
                                            </div>
                                        </div>
                                    @else
                                        <h2 class="fw-light text-body position-absolute top-50 start-50 translate-middle">No
                                            inbox is selected</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="offcanvas offcanvas-start user-chat-box" tabindex="-1" id="chat-sidebar"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"> Inbox </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <ul class="chat-users simplebar-scrollable-y" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        @foreach ($contacts as $contact)
                                            <li>
                                                <a href="/inbox/{{ Crypt::encryptString($contact['id']) }}"
                                                    class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user bg-light border-bottom"
                                                    id="chat_user_1" data-user-id="1">
                                                    <div class="position-relative w-100 ms-2">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                            <h6 class="mb-0">{{ $contact['name'] }}</h6>
                                                        </div>
                                                        <p class="text-dark fw-light text-truncate">
                                                            {{ $contact['message'] }}</p>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                            </div>
                                                            <p class="mb-0 fs-2 text-muted">
                                                                {{ $contact['created_at']->format('l,  h.i A') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 902px; height: 846px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 129px; transform: translate3d(0px, 0px, 0px); display: block;">
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</x-layout>