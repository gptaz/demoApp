@extends('layouts.masterpage')
@section('content')
<div class="pagetitle">
    <a href="#" ><button type="button" class="btn btn-primary"><i class="bi bi-tv me-1"></i> New Product</button></a>
</div>
<div class="col-lg-12">
    <div class="row">

		<?php
			
		?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Product</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable table-striped">
                    <thead>
                    <tr>
												<th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit / Remove</th>
                    </tr>
                    </thead>
                    <tbody>
											<tr>
													<td>Cadbury Roses</td>
													<td><img src="images/4.jpg" width="150"></td>
													<td>5</td>
													<td>$9</td>
													<td>Cadbury Roses feature a delicious variety of popular flavours.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Toblerone Chocolate</td>
													<td><img src="images/5.jpg" width="150"></td>
													<td>7</td>
													<td>$10</td>
													<td>Toblerone Chocolate feature a delicious variety of popular flavours.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Maltesers Milk</td>
													<td><img src="images/6.jpg" width="150"></td>
													<td>15</td>
													<td>$19</td>
													<td>Maltesers Milk good.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Celebrations Chocolate</td>
													<td><img src="images/7.jpg" width="150"></td>
													<td>11</td>
													<td>$10</td>
													<td>Celebrations Chocolate great.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Darrell Lea Raspberry</td>
													<td><img src="images/8.jpg" width="150"></td>
													<td>23</td>
													<td>$7</td>
													<td>Darrell Lea Raspberry bullets.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Cadbury Roses</td>
													<td><img src="images/9.jpg" width="150"></td>
													<td>5</td>
													<td>$9</td>
													<td>Cadbury Roses feature a delicious variety of popular flavours.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Cadbury Roses</td>
													<td><img src="images/10.jpg" width="150"></td>
													<td>5</td>
													<td>$9</td>
													<td>Cadbury Roses feature a delicious variety of popular flavours.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Cadbury Roses</td>
													<td><img src="images/11.jpg" width="150"></td>
													<td>5</td>
													<td>$9</td>
													<td>Cadbury Roses feature a delicious variety of popular flavours.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Cadbury Roses</td>
													<td><img src="images/12.jpg" width="150"></td>
													<td>5</td>
													<td>$9</td>
													<td>Cadbury Roses feature a delicious variety of popular flavours.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Cadbury Roses</td>
													<td><img src="images/13.jpg" width="150"></td>
													<td>5</td>
													<td>$9</td>
													<td>Cadbury Roses feature a delicious variety of popular flavours.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>
											<tr>
													<td>Cadbury Roses</td>
													<td><img src="images/14.jpg" width="150"></td>
													<td>5</td>
													<td>$9</td>
													<td>Cadbury Roses feature a delicious variety of popular flavours.</td>
													
													<td>
															<form action="#" method="get" style="display: inline;">
																	<button type="submit" class="btn btn-warning">Edit</button>
															</form> /
															<form action="#" method="post" style="display: inline;">
																	@csrf
																	@method('DELETE')
																	<button type="submit" class="btn btn-danger">Delete</button>
															</form>
													</td>
											</tr>

                    
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>


    </div>

</div>

@endsection
