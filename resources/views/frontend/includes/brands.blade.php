<main>
  <p class="main-paragraph">
    Beauty Comes With <span class="p-span" style="font-weight:bold">Fine Skin</span>
  </p>
  <div class="ellipse-div">


    @foreach($category as $index => $product)
    @if($index < 3) <div>
      <img style="width: 105px; height:105px; object-fit:cover; border-radius:100%" src="../assets/frontend/uploads/{{$product->image}}" alt="Ellipse1" />
      <span class="face text-center">{{$product->category_name}}</span>
  </div>
  @endif
  @endforeach

  </div>
  <div class="recommend-div">
    <ul class="nav nav-underline ">
      <li class="nav-item">
        <a class="nav-link active" href="#">Our Products</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link text-black" href="#">What's New</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black" href="#">We Recommend</a>
      </li> -->
    </ul>
  </div>

  <!-- hr div -->
  <hr class="line">

  <!-- Filter Search -->
  <div class="filter-div">
    <div class="dropdown">
      <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.48921 18.9856H6.64496V9.40688L0 1.49622V0H18.0363V1.48768L11.7078 9.39834V15.767L8.48921 18.9856ZM7.91066 17.7199H7.96497L10.4421 15.2428V8.95439L16.593 1.26571H1.45952L7.91066 8.94585V17.7199Z" fill="black" />
        </svg>
        Filter
      </a>
      <ul id="searchList" class="dropdown-menu">
        <input type="search" id="searchInput" class="form-control mb-3" placeholder="Search..." dropdown-toggle type="button" data-bs-toggle="dropdown" aria-expanded="false">
        @foreach($category as $index => $categorys)
        <a href="{{route('filter', $categorys->category_name)}}" style="text-decoration: none; color:black;">
          <li class="list-group-item">{{$categorys->category_name}}</li>
        </a>
        @endforeach
        <!-- <li class="list-group-item">Biore UV</li>
          <li class="list-group-item">COSRX</li>
          <li class="list-group-item">CeraVe</li>
          <li class="list-group-item">Dr Teals</li>
          <li class="list-group-item">Dove</li>
          <li class="list-group-item">Etude House</li>
          <li class="list-group-item">EOS</li>
          <li class="list-group-item">Good Molecules</li>
          <li class="list-group-item">Illiyoone</li>
          <li class="list-group-item">Isntree 1</li>
          <li class="list-group-item">I'm From</li>
          <li class="list-group-item">Jumiso</li>
          <li class="list-group-item">Naturium</li>
          <li class="list-group-item">Olay</li>
          <li class="list-group-item">Pyunkang Yul</li>
          <li class="list-group-item">Skin AQUA</li>
          <li class="list-group-item">St ives</li>
          <li class="list-group-item">skin 1004</li>
          <li class="list-group-item">Tree Hut</li>
          <li class="list-group-item">tretirion</li>
          <li class="list-group-item">touch</li> -->
      </ul>
    </div>
  </div>

  <br>