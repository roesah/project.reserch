@extends('layouts.app')

@section('content')

<style>
    body {
        font-family: mitr;
        background-image: url('/images/d1.png');
        background-size: cover;
        background-attachment: fixed;
        cursor: url('a1.png')
    }

    footer {
        display: flex;
        justify-content: center;
        padding-right: 70%;


    }
</style>

<body>
    <div class="py-12">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            @if (App\Models\UserAnswer::where('user_id', Auth::id())->exists())
            <div class="logged-in-message">
                <br><br><br><br>
                <div class="one">
                    <h1>หน้าหลัก</h1>
                </div>
                <br><br>
                <div class="cards">
                    <div class="card red">
                        <p class="tip">Level 1</p>
                        <p class="second-text">Lorem Ipsum</p>
                        <button class="cssbuttons-io-button" onclick="window.location.href='lesson.level1';">
                            start
                            <div class="icon">
                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="card blue">
                        <p class="tip">Level 2</p>
                        <p class="second-text">Lorem Ipsum</p>
                        <button class="cssbuttons-io-button" onclick="window.location.href='lesson.level2';">
                            start
                            <div class="icon">
                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="card green">
                        <p class="tip">Level 3</p>
                        <p class="second-text">Lorem Ipsum</p>
                        <button class="cssbuttons-io-button" onclick="window.location.href='lesson.level3';">
                            start
                            <div class="icon">
                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <style>
                    .one h1 {
                        text-align: center;
                        text-transform: uppercase;
                        padding-bottom: 5px;
                    }

                    .one h1:before {
                        width: 28px;
                        height: 5px;
                        display: block;
                        content: "";
                        position: absolute;
                        bottom: 3px;
                        left: 50%;
                        margin-left: -14px;
                        background-color: #b80000;
                    }

                    .one h1:after {
                        width: 100px;
                        height: 1px;
                        display: block;
                        content: "";
                        position: relative;
                        margin-top: 25px;
                        left: 50%;
                        margin-left: -50px;
                        background-color: #b80000;
                    }

                    .cssbuttons-io-button {
                        background: #BEBEBE;
                        color: white;
                        font-family: inherit;
                        padding: 0.35em;
                        padding-left: 1.2em;
                        font-size: 17px;
                        font-weight: 500;
                        border-radius: 0.9em;
                        border: none;
                        letter-spacing: 0.05em;
                        display: flex;
                        align-items: center;
                        box-shadow: inset 0 0 1.6em -0.6em #BEBEBE;
                        overflow: hidden;
                        position: relative;
                        height: 2.8em;
                        padding-right: 3.3em;
                        cursor: pointer;
                    }

                    .cssbuttons-io-button .icon {
                        background: white;
                        margin-left: 1em;
                        position: absolute;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        height: 2.2em;
                        width: 2.2em;
                        border-radius: 0.7em;
                        box-shadow: 0.1em 0.1em 0.6em 0.2em #BEBEBE;
                        right: 0.3em;
                        transition: all 0.3s;
                    }

                    .cssbuttons-io-button:hover .icon {
                        width: calc(100% - 0.6em);
                    }

                    .cssbuttons-io-button .icon svg {
                        width: 1.1em;
                        transition: transform 0.3s;
                        color: #BEBEBE;
                    }

                    .cssbuttons-io-button:hover .icon svg {
                        transform: translateX(0.1em);
                    }

                    .cssbuttons-io-button:active .icon {
                        transform: scale(0.95);
                    }

                    .cards {
                        display: flex;
                        flex-wrap: nowrap;
                        gap: 15px;
                        justify-content: center;
                        align-items: center;
                    }

                    .cards .red {
                        background-color: #f43f5e;
                    }

                    .cards .blue {
                        background-color: #3b82f6;
                    }

                    .cards .green {
                        background-color: #22c55e;
                    }

                    .cards .card {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        flex-direction: column;
                        text-align: center;
                        height: 150px;
                        width: 450px;
                        border-radius: 10px;
                        color: white;
                        cursor: pointer;
                        transition: 400ms;
                    }

                    .cards .card p.tip {
                        font-size: 1em;
                        font-weight: 700;
                    }

                    .cards .card p.second-text {
                        font-size: .7em;
                    }

                    .cards .card:hover {
                        transform: scale(1.1, 1.1);
                    }

                    .cards:hover>.card:not(:hover) {
                        filter: blur(10px);
                        transform: scale(0.9, 0.9);
                    }
                </style>
            </div>
            @else
            <div id="welcome-message" style="text-align: center; margin-top: 190px; background-color: rgba(242, 242, 242, 0.7); padding: 20px;">
                ยินดีต้อนรับเข้าสู่บทเรียน วิทยาการคำนวณม.3<br>แต่ๆๆๆก่อนอื่นเข้าไปทำแบบทดสอบก่อนเรียนก่อนนะคะ<br><br>
                <a href="{{ route('pretest.index') }}">{{ __("เข้าไปทดสอบก่อนเรียน let's go") }}</a>
            </div>
            <style>
                @keyframes zoomIn {
                    from {
                        transform: scale(0);
                    }

                    to {
                        transform: scale(1);
                    }
                }

                #welcome-message {
                    animation: zoomIn 0.9s ease forwards;
                }
            </style>
            @endif
        </div>
    </div>

   

</body>

@endsection