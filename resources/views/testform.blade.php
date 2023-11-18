<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>

<body>

    
    <form action="{{ route('TestFormController.store') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>Number</td>
                <td><input type="text" name="number" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" />
                </td>
            </tr>
        </table>
    </form>















</body>