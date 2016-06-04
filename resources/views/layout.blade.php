<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <style>
            html, body {
                /* height: 100%; */
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                /* font-weight: 100; */
                font-weight: bold;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;                
                font-weight:bold;
            }

            .content, input {
                font-size: 24px;
            }
            .title {
                font-size: 96px;
            }
            
            .btn {
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
