<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Videvo_Clone</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./css/main.css" rel="stylesheet">
    <link href="./css/login.css" rel="stylesheet">
</head>
<body class="Videvo_theme">
    
    <div class="login_contrainer">
        <div class="art-wrapper">
            <img src="./images/freepik-3-2000.webp">
            <p>Image By <a>Videvo</a></p>
        </div>
        <div class="content-wrapper">
            <div class="main-content">
                <div class="main-logo main-logo--videvo">
                    <a>
                        <img src="./images/videvo.934e2045.svg">
                    </a>
                </div> 
                <div id="log-in" class="base">
                    <h5 class="title">Log-In</h5>
                    {{-- <h6 class="sub-title">Welcome Back!</h6> --}}
                    <div class="remember-user">
                        <form data-action="{{ route('login.post') }}" method="POST" enctype="multipart/form-data" id="login-form">
                            @csrf
                            <div class="form-item form-item--email">
                                <label>Username </label>
                                    <input type="email" name="email" required>
                            </div>
                            <div class="form-item form-item--password">
                                <label>Password </label>
                                    <input type="password" name="password" maxlength="30" minlength="6" required>
                            </div>
                            <div class="keep-signed">
                                <label class="checkbox checkbox--xs">
                                    <input type="checkbox" name="keep-signed">
                                    <span class="checkbox__link">Stay logged in</span>
                                </label>
                            </div>
                            <div class="form-item submit">
                                <div>
                                    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                        <div class="grecaptcha-logo">
                                            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfEmSMUAAAAAEDmOgt1G7o7c53duZH2xL_TXckC&amp;co=aHR0cHM6Ly9pZC5mcmVlcGlrY29tcGFueS5jb206NDQz&amp;hl=en&amp;v=iZWPJyR27lB0cR4hL_xOX0GC&amp;size=invisible&amp;cb=tc6jvmus3dbs" width="256" height="60" role="presentation" name="a-uwatuotf0n2q" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                        </div>
                                        <div class="grecaptcha-error">
                                        </div>
                                        <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                                        </textarea>
                                    </div>
                                    <iframe style="display: none;"></iframe>
                                </div>
                                <button id="submit"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Log in</button>
                            </div>
                        </form>
                    </div>
                    <div class="have-account">
                        <p>Dont you have an account? <a class="text-blue font-bold" onclick="loginSignup_toggle()">Sign Up</a></p>
                    </div>
                </div>
                <div id="sign-up" class="base active">
                    <h5 class="title">Sign-Up</h5>
                    {{-- <h6 class="sub-title">Welcome Back!</h6> --}}
                    <div class="remember-user">
                        <form data-action="{{ route('store.post') }}" method="POST" enctype="multipart/form-data" id="signup-form">
                            @csrf
                            <div class="form-item form-item--email">
                                <label>Username </label>
                                    <input type="email" name="email" required>
                            </div>
                            <div class="form-item form-item--password">
                                <label>Password </label>
                                    <input type="password" name="password" maxlength="30" minlength="6" required>
                            </div>
                            <div class="keep-signed">
                                <label class="checkbox checkbox--xs">
                                    <input type="checkbox" name="keep-signed">
                                    <span class="checkbox__link">Stay logged in</span>
                                </label>
                            </div>
                            <div class="form-item submit">
                                <div>
                                    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                        <div class="grecaptcha-logo">
                                            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfEmSMUAAAAAEDmOgt1G7o7c53duZH2xL_TXckC&amp;co=aHR0cHM6Ly9pZC5mcmVlcGlrY29tcGFueS5jb206NDQz&amp;hl=en&amp;v=iZWPJyR27lB0cR4hL_xOX0GC&amp;size=invisible&amp;cb=tc6jvmus3dbs" width="256" height="60" role="presentation" name="a-uwatuotf0n2q" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                        </div>
                                        <div class="grecaptcha-error">
                                        </div>
                                        <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                                        </textarea>
                                    </div>
                                    <iframe style="display: none;"></iframe>
                                </div>
                                <button id="submit"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="have-account">
                        <p>Already have na account? <a class="text-blue font-bold" onclick="loginSignup_toggle()">Log-In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPTS --}}

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

<script>

    var login = document.querySelector('#log-in');
    var signup = document.querySelector('#sign-up');
function loginSignup_toggle() {

   login.classList.toggle('active');
   signup.classList.toggle('active');

};

$(document).ready(() => {

var signUpForm = $('#signup-form');
var logInForm = $('#login-form');

$(signUpForm).on('submit', function(event){
    event.preventDefault();

    var url = $(this).attr('data-action');

    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            $(signUpForm).trigger("reset");
            alert(response.success)
        },
        error: function(response) {
            console.log(response);
        }
    });
});
$(logInForm).on('submit', function(event){
    event.preventDefault();

    var url = $(this).attr('data-action');

    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            $(logInForm).trigger("reset");
            alert(response.success)
        },
        error: function(response) {
        }
    });
});

});
</script>
</body>
</html>