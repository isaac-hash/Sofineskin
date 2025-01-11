@include('backend.includes.links')
@include('backend.includes.sidebar')
@include('backend.includes.header')




<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <a href="{{route('categories')}}" class="btn btn-warning mb-4">All Category</a>



        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Category</h4>

                    <form class="forms-sample" action="{{route('store_category')}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="exampleInputName1">Category Name</label>
                            <input type="text" class="form-control text-light" id="exampleInputName1" placeholder="Category Name" name="category_name">
                            @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Image upload</label>
                            <input type="file" name="image" class="form-control">
                            <div class="input-group col-xs-12">
                                
                            </div>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>



        @include('backend.includes.footer')