<!DOCTYPE html>


<html lang="en">

<head>
    <title>Safina And Aftab</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="assets/images/title-2.png">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


    <script src="script.js" defer></script>
</head>

<body>
    <style>
        .btn-link {
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .btn-link .icon {
           
            color: var(--text-dark);
        }


        body[data-theme='dark'] .btn-link .icon {
            color: var(--text-light);
        }


        .btn-link:hover {
            text-decoration: none;
        }

        /* Modal Styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1000;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.5);
            /* Black with opacity */
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            /* 10% from top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
            max-width: 600px;
            border-radius: 8px;
        }

        .close-button {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-button:hover,
        .close-button:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        textarea {
            width: 100%;
            height: 100px;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            /* background-color: #0056b3; */
        }

        /* Responsive Modal */
        @media (max-width: 768px) {
            .modal-content {
                width: 90%;
            }

            textarea {
                border-radius: 14px;
                height: 42px;

            }
        }

        .post__medias {
            display: flex;
            overflow-y: hidden;
            overflow-x: auto;
            width: 100%;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: none;
            justify-content: space-evenly;
        }

        .post__media {
            width: 100%;
            height: auto;
            object-fit: contain;
            max-width: 403.3px;
            max-height: 273.81px;
            aspect-ratio: 403.3 / 273.81;
            border-radius: 17px;
            
        }

        .post__button svg {
            transition: fill 0.3s ease;
        }

        .post__button svg[data-liked='true'] {
            fill: red;
        }
    </style>
    <div id="uploadModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Upload Image</h2>
            <form id="uploadForm" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" id="fileInput" name="image" id="image" style="margin: 24px 0px 12px 0px;"
                    accept="image/*" required>
                <img id="imagePreview"
                    style="border-radius: 17px; display: none; width: 100%; max-height: 373px; object-fit: cover; margin-top: 15px;"
                    alt="Image Preview" />
                <textarea id="description" name="description" placeholder="Add a description..." required></textarea>
                <button type="submit" id="uploadButton">Upload</button>
            </form>
        </div>
    </div>



    <header class="header">
        <nav class="header__content">
            <div class="header__buttons">


                <a href="{{ route('wedding') }}" class="header__home">
                    <button class="btn btn-link">
                        <svg class="icon" width="24" height="48" fill="currentColor" viewBox="0 0 24 24" style="margin-bottom: 11px;">
                            <path d="M15 19l-7-7 7-7" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </a>
                <img src="assets/images/slider/middle.png" alt="" style="    height: 40px;">

             
            </div>

            <div class="header__search">
                <input type="text" placeholder="Search" />
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M21.669 21.6543C21.8625 21.4622 21.863 21.1494 21.6703 20.9566L17.3049 16.5913C18.7912 14.9327 19.7017 12.7525 19.7017 10.3508C19.7017 5.18819 15.5135 1 10.3508 1C5.18819 1 1 5.18819 1 10.3508C1 15.5135 5.18819 19.7017 10.3508 19.7017C12.7624 19.7017 14.9475 18.7813 16.606 17.2852L20.9739 21.653C21.1657 21.8449 21.4765 21.8454 21.669 21.6543ZM1.9843 10.3508C1.9843 5.7394 5.7394 1.9843 10.3508 1.9843C14.9623 1.9843 18.7174 5.7394 18.7174 10.3508C18.7174 14.9623 14.9623 18.7174 10.3508 18.7174C5.7394 18.7174 1.9843 14.9623 1.9843 10.3508Z"
                        fill="#A5A5A5" stroke="#A5A5A5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <div class="header__buttons header__buttons--mobile">
                <a href="#" class="openModalButton">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="18" height="18" rx="5" stroke="var(--text-dark)"
                            stroke-width="1.8" />
                        <line x1="12.1" y1="6.9" x2="12.1" y2="17.1" stroke="var(--text-dark)"
                            stroke-width="1.8" stroke-linecap="round" />
                        <line x1="6.9" y1="11.8" x2="17.1" y2="11.8" stroke="var(--text-dark)"
                            stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.4995 21.2609C11.1062 21.2609 10.7307 21.1362 10.4133 20.9001C8.2588 19.3012 3.10938 15.3239 1.81755 12.9143C0.127895 9.76543 1.14258 5.72131 4.07489 3.89968C5.02253 3.31177 6.09533 3 7.18601 3C8.81755 3 10.3508 3.66808 11.4995 4.85726C12.6483 3.66808 14.1815 3 15.8131 3C16.9038 3 17.9766 3.31177 18.9242 3.89968C21.8565 5.72131 22.8712 9.76543 21.186 12.9143C19.8942 15.3239 14.7448 19.3012 12.5902 20.9001C12.2684 21.1362 11.8929 21.2609 11.4995 21.2609ZM7.18601 4.33616C6.34565 4.33616 5.5187 4.57667 4.78562 5.03096C2.43888 6.49183 1.63428 9.74316 2.99763 12.2819C4.19558 14.5177 9.58639 18.6242 11.209 19.8267C11.3789 19.9514 11.6158 19.9514 11.7856 19.8267C13.4082 18.6197 18.799 14.5133 19.997 12.2819C21.3603 9.74316 20.5557 6.48738 18.209 5.03096C17.4804 4.57667 16.6534 4.33616 15.8131 4.33616C14.3425 4.33616 12.9657 5.04878 12.0359 6.28696L11.4995 7.00848L10.9631 6.28696C10.0334 5.04878 8.6611 4.33616 7.18601 4.33616Z"
                            fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.6" />
                    </svg>
                </a>

            </div>

            <div class="header__buttons header__buttons--desktop">
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.45307 11.751L11.9773 2.02175L21.5015 11.751C21.7906 12.0463 21.9545 12.4468 21.9545 12.8711V20.4556C21.9545 20.7747 21.7037 21 21.4427 21H15.964C15.713 21 15.4721 20.7849 15.4721 20.476V15.8886C15.4721 13.9497 13.9267 12.34 11.9773 12.34C10.0279 12.34 8.48244 13.9497 8.48244 15.8886V20.476C8.48244 20.7849 8.24157 21 7.99053 21H2.51187C2.25085 21 2 20.7747 2 20.4556V12.8711C2 12.4468 2.16397 12.0463 2.45307 11.751Z"
                            stroke="var(--text-dark)" stroke-width="2" />
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.81038 19.7478C5.83176 19.4539 5.70787 19.1681 5.47873 18.9827C3.2792 17.2037 1.9 14.5525 1.9 11.5868C1.9 6.27627 6.38748 1.9 12.0098 1.9C17.6196 1.9 22.1078 6.27565 22.1078 11.5868C22.1078 16.8966 17.6092 21.2735 11.998 21.2735C11.0656 21.2735 10.1798 21.1544 9.32697 20.9277C9.15685 20.8825 8.97721 20.8882 8.81028 20.944L5.64643 22.0022L5.81038 19.7478Z"
                            stroke="var(--text-dark)" stroke-width="1.8" stroke-linejoin="round" />
                        <path
                            d="M10.1498 8.7952C10.2222 8.80563 10.2825 8.81606 10.3548 8.82649C11.428 9.05591 12.5252 10.0362 13.3693 10.6202C13.8396 10.9539 14.2375 10.9226 14.7078 10.6097C15.7086 9.92147 16.7456 9.26448 17.7705 8.58664C18.0478 8.39893 18.3372 8.20079 18.6748 8.45107C19.0486 8.7222 18.8195 9.0142 18.6266 9.28534C17.6137 10.6827 16.6129 12.0801 15.588 13.4671C14.8886 14.4265 13.8999 14.5621 12.8388 13.8842C12.1032 13.4045 11.3436 12.9561 10.6201 12.4556C10.1378 12.1219 9.73984 12.1636 9.28163 12.4764C8.26876 13.1647 7.24382 13.8217 6.21889 14.4995C5.94156 14.6872 5.65216 14.8854 5.31454 14.6247C4.97691 14.3744 5.15778 14.0928 5.33865 13.8321C6.3877 12.393 7.42469 10.9539 8.47374 9.51476C8.82343 9.02463 9.47456 8.73263 10.1498 8.7952Z"
                            fill="var(--text-dark)" />
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18 2.8H7C5.23269 2.8 3.8 4.23269 3.8 6V17C3.8 18.7673 5.23269 20.2 7 20.2H18C19.7673 20.2 21.2 18.7673 21.2 17V6C21.2 4.23269 19.7673 2.8 18 2.8ZM7 1C4.23858 1 2 3.23858 2 6V17C2 19.7614 4.23858 22 7 22H18C20.7614 22 23 19.7614 23 17V6C23 3.23858 20.7614 1 18 1H7Z"
                            fill="var(--text-dark)" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22 7.99995H3V6.19995H22V7.99995Z"
                            fill="var(--text-dark)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 6.99989L6 1.99989L7.57349 1.12573L11.5735 6.12573L10 6.99989Z"
                            fill="var(--text-dark)" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.5 6.99989L12.5 1.99989L14.0735 1.12573L18.0735 6.12573L16.5 6.99989Z"
                            fill="var(--text-dark)" />
                        <path
                            d="M15.75 13.0671C16.0833 13.2595 16.0833 13.7407 15.75 13.9331L10.5 16.9642C10.1667 17.1566 9.75 16.9161 9.75 16.5312L9.75 10.469C9.75 10.0841 10.1667 9.84354 10.5 10.036L15.75 13.0671Z"
                            fill="var(--text-dark)" />
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.4995 21.2609C11.1062 21.2609 10.7307 21.1362 10.4133 20.9001C8.2588 19.3012 3.10938 15.3239 1.81755 12.9143C0.127895 9.76543 1.14258 5.72131 4.07489 3.89968C5.02253 3.31177 6.09533 3 7.18601 3C8.81755 3 10.3508 3.66808 11.4995 4.85726C12.6483 3.66808 14.1815 3 15.8131 3C16.9038 3 17.9766 3.31177 18.9242 3.89968C21.8565 5.72131 22.8712 9.76543 21.186 12.9143C19.8942 15.3239 14.7448 19.3012 12.5902 20.9001C12.2684 21.1362 11.8929 21.2609 11.4995 21.2609ZM7.18601 4.33616C6.34565 4.33616 5.5187 4.57667 4.78562 5.03096C2.43888 6.49183 1.63428 9.74316 2.99763 12.2819C4.19558 14.5177 9.58639 18.6242 11.209 19.8267C11.3789 19.9514 11.6158 19.9514 11.7856 19.8267C13.4082 18.6197 18.799 14.5133 19.997 12.2819C21.3603 9.74316 20.5557 6.48738 18.209 5.03096C17.4804 4.57667 16.6534 4.33616 15.8131 4.33616C14.3425 4.33616 12.9657 5.04878 12.0359 6.28696L11.4995 7.00848L10.9631 6.28696C10.0334 5.04878 8.6611 4.33616 7.18601 4.33616Z"
                            fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.6" />
                    </svg>
                </a>
                <button class="profile-button">
                    <div class="profile-button__border"></div>
                    <div class="profile-button__picture">
                        <img src="assets1/default-user.png" alt="User Picture" />
                    </div>
                </button>
            </div>
        </nav>
    </header>

    <main class="main-container">
        <section class="content-container">
            <div class="content">
                <div class="stories">
                    <button class="stories__left-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#fff"
                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z">
                            </path>
                        </svg>
                    </button>
                    <div class="stories__content">
                    @foreach($topPosts as $post)
                        <button class="story story--has-story" data-fancybox="gallery" data-src="{{ asset('storage/' . $post->image_path) }}">
                            <div class="story__avatar">
                                <div class="story__border">
                                    <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                        <defs>
                                            <linearGradient y2="0" x2="1" y1="1" x1="0" id="--story-gradient">
                                                <stop offset="0" stop-color="#f09433" />
                                                <stop offset="0.25" stop-color="#e6683c" />
                                                <stop offset="0.5" stop-color="#dc2743" />
                                                <stop offset="0.75" stop-color="#cc2366" />
                                                <stop offset="1" stop-color="#bc1888" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="story__picture">
                                    @if($post->user->profile_picture)
                                        <img src="{{ asset('storage/' . $post->user->profile_picture) }}" alt="User Picture" />
                                    @else
                                        <img src="{{ asset('assets1/default-user.png') }}" alt="Default User Picture" />
                                    @endif
                                </div>

                            </div>
                            <span class="story__user">{{ $post->user->name }}</span>
                        </button>
                    @endforeach


                     
                </div>


                <div class="posts">


                    @if ($allPosts->isEmpty())
                        <p>No posts available.</p>
                    @else
                        @foreach ($allPosts as $post)
                            <article class="post">
                                <div class="post__header">
                                    <div class="post__profile">
                                        <a href="https://github.com/{{ $post->user->name }}" target="_blank"
                                            class="post__avatar">
                                            <img src="{{ asset('assets1/default-user.png') }}" alt="User Picture">
                                        </a>
                                        <a href="https://github.com/{{ $post->user->name }}" target="_blank"
                                            class="post__user">
                                            {{ $post->user->name }}
                                        </a>
                                    </div>
                                </div>

                                <div class="post__content">
                                    <div class="post__medias" data-post-id="{{ $post->id }}">
                                        <img class="post__media" src="{{ asset('storage/' . $post->image_path) }}"
                                            alt="Post Content"
                                            data-liked="{{ $post->isLikedByUser(auth()->id()) ? 'true' : 'false' }}">
                                    </div>
                                </div>

                                <div class="post__footer">
                                    <div class="post__buttons">

                                        <button class="post__button" data-post-id="{{ $post->id }}"
                                            data-liked="{{ $post->isLikedByUser(auth()->id()) ? 'true' : 'false' }}"
                                            data-user-id="{{ auth()->id() }}"
                                            data-created-by="{{ $post->user_id }}">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path id="like-icon-path"
                                                    d="M11.5 21.26c-.39 0-.76-.12-1.09-.36C8.26 19.3 3.1 15.32 1.82 12.91 0.13 9.77 1.14 5.72 4.07 3.9 5.02 3.31 6.1 3 7.19 3c1.63 0 3.16.67 4.31 1.86C12.65 3.67 14.18 3 15.81 3c1.09 0 2.16.31 3.11.9 2.93 1.82 3.94 5.86 2.25 9.01-1.29 2.41-6.44 6.39-8.59 7.99-.32.23-.7.37-1.08.37zm-4.31-16.92c-.84 0-1.67.24-2.4.69-2.35 1.46-3.15 4.71-1.79 7.24 1.2 2.24 6.6 6.34 8.22 7.54.17.12.4.12.57 0 1.62-1.2 7.02-5.29 8.22-7.54 1.35-2.54.56-5.79-1.79-7.24-.73-.45-1.56-.69-2.4-.69-1.47 0-2.83.71-3.76 1.95L11.5 7.01l-.74-.99c-.93-1.24-2.29-1.95-3.76-1.95z"
                                                    fill="{{ $post->isLikedByUser(auth()->id()) ? 'red' : 'none' }}"
                                                    stroke="{{ $post->isLikedByUser(auth()->id()) ? 'red' : 'var(--text-dark)' }}"
                                                    stroke-width="1.5">

                                                </path>

                                            </svg>

                                        </button>

                                        <!-- Display the like count -->
                                        <span class="like-count"
                                            style="margin-left: -24px;margin-top: 59px;">{{ $post->likes_count }}</span>





                                        <div class="post__indicators"></div>

                                        <button class="post__button post__button--align-right">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.875 2H4.125C3.50625 2 3 2.44939 3 3.00481V22.4648C3 23.0202 3.36563 23.1616 3.82125 22.7728L11.5444 16.1986C11.7244 16.0471 12.0225 16.0471 12.2025 16.1936L20.1731 22.7879C20.6287 23.1666 21 23.0202 21 22.4648V3.00481C21 2.44939 20.4994 2 19.875 2ZM19.3125 20.0209L13.3444 15.0827C12.9281 14.7394 12.405 14.5677 11.8763 14.5677C11.3363 14.5677 10.8019 14.7444 10.3856 15.0979L4.6875 19.9502V3.51479H19.3125V20.0209Z"
                                                    fill="var(--text-dark)" stroke="var(--text-dark)"
                                                    stroke-width="0.7"></path>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="post__infos">
                                        <div class="post__likes">

                                            <a href="#" class="post__likes-avatar">
                                                <img src="{{ asset('assets1/default-user.png') }}"
                                                    alt="User Picture">
                                            </a>

                                            <span>First Liked by
                                                <a class="post__name--underline" href="#">
                                                    {{ $post->likes->first()->user->name ?? 'User123' }}
                                                </a> and
                                                <a href="#">
                                                    {{ $post->likes->count() }} others
                                                </a>
                                            </span>
                                        </div>

                                        <div class="post__description">
                                            <span>
                                                <a class="post__name--underline"
                                                    href="https://github.com/{{ $post->user->name }}"
                                                    target="_blank">
                                                    {{ $post->user->name }}
                                                </a>
                                                {{ $post->description }}
                                            </span>
                                        </div>

                                        <span class="post__date-time">
                                            {{ $post->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endif


                </div>
            </div>


    </main>

    <nav class="navbar">
        <a href="{{ route('dashboard') }}" class="navbar__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.45307 11.751L11.9773 2.02175L21.5015 11.751C21.7906 12.0463 21.9545 12.4468 21.9545 12.8711V20.4556C21.9545 20.7747 21.7037 21 21.4427 21H15.964C15.713 21 15.4721 20.7849 15.4721 20.476V15.8886C15.4721 13.9497 13.9267 12.34 11.9773 12.34C10.0279 12.34 8.48244 13.9497 8.48244 15.8886V20.476C8.48244 20.7849 8.24157 21 7.99053 21H2.51187C2.25085 21 2 20.7747 2 20.4556V12.8711C2 12.4468 2.16397 12.0463 2.45307 11.751Z"
                    stroke="var(--text-dark)" stroke-width="2" />
            </svg>
        </a>



        <a href="#" class="navbar__button openModalButton ">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="18" height="18" rx="5" stroke="var(--text-dark)"
                    stroke-width="1.8"></rect>
                <line x1="12.1" y1="6.9" x2="12.1" y2="17.1" stroke="var(--text-dark)"
                    stroke-width="1.8" stroke-linecap="round"></line>
                <line x1="6.9" y1="11.8" x2="17.1" y2="11.8" stroke="var(--text-dark)"
                    stroke-width="1.8" stroke-linecap="round"></line>
            </svg>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M18 2.8H7C5.23269 2.8 3.8 4.23269 3.8 6V17C3.8 18.7673 5.23269 20.2 7 20.2H18C19.7673 20.2 21.2 18.7673 21.2 17V6C21.2 4.23269 19.7673 2.8 18 2.8ZM7 1C4.23858 1 2 3.23858 2 6V17C2 19.7614 4.23858 22 7 22H18C20.7614 22 23 19.7614 23 17V6C23 3.23858 20.7614 1 18 1H7Z"
                fill="var(--text-dark)" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M22 7.99995H3V6.19995H22V7.99995Z"
                fill="var(--text-dark)" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10 6.99989L6 1.99989L7.57349 1.12573L11.5735 6.12573L10 6.99989Z" fill="var(--text-dark)" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16.5 6.99989L12.5 1.99989L14.0735 1.12573L18.0735 6.12573L16.5 6.99989Z" fill="var(--text-dark)" />
            <path
                d="M15.75 13.0671C16.0833 13.2595 16.0833 13.7407 15.75 13.9331L10.5 16.9642C10.1667 17.1566 9.75 16.9161 9.75 16.5312L9.75 10.469C9.75 10.0841 10.1667 9.84354 10.5 10.036L15.75 13.0671Z"
                fill="var(--text-dark)" />
            </svg>
        </a>
        <a href="#" class="navbar__button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.6007 7.94185H6.47927C5.84559 7.94185 5.32113 8.43455 5.2816 9.06699L4.80842 16.638C4.6573 19.0559 6.57759 21.0999 9.00024 21.0999H15.0797C17.5023 21.0999 19.4226 19.0559 19.2715 16.638L18.7983 9.06699C18.7588 8.43455 18.2343 7.94185 17.6007 7.94185ZM6.47927 6.14185C4.89508 6.14185 3.58393 7.37361 3.48511 8.95471L3.01192 16.5257C2.79604 19.9799 5.53931 22.9 9.00024 22.9H15.0797C18.5406 22.9 21.2839 19.9799 21.068 16.5257L20.5948 8.95471C20.496 7.37361 19.1849 6.14185 17.6007 6.14185H6.47927Z"
                    fill="var(--text-dark)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12.2761 2.8C11.0812 2.8 10.1125 3.76867 10.1125 4.96359V6.1419H8.3125V4.96359C8.3125 2.77456 10.0871 1 12.2761 1C14.4651 1 16.2397 2.77456 16.2397 4.96359V6.1419H14.4397V4.96359C14.4397 3.76867 13.471 2.8 12.2761 2.8Z"
                    fill="var(--text-dark)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12.2757 12.3118C13.4706 12.3118 14.4393 11.3431 14.4393 10.1482L14.4393 9.91256C14.4393 9.41551 14.8422 9.01256 15.3393 9.01256C15.8363 9.01256 16.2393 9.41551 16.2393 9.91256L16.2393 10.1482C16.2393 12.3373 14.4647 14.1118 12.2757 14.1118C10.0866 14.1118 8.31208 12.3373 8.31208 10.1482L8.31208 9.91257C8.31208 9.41551 8.71502 9.01257 9.21208 9.01257C9.70913 9.01257 10.1121 9.41551 10.1121 9.91257L10.1121 10.1482C10.1121 11.3431 11.0807 12.3118 12.2757 12.3118Z"
                    fill="var(--text-dark)" />
            </svg>
        </a>
        <a href="{{ route('profilelist.index') }}" class="navbar__button profile-button">
            <div class="profile-button__border"></div>
            <div class="profile-button__picture">
                <img src="assets1/default-user.png" alt="User Picture" />
            </div>
        </a>

    </nav>
    <script>
        // Get the modal element
        const modal = document.getElementById('uploadModal');

        // Get all buttons that open the modal
        const openModalButtons = document.querySelectorAll('.openModalButton');

        // Get the <span> element that closes the modal
        const closeButton = document.querySelector('.close-button');

        // Get the file input and image preview elements
        const fileInput = document.getElementById('fileInput');
        const imagePreview = document.getElementById('imagePreview');

        // Loop through all buttons and attach the click event
        openModalButtons.forEach(button => {
            button.onclick = function(event) {
                event.preventDefault(); // Prevent the default link behavior
                modal.style.display = 'block';
            }
        });

        // When the user clicks on <span> (x), close the modal
        closeButton.onclick = function() {
            modal.style.display = 'none';
            resetModal();
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
                resetModal();
            }
        }

        // Preview the selected image
        fileInput.onchange = function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.style.display = 'none';
            }
        };

        // Function to reset modal content when closed
        function resetModal() {
            fileInput.value = ''; // Clear file input
            imagePreview.src = ''; // Clear image preview
            imagePreview.style.display = 'none'; // Hide image preview
        }

        document.addEventListener('DOMContentLoaded', function() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            function handleLike(postId, userId, createdBy) {
                const url = `/posts/${postId}/like`;

                fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: JSON.stringify({
                            postId,
                            userId,
                            createdBy
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            const likeButton = document.querySelector(`button[data-post-id="${postId}"]`);
                            const path = likeButton.querySelector('#like-icon-path');
                            const likeCountElement = likeButton
                            .nextElementSibling; // Assuming the like count is right next to the button

                            // Update the like count
                            let currentCount = parseInt(likeCountElement.textContent, 10);
                            currentCount = data.liked ? currentCount + 1 : currentCount - 1;
                            likeCountElement.textContent = currentCount;

                            // Update the like button icon
                            if (path) {
                                if (data.liked) {
                                    path.setAttribute('fill', 'red');
                                    path.setAttribute('stroke', 'red');
                                    likeButton.setAttribute('data-liked', 'true');
                                } else {
                                    path.setAttribute('fill', 'none');
                                    path.setAttribute('stroke', 'var(--text-dark)');
                                    likeButton.setAttribute('data-liked', 'false');
                                }
                            } else {
                                console.error('SVG path element not found.');
                            }
                        } else {
                            console.error('Failed to toggle like.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }

            document.querySelectorAll('.post__button').forEach(button => {
                button.addEventListener('click', function() {
                    const postId = button.getAttribute('data-post-id');
                    const userId = button.getAttribute('data-user-id');
                    const createdBy = button.getAttribute('data-created-by');
                    handleLike(postId, userId, createdBy);
                });
            });
        });
    </script>


</body>

</html>
