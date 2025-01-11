@include('frontend.includes.links')

@include('frontend.includes.header')

    <!-- Products Gallery -->
    <div class="container place-items-center" style="margin-top: -1.5rem;">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  
    <h3>Searched for: {{$searchedWord}}</h3>

    @if($num < 1)
    <h4>No data found</h4>
    @endif


        <div class="row  pe-3">
            @foreach($datas as $index => $product)
            @if($index < 12)
            <a href="{{route('product_detail', $product->id)}}" style="text-decoration: none; color:black;" class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="product-div-item">
                    <img src="../assets/frontend/uploads/{{$product->image}}" alt="{{$product->title}}" style="width: 100%; object-fit:cover; height:170px" />
                    <div class="product-div-item-list">
                        <p class="product-title">
                            {{$product->title}}
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none" class="rating">
                                <path d="M4.34702 0.48807C4.50609 0.10156 5.05351 0.101559 5.21258 0.48807L5.95814 2.2996C6.03033 2.47499 6.20125 2.58948 6.39092 2.58948L8.52019 2.58948C8.9997 2.58948 9.16899 3.22486 8.75304 3.46344L7.23566 4.33379C7.03185 4.45069 6.94631 4.70059 7.03573 4.91787L7.65672 6.42672C7.82645 6.83911 7.37792 7.23268 6.99109 7.0108L5.01265 5.876C4.86844 5.79328 4.69116 5.79328 4.54695 5.876L2.56851 7.0108C2.18168 7.23268 1.73315 6.83911 1.90288 6.42672L2.52387 4.91787C2.61329 4.70059 2.52776 4.45069 2.32394 4.33379L0.80656 3.46344C0.390613 3.22486 0.5599 2.58948 1.03941 2.58948L3.16868 2.58948C3.35835 2.58948 3.52927 2.475 3.60146 2.2996L4.34702 0.48807Z" fill="#F8BD00" />
                            </svg> -->

                            <!-- <span class="">4.5</span> -->
                        </p>
                        <p class="product-desc">{{$product->sub_title}}</p>
                        <p class="product-price">Price. <span>&#8358;@convert($product->price)</span></p>
                    </div>
                </div>
                <br>
            </a>
            @endif
            @endforeach
            
           
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination gap-1 justify-content-center">
                <!-- <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li> -->
            </ul>
        </nav>
        </main>

@include('frontend.includes.footer')