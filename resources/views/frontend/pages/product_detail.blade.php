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



    .productLike {
        position: absolute;
        right: 1.3rem;
    }

    .btn:nth-child(2) {
        background-color: #908cb8;
        margin-bottom: 1.5rem;
    }

    .btn:nth-child(1) {
        outline: 1px solid #908cb8;
    }

    .p-description-text {
        text-align: justify;
        padding: 1rem;
        margin-top: -1.8rem;
        font-family: Lora;
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
    }

    @media (min-width: 768px) {
        .productImage-div img:nth-child(2) {
            position: absolute;
            width: 320.29px;
            height: 300.42px;
            top: 12rem;
        }

        .productImage-div img:nth-child(3) {
            position: absolute;
            left: -6rem;
            top: 2rem;
            width: 620px;
        }

        .product-item-div {
            width: 60%;
            margin-left: 21rem;
            padding-left: 2rem;
            padding-right: 3rem;
            padding-top: 1rem;
            padding-bottom: 2rem;
            /* background-color: red; */
        }

        #btn button {
            width: 40%;
            margin: auto;
            margin-bottom: 2rem;
        }

        .p-description-text {
            text-wrap: wrap;
            padding-right: 8rem;
        }
    }
</style>


<main class="container">
    <!-- <p class="d-none d-md-block">Home / Our Products / Clean it zero </p> -->
    <br>
    <br>
    <div class="row py-5" style="width: 100%;">



        <div class="col-sm-12 col-md-5">

            <img style="height: 300px; object-fit:cover; width:100%;" src="../assets/frontend/uploads/{{$product->image}}" class="img-fluid" alt="{{$product->title}}" />

        </div>


        <div class="col-sm-12 col-md-7">
            <div class="">
                <p style="font-family: Garamond;
        font-size: 28px;
        margin-top: 0.8rem;
        padding-left: 1rem;
        font-family: Garamond;
        font-weight: bold;
        ">{{$product->title}}</p>
                <svg width="91" height="17" viewBox="0 0 91 17" fill="none" xmlns="http://www.w3.org/2000/svg" style="text-align: left;
          padding-left: 0.8rem; margin-top: -2.5rem;">
                    <path d="M8.55439 2.74859C8.86388 1.84902 10.1361 1.84901 10.4456 2.74859L11.2885 5.19867C11.4274 5.60235 11.8072 5.87336 12.2341 5.87336L14.8347 5.87336C15.8172 5.87336 16.2106 7.14201 15.4005 7.69791L13.3968 9.07284C13.0261 9.32718 12.8707 9.79762 13.0169 10.2227L13.8052 12.5139C14.1187 13.4252 13.0885 14.209 12.2938 13.6638L10.0658 12.1349C9.72487 11.901 9.27513 11.901 8.93421 12.1349L6.70621 13.6638C5.91153 14.209 4.88128 13.4252 5.19482 12.5139L5.98306 10.2227C6.1293 9.79762 5.97391 9.32718 5.60324 9.07284L3.59949 7.69791C2.78937 7.14202 3.18278 5.87336 4.16528 5.87336L6.76588 5.87336C7.19278 5.87336 7.57261 5.60235 7.71149 5.19867L8.55439 2.74859Z" fill="#F8BD00" />
                    <path d="M26.5544 2.74859C26.8639 1.84902 28.1361 1.84901 28.4456 2.74859L29.2885 5.19867C29.4274 5.60235 29.8072 5.87336 30.2341 5.87336L32.8347 5.87336C33.8172 5.87336 34.2106 7.14201 33.4005 7.69791L31.3968 9.07284C31.0261 9.32718 30.8707 9.79762 31.0169 10.2227L31.8052 12.5139C32.1187 13.4252 31.0885 14.209 30.2938 13.6638L28.0658 12.1349C27.7249 11.901 27.2751 11.901 26.9342 12.1349L24.7062 13.6638C23.9115 14.209 22.8813 13.4252 23.1948 12.5139L23.9831 10.2227C24.1293 9.79762 23.9739 9.32718 23.6032 9.07284L21.5995 7.69791C20.7894 7.14202 21.1828 5.87336 22.1653 5.87336L24.7659 5.87336C25.1928 5.87336 25.5726 5.60235 25.7115 5.19867L26.5544 2.74859Z" fill="#F8BD00" />
                    <path d="M44.5544 2.74859C44.8639 1.84902 46.1361 1.84901 46.4456 2.74859L47.2885 5.19867C47.4274 5.60235 47.8072 5.87336 48.2341 5.87336L50.8347 5.87336C51.8172 5.87336 52.2106 7.14201 51.4005 7.69791L49.3968 9.07284C49.0261 9.32718 48.8707 9.79762 49.0169 10.2227L49.8052 12.5139C50.1187 13.4252 49.0885 14.209 48.2938 13.6638L46.0658 12.1349C45.7249 11.901 45.2751 11.901 44.9342 12.1349L42.7062 13.6638C41.9115 14.209 40.8813 13.4252 41.1948 12.5139L41.9831 10.2227C42.1293 9.79762 41.9739 9.32718 41.6032 9.07284L39.5995 7.69791C38.7894 7.14202 39.1828 5.87336 40.1653 5.87336L42.7659 5.87336C43.1928 5.87336 43.5726 5.60235 43.7115 5.19867L44.5544 2.74859Z" fill="#F8BD00" />
                    <path d="M62.5544 2.74859C62.8639 1.84902 64.1361 1.84901 64.4456 2.74859L65.2885 5.19867C65.4274 5.60235 65.8072 5.87336 66.2341 5.87336L68.8347 5.87336C69.8172 5.87336 70.2106 7.14201 69.4005 7.69791L67.3968 9.07284C67.0261 9.32718 66.8707 9.79762 67.0169 10.2227L67.8052 12.5139C68.1187 13.4252 67.0885 14.209 66.2938 13.6638L64.0658 12.1349C63.7249 11.901 63.2751 11.901 62.9342 12.1349L60.7062 13.6638C59.9115 14.209 58.8813 13.4252 59.1948 12.5139L59.9831 10.2227C60.1293 9.79762 59.9739 9.32718 59.6032 9.07284L57.5995 7.69791C56.7894 7.14202 57.1828 5.87336 58.1653 5.87336L60.7659 5.87336C61.1928 5.87336 61.5726 5.60235 61.7115 5.19867L62.5544 2.74859Z" fill="#F8BD00" />
                    <path d="M80.5544 2.74859C80.8639 1.84902 82.1361 1.84901 82.4456 2.74859L83.2885 5.19867C83.4274 5.60235 83.8072 5.87336 84.2341 5.87336L86.8347 5.87336C87.8172 5.87336 88.2106 7.14201 87.4005 7.69791L85.3968 9.07284C85.0261 9.32718 84.8707 9.79762 85.0169 10.2227L85.8052 12.5139C86.1187 13.4252 85.0885 14.209 84.2938 13.6638L82.0658 12.1349C81.7249 11.901 81.2751 11.901 80.9342 12.1349L78.7062 13.6638C77.9115 14.209 76.8813 13.4252 77.1948 12.5139L77.9831 10.2227C78.1293 9.79762 77.9739 9.32718 77.6032 9.07284L75.5995 7.69791C74.7894 7.14202 75.1828 5.87336 76.1653 5.87336L78.7659 5.87336C79.1928 5.87336 79.5726 5.60235 79.7115 5.19867L80.5544 2.74859Z" fill="#F8BD00" />
                </svg>
                <hr class="line d-none d-lg-block w-100">
            </div>
            <p class="p-description-text" style="font-family: Lora;
          font-size: 14px;
          font-weight: 400;
          line-height: 18px;
          letter-spacing: 0em;
          text-align: left;
          ">
                {!!$product->description!!}
            </p>
            <br>
            <form action="{{route('add_cart', $product->id)}}" method="POST" style="margin: 0 3px;">
                @csrf
                <div style="display: flex; align-items: center; justify-content:space-between;">
                    <p style="font-family: Lora;font-size: 19px;padding-left: 1rem;margin-top: -0.8rem;">
                        <svg style="margin-top:-0.5rem;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect y="0.25" width="23.5" height="23.5" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_236_2058" transform="scale(0.00195312)" />
                                </pattern>
                                <image id="image0_236_2058" width="512" height="512" xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                        @convert($product->price)
                    </p>
                    <div style="display: flex; align-items:center; gap: 2px; margin-right: 1rem; margin-top: -14px;">
                        <div style="width: 30px; height: 30px; border: 1px solid black; border-radius: 100%; display: flex;justify-content: center; align-items: center; cursor:pointer;" id="add">
                            +</div>



                        <input readonly type="text" name="quantity" value="1" style="width: 30px; text-align:center; border:1px solid black; outline:none; border-radius:3px; font-size:15px; padding:2px 0" id="cart_num">


                        <div style="width: 30px; height: 30px; border: 1px solid black; border-radius: 100%; display: flex;justify-content: center; align-items: center; cursor:pointer;" id="sub">
                            -</div>
                    </div>
                </div>

                <br>
                <hr class="d-md-none" style="width: 100%; margin: auto;">

                <!-- Button Large Screen -->
                <br>
                <div class="" style="width: 100%;" id="btn">

                    <button type="button" class="btn d-none"><a href="#" style="text-decoration: none; color: black;"></a></button>

                    <button class="btn" type="submit" style="text-decoration: none; color: white;"> Add to Cart</button>
                </div>


            </form>



            <!-- <div class="d-md-flex gap-md-5 ps-md-8 ">
                <div style="display: flex; align-items: center; justify-content:space-between; margin-left: 16px; margin-right: 20px; margin-top: 10px;">
                    <p style="font-family: Lora;
            font-size: 14px;
            text-align: left;
            "> How to Use</p>
                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-md-none">
                        <path d="M5.51563 5.59437C5.78314 5.86188 6.21686 5.86188 6.48437 5.59437L10.8437 1.23506C11.1112 0.967547 11.1112 0.53383 10.8437 0.266321C10.5762 -0.00118856 10.1425 -0.00118857 9.87494 0.266321L6 4.14126L2.12506 0.26632C1.85755 -0.00118894 1.42383 -0.00118896 1.15632 0.26632C0.888811 0.533829 0.888811 0.967547 1.15632 1.23506L5.51563 5.59437ZM5.315 4L5.315 5.11L6.685 5.11L6.685 4L5.315 4Z" fill="#9A9A9A" />
                    </svg>
                </div>

                <hr class="d-md-none" style="width: 100%; margin: auto;">
                <div style="display: flex; align-items: center; justify-content:space-between; margin-left: 16px; margin-right: 20px; margin-top: 10px;">
                    <p style="font-family: Lora;
            font-size: 14px;
            text-align: left;
            ">Ingredients</p>
                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-md-none">
                        <path d="M5.51563 5.59437C5.78314 5.86188 6.21686 5.86188 6.48437 5.59437L10.8437 1.23506C11.1112 0.967547 11.1112 0.53383 10.8437 0.266321C10.5762 -0.00118856 10.1425 -0.00118857 9.87494 0.266321L6 4.14126L2.12506 0.26632C1.85755 -0.00118894 1.42383 -0.00118896 1.15632 0.26632C0.888811 0.533829 0.888811 0.967547 1.15632 1.23506L5.51563 5.59437ZM5.315 4L5.315 5.11L6.685 5.11L6.685 4L5.315 4Z" fill="#9A9A9A" />
                    </svg>
                </div>
            </div> -->

            <hr class="d-block d-md-none" style="width: 100%; margin: auto; margin-bottom: 1rem;">

            <!-- Button Div small screen-->

        </div>

        <!-- <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button style="text-decoration: none;" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How to use
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        {{$product->howUse}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button style="text-decoration: none;" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Ingredients
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                    {{$product->ingredients}}
                    </div>
                </div>
            </div>
            

        </div> -->

    </div>


    <div>

        <!-- You might also like div -->
        <div class="container place-items-center" style="margin-top: 15px;">
            <p>You Might Also Like</p>
            <div class="row pe-3">
                @foreach($products as $index => $product)
                @if($index < 4) <a href="{{route('product_detail', $product->id)}}" style="text-decoration: none; color:black;" class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="product-div-item">
                    <img src="../assets/frontend/uploads/{{$product->image}}" alt="{{$product->title}}" style="width: 100%; object-fit:cover; height:170px" />
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none" class="like">
                        <path d="M8.41454 13.6479L8.41453 13.6479L8.4116 13.6495C8.40263 13.6543 8.39261 13.21207 13.5748 6.3506 12.5602 4.53125 10.9669C2.6856 9.35061 1.02016 7.25724 1.02002 5.03431C1.02125 4.0129 1.42754 3.03367 2.1498 2.31142C2.87205 1.58917 3.85128 1.18287 4.8727 1.18164C6.17609 1.18172 7.29242 1.73974 7.98258 2.65893L8.38242 3.19146L8.78226 2.6569 8.38242 13.6569C8.37223 13.6569 8.36221 13.6543 8.35324 13.6495L8.35031 13.6479C8.65893C9.47242 1.73974 10.5888 1.18172 11.8921 1.18164C12.9136 1.18287 13.8928 1.58916 14.615 2.31142C15.3374 3.03374 15.7437 4.01309 15.7448 5.0346C15.7445 7.25742 14.0792 9.35068 12.2336 10.9669C10.4142 12.5602 8.55277 13.5748 8.41454 13.6479Z" fill="#A5A5A5" stroke="#A5A5A5" />
                    </svg> -->

                    <div class="product-div-item-list">
                        <p class="product-title">
                            {{$product->title}}
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none" class="rating">
                                <path d="M4.34702 0.48807C4.50609 0.10156 5.05351 0.101559 5.21258 0.48807L5.95814 2.2996C6.03033 2.47499 6.20125 2.58948 6.39092 2.58948L8.52019 2.58948C8.9997 2.58948 9.16899 3.22486 8.75304 3.46344L7.23566 4.33379C7.03185 4.45069 6.94631 4.70059 7.03573 4.91787L7.65672 6.42672C7.82645 6.83911 7.37792 7.23268 6.99109 7.0108L5.01265 5.876C4.86844 5.79328 4.69116 5.79328 4.54695 5.876L2.56851 7.0108C2.18168 7.23268 1.73315 6.83911 1.90288 6.42672L2.52387 4.91787C2.61329 4.70059 2.52776 4.45069 2.32394 4.33379L0.80656 3.46344C0.390613 3.22486 0.5599 2.58948 1.03941 2.58948L3.16868 2.58948C3.35835 2.58948 3.52927 2.475 3.60146 2.2996L4.34702 0.48807Z" fill="#F8BD00" />
                            </svg> -->

                            <!-- <span class="">4.5</span> -->
                        </p>
                        <p class="product-desc">{{$product->sub_title}}</p>
                        <p class="product-price">Price: &#8358;@convert($product->price)</p>
                    </div>
                </div>
            </a>
                    @endif
                    @endforeach

            </div>
            <br>
        </div>
</main>

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