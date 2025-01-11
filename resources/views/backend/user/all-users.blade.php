@include('backend.includes.links')
@include('backend.includes.sidebar')
@include('backend.includes.header')




<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Users</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N </th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <!-- <th>Action</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $data)
                                    <tr>
                                        <td> {{ $key + 1}} </td>
                                        <td class="">{{$data->fname}} {{$data->lname}}</td>
                                        <td class="">{{$data->email}}</td>
                                        <td class="">{{$data->phone}}</td>
                                        <td class="">{{$data->address}}</td>
                                        <!-- <td><a href="{{route('delete_user', $data->id)}}" class="btn btn-danger">Delete</a></td> -->

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