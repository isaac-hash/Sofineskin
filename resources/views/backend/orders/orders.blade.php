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
                        <h4 class="card-title">All Orders</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N </th>
                                        <th>Image </th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Product Title</th>
                                        <th>Quantity</th>
                                        <th>Price </th>
                                        <th>Payment Status </th>
                                        <th>Delivery Status </th>
                                        <!-- <th>Receipt </th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $data)
                                    <tr>

                                        <td> {{ $key + 1}} </td>
                                        <td> <img style="width: 100px; height:100px; object-fit:cover;" src="../assets/frontend/uploads/{{$data->image}}" alt="{{$data->title}}"> </td>
                                        <td class="d-xl-table-cell">{{$data->name}}</td>
                                        <td class="">{{$data->email}}</td>
                                        <td class="">{{$data->phone}}</td>
                                        <td class="">{{$data->address}}</td>
                                        <td class="">{{$data->product_title}}</td>
                                        <td><span class="badge bg-success text-light">{{$data->quantity}}</span></td>
                                        <td class="">&#x20A6;@convert($data->price)</td>

                                        
                                        <td class=""><a class="btn btn-success">Paid</a></td>

                                        @if($data->delivery_status != 'Delivered')
                                        <td class=""><a href="{{route('deliverd', $data->id)}}" class="btn btn-warning">{{$data->delivery_status}}</a></td>
                                        @else
                                        <td class=""><a href="{{route('deliverd', $data->id)}}" class="btn btn-success">{{$data->delivery_status}}</a></td>
                                        @endif

     
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('backend.includes.footer')