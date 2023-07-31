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
                    <h5 class="title">Upload Template</h5>
                    {{-- <h6 class="sub-title">Welcome Back!</h6> --}}
                    <div class="remember-user">
                        
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

$(document).ready(() => {

var logInForm = $('#Template-form');

$(logInForm).on('submit', function(event){
    event.preventDefault();

    var url = $(this).attr('action');

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
            console.log(response.success);
            // alert(response.success);
        },
        error: function(response) {
        }
    });
});

});
</script>
</body>
</html>