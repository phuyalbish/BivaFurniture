<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel |  Biva Furniture</title>
<link rel="stylesheet" href="<?php echo asset('assets/css/admin.css')?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo asset('assets/js/admin.js')?>"></script>
  
  <body>
    <div class="container">
				<h2>Admin Panel</h2>
				<a href="{{route('developer.signout')}}" class="btn btn-success" data-toggle="modal"><span>Signout</span></a>
				
				@foreach($basicinfo_array as $item)	
				<a href="#editbasicModal" 
				onclick="
							editBasic(
							'{{ $item['addredd'] }}',
							'{{ $item['phone'] }}',
							'{{ $item['footer_des'] }}',
							'{{ $item['link'] }}',
							'{{ $item['email'] }}'

							)" 
				
				class="btn btn-success" data-toggle="modal"><span>Add Basic Information</span></a>
				@endforeach
				
				@if(session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
						asddad
					</div>
				 @endif
				@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Furnitures</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addFurnitureModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Furnitures</span></a>
						</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Material</th>
                        <th>Price</th>
						<th>Sales</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                   	
						  @foreach($product_array as $item)			 
					<tr>
						
						<td><img src="{{ asset('storage/images/'.$item['image_path'])}}" alt="No Img!" width=50 height=50 style="border-radius:50%" >
						</td>
						<td>{{ $item['name'] }}</td>
						<td width="300px" >{{ $item['pro_des'] }}</td>
						
						<td>{{ $item['category'] }}</td>
						<td>{{ $item['material'] }}</td>
						<td>{{ $item['price'] }}</td>
						<td>
							<a onclick="addSale('{{ $item['id'] }}', '{{ $item['totalsale'] }}')" href="#addSalesModal" style="padding:10px height:0px;" class="btn btn-success" data-toggle="modal"><span style="color:#fff">{{ $item['totalsale'] }}</span></a>
						
						</td>
                        <td>
                            <a onclick="
							editFur(
							'{{ $item['id'] }}',
							'{{ $item['name'] }}',
							'{{ $item['pro_des'] }}',
							'{{ $item['image_path'] }}',
							'{{ $item['price'] }}',
							'{{ $item['branch_id'] }}',
							'{{ $item['material'] }}'

							)" 
							href="#editFurnitureModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							
							<a  onclick="delFur('{{ $item['id'] }}')" href="#deleteFurnitureModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							
						</td>
                    </tr> 

						@endforeach
                </tbody>
            </table>
			
        </div>
    </div>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Cateogries</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addCatModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Category</span></a>
						</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
								<?php $count = 0 ?>
					@foreach($branch_array as $item)	
								<?php $count = $count+1 ?>
					@endforeach
                   				
						  @foreach($branch_array as $item)	
						  
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>	
						<td>{{ $item['name'] }}</td>
                        <td>

                            <a onclick="
							editCat(
							'{{ $item['id'] }}', 
							'{{ $item['name'] }}'
							)"
							 href="#editCatModal"  class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							
								<a  href="#deleteCatModal" class="delete" onclick="delCat('{{ $item['id'] }}')" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							

							</td>
                    </tr> 
					@endforeach
                </tbody>
            </table>
			
        </div>
    </div>



	<!-- Edit Furniture HTML -->
	<div id="editbasicModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">  
				<form  enctype="multipart/form-data" method="post"  action="{{ route('basic.edit', ['id' => 1]) }}">
					@csrf
					<input type="hidden" name="fur_id">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Basics</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						
						<div class="form-group">
							<label>Address:</label>
							<input type="text" name="address"  id="basic_address" class="form-control" required>
						</div>
								
						<div class="form-group">
							<label>Email</label>
							<input type="emali" name="email" id="basic_email" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Instagram Link</label>
							<input type="text"    name="link" id="basic_link" class="form-control" required>
						</div>			
						<div class="form-group">
							<label>Phone</label>
							<input type="text"   name="phone" id="basic_phone" class="form-control" required>
						</div>	
								
						<div class="form-group">
							<label>Footer Description:</label>
							<input type="text" name="des" id="basic_des" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>







	<!-- Tewak Sales HTML -->
	<div id="addSalesModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" id="addSalesForm" action="">
				@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Edit Sales</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">				

							<input type="number" id="totalsales" name="sales" id="fur_des" class="form-control" required>
						<p class="text-success"><small>Add the total number of sales happened to this product</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Change">
					</div>
				</form>
			</div>
		</div>
	</div>
	



	<!-- Delete Furniture HTML -->
	<div id="deleteFurnitureModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" id="deletefurnitureform" action="">
				
				@csrf
					@method('DELETE')
					<div class="modal-header">						
						<h4 class="modal-title">Delete Furniture</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete this Furniture.</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Category HTML -->
	<div id="deleteCatModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST"  id="deletecategoryform"  action="">
					@csrf
					@method('DELETE')
					<div class="modal-header">						
						<h4 class="modal-title">Delete Furniture</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete this Furniture.</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Add Furniture -->
	<div id="addFurnitureModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="addfurniture" enctype="multipart/form-data" method="post" action="{{ route('furniture.store') }}">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Add Furniture</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" name="des" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image_path" accept="image/*" required>
						</div>
						<div class="alert alert-success" id="errorimage">
							Image size must be less than 2Mb.
							</div>
						<div class="form-group">
						<label for="category_id">Category:</label>
								<select name="branch_id" required>
									@foreach($branch_array as $item)	
										<option value="{{ $item['id']}}"> 
											{{ $item['name'] }}
										</option>
									@endforeach
								</select>
						</div>
						<br>
						<div class="form-group">
							<label>Price</label>
							<input type="number" name="price" class="form-control" required>
						</div>			
						<div class="form-group">
							<label>Material Used</label>
							<input type="text" name="material" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Add Category -->
	<div id="addCatModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="{{route('category.store')}}"> 
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Add Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" name = "name" class="form-control" required>
						</div>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Furniture HTML -->
	<div id="editFurnitureModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form  enctype="multipart/form-data"  method="POST" id = "editfurnitureform"  action="">
					@csrf
					<input type="hidden" name="fur_id">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Furniture</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" id="fur_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" name="des" id="fur_des" class="form-control" required>
						</div>
						<div class="form-group" >
							<img src="" id="fur_image" max-width=100 height=100 class="col-sm-3" alt="No Img">
							<input type="file" name="image_path"  class="col-sm-6"   accept="image/*" >
						</div>
						<br><br>
						<br>
						<div class="form-group">
						<label for="category_id">Category:</label>
								<select name="branch_id" id="fur_cat" required>
									@foreach($branch_array as $item)	
										<option value="{{ $item['id']}}"> 
											{{ $item['name'] }}
										</option>
									@endforeach
								</select>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label>Price</label>
							<input type="number" name="price" id="fur_price" class="form-control" required>
						</div>			
						<div class="form-group">
							<label>Material Used</label>
							<input type="text" name="material" id="fur_mat" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Category HTML -->
	<div id="editCatModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" id = "editcategoryform"  action="">
					@csrf
				<input type="hidden" id="cat_id" name="cat_id">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" id="cat_name" class="form-control" required>
						</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>





	<script>

			function editBasic(address,phone,footdes,link,email){
					document.getElementById("basic_address").value = ""+address;
					document.getElementById("basic_des").value = footdes;
					document.getElementById("basic_email").value = ""+email;
					document.getElementById("basic_link").value = ""+link;
					document.getElementById("basic_phone").value = ""+phone;

			}

			function  editFur(id, name, description="no des", image, price, category, material){

					const actionsformcat = "{{ route('furniture.edit', ['id' => ':id']) }}".replace(':id', id);
					document.getElementById("editfurnitureform").action = actionsformcat;
					const imagepath = "{{ asset('storage/images/image_path')}}".replace('image_path', image);
					document.getElementById("fur_name").value = ""+name;
					document.getElementById("fur_des").value = ""+description;
					document.getElementById("fur_price").value = price;
					document.getElementById("fur_image").src = imagepath;
					document.getElementById("fur_cat").value = ""+category;
					document.getElementById("fur_mat").value = ""+material;
			}
			function  editCat(id,name){
					const actionsformcat = "{{ route('category.edit', ['id' => ':id']) }}".replace(':id', id);
					document.getElementById("editcategoryform").action = actionsformcat;
					document.getElementById("cat_name").value = ""+name;
			}
			function delCat(id){
				const actionform = "{{ route('category.destroy', ['id' => ':id']) }}".replace(':id', id);
				document.getElementById("deletecategoryform").action =  actionform;
			}
			function delFur(id){
				const actionform = "{{ route('furniture.destroy', ['id' => ':id']) }}".replace(':id', id);
				document.getElementById("deletefurnitureform").action =  actionform;
			}
			function addSale(id,sale){
				const actionform = "{{ route('furniture.changesale', ['id' => ':id']) }}".replace(':id', id);
				document.getElementById("addSalesForm").action =  actionform;
					document.getElementById("totalsales").value = sale;

			}

			
	</script>
</body>
</html>