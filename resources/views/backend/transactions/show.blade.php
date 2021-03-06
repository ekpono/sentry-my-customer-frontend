@extends('layout.base')

@section('content')


<div class="account-pages my-5">
    <div class="container">
        <div class="row-justify-content-center">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-0">
                            <h6 class="card-title border-bottom p-3 mb-0 header-title">Transaction Overview</h6>
                            <div class="row py-1">
                                <div class="col-xl-3 col-sm-6">
                                    <!-- stat 1 -->
                                    <div class="media p-3">
                                        <i data-feather="grid" class="align-self-center icon-dual icon-lg mr-4"></i>
                                        <div class="media-body">
                                            <h4 class="mt-0 mb-0">210</h4>
                                            <span class="text-muted font-size-13">Ref Id.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <!-- stat 2 -->
                                    <div class="media p-3">
                                        <i data-feather="check-square" class="align-self-center icon-dual icon-lg mr-4"></i>
                                        <div class="media-body">
                                            <h4 class="mt-0 mb-0">Receivables</h4>
                                            <span class="text-muted">Ref Transaction Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <!-- stat 3 -->
                                    <div class="media p-3">
                                        <i data-feather="users" class="align-self-center icon-dual icon-lg mr-4"></i>
                                        <div class="media-body">
                                            <h4 class="mt-0 mb-0">12</h4>
                                            <span class="text-muted">Customer Ref. Code</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <!-- stat 3 -->
                                    <div class="media p-3">
                                        <i data-feather="clock" class="align-self-center icon-dual icon-lg mr-4"></i>
                                        <div class="media-body">
                                            <h4 class="mt-0 mb-0">25 days</h4>
                                            <span class="text-muted">Payment due in</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-8 col-md-8 col-sm-8 pt-5">
                <div class="card offset-1">
                    <div class="card-body">
                        <h6 class="mt-0 header-title">Description</h6>

                        <div class="text-muted mt-3">
                            <p>To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>

                            <h6 class="mt-0 header-title">Financial Details</h6>


                            <ul class="pl-4 mb-4">
                                <li>Amount : </li>
                                <li>Interest :</li>
                                <li>Total Amount :</li>
                            </ul>


                            <div class="tags">
                                <h6 class="font-weight-bold">Transaction created by:</h6>
                                <div class="text-uppercase">
                                    <a href="#" class="badge badge-soft-primary mr-2">John Doe</a>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="mt-4">
                                        <p class="mb-2"><i class="uil-calender text-danger"></i> Created At</p>
                                        <h5 class="font-size-16">15 July, 2019</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mt-4">
                                        <p class="mb-2"><i class="uil-calendar-slash text-danger"></i> Updated At</p>
                                        <h5 class="font-size-16">15 July, 2019</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mt-4">
                                        <p class="mb-2"><i class="uil-dollar-alt text-danger"></i> Total Amount</p>
                                        <h5 class="font-size-16">$1325</h5>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="mt-4">
                                        <p class="mb-2"><i class="uil-user text-danger"></i> Customer</p>
                                        <h5 class="font-size-16">Rick Perry</h5>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="assign team mt-4">
                                <h6 class="font-weight-bold">Assign To</h6>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('backend/assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm m-1 rounded-circle">
                                </a>
                            </div> --}}



                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</div>

@endsection
