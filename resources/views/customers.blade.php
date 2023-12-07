@extends('layouts.masterpage')
@section('content')
    <div class="pagetitle">

    </div>
    <div class="col-lg-12">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Customer</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Blacklist</th>
                            <th scope="col">Discount</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>aa@aa.aa</td>
                              <td>John Doe</td>
                              <td>0414202202</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>bb@aa.aa</td>
                              <td>Robert J. Lopez</td>
                              <td>111111111</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>cc@aa.aa</td>
                              <td>Shirley A. Crone</td>
                              <td>22222</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>dd@aa.aa</td>
                              <td>Donnie S. Jones</td>
                              <td>3333333</td>
                              <td>$200</td>
                              <td>
                                <span class="badge bg-danger">Blacklist</span>
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>ee@aa.aa</td>
                              <td>Muriel A. Cabral</td>
                              <td>444</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>ff@aa.aa</td>
                              <td>Darius N. Edwards</td>
                              <td>0414202202</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>aa@aa.aa</td>
                              <td>John Doe</td>
                              <td>0414202202</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>aa@aa.aa</td>
                              <td>John Doe</td>
                              <td>0414202202</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>aa@aa.aa</td>
                              <td>John Doe</td>
                              <td>0414202202</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>aa@aa.aa</td>
                              <td>John Doe</td>
                              <td>0414202202</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>
                          <tr>
                              <th scope="row">1</th>
                              <td>aa@aa.aa</td>
                              <td>John Doe</td>
                              <td>0414202202</td>
                              <td>$200</td>
                              <td>
                                  <span class="badge bg-success">No</span>    
                              </td>
                              <td>10%</td>
                          </tr>

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>


        </div>

    </div>
@endsection
