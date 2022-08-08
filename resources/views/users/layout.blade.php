<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="Refresh" content="600"/>
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet"/>
        <script>
            function showHiddenPassword() {
                var password = document.getElementById("password");
                if (password.type == "password") {
                    password.type = "text";
                } else {
                    password.type = "password";
                }
            }

            function showHiddenPasswords() {
                var cpassword = document.getElementById("cpassword");
                var ccpassword = document.getElementById("ccpassword");

                if (cpassword.type == "password" && ccpassword.type == "password") {
                    cpassword.type = "text";
                    ccpassword.type = "text";
                } else {
                    cpassword.type = "password";
                    ccpassword.type = "password";
                }
            }
        </script>
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>@yield("title","Gestão de veículos")</title>
</head>
<body class="bg-light"  style="margin-top: 100px;">
    <div class="container">
        @yield("content")
    </div>
    <script src="{{url("js/bootstrap.min.js")}}"></script>
</body>
</html>


