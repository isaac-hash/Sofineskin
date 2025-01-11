@include('backend.includes.links')
@include('backend.includes.sidebar')
@include('backend.includes.header')




<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">



        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                

                    @foreach($data as $data)
                    <form action="{{url('update_utility', $data->id)}}" method="POST" novalidate enctype="multipart/form-data">

                        @csrf

                        <main class="content">
                            <div class="container-fluid p-0">

                                <div class="mb-3">
                                    <h1 class="h3 d-inline align-middle">Update Page Utilities</h1>
                                </div>
                                <hr>
                                <div>
                                    <div class="row">
                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="year" class="my-2">Year</label>
                                                <input type="text" class="form-control" name="year" id="year" value="{{ $data->year }}">
                                                @error('year')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="title" class="my-2">Page Title</label>
                                                <input type="text" class="form-control" name="title" id="title" value="{{ $data->title }}">
                                                @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="key_word" class="my-2">Key Words</label>
                                                <input type="text" class="form-control" name="key_word" id="key_word" value="{{ $data->key_word }}">
                                                @error('key_word')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="site_name" class="my-2">Website Name</label>
                                                <input type="text" class="form-control" name="site_name" id="site_name" value="{{ $data->site_name }}">
                                                @error('site_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="address" class="my-2">Location/Address</label>
                                                <input type="text" class="form-control" name="address" id="address" value="{{ $data->address }}">
                                                @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="phone_no" class="my-2">Phone Number</label>
                                                <input type="text" class="form-control" name="phone_no" id="phone_no" value="{{ $data->phone_number }}">
                                                @error('phone_no')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="mail" class="my-2">Mail</label>
                                                <input type="email" class="form-control" name="mail" id="mail" value="{{ $data->mail }}">
                                                @error('mail')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="twitter" class="my-2">Twitter</label>
                                                <input type="text" class="form-control" name="twitter" id="twitter" value="{{ $data->twitter }}">
                                                @error('twitter')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="facebook" class="my-2">Facebook</label>
                                                <input type="email" class="form-control" name="facebook" id="facebook" value="{{ $data->facebook }}">
                                                @error('facebook')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="linkedin" class="my-2">Instagram</label>
                                                <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{ $data->linkedin }}">
                                                @error('linkedin')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="youtube" class="my-2">Tiktok</label>
                                                <input type="text" class="form-control" name="youtube" id="youtube" value="{{ $data->youtube }}">
                                                @error('youtube')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="input col-sm-12 col-md-6">
                                            <div>
                                                <label for="footer_note" class="my-2">Footer Note</label>
                                                <input type="text" class="form-control" name="footer_note" id="footer_note" value="{{ $data->footer_note }}">
                                                @error('footer_note')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="input col-sm-12">
                                            <div>
                                                <label for="description" class="my-2">Site Description</label>
                                                <textarea name="description" class="form-control" id="description" cols="30" rows="3">
                                                {{ $data->description }}
                                                </textarea>
                                                @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>



                                        <div class="upload-sec input col-sm-12 col-md-6">

                                            <input type="file" name="logo_img" style="display:none;" id="logo_img" value="{{ old('logo_img') }}" accept=".gif, .jpg, .png"><br>

                                            <label for="logo_img" class="my-2 label">

                                                <img style='width:200px' src="../assets/img/{{$data->logo_pic}}" alt="{{$data->name}}"><br>

                                                <span>Update Logo Image</span>
                                            </label>

                                            @error('logo_img')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="upload-sec input col-sm-12 col-md-6">

                                            <input type="file" name="fav_icon" style="display:none;" id="fav_icon" value="{{ old('fav_icon') }}" accept=".gif, .jpg, .png"><br>

                                            <label for="fav_icon" class="my-2 label">

                                                <img style='width:80px' src="../assets/img/{{$data->fav_icon}}" alt="{{$data->name}}"><br>

                                                <span>Update Fave Icon</span>
                                            </label>

                                            @error('fav_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="upload-sec input col-sm-12 col-md-6">

                                            <input type="file" name="top_logo" style="display:none;" id="top_logo" value="{{ old('top_logo') }}" accept=".gif, .jpg, .png"><br>

                                            <label for="top_logo" class="my-2 label">

                                                <img style='width:200px' src="../assets/img/{{$data->top_logo}}" alt="{{$data->name}}"><br>

                                                <span>Update Top Logo</span>
                                            </label>

                                            @error('top_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>




                                    <input type="submit" name="add_carousel" value="Update Utility" class="btn btn-primary my-3 ">
                                </div>
                            </div>
                        </main>

                    </form>
                    @endforeach
                </div>
            </div>
        </div>



        @include('backend.includes.footer')