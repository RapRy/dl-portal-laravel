<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DL Portal - Laravel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" type="text/css">
</head>
<body>
    <main class="signInContainer mainContainer">
        <section class="signInHeader">
            <img src="images/downloadStoreLogo.svg" alt="Download Store" class="logo">
            <img src="images/signInBg.svg" alt="" class="bg">
        </section>
        <section class="signInWrapper" id="signInWrapper">
            <section class="signInForm container">
                <h2>SUBSCRIBER LOGIN</h2>
                <form method="POST" action="{{route('sign_in_user')}}">
                    @csrf
                    <div class="form-group mobileInput">
                        <span class="countryCallingCode">+63</span>
                        <label for="signInNumber" class="formLabel">Mobile Number:</label>
                        <input type="text" class="form-control formInputGreen" id="signInNumber" aria-describedby="numberHint" name="mobile_number" value="{{ old("mobile_number") }}">
                        <small id="numberHint" class="formHint">Make sure that your mobile number is subscribe to our service.</small>
                        @error('mobile_number')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                        @if(session("error_message"))
                        <small class="formHint errorHint">{{ session("error_message") }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="signInPassword" class="formLabel">Password:</label>
                        <input type="password" class="form-control formInputGreen" id="signInPassword" name="password" value="{{ old("password") }}">
                        @error('password')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group signInBtn">
                        <button type="submit" class="btnGreenGradient globalBtn" id="signInBtn">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>SIGN IN</span>
                        </button>
                    </div>
                    <p>New here or already registered but does'nt have an account yet? <a class="blueLink" href="{{route("sign_up")}}">SIGN UP</a> now!</p>
                    <p>Have you forgotten your <a class="blueLink" href="" id="forgotPassword">PASSWORD</a>?</p>
                </form>
            </section>
        </section>
        <section class="forgotPasswordWrapper container" id="forgotPasswordWrapper">
            <section class="forgotPasswordForm">
                <h2>FORGOT PASSWORD</h2>
                <form>
                    <div class="form-group mobileInput">
                    <span class="countryCallingCode">673</span>
                        <label for="forgotNumber" class="formLabel">Mobile Number:</label>
                        <input type="text" class="form-control formInputGreen" id="forgotNumber">
                    </div>
                    <div class="form-group forgotBtn">
                        <button type="submit" class="btnGreenGradient globalBtn" id="forgotBtn">
                            <i class="fas fa-sms"></i>
                            <span>SEND SMS</span>
                        </button>
                    </div>
                </form>
            </section>
        </section>
    </main>
</body>
</html>