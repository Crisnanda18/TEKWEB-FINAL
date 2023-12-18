<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolt</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav>
        <a href="#"><img src="{{ asset('assets/icon.png') }}" alt="logo"></a>
    </nav>
    <div class="form-wrapper">
        <h2>Sign Up</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-control">
                <input type="text" name="name" required>
                <label>Name</label>
            </div>
            <div class="form-control">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="form-control">
                <input type="password" name="password_confirmation" required>
                <label>Confirm Password</label>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="{{ route('login') }}">Sign in now</a></p>
        <small>
            This page is protected by Google reCAPTCHA to ensure you're not a bot.
            <a href="#">Learn more.</a>
        </small>
    </div>
    <script src="{{ asset('js/myscript.js') }}"></script>
</body>

</html>