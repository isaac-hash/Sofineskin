<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Boostrap CSS CDN Link-->
    <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css" />
    <!--Css Link-->
    <link rel="stylesheet" href="../assets/frontend/css/styles.css" />
    <title>Sign In</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: grid;
            place-items: center;
            gap: 0.5rem;
        }

        form {
            margin: 10px;
            font-family: Lora;
        }

        form .btn {
            background: #908cb8;
            /* width: 340px; */
            width: 100%;
            border-radius: 8px;
        }

        form .btn:hover {
            border: 1px solid #908cb8;
        }

        img {
            width: 149.52px;
            height: 131.72px;
            margin-top: 20px;
        }

        form {
            margin-top: 2.5rem;
        }

        .sigIn-div {
            text-align: center;
            line-height: 0;
            margin-bottom: 3rem;
        }

        .sigIn-div p:nth-child(1) {
            font-family: Garamond;
            font-size: 24px;
            font-weight: 700;
        }

        .sigIn-div p:nth-child(2) {
            font-family: Lora;
            font-size: 20px;
            font-weight: 400;
            text-wrap: wrap;
            line-height: 1;
        }
    </style>
</head>

<body>
@foreach($utilities as $key => $utilities)
    <a href="{{route('/')}}"><img src="../assets/img/{{$utilities->top_logo}}" alt="" style="width: 149.52px; height: 131.72px; margin-top: 1.5rem; object-fit:cover" /></a>
@endforeach

    <form action="{{route('login_user')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="sigIn-div">
            <p>Sign In</p>
            <p>Hello! sign in to have access to your favourites, cart and more</p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenniferuzor@gmail.com" />
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" value="{{ old('password') }}" name="password" id="exampleInputPassword1" placeholder="************" />
            <h6 class="text-end" style="
            font-family: Outfit;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 2rem;
          ">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <a href="{{ route('password.request') }}" class="link-offset-2 link-underline link-underline-opacity-0 link-secondary">
                    Forgot your password?
                </a>
            </h6>
        </div>

        <input type="submit" value="Login" class="btn btn-outline-primary" style="color: white;">


    </form>

    <h6 class="text-center">Dont have an account?</h6>
    <h6 class="text-center" style="margin-top: -0.7rem">
        <a href="{{route('register')}}" class="link-secondary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Create One</a>
    </h6>
    <!--Boostrap JS CDN Link-->
    <script src="../assets/frontend/js/bootstrap.bundle.min.js"></script>
</body>

</html>