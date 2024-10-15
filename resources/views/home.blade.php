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
                        @php
                            $first_name = strtolower(str_replace(' ', '-', auth()->user()->first_name));
                            $last_name = strtolower(str_replace(' ', '-', auth()->user()->last_name));
                            $name = "{$first_name}-{$last_name}";
                        @endphp
                        <a href="{{ route(auth()->user()->user_type == "ADMIN" ? "admin_profile" : "", ['name' => $name ]) }}" class="homeUserThumb">
                            <img src="{{ auth()->user()->profile_pic != null ? auth()->user()->profile_pic : "images/userThumb.png" }}" alt="{{ auth()->user()->first_name }}" />
                        </a>
                    </div>
                </div>
            </section>
            <section class="homeWrapper">
                @if (!$categories->isEmpty())    
                    <section class="menuCategoryWrapper container">
                        @foreach ($categories as $cat)
                            <div class="catWrapper">
                                <div class="menuCategory btnGreenGradient row no-gutters align-items-center">
                                    <input type="hidden" name="catId" value="{{ $cat->id }}" />
                                    <input type="hidden" name="catExt" value="{{ $cat->category_extension }}" />
                                    <div class="catIconWrapper col-1">
                                        <img src="/storage/images/main-category/{{ $cat->category_icon }}" alt="{{ $cat->category_name }}" />
                                    </div>
                                    <div class="catNameWrapper col-10">
                                        <span class="col-2">{{ $cat->category_name }}</span>
                                    </div>
                                    <div class="catArrowWrapper col-1">
                                        <i class="fas fa-chevron-right col-1"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                @endif
            </section>
        </main>
    </body>
</html>
