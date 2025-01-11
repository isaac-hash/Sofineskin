@include('backend.includes.links')
@include('backend.includes.sidebar')
@include('backend.includes.header')




<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <a href="{{route('add_products')}}" class="btn btn-warning mb-4">Add Product +</a>



        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Products</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th> S/N </th>
                                        <th> Image </th>
                                        <th> Title</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Discount Price</th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $data)
                                    <tr>

                                        <td> {{ $key + 1}} </td>
                                        <td> <img style="width: 100px; height:100px; object-fit:cover;" src="../assets/frontend/uploads/{{$data->image}}" alt="{{$data->title}}"> </td>
                                        <td> {{$data->title}} </td>
                                        <td class="">{{$data->category}}</td>
                                        <td><span class="badge bg-success text-light">{{$data->quantity}}</span></td>
                                        <td class="">{{$data->price}}</td>

                                        @if($data->discount_price)
                                            <td class="">{{$data->discount_price}}</td>
                                        @else
                                        <td class="">None</td>
                                        @endif

                                        <td>
                                            <a href="{{route('update_product', $data->id)}}" class="badge badge-outline-primary">Edit</a>
                                            <a  href="{{route('delete_product', $data->id)}}" class="badge badge-outline-danger" onclick="confirmation(event)">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
		function confirmation(e) {

			e.preventDefault();
			var link = e.currentTarget.getAttribute('href');


			Swal.fire({
				title: 'Are you sure?',
				text: "Are you sure? To Deleted This Data!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'No',
				confirmButtonText: 'Yes, Delete!'
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire(
						'Deleted!',
						'Data Has Been Deleted Successfully.',
						'success'
					)
					window.location.href = link
				}
			});

		}
	</script>

<script src="assets/backend/js/sweetalert2.all.min.js"></script>

        @include('backend.includes.footer')