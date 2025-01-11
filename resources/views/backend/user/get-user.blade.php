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
                        <h4 class="card-title">Customer</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N </th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td class="">{{$data->fname}} {{$data->lname}}</td>
                                        <td class="">{{$data->email}}</td>
                                        <td class="">{{$data->phone}}</td>
                                        <td class="">{{$data->address}}</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('backend.includes.footer')