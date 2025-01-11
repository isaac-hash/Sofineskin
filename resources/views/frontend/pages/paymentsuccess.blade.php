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

    button>a {
        text-decoration: none;
    }
</style>

<br>
<br>
<main>

    <div class="text-center">
        <svg width="236" height="236" viewBox="0 0 236 236" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_299_1301)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.683 91.9186C29.2115 88.0112 35.4668 87.4921 39.5891 90.7709L87.7859 129.107C91.9082 132.387 98.3858 132.086 102.186 128.441L195.106 39.2679C198.905 35.6229 205.022 35.724 208.696 39.4993L231.229 62.6372C234.905 66.407 234.809 72.4821 231.014 76.1298L106.484 195.92C102.689 199.571 96.1589 199.943 91.9729 196.75L4.28743 129.866C0.102301 126.672 -0.437804 120.865 3.09155 116.952L25.683 91.9186Z" fill="url(#paint0_linear_299_1301)" />
                <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M232.333 71.6838L106.545 192.685C102.712 196.372 96.1156 196.749 91.8873 193.522L3.31609 125.962C1.56533 124.626 0.457653 122.837 0.000413164 120.918C-0.785267 124.196 0.363813 127.738 3.31609 129.991L91.8873 197.551C96.1156 200.776 102.712 200.4 106.545 196.713L232.333 75.7116C234.807 73.3324 235.717 69.9312 235.055 66.7949C234.657 68.6602 233.709 70.3632 232.333 71.6838Z" fill="#2C2C2C" />
            </g>
            <defs>
                <linearGradient id="paint0_linear_299_1301" x1="117.341" y1="62.7156" x2="117.341" y2="205.638" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#5AE050" />
                    <stop offset="1" stop-color="#40D437" />
                </linearGradient>
                <clipPath id="clip0_299_1301">
                    <rect width="235.52" height="235.52" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <p style="font-family: Garamond;
            font-size: 32px;
            font-weight: 700;
            ">Order Successful!</p>
        <p>Your order was successful. You will receive your
            package within 5 to 7 working days. Thanks for choosing
            So Fine Skin</p>

    </div>
    <button type="button" class="btn" style="background-color: #908cb8; margin-top: 10px; width: 90%;">
        <a href="{{route('/')}}" style="color: white;">Continue Shopping</a>

</main>
<br>
@include('frontend.includes.footer')