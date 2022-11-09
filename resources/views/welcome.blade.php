<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Demo Project - Inspector</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <style>
            html, body, div {
                background-color: #f0f7ff;
            }
        </style>
    </head>
    <body>

    <div class="container">

        <div class="my-4">
            <h4>Laravel Demo Project</h4>
            <p>
                Test how Inspector monitor the internal application components.
                <br>
                Open your
                <a href="https://app.inspector.dev" target="_blank">
                    Inspector account
                    <i class="bi bi-box-arrow-up-right small"></i>
                </a>
                or
                <a href="https://app.inspector.dev/register">
                    Sign-Up
                    <i class="bi bi-box-arrow-up-right small"></i>
                </a>
                for a new one.
            </p>
        </div>

        <div class="row">
            <div class="col">
            </div>

            <div class="col">
            </div>

            <div class="col">
            </div>
        </div>

        <div class="my-4">
            <div class="row align-items-center">
                <div class="col">
                    <img src="{{asset('/images/logo-horizontal.png')}}" width="150" alt="Inspector logo">
                </div>

                <div class="col text-center">
                    <a href="https://inspector.dev" target="_blank" class="small">
                        https://inspector.dev
                    </a>
                </div>

                <div class="col text-end">
                    <a href="https://decs.inspector.dev" target="_blank" class="link-dark me-2">
                        <i class="bi bi-book"></i>
                    </a>
                    <a href="https://github.com/inspector-apm" target="_blank" class="link-dark">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    </body>
</html>
