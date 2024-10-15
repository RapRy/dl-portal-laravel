<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DL Portal - Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" type="text/css">
</head>
<body>
    <main class="adminProfileContainer mainContainer">
        <section class="adminProfileHeader">
            <div class="backBtnContainer">
                <a href="{{ route('home') }}" id="adminProfileBackBtn"><i class="fas fa-level-up-alt"></i></a>
            </div>
            <img src="/images/downloadStoreLogo.svg" alt="Download Store" class="logo">
                <img src="/images/homeBg.svg" alt="" class="bg">
        </section>
        <section class="adminProfileWrapper">
            <section class="adminMenuWrapper container">
                <section class="adminAccountMenu container">
                    <div class="adminAcctBtn btnProfileManage">
                        <i class="fas fa-users"></i>
                        <span>Manage Users</span>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="adminAcctBtn btnProfileManage">
                        <i class="fas fa-th"></i>
                        <span>Manage Contents</span>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="adminAcctBtn btnProfileManage">
                        <i class="fas fa-comments"></i>
                        <span>Reviews</span>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </section>
                <section class="adminAccountLogOut container">
                    <button type="submit" class="btnGreenGradient globalBtn" id="adminLogoutBtn">
                        <input type="hidden" value="{{ auth()->user()->id }}" />
                        <i class="fas fa-sign-out-alt"></i>
                        <span>SIGN OUT</span>
                    </button>
                </section>
            </section>
        </section>
    </main>
</body>
</html>