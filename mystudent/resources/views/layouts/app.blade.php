<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-oJFndjA8k5Avc+Fu3EfsDh2MWZicFhLfRZQcg3ZzCBtkvF3j+2ebFAYa+X3Y/Y3sIjPH7NYtfe00I2pNpkXrKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-TnSNeRyDz73GP8N3rODv3UlUJdP3Fbj19O9K1jz8rStuTNP/3U99aRJQXdmBES7t" crossorigin="anonymous">


    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</head>

<style>
    body {
        font-family: "Dosis", sans-serif;
        text-align: center;
    }

    #menu {
        width: 100px;
        /* ปรับขนาดเมนูให้เล็กลง */
        height: 100px;
        /* ปรับขนาดเมนูให้เล็กลง */
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -50px 0 0 -50px;
        list-style: none;
        font-size: 150%;
        /* ลดขนาดตัวอักษรในเมนู */
    }

    .menu-button {
        opacity: 0;
        z-index: -1;
    }

    .menu-button {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60px;
        /* ปรับขนาดปุ่มให้เล็กลง */
        height: 60px;
        /* ปรับขนาดปุ่มให้เล็กลง */
        position: absolute;
        left: 50%;
        top: 50%;
        text-align: center;
        margin: -30px 0 0 -30px;
        /* ปรับให้ปุ่มตรงกลางเมนู */
        border-radius: 50%;
        background: green;
        background-size: 100%;
        overflow: hidden;
        text-decoration: none;
        color: white;
        transition: color 0.3s;
    }

    .menu-button:hover {
        color: gray;
        /* เปลี่ยนสีของตัวอักษรเมื่อ hover เป็นสีเทา */
    }

    #menu:not(:target)>a:first-of-type,
    #menu:target>a:last-of-type {
        opacity: 1;
        z-index: 1;
    }

    #menu:not(:target)>.icon-plus:before,
    #menu:target>.icon-minus:before {
        opacity: 1;
    }

    .menu-item {
        width: 50px;
        /* ปรับขนาดรายการเมนูให้เล็กลง */
        height: 0px;
        /* ปรับขนาดรายการเมนูให้เล็กลง */
        position: absolute;
        left: 55%;
        line-height: 5px;
        top: 50%;
        margin: -20px 0 0 -20px;
        /* ปรับให้รายการเมนูตรงกลางเมนู */
        border-radius: 50%;
        background-color: #424242;
        transform: translate(0px, 0px);
        transition: transform 500ms;
        z-index: -2;
        transition: .5s;
    }

    .menu-item:hover {
        opacity: 0.5;
        box-shadow: 0 5px 10px black;
    }


    .menu-item a {
        color: #fff;
        position: relative;
        top: 30%;
        left: 0;
        text-decoration: none;
    }

    #menu:target>.menu-item:nth-child(6) {
        transform: rotate(60deg) translateY(-80px) rotate(300deg);
        /* ปรับตำแหน่งของรายการเมนูที่ 6 */
        transition-delay: 0s;
    }

    #menu:target>.menu-item:nth-child(5) {
        transform: rotate(20deg) translateY(-85px) rotate(-20deg);
        /* ปรับตำแหน่งของรายการเมนูที่ 5 */
        transition-delay: 0.1s;
    }

    #menu:target>.menu-item:nth-child(3) {
        transform: rotate(-20deg) translateY(-85px) rotate(20deg);
        /* ปรับตำแหน่งของรายการเมนูที่ 3 */
        transition-delay: 0.2s;
    }

    #menu:target>.menu-item:nth-child(4) {
        transform: rotate(-60deg) translateY(-80px) rotate(60deg);
        /* ปรับตำแหน่งของรายการเมนูที่ 4 */
        transition-delay: 0.3s;
    }

    .content {
        position: absolute;
        text-align: center;
        margin: -10px 0 0 -30px;
        top: 70%;
        left: 50%;
        font-size: 20px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        /* จัดวางเสียงและปุ่ม Logout ไว้ทางสองด้าน */
        align-items: center;
        /* จัดให้เส้นหมดที่ตรงกลางในที่เดียวกัน */
        margin-top: 30px;
        padding: 10px;
        width: 100%;
        max-width: 100%;
        box-shadow: none;
        position: fixed;
        height: 90px !important;
        overflow: hidden;
        z-index: 2;
    }


    .main {
        margin: 0 auto;
        display: block;
        height: 100%;
        margin-top: 60px;
    }

    .mainInner {
        display: table;
        height: 100%;
        width: 100%;
        text-align: center;
    }

    /* The switch - the box around the speaker*/
    .toggleSwitch {
        width: 50px;
        height: 50px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(39, 39, 39);
        border-radius: 50%;
        cursor: pointer;
        transition-duration: .3s;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.13);
        overflow: hidden;
    }

    /* Hide default HTML checkbox */
    #checkboxInput {
        display: none;

    }

    .bell {
        width: 18px;

    }

    .bell path {
        fill: white;

    }

    .speaker {
        margin-right: 10px;
        width: 80%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        transition-duration: .3s;

    }

    .speaker svg {
        width: 18px;

    }

    .mute-speaker {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        z-index: 3;
        transition-duration: .3s;
    }

    .mute-speaker svg {
        width: 18px;
    }

    #checkboxInput:checked+.toggleSwitch .speaker {
        opacity: 0;
        transition-duration: .3s;
    }

    #checkboxInput:checked+.toggleSwitch .mute-speaker {
        opacity: 1;
        transition-duration: .3s;

    }

    #checkboxInput:active+.toggleSwitch {
        transform: scale(0.7);
    }

    #checkboxInput:hover+.toggleSwitch {
        background-color: rgb(61, 61, 61);
    }

    .logout-link:hover {
        color: #ff4500;
        transition: color 0.3s ease;
    }

    .Btn {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-left: 10px;
        width: 45px;
        height: 45px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition-duration: .3s;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
        background-color: rgb(255, 65, 65);
    }

    /* plus sign */
    .sign {
        width: 100%;
        transition-duration: .3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sign svg {
        width: 17px;
    }

    .sign svg path {
        fill: white;
    }

    /* text */
    .text {
        position: absolute;
        right: 0%;
        width: 0%;
        opacity: 0;
        color: white;
        font-size: 1.2em;
        font-weight: 600;
        transition-duration: .3s;
    }

    /* hover effect on button width */
    .Btn:hover {
        width: 125px;
        border-radius: 40px;
        transition-duration: .3s;
    }

    .Btn:hover .sign {
        width: 30%;
        transition-duration: .3s;
        padding-left: 20px;
    }

    /* hover effect button's text */
    .Btn:hover .text {
        opacity: 1;
        width: 70%;
        transition-duration: .3s;
        padding-right: 10px;
    }

    /* button click effect*/
    .Btn:active {
        transform: translate(2px, 2px);
    }
</style>

<div class="header">

    <div style="display: flex; justify-content: flex-end;">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <audio id="toggleSound" src="audio/sound.mp3"></audio>
        <button class="Btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="sign"><svg viewBox="0 0 512 512">
                    <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                </svg></div>
            <div class="text" style="margin-left: 500px;">Logout</div>
        </button>
    </div>
    <input type="checkbox" id="checkboxInput">
    <label for="checkboxInput" class="toggleSwitch">
        <div class="speaker"><svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 75 75">
                <path d="M39.389,13.769 L22.235,28.606 L6,28.606 L6,47.699 L21.989,47.699 L39.389,62.75 L39.389,13.769z" style="stroke:#fff;stroke-width:5;stroke-linejoin:round;fill:#fff;"></path>
                <path d="M48,27.6a19.5,19.5 0 0 1 0,21.4M55.1,20.5a30,30 0 0 1 0,35.6M61.6,14a38.8,38.8 0 0 1 0,48.6" style="fill:none;stroke:#fff;stroke-width:5;stroke-linecap:round"></path>
            </svg></div>
        <div class="mute-speaker"><svg version="1.0" viewBox="0 0 75 75" stroke="#fff" stroke-width="5">
                <path d="m39,14-17,15H6V48H22l17,15z" fill="#fff" stroke-linejoin="round"></path>
                <path d="m49,26 20,24m0-24-20,24" fill="#fff" stroke-linecap="round"></path>
            </svg></div>
    </label>
    <audio id="toggleSound" src="audio/sound.mp3"></audio>
</div>

<script>
    var checkboxInput = document.getElementById("checkboxInput");
    var toggleSound = document.getElementById("toggleSound");

    checkboxInput.addEventListener("click", function() {
        if (checkboxInput.checked) {
            // If checkbox is checked, play the sound
            toggleSound.pause();
        } else {
            // If checkbox is unchecked, pause the sound
            toggleSound.play();

        }
    });
</script>
</div>


<body style="position: relative; min-height: 100vh;">
    <div style="position: absolute; top: 90%; left: 50%; transform: translate(-50%, -50%);">
        <div class="container">
            <ul id="menu">
                <a class="menu-button icon-plus" id="open-menu" href="#menu" title="Show navigation">
                    <i class="fas fa-bars"></i> <!-- เพิ่มไอคอนเมนู -->
                </a>
                <a class="menu-button icon-minus" href="#0" title="Hide navigation">
                    <i class="fas fa-times"></i> <!-- เพิ่มไอคอนเมนู -->
                </a>

                <li class="menu-item">
                    <a href="#menu">
                        <i class="fas fa-chart-bar"></i>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#menu">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#menu">
                        <i class="fab fa-book-open"></i>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#menu">
                        <i class="fas fa-question-circle"></i>

                    </a>
                </li>

            </ul>
        </div>

    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>




</html>