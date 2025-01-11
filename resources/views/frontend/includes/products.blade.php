<style>
    .likes {
  /* position: absolute; Make the SVG element positioned relative to its container */
  /* top: 5px; Adjust for vertical positioning (from top) */
  /* right: 5px; Adjust for horizontal positioning (from right) */
  margin-top:-10rem;
  /* margin-left:20rem; */
  margin-right:4rem;
}
.product-div-item {
    /* margin-right:3rem; */
}

</style>


<script src="https://kit.fontawesome.com/f94c035ae6.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- Products Gallery -->
    <div class="container place-items-center" style="margin-top: -1.5rem;">
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-5  pe-3">


            @foreach($products as $index => $product)
            @if($index < 16)
                <!-- <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3"> -->
                    <div class="col">
                    <div class="product-div-item position-relative">
                        <a href="{{route('product_detail', $product->id)}}" style="text-decoration: none; color:black;">
                            <img src="../assets/frontend/uploads/{{$product->image}}" alt="{{$product->title}}" style="width: 100%; object-fit:cover; height:170px" />
                            <p class="product-title" style = "font-size:15px; margin-top: .6rem;">{{Str::limit($product->title, 9, '...')}}</p>
                        </a>
                        <button class="add-to-cart position-absolute top-0 end-0 m-2 " style = "background-color: rgba(0, 255, 255, 0.021); border:none;" data-product-id="{{ $product->id }}">
                        <i class="fa-solid fa-heart " style = "font-size: 20px; color:grey;" data-product-id="{{$product->id}}"></i>
                        </button>
                        <div class="product-div-item-list" style = "margin-top: -.1rem;">
                            <p class="product-desc">{{Str::limit($product->sub_title, 9, '...')}}</p>
                            <p class="product-price">Price: &#8358;@convert($product->price)</p>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach

















         
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination gap-1 justify-content-center">

            </ul>
        </nav>

        <nav aria-label="Page navigation example">
            <ul class="pagination gap-1 justify-content-center">
            {{ $products->onEachSide(2)->links('pagination::bootstrap-4') }}
            </ul>
        </nav>
        </main>
        <br>



        <script>
            $(document).ready(function() {
                $('.add-to-cart').click(function() {
                    let productId = $(this).data('product-id');
                    let quantity = 1; // You can adjust this as needed

                    $.ajax({
                        url: "{{ route('add_cart', ':id') }}".replace(':id', productId),
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            quantity: quantity
                        },
                        success: function(response) {
                            // Handle success, e.g., show a success message
                            console.log(response);
                            alert('Product added to cart successfully!');
                            window.location.reload();
                        },
                        error: function(error) {
                            // Handle error, e.g., show an error message
                            console.error(error);  

                        }
                    });
                    

                });
            });
</script>