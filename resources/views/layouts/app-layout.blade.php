<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Counter Strike, Valve Corporation, Eloking, Riot Games">
    <meta name="description" content="Counter-Strike: Global Offensive & Dota 2 is a registered trademarks of Valve
                                Corporation Company. We are in no way
                                affiliated with, associated with or endorsed by Valve Corporation. Eloking isn't
                                endorsed by Riot Games and doesn't
                                reflect the views or opinions of Riot Games or anyone officially involved in
                                producing or managing League of
                                Legends.">
    <title>Eloking</title>
    @vite(['resources/css/bootstrap.css','resources/css/master.css','resources/css/responsive.css','resources/js/app.js'])
</head>

<body>

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    @include('includes.login-success-modal')

    
    @if (session()->get('success'))
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            let btn = document.createElement("button");
            btn.innerHTML = "open";
            btn.type = "button";
            btn.id = "login-success-modal";
            btn.style.display = "none";
            btn.setAttribute('data-bs-toggle',"modal");
            btn.setAttribute('data-bs-target',"#LoginSuccess");
            let login_form = document.getElementById('login-form');
            login_form.appendChild(btn);
            let login_success_modal = document.getElementById('login-success-modal');
            login_success_modal.click();
        })
    </script>
    @endif
    
</body>

</html>