@include('backend.includes.links')
@include('backend.includes.sidebar')
@include('backend.includes.header')




<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <a href="{{route('admin_users')}}" class="btn btn-warning mb-4">All Admin</a>



        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Admin</h4>

                    <form class="forms-sample" action="{{route('store_admin')}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="exampleInputName1">First Name</label>
                            <input type="text" class="form-control text-light" id="exampleInputName1" value="{{ old('first_name') }}" placeholder="First Name" name="first_name">
                            @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Last Name</label>
                            <input type="text" class="form-control text-light" id="exampleInputName1" placeholder="Last Name" value="{{ old('last_name') }}" name="last_name">
                            @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Email</label>
                            <input type="email" class="form-control text-light" id="exampleInputName1" placeholder="Email" value="{{ old('email') }}" name="email">
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


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>



        @include('backend.includes.footer')