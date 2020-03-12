@extends('layouts/master')


        <!-- Styles -->
        <style>
            
            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
                justify-content: center;
                align-content: center
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 80px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref my-5">
            <h1 class="text-center my-5 title">Galerie Laravel</h1>
        </div>
        <div class="links content py-5 flex-center h-25">
           <a href="{{route('home')}}">Home</a>
           <a href="{{route('tab_user')}}">Users</a>
           <a href="{{route('tab_avatar')}}">Avatars</a>
           <a href="{{route('tab_categorie')}}">Catégories</a>
           <a href="{{route('tab_image')}}">Images</a>
        </div>
    </body>
</html>
