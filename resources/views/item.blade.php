<!DOCTYPE html>
<html>
<head>
	<title>Laravel + Jquery Ajax Pagination Including Filter (Page not refresh)</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<br>
			<br>
		    <div class="col-lg-12 margin-tb">					
		        <div class="pull-left">
		            <h2>Laravel + Jquery Ajax Pagination Including Filter (Page not refresh)</h2>
		        </div>
				<br>
		    </div>
		</div>
		<div class="col-sm-7 form-group">
			
			    <div class="input-group" id="search">
<!-- 			        <input class="form-control" id="search" value="{{ Session::get('item_search') }}"
			               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('item-ajax/search')}}?ok=1&search='+this.value)"
			               placeholder="Search..."
			               type="text">

			        <div class="input-group-btn">

			        </div>
			        <div class="input-group-btn ">
						<button type="button" class="btn btn-primary"  onclick="ajaxLoad('{{url('item-ajax/search')}}?ok=1&search='+$('#search').val())">
							  Search
						</button>
			        </div> -->
			        <form action="/item-ajax/search" class="search_form" method="get" autocomplete="off">
			        	<inpt type="hidden" name="csrf-token" content="{{ csrf_token() }}" />
		                <div class="form-field">
		                    <input type="text" name="search" class="search_keyword" id="search_keyword_id"
		                           placeholder="Search....." required/>
		                    <button type="submit" class="search_button" ">Search</button>
		                    <div id="result">

		                    </div>
		                </div>
		            </form>
			    </div>	    
		</div>
		<div style="float: right;">
		    	<div class="input-group-btn ">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item" > Add Item
					</button>
		        </div>
		 </div>
		<table class="table table-bordered">
			<thead>
			    <tr>
					<th>Title</th>
					<th>Description</th>
					<th width="200px">Action</th>
			    </tr>
			</thead>
			<tbody>

			</tbody>

		</table>

		<ul id="pagination" class="pagination-sm"></ul>

	    <!-- Create Item Modal -->
		<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Create Item</h4>
		      </div>
		      <div class="modal-body">
		      		<form data-toggle="validator" action="{{ route('item-ajax.store') }}" method="POST">
		      			<div class="form-group">
							<label class="control-label" for="title">Title:</label>
							<input type="text" name="title" class="form-control" data-error="Please enter title." required />
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label" for="title">Description:</label>
							<textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn crud-submit btn-success">Submit</button>
						</div>
		      		</form>
		      </div>
		    </div>
		  </div>
		</div>


		<!-- Edit Item Modal -->

		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
		      </div>
		      <div class="modal-body">
		      		<form data-toggle="validator" action="/item-ajax/14" method="put">
		      			<div class="form-group">
							<label class="control-label" for="title">Title:</label>
							<input type="text" name="title" class="form-control" data-error="Please enter title." required />
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Description:</label>
							<textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
						</div>
		      		</form>
		      </div>
		    </div>
		  </div>
		</div>
	</div>


	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/jquery_pagination.js"></script>
	<script src="/js/bootstrap_validate.js"></script>

	<script type="text/javascript" src="/js/toastr.min.js"></script>

    <link href="/css/toastr.min.css" rel="stylesheet">
    <script type="text/javascript">
	   var url = "<?php echo route('item-ajax.index')?>";
    </script>
    <script src="/js/item-ajax.js"></script> 
</body>
</html>