<!DOCTYPE html>
<!-- if user share link from app to wahts in click it call route ('shared') and return this page with
tow icons 1 for android and another for ios -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name','') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
            }

            .message {
                font-size: 18px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="code">{{ __('project.please_download_app') }}</div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div><a href="{{ config('app.android_app_path') }}" style="font-size: 50px;"><i class="fab fa-android"></i></a></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div><a href="{{ config('app.ios_app_path') }}" style="font-size: 50px;"><i class="fab fa-apple"></i></a></div>
        </div>
    </body>
</html>
