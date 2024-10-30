
        <!-- footer start  -->
        <footer class="footer">
			<div class="container-fluid d-flex justify-content-between">
			  <nav class="pull-left">
				<ul class="nav">
				  <li class="nav-item">
					<a class="nav-link" href="http://www.themekita.com">
					  ThemeKita
					</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#"> Help </a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#"> Licenses </a>
				  </li>
				</ul>
			  </nav>
			  <div class="copyright">
				2024, made with <i class="fa fa-heart heart text-danger"></i> by
				<a href="http://www.themekita.com">ThemeKita</a>
			  </div>
			  <div>
				Distributed by
				<a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
			  </div>
			</div>
		  </footer>
		</div>
  
		
		<!-- End Custom template -->
	  </div>

	  <!--   Core JS Files   -->
	  <script src="{{ url('admin/js/core/jquery-3.7.1.min.js') }}"></script>
	  <script src="{{ url('admin/js/core/popper.min.js') }}"></script>
	  <script src="{{ url('admin/js/core/bootstrap.min.js') }}"></script>
  
	  <!-- jQuery Scrollbar -->
	  <script src="{{ url('admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
	  <!-- Datatables -->
	  <script src="{{ url('admin/js/plugin/datatables/datatables.min.js') }}"></script>
	  <!-- Kaiadmin JS -->
	  <script src="{{ url('admin/js/kaiadmin.min.js') }}"></script>
	
  
	  <!-- jQuery Sparkline -->
	  <script src="{{ url('admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
  
	  <!-- Chart Circle -->
	  <script src="{{ url('admin/js/plugin/chart-circle/circles.min.js') }}"></script>
  
  
	  <!-- Bootstrap Notify -->
	  <script src="{{ url('admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

  
	  <!-- Sweet Alert -->
	  <script src="{{ url('admin/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
  
	  <!-- Kaiadmin JS -->
	  <script src="{{ url('admin/js/kaiadmin.min.js') }}"></script>
  
	 
	 

	  <script>
		$(document).ready(function () {
		  $("#basic-datatables").DataTable({});
  
		  $("#multi-filter-select").DataTable({
			pageLength: 5,
			initComplete: function () {
			  this.api()
				.columns()
				.every(function () {
				  var column = this;
				  var select = $(
					'<select class="form-select"><option value=""></option></select>'
				  )
					.appendTo($(column.footer()).empty())
					.on("change", function () {
					  var val = $.fn.dataTable.util.escapeRegex($(this).val());
  
					  column
						.search(val ? "^" + val + "$" : "", true, false)
						.draw();
					});
  
				  column
					.data()
					.unique()
					.sort()
					.each(function (d, j) {
					  select.append(
						'<option value="' + d + '">' + d + "</option>"
					  );
					});
				});
			},
		  });
  
		  // Add Row
		  $("#add-row").DataTable({
			pageLength: 5,
		  });
  
		  var action =
			'<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
  
		  $("#addRowButton").click(function () {
			$("#add-row")
			  .dataTable()
			  .fnAddData([
				$("#addName").val(),
				$("#addPosition").val(),
				$("#addOffice").val(),
				action,
			  ]);
			$("#addRowModal").modal("hide");
		  });
		});
	  </script>
	</body>
  </html>
  