<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: darkgreen; /* Set background color to dark green */
            color: white;
        }

        /* Add some padding and styling to the content */
        .content {
            text-align: center;
            background-image: url('{{ asset('images/3.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 20px;
            border-radius: 10px;
        }

        h1, div, button {
            color: black;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Student Page</h1>
        <div>Welcome to the student page</div>
        <br>
        <button onclick="location.href='{{ route('student.create') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mb-4">Add Student Details</button>
        <br>
        <br>
        <button onclick="location.href='{{ route('dashboard') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Go to Dashboard</button>
    </div>

    <script>
        console.log('Image URL:', '{{ asset('images/3.png') }}');
    </script>
</body>
</html>
