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
    <main class="registerContainer mainContainer">
        <section class="registerHeader">
            <div class="backBtnContainer">
                <a href="{{route("sign_in")}}"><i class="fas fa-level-up-alt"></i></a>
            </div>
            <img src="images/downloadStoreLogo.svg" alt="Download Store" class="logo">
            <img src="images/signInBg.svg" alt="" class="bg">
        </section>
        <section class="signUpWrapper" id="signUpWrapper">
            <section class="registerForm container">
                <h2>REGISTER TO OUR SERVICE</h2>
                <p>You need to register to our service before you sign up. If you’re already registered just fill up the sign up form below. </p>
                <form method="POST" action="{{ route("register_mobile") }}">
                    @csrf
                    <div class="form-group mobileInput">
                        <span class="countryCallingCode">+63</span>
                        <label for="registerNumber" class="formLabel">Mobile Number:</label>
                        <input type="text" class="form-control formInputGreen" id="registerNumber" name="mobile_number" value="{{ old('mobile_number') }}">
                        @error('mobile_number')
                        <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group registerBtn">
                        <button type="submit" class="btnGreenGradient globalBtn" id="registrationBtn">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>REGISTER</span>
                        </button>
                    </div>
                </form>
            </section>
            <section class="signUpForm container">
                <h2>CREATE ACCOUNT</h2>
                <form method="POST" action={{route("sign_up_user")}}>
                    @csrf
                    <div class="form-group">
                        <label for="signUpFirstName" class="formLabel">First Name:</label>
                        <input type="text" class="form-control formInputGreen" id="signUpFirstName" name="first_name" value="{{ old("first_name") }}">
                        @error('first_name')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signUpLastName" class="formLabel">Last Name:</label>
                        <input type="text" class="form-control formInputGreen" id="signUpLastName" name="last_name" value="{{ old("last_name") }}">
                        @error('last_name')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mobileInput">
                        <span class="countryCallingCode">+63</span>
                        <label for="signUpNumber" class="formLabel">Mobile Number:</label>
                        <input type="text" class="form-control formInputGreen" id="signUpNumber" name="mobile_number" value="{{ old("mobile_number") }}">
                        @error('mobile_number')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                        <small id="numberHint" class="formHint">Make sure that your mobile number is subscribe to our service.</small>
                    </div>
                    <div class="form-group">
                        <label for="signUpEmail" class="formLabel">Email Address:</label>
                        <input type="email" class="form-control formInputGreen" id="signUpEmail" name="email" value="{{ old("email") }}">
                        @error('email')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signUpPassword" class="formLabel">Password:</label>
                        <input type="password" class="form-control formInputGreen" id="signUpPassword" name="password">
                        @error('password')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signUpPasswordAgain" class="formLabel">Confirm Password:</label>
                        <input type="password" class="form-control formInputGreen" id="signUpPasswordAgain" name="confirm_password">
                        @error('confirm_password')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group signUpBtn">
                        <button type="submit" class="btnGreenGradient globalBtn" id="signUpBtn">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>SIGN UP</span>
                        </button>
                    </div>
                </form>
            </section>
        </section>
    </main>
    <script>
        const message = "{{Session::get('message')}}"
        const exists =  "{{Session::has('message')}}"

        if(exists) alert(message)
    </script>
</body>
</html>