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
                        <h4 class="card-title">All Payments</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N </th>
                                        <th>UserName </th>
                                        <th>amount </th>
                                        <th>currency</th>
                                        <!-- <th>ref</th> -->
                                        <th>status</th>
                                        <th>Date</th>
                                        <!-- <th>Quantity</th> -->
                                        <!-- <th>Price </th> -->
                                        <!-- <th>Payment Status </th> -->
                                        <!-- <th>Delivery Status </th> -->
                                        <!-- <th>Receipt </th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $data)
                                    <tr>

                                        <td> {{ $key + 1}} </td>

                                        <td class=""><a href="{{route('get-user', $data->any1)}}" class="btn btn-success">View Customer</a></td>
                                        <td class="">&#x20A6;@convert($data->amount)</td>
                                        <td class="">{{$data->currency}}</td>
                                        <td class="">{{$data->status}}</td>
                                        <td class="">{{$data->today}}</td>
                                        


                                        


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