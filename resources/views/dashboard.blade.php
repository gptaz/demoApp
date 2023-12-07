@extends('layouts.masterpage')
@section('content')
<div class="col-lg-12">
    <div class="row">
        <!-- Sales Card -->
        <div class="col-xxl-6 col-md-6">
            <div class="card info-card sales-card">
                <?php
                    $device = 500;
                    $user = 1000;
                ?>
                <div class="card-body">
                    <h5 class="card-title">Order <span>| Total</span> </h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart4"></i>
                        </div>
                        <div class="ps-3">
                            
                            <h6>{{$device}}</h6>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sales Card -->
        <!-- Customers Card -->
        <div class="col-xxl-6 col-xl-12">

            <div class="card info-card customers-card">

                <div class="card-body">
                    <h5 class="card-title">Customers <span></span> </h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-emoji-sunglasses"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{$user}}</h6>


                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End Customers Card -->
        <!-- Reports -->
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Customers</h5>

                    <!-- Pie Chart -->
                    <canvas id="pieChart" style="max-height: 400px;"></canvas>
                    <?php
                    $staff = 20;
                    $student = 40;
                    $urcstaff = 10;
                    $ongoing = 25;
                    $confirming = 14;
                    $finished = 30;
                    ?>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#pieChart'), {
                                type: 'pie',
                                data: {
                                    labels: [
                                        'New',
                                        'VIP',
                                        'Returned Customer'
                                    ],
                                    datasets: [{
                                        label: 'Dataset',
                                        data: [{{$student}}, {{$staff}},{{$urcstaff}}],
                                        backgroundColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(54, 162, 235)',
                                            'rgb(255, 205, 86)'
                                        ],
                                        hoverOffset: 4
                                    }]
                                }
                            });
                        });
                    </script>
                    <!-- End Pie CHart -->


                </div>

            </div>
        </div>
        <!-- End report -->
        <!-- start -->
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Rental/Orders</h5>
                    <!-- Bar Chart -->
                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#barChart'), {
                                type: 'bar',
                                data: {
                                    labels: ['On Going', 'Confirming', 'Finished'],
                                    datasets: [{
                                        label: 'OrderChart',
                                        data: [{{$ongoing}},{{$confirming}},{{$finished}}],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(255, 205, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(255, 205, 86)',
                                            'rgb(75, 192, 192)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                    </script>
                    <!-- End Bar CHart -->
                </div>
            </div>
        </div>
        <!-- End -->

    </div>

</div>
@endsection
