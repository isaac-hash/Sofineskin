@include('backend.includes.links')
@include('backend.includes.sidebar')
@include('backend.includes.header')


<style>

    .ck.ck-editor__main>.ck-editor__editable {
        background-color: black !important;
    }
</style>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <a href="{{route('products')}}" class="btn btn-warning mb-4">All Products</a>



        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Products</h4>

                    <form class="forms-sample" action="{{route('update__product', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-3 form-group">
                            <label for="">Product Title</label>
                            <input type="text" class="form-control text-light" name="title" placeholder="Enter Titile" value="{{$product->title}}">

                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-3 form-group">
                            <label for="">Product Sub Title</label>
                            <input type="text" class="form-control text-light" name="sub_title" placeholder="Enter Sub Titile" value="{{$product->sub_title}}">

                            @error('sub_title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-3 form-group">
                            <label for="exampleFormControlTextarea1">Product Description</label>
                            <textarea class="form-control" id="editor"  name="description" id="exampleFormControlTextarea1" rows="3">{{$product->description}}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- <div class="mt-3 form-group">
                            <label for="exampleFormControlTextarea1">How To Use</label>
                            <textarea class="form-control text-light" name="howUse" id="exampleFormControlTextarea1" rows="3">{{$product->howUse}}</textarea>
                            @error('howUse')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-3 form-group">
                            <label for="exampleFormControlTextarea1">Ingredients</label>
                            <textarea class="form-control text-light" name="ingredients" id="exampleFormControlTextarea1" rows="3">{{$product->ingredients}}</textarea>
                            @error('ingredients')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->

                        <div class="mt-3 form-group">

                            <label for="exampleFormControlSelect1">Select Category</label>
                            <select class="form-control text-light" name="category" id="exampleFormControlSelect1">
                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                @foreach($data as $data)
                                <option value="{{$data->category_name}}">{{$data->category_name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="mt-3 form-group">
                            <label for="">Current Price</label>
                            <input type="number" name="current_price" class="form-control text-light" placeholder="Current Price" value="{{$product->price}}">
                            @error('current_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- <div class="mt-3 form-group">
                            <label for="">Discount Price</label>
                            <input type="number" name="discount_price" class="form-control text-light" placeholder="Discount Price" value="{{$product->discount_price}}">

                            @error('discount_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->

                        <div class="mt-3 form-group">
                            <label for="">Product Quantity</label>
                            <input type="number" name="quantity" min="0" class="form-control text-light" placeholder="Product Quantity" value="{{$product->quantity}}">

                            @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-3 form-group">
                            <div>
                                <img style="width: 140px; height:140px; object-fit:cover;" src="../assets/frontend/uploads/{{$product->image}}" alt="{{$product->title}}">
                            </div>
                            <br>
                            <label for="exampleFormControlFile1">Product Image</label><br>
                            <input type="file" name="product_image" class="form-control" id="exampleFormControlFile1">

                            @error('product_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>



        @include('backend.includes.footer')