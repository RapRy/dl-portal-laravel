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
        <main class="homeContainer mainContainer">
            <section class="homeHeader">
                <img src="images/downloadStoreLogo.svg" alt="Download Store" class="logo">
                <img src="images/homeBg.svg" alt="" class="bg">
                <div class="userIconContainer">
                    <div class="userIcon">
                        <span class="userFirstName">{{ auth()->user()->first_name }}</span>
                        <a href="/" class="homeUserThumb">
                            <img src="{{ auth()->user()->profile_pic != null ? auth()->user()->profile_pic : "images/userThumb.png" }}" alt="{{ auth()->user()->first_name }}" />
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
