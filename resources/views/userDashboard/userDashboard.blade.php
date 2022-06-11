@extends('userDashboard.master')

@section('title')
     You | Li Data
@endsection

@section('body')
    <!-- START USER DASHBOARD HEADING-->
    <section
        class="section-user-dashboard-heading bg-white mt-5 pt-5 px-md-0 px-5"
    >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h1 class="heading--main">Let's get started!</h1>
                    <h2 class="heading--sub pb-md-5 pb-4">
                        Hi <span>{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</span>, welcome to Phone List.
                    </h2>
                </div>
                <div
                    class="col-md-6 col-10 d-flex align-items-center justify-content-md-end"
                >
                    <form action="{{ route('exports')  }}" method="get" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-txt border-3">
                            Visit Downloaded Data CSVs
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </section>
    <!-- END USER DASHBOARD HEADING-->

    <!-- START USER HISTORY -->
    <section class="section-history py-5 mb-md-0 mb-5 custom-scrollbar">
        <div class="container">
            <div class="row">
                <!-- START PURCHASE HISTORY -->
                <div class="col-md-6 pe-md-5 px-5 py-md-0 py-5">
                    <h3>Purchase History</h3>
                    <canvas id="purchaseChart" width="150" height="140"></canvas>
                </div>
                <!-- END PURCHASE HISTORY -->

                <!-- START BILLING HISTORY -->
                <div class="col-md-6 ps-5 pe-md-0 px-5 pt-md-0 pt-5">
                    <h3>Billing History</h3>
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Credit Used</th>
                                <th>Data Purchased</th>
                                <th>Final Credit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01-02-2022</td>
                                <td>10 Credit</td>
                                <td>100 Data</td>
                                <td>50 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            <tr>
                                <td>02-02-2022</td>
                                <td>20 Credit</td>
                                <td>200 Data</td>
                                <td>60 Credit</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END BILLING HISTORY -->
            </div>
        </div>
    </section>
    <!-- END USER HISTORY -->
@endsection
