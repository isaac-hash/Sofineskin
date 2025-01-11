<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Boostrap CSS CDN Link-->
    <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css" />

    <title>Register</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        main {
            line-height: 16px;
            display: grid;
            place-items: center;
            text-align: left;
        }

        form .btn {
            background: #908cb8;
            width: 100%;
            border-radius: 8px;
            color: #fff;
            margin-bottom: 1rem;
        }

        form .btn:hover {
            border: 1px solid #908cb8;
        }

        .auth-div {
            display: flex;
            border: 1px solid black;
            border-radius: 4px;
            width: 175px;
            height: 64px;
            gap: 3px;
            border: 1px solid black;
            justify-content: center;
            align-items: center;
        }

        .auth-div p {
            font-family: Lora;
            font-size: 14.5px;
            font-weight: 400;
            text-align: left;
            margin-top: 1rem;
        }

        .form-group.required .form-label:after {
            content: "*";
            color: red;
        }

        label {
            font-family: Lora;
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: 0em;
            text-align: left;
        }
    </style>
</head>

<body>
    <main>
        <p style="
          font-family: Garamond;
          font-size: 32px;
          font-weight: 700;
          margin-top: 3rem;
          margin-left: -7rem;
        ">
            Create an account
        </p>
        <p style="
          font-family: Lora;
          font-size: 20px;
          font-weight: 400;
          line-height: 26px;
          letter-spacing: 0em;
          text-align: left;
          padding-left: 1rem;
        ">
            Hello! sign in to have access to your favourites, cart and more
        </p>
        <div style="margin-top: 1.5rem">
            <!-- <p style="
            font-family: Lora;
            font-size: 16px;
            font-weight: 600;
            line-height: 0;
          ">
                Sign Up with
            </p> -->
            <!-- <div class="d-flex gap-1">
                <div class="auth-div">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_302_1711)">
                            <path d="M8.33405 0.786866C5.94375 1.61608 3.88236 3.18996 2.45267 5.27733C1.02297 7.36469 0.300327 9.85552 0.390882 12.3839C0.481437 14.9124 1.38042 17.3451 2.95577 19.3249C4.53113 21.3046 6.69983 22.727 9.14333 23.3831C11.1243 23.8942 13.1998 23.9167 15.1914 23.4485C16.9956 23.0432 18.6636 22.1764 20.0321 20.9328C21.4564 19.599 22.4903 17.9022 23.0225 16.0248C23.6008 13.9832 23.7037 11.8363 23.3234 9.74872H12.1991V14.3633H18.6416C18.5128 15.0993 18.2369 15.8017 17.8303 16.4286C17.4238 17.0555 16.8949 17.5939 16.2754 18.0116C15.4888 18.5322 14.602 18.8823 13.6719 19.0395C12.7392 19.213 11.7825 19.213 10.8497 19.0395C9.90429 18.8443 9.00996 18.4541 8.22378 17.8938C6.96061 16.9997 6.01215 15.7294 5.51373 14.2642C5.00702 12.7716 5.00702 11.1535 5.51373 9.66088C5.86852 8.61464 6.45502 7.66205 7.22947 6.8742C8.11573 5.95605 9.23777 5.29975 10.4725 4.97731C11.7072 4.65487 13.0068 4.67874 14.2289 5.04632C15.1836 5.33923 16.0566 5.85125 16.7782 6.54152C17.5046 5.81884 18.2298 5.09429 18.9537 4.36787C19.3275 3.97725 19.7349 3.60532 20.1031 3.20535C19.0014 2.18024 17.7083 1.38252 16.2979 0.857888C13.7293 -0.0747615 10.9188 -0.0998256 8.33405 0.786866Z" fill="white" />
                            <path d="M8.33384 0.787286C10.9184 -0.100008 13.7289 -0.0756039 16.2976 0.856439C17.7083 1.38464 19.0009 2.1862 20.1011 3.21512C19.7273 3.61508 19.3329 3.98888 18.9516 4.37764C18.2265 5.10156 17.5019 5.823 16.778 6.54194C16.0563 5.85167 15.1833 5.33965 14.2287 5.04674C13.007 4.67787 11.7074 4.65262 10.4724 4.97374C9.23735 5.29486 8.11462 5.94995 7.22739 6.86714C6.45294 7.65499 5.86643 8.60759 5.51164 9.65382L1.63721 6.65408C3.02402 3.90396 5.4252 1.80033 8.33384 0.787286Z" fill="#E33629" />
                            <path d="M0.609192 9.62552C0.817286 8.5934 1.16302 7.5939 1.63714 6.65381L5.51158 9.66103C5.00487 11.1536 5.00487 12.7718 5.51158 14.2644C4.22072 15.2612 2.92924 16.263 1.63714 17.2697C0.450609 14.9079 0.0887366 12.2169 0.609192 9.62552Z" fill="#F8BD00" />
                            <path d="M12.1991 9.74707H23.3234C23.7037 11.8346 23.6007 13.9816 23.0225 16.0232C22.4902 17.9005 21.4564 19.5973 20.0321 20.9312C18.7817 19.9555 17.5257 18.9874 16.2754 18.0118C16.8953 17.5937 17.4244 17.0547 17.8309 16.4271C18.2375 15.7996 18.5132 15.0964 18.6415 14.3598H12.1991C12.1972 12.8234 12.1991 11.2853 12.1991 9.74707Z" fill="#587DBD" />
                            <path d="M1.63525 17.2695C2.92736 16.2727 4.21883 15.2709 5.50969 14.2642C6.0091 15.7298 6.95892 17.0002 8.22348 17.8938C9.0121 18.4514 9.90837 18.8384 10.855 19.0301C11.7878 19.2036 12.7445 19.2036 13.6772 19.0301C14.6073 18.8729 15.4941 18.5227 16.2807 18.0022C17.5311 18.9778 18.7871 19.9459 20.0374 20.9215C18.6691 22.1658 17.0011 23.0333 15.1967 23.4391C13.2051 23.9073 11.1296 23.8848 9.14863 23.3737C7.58185 22.9553 6.11838 22.2179 4.84993 21.2075C3.50748 20.1415 2.41095 18.7982 1.63525 17.2695Z" fill="#319F43" />
                        </g>
                        <defs>
                            <clipPath id="clip0_302_1711">
                                <rect width="23.9232" height="23.9232" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p>Sign in with Google</p>
                </div>
                <div class="auth-div">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.9552 13.9776C27.9552 6.25803 21.6972 0 13.9776 0C6.25803 0 0 6.25803 0 13.9776C0 20.9542 5.11143 26.7369 11.7936 27.7854V18.018H8.2446V13.9776H11.7936V10.8982C11.7936 7.39502 13.8804 5.46 17.0732 5.46C18.6024 5.46 20.202 5.733 20.202 5.733V9.1728H18.4395C16.7031 9.1728 16.1616 10.2503 16.1616 11.3557V13.9776H20.0382L19.4185 18.018H16.1616V27.7854C22.8438 26.7369 27.9552 20.9543 27.9552 13.9776Z" fill="#1877F2" />
                        <path d="M19.4185 18.0184L20.0382 13.978H16.1616V11.3562C16.1616 10.2506 16.7031 9.17325 18.4395 9.17325H20.202V5.73345C20.202 5.73345 18.6025 5.46045 17.0731 5.46045C13.8804 5.46045 11.7936 7.39547 11.7936 10.8986V13.978H8.24463V18.0184H11.7936V27.7858C12.5161 27.8991 13.2463 27.9558 13.9776 27.9556C14.7089 27.9559 15.4391 27.8991 16.1616 27.7858V18.0184H19.4185Z" fill="white" />
                    </svg>
                    <p>Sign in with Facebook</p>
                </div>
            </div> -->
        </div>

        <!-- <p style="text-align: center; margin-top: 2rem">Or</p> -->

        <form action="{{route('register_user')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2 required">
                <label for="fname" class="form-label">First Name</label>
                <input type="name" id="fname" name="first_name" class="form-control" value="{{ old('first_name') }}" placeholder="Jennifer" />
                @error('first_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3 required">
                <label for="lname" class="form-label">Last Name (Surname)</label>
                <input type="name" id="lname" name="last_name" class="form-control" value="{{ old('last_name') }}" placeholder="Uzor" />
                @error('last_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3 required">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenniferuzor@gmail.com" />
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3 required">
                <label for="exampleInputEmail12" class="form-label">Home address</label>
                <input type="text" class="form-control" value="{{ old('address') }}" name="address" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="Home Address" />
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3 required">
                <label for="exampleInputEmail13" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" value="{{ old('phone_number') }}" name="phone_number" id="exampleInputEmail13" aria-describedby="emailHelp" placeholder="+234 123456789" />
                @error('phone_number')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3 required">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" value="{{ old('password') }}" name="password" id="exampleInputPassword1" placeholder="************" />
                <h6 class="text-center" style=" font-family: Lora; font-size: 12px;font-weight: 600; line-height: 13px; letter-spacing: 0em; text-align: left;">
                    Your password must contain at least 8 letters and can be alpha-numeric
                </h6>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3 required">
                <label for="exampleInputPassword12" class="form-label">Re-Enter Password</label>
                <input type="password" name="confirm_password" class="form-control" value="{{ old('confirm_password') }}" id="exampleInputPassword12" placeholder="************" />
                @error('confirm_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <input type="submit" value="Create" class="btn btn-outline-primary">
        </form>

        <h6 class="text-center">Already have an account?</h6>
        <h6 class="text-center" style="margin-top: -0.7rem">
            <a href="{{route('login')}}" class="link-secondary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Sign In</a>
        </h6>
    </main>
    <br>
    <!--Boostrap JS CDN Link-->
    <script src="../assets/frontend/js/bootstrap.bundle.min.js"></script>
</body>

</html>