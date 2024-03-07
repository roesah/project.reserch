<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Document</title>
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: mitr;
            height: 100vh;
            background-image: url('images/b2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            position: relative;
        }
    </style>
</head>
<body>
    <form action="{{ route('pretest.submit') }}" method="post" id="testForm">
        @csrf
        @foreach($questions as $index => $question)
            <div class="question" id="question{{ $index }}" style="{{ $index == 0 ? '' : 'display: none;' }}">
                <h3>คำถาม : {{ $question->question }}</h3>
                <label>
                    <input type="radio" name="question_{{ $question->id }}" value="a"> {{ $question->option_a }}
                </label><br>
                <label>
                    <input type="radio" name="question_{{ $question->id }}" value="b"> {{ $question->option_b }}
                </label><br>
                <label>
                    <input type="radio" name="question_{{ $question->id }}" value="c"> {{ $question->option_c }}
                </label><br>
                <label>
                    <input type="radio" name="question_{{ $question->id }}" value="d"> {{ $question->option_d }}
                </label><br><br>
            </div>
        @endforeach
        <button type="button" id="nextBtn">Next</button>
        <button type="submit" id="submitBtn" style="display: none;">ส่งแบบทดสอบ</button>
    </form>

    <script>
    const questions = document.querySelectorAll('.question');
    let currentIndex = 0;

    document.getElementById('nextBtn').addEventListener('click', function() {
        if (currentIndex < questions.length - 1) {
            questions[currentIndex].style.display = 'none';
            questions[currentIndex + 1].style.display = 'block';
            currentIndex++;
            
            if (currentIndex === questions.length - 1) {
                document.getElementById('submitBtn').style.display = 'inline-block';
                document.getElementById('nextBtn').style.display = 'none';
            }
        }
    });

    // เมื่อกดปุ่ม submit ให้ส่งคำตอบและ redirect ไปยังหน้า dashboard.index
    document.getElementById('submitBtn').addEventListener('click', function() {
        document.getElementById('testForm').submit();
        window.location.href = "{{ route('dashboard') }}";
    });
</script>

</body>
</html>
</body>
</html>
