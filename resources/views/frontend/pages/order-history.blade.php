@include('frontend.includes.links')

@include('frontend.includes.header')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .navbar-div {
        z-index: 10;
    }

    .nav-item>a {
        font-family: Lora;
        font-size: 14px;
        font-weight: 500;
    }

    main {
        margin-top: 11rem;
    }

    .btn:nth-child(2) {
        background-color: #908cb8;
        margin-bottom: 1.5rem;
    }

    .btn:nth-child(1) {
        margin-top: 1rem;
        outline: 1px solid #908cb8;
    }

    .shopping-cart-div {
        width: 95%;
        font-weight: bold;
        padding: 10px;
    }

    .shopping-cart-summary-div {
        display: flex;
        justify-content: space-between;
        gap: 1rem;
        align-items: center;
    }

    @media (min-width: 768px) {
        .shopping-cart-summary-div {
            width: 500px;
            /* height: 300px; */
        }

        .summary-div {
            background-color: #fffade;
            width: 500px;
            height: 130px;
            padding: 1rem;
            margin-top: 1.5rem;
        }

        button a {
            text-decoration: none;
            font-family: Lora;
            font-size: 12px;
            font-weight: 600;
        }

        .main-div-large-screen {
            display: flex;
            width: 90%;
            gap: 3rem;
            min-height: 100vh;
        }
    }
</style>


<main>
    <!-- <ul class="nav nav-underline gap-2 p-2">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Cart Summary</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#">Delivery Address</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#">Delivery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#">Payment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-black" href="#">Review</a>
        </li>
    </ul> -->

    <div class="main-div-large-screen">
        <div class="shopping-cart-div">
            <div style="line-height: 0; margin-top: 15px; line-height: 0.2">
                <p style="font-family: Lora; font-size: 13px; font-weight: 600">
                    My Order Summary ({{$counter}} item)
                </p>
                <hr class="d-md-none" style="width: 100%; outline: auto" />
            </div>

            @if($counter < 1)
            <h4>No Order Yet</h4>
            @endif


            @foreach($datas as $index => $data)

            <div class="shopping-cart-summary-div">
                <div class="image-div" style="width: 100px; height: 100px">
                    <img src="../assets/frontend/uploads/{{$data->image}}" alt="{{$data->product_title}}" style="
                  width: 100px;
                  height: 95px;
                  object-fit:cover;
                " />
                </div>
                <!-- Product Description Div -->
                <div style="
                font-family: Lora;
                font-size: 13px;
                line-height: 0.5;
                padding: 1px;
                text-wrap: nowrap;
              ">
                    <p style="font-family: Lora; font-size: 24px; font-weight: 600">
                    {{$data->product_title}}
                    </p>
                    <p style="font-family: Lora; font-size: 15px; font-weight: 400">
                    {{$data->product_title}}
                    </p>
                    <p style="font-family: Lora; font-size: 13px">

                    &#8358;@convert($data->price)
                    </p>
                    <p style="font-family: Lora; font-size: 13px">

                    Date: {{$data->created_at->format('d/m/Y')}}
                    </p>
                </div>


            </div>


            <div style="display: flex; justify-content:space-between; align-items:center;">


                <a style="color: green; text-decoration:none; ">{{$data->payment_status}}</a>

                @if($data->delivery_status == 'Delivered')
                <a style="text-decoration:none; ">Status: <span style="color: green;">{{$data->delivery_status}}</span></a>
                @else
                <a style="text-decoration:none; ">Status: <span style="color: red;">{{$data->delivery_status}}</span></a>
                @endif


                

            </div>
            <br>

            <?php $totalPrice += $data->price; ?>

            @endforeach


        </div>

        <hr>

        <!-- Summary Div -->
        <div class="summary-div d-md-block" style="background-color: #fffade; padding:15px">
            <div class="container place-items-center">
                <p class="text-center" style="font-family: Lora; font-size: 24px; font-weight: 500">
                    Order Summary
                </p>
                <div class="row">
                    <div class="col">
                        <div style="display: flex; justify-content: space-between">
                            <p style="
                      font-family: Lora;
                      font-size: 16px;
                      font-weight: 500;
                      line-height: 2;
                    ">
                                Subtotal ({{$counter}} Item)
                            </p>
                            <div style="
                      font-family: Lora;
                      font-size: 20px;
                      font-weight: 700;
                      text-wrap: wrap;
                    ">
                                <svg style="margin-top: -5px" width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6H2V0H4L7.42 6H12V0H14V6H16V8H14V10H16V12H14V18H12L8.57 12H4V18H2V12H0V10H2V8H0V6ZM4 6H5.13L4 4.03V6ZM4 8V10H7.42L6.28 8H4ZM12 14V12H10.85L12 14ZM8.56 8L9.71 10H12V8H8.56Z" fill="black" />
                                </svg>
                                @convert($totalPrice)
                            </div>
                        </div>
                        <div style="
                    font-family: Lora;
                    font-size: 13px;
                    font-weight: 500;
                    line-height: 5px;
                  ">

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</main>

<br>
<br>

<script>
    let cart_num = document.getElementById('cart_num')
    let add = document.getElementById('add')
    let sub = document.getElementById('sub')

    add.addEventListener('click', () => {
        let count = Number(cart_num.value);

        cart_num.value = count += 1
    })

    sub.addEventListener('click', () => {
        let count = Number(cart_num.value);
        if (count <= 1) {
            cart_num.value = 1
        } else {
            cart_num.value = count -= 1
        }
    })
</script>




@include('frontend.includes.footer')