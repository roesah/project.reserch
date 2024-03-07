<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Example</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'mitr', sans-serif;
            background-image: url("images/be4.png");
            position: relative;
        }

        .image-container {
            width: 650px;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 10px;
            position: absolute;
            bottom: 10px;
            left: 100px;
            right: 100px;
            margin: 100px auto;
            font-family: 'mitr';
        }


        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;

        }

        @media screen and (max-width: 600px) {
            .image-container {
                width: 100%;
            }

            .button-container {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 2px;
                position: absolute;
                bottom: 10px;
                left: 50px;
                right: 50px;
                margin: 40px auto;
            }
        }

        @media screen and (min-width: 1000px) {
            .button-container {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 10px;
                position: absolute;
                bottom: 10px;
                left: 90px;
                right: 90px;
                margin: 100px auto;
            }

            .button {
                padding: 20px 20px;
                background-color: #4CAF50;
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius: 10px;
            }
        }

        .button1 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button1-content {
            display: none;
            background-size: cover;
            font-size: 20px;
            padding: 50px;
            /* ลดขนาดของ padding เป็น 50px */
            margin: 15px;
            /* ลดขนาดของ margin เป็น 15px */
            width: 70%;
            /* เพิ่มขนาดของ width เป็น 70% */
            border-radius: 25px;
            /* ลดขนาดของ border-radius เป็น 25px */
            text-align: center;
        }


        .button2 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button2-content {
            display: none;
            background-size: cover;
            font-size: 20px;
            padding: 50px;
            /* ลดขนาดของ padding เป็น 50px */
            margin: 10px;
            margin-top: -80px;
            /* ลดขนาดของ margin เป็น 15px */
            width: 70%;
            /* เพิ่มขนาดของ width เป็น 70% */
            border-radius: 25px;
            /* ลดขนาดของ border-radius เป็น 25px */
            text-align: center;
        }

        .button3 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button3-content {
            display: none;
            background: wheat;
            background-size: cover;
            font-size: 20px;
            padding: 20px;
            width: 60%;
            border-radius: 50px;
            border: 10px solid #F7B345;
            text-align: center;
        }

        footer {
            color: white;
            padding: 20px;
            margin-top: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="image-container">
        <img src="images/le5.png" alt="Example Image">

        <div class="button-container">
            @foreach ($lessons as $lesson)
            @if ($lesson->Chapters === '3')
            <a class="button button1">ข้อที่ 1</a>
            <a class="button button2">ข้อที่ 2</a>
            <a class="button button3" href="exercise.level3">ข้อที่ 3</a>
            @endif
            @endforeach
        </div>


    </div>
    <!--ข้อ1!-->
    <div id="button1-content">

        <div class="card">
            <div class="card-body">
                <h1>สื่อวิดีโอ</h1>
                <?php
                parse_str(parse_url($lesson->youtube_link, PHP_URL_QUERY), $my_array_of_vars);
                $link_v = $my_array_of_vars['v'];
                ?>
                <iframe width="450" height="300" src="https://www.youtube.com/embed/{{$link_v}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!--ข้อ2!-->
    <script>
        // เปิดไฟล์ PDF ใน iframe เมื่อหน้าเว็บโหลดเสร็จ
        window.onload = function() {
            var pdfLink = '<?php echo $lesson->pdf_file; ?>'; // ดึง URL ของไฟล์ PDF จากตัวแปร PHP
            var pdfFrame = document.getElementById("pdfFrame");
            pdfFrame.src = pdfLink;
        };
    </script>
    <div id="button2-content">
        <div class="card">
            <div class="card-body">
                <iframe id="pdfFrame" src="" width="100%" height="400px"></iframe> <!-- iframe เพื่อแสดงไฟล์ PDF -->
            </div>
        </div>
    </div>
    </div>
    </div>
    <footer>
        <div class="image-containerme">

            <a href="lesson.level3">
                <img src="images/re2.png" alt="">
            </a>
            <a href="dashboard">
                <img src="images/bh2.png" alt="">
            </a>
        </div>
        <style>
            .image-containerme img {
                transition: transform 0.3s ease-in-out;
                justify-content: space-around;
            }

            .image-containerme img:hover {
                opacity: 0.8;
                cursor: pointer;
                transform: scale(1.05);
            }
        </style>
    </footer>
    <!--สคริปต์ของ ข้อ1!-->
    <script>
        // คลิกที่ปุ่มต่างๆ
        document.querySelectorAll('.button').forEach(button => {
            button.addEventListener('click', function() {
                // หาชื่อคลาสของปุ่มที่ถูกคลิก
                var buttonClass = this.classList[1];
                // หาเลขข้อ
                var exerciseNumber = buttonClass.substr(buttonClass.length - 1);
                // เลือกเนื้อหาที่มี id เป็น button1-content
                var buttonContent = document.getElementById('button' + exerciseNumber + '-content');
                // ซ่อน/แสดงเนื้อหาของปุ่มที่ถูกคลิก
                if (buttonContent.style.display === "none" || buttonContent.style.display === "") {
                    buttonContent.style.display = "block";
                } else {
                    buttonContent.style.display = "none";
                }
                // ซ่อนเนื้อหาของหน้าแรก
                var imageContainer = document.querySelector('.image-container');
                imageContainer.style.display = "none";
            });
        });
    </script>

    <script>
        // เริ่มเล่นไฟล์ PDF ใน iframe
        function openPdf(pdfLink) {
            var pdfFrame = document.getElementById("pdfFrame");
            pdfFrame.src = pdfLink;
        }
    </script>
</body>

</html>