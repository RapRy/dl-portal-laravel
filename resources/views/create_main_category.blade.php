<!DOCTYPE html>
<html lang="en">
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
    <main class="addMainCatContainer mainContainer">
       <section class="addMainCatHeader">
            <div class="backBtnContainer">
                <a href="{{route('home')}}" id="addMainCatBackBtn">
                    <i class="fas fa-level-up-alt"></i>
                </a>
            </div>
            <img src="images/downloadStoreLogo.svg" alt="Download Store" class="logo">
            <img src="images/homeBg.svg" alt="" class="bg">
       </section>
       <section class="addMainCatWrapper">
            <h2>ADD MAIN CATEGORY</h2>
            <form id="categoryForm">
                <div class="form-group">
                    <label for="categoryName" class="formLabel">Category Name</label>
                    <input type="text" class="form-control formInputBlue" id="categoryName" name="mainCatName" value="{{ old("category_name") }}" />
                    @error('category_name')
                        <small class="formHint errorHint">{{ $message }}</small>
                    @enderror
                </div>
                <div class="custom-file">
                    <span class="formLabel customFormLabel">Category Icon</span>
                    <input type="file" class="custom-file-input" id="cutomFileIcon" name="category_icon" />
                    <label class="custom-file-label formInputBlue" for="cutomFileIcon" id="customFileLabel">Only png are allowed.(Dimension 25x25px)</label>
                </div>
                <div class="form-group">
                    <label for="selectFileExt" class="formLabel">Content File Extension Reference</label>
                    <div class="customSelectWrapper">
                        <select class="form-control formInputBlue customSelectMenu" id="selectFileExt" name="category_extension" value="{{ old("category_extension") }}">
                            <option value="">Select file extension</option>
                            <option value="APK">APK</option>
                            <option value="MP4">MP4</option>
                            <option value="MP3">MP3</option>
                        </select>
                        <div class="form-control formInputBlue customSelectContainer">
                            <span class="currentSelected">Select file extension</span>
                            <i class="fas fa-caret-down"></i>
                        </div>
                        @error('category_extension')
                            <small class="formHint errorHint">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btnContentManageBlue globalBtn" id="addCategoryBtn">Add</button>
                </div>
            </form>
       </section>
       <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
       <script type="text/javascript" src="{{URL::asset('js/addMainCat.js')}}" defer></script>
    </main>
</body>
</html>