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
            grid-template-columns: repeat(2, 1fr);
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
                grid-template-columns: repeat(2, 1fr);
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
                grid-template-columns: repeat(2, 1fr);
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
            background: wheat;
            background-size: cover;
            font-size: 20px;
            padding: 20px;
            width: 60%;
            border-radius: 50px;
            border: 10px solid #F7B345;
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
            background: wheat;
            background-size: cover;
            font-size: 20px;
            padding: 20px;
            width: 60%;
            border-radius: 50px;
            border: 10px solid #F7B345;
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

        .button4 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button4-content {
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

        .button5 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button5-content {
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

        .button6 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button6-content {
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

        .button7 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button7-content {
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

        .button8 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button8-content {
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


        .button9 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button9-content {
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

        .button0 {
            background-image: url('images/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        #button0-content {
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
            margin-top: 20px;
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
            <button class="button button1">ข้อที่ 1</button>
            <button class="button button2">ข้อที่ 2</button>
            <button class="button button3">ข้อที่ 3</button>
            <button class="button button4">ข้อที่ 4</button>
            <button class="button button5">ข้อที่ 5</button>
            <button class="button button6">ข้อที่ 6</button>
            <button class="button button7">ข้อที่ 7</button>
            <button class="button button8">ข้อที่ 8</button>
            <button class="button button9">ข้อที่ 9</button>
            <button class="button button0">ข้อที่ 10</button>
        </div>


    </div>
    <!--ข้อ1!-->
    <div id="button1-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 1)
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
    @empty
    @endforelse
    </div>

    <!--ข้อ2!-->
    <div id="button2-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 2)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse
    <!--ข้อ3!-->
    <div id="button3-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 3)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse
    <!--ข้อ4!-->
    <div id="button4-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 4)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse
    <!--ข้อ5!-->
    <div id="button5-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 5)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse
    <!--ข้อ6!-->
    <div id="button6-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 6)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse
    <!--ข้อ7!-->
    <div id="button7-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 7)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse
    <!--ข้อ8!-->
    <div id="button8-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 8)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse
    <!--ข้อ9!-->
    <div id="button9-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 9)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse
    <!--ข้อ10!-->
    <div id="button0-content">
        @forelse ($ExerciseSets as $ExerciseSet)
        @if ($ExerciseSet->exerciseSetName == 10)

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">ข้อที่ {{ $ExerciseSet->exerciseSetName }}</h3>
                <p class="card-text">
                    คำถาม: {{ $ExerciseSet->exerciseQuestion }} <!-- แสดงคำถาม -->
                    <br>
                    คะแนน: {{ $ExerciseSet->exerciseScore }} <!-- แสดงคะแนน -->
                </p>
                <form action="exercise.level1" method="POST"> <!-- เมื่อกดปุ่ม Submit จะส่งไปยังเส้นทาง /answer ด้วยเมท็อด POST -->
                    @csrf <!-- ใส่ CSRF token เพื่อป้องกันการโจมตี CSRF -->
                    <input type="hidden" name="exercise_set_id" value="{{ $ExerciseSet->id }}"> <!-- ฟิลด์ที่ส่งไปบอกว่าคำตอบนี้เกี่ยวข้องกับข้อที่ใด -->
                    <div class="form-control">
                        <input class="input input-alt" placeholder="กรอกคำตอบ" required="" type="text" name="user_answer" value="{{ old('user_answer') }}"> <!-- ฟิลด์สำหรับใส่คำตอบ แสดงค่าคำตอบเดิมถ้ามี -->
                        <span class="input-border input-border-alt"></span>
                    </div>
                    <hr>

                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">เพิ่มคำตอบ</button> <!-- ปุ่มสำหรับส่งแบบฟอร์ม -->
                    </div>
                </form>
                <style>
                    .input {
                        color: #F7B345;
                        font-family: 'mitr';
                        font-size: 0.9rem;
                        background-color: rgba(255, 255, 255, 0.1);
                        width: 100%;
                        box-sizing: border-box;
                        padding-inline: 0.5em;
                        padding-block: 0.7em;
                        border: none;
                        border-bottom: var(--border-height) solid var(--border-before-color);
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }


                    .input-border {
                        position: absolute;
                        background: var(--border-after-color);
                        width: 0%;
                        height: 2px;
                        bottom: 0;
                        left: 0;
                        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
                    }

                    .input:focus {
                        outline: none;
                    }

                    .input:focus+.input-border {
                        width: 100%;
                    }

                    .form-control {
                        position: relative;
                        --width-of-input: 300px;
                    }

                    .input-alt {
                        font-size: 1.2rem;
                        padding-inline: 1em;
                        padding-block: 0.8em;
                        box-shadow: 0 4px px rgba(0, 0, 0, 0.1);
                    }

                    .input-border-alt {
                        height: 3px;
                        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
                        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
                    }

                    .input-alt:focus+.input-border-alt {
                        width: 100%;
                    }

                    .btn-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;

                    }

                    .btn-primary {
                        font-family: inherit;
                        font-size: 18px;
                        background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
                        color: white;
                        padding: 0.8em 1.2em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: none;
                        border-radius: 25px;
                        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s;
                    }

                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
                    }

                    .btn-primary:active {
                        transform: scale(0.95);
                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                    }

                    .btn-primary span {
                        display: block;
                        margin-left: 0.4em;
                        transition: all 0.3s;
                    }
                </style>
            </div>
        </div>

    </div>
    @endif
    @empty
    @endforelse

    <footer>
        <div class="image-containerme">
            
            <a href="exercise.level3">
                <img src="images/re3.png" alt="">
            </a>
            <a href="lesson.level3">
                <img src="images/bh3.png" alt="">
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
</body>

</html>