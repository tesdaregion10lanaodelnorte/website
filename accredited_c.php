<!doctype html>
<html lang="zxx">

<head>
<?php 
include('header.php');
include('accreditation_q.php');

?>
<script>     
 
 $(document).ready( function () {
    $('#utpras').DataTable();
	//$("#utprasModal").modal();
} );

</script> 

</head>

<body>
	<!--::header part start::-->
	<?php include('navbar.php');?>
	<!--::Header part end::-->

	<!-- breadcrumb start-->
	<section class="breadcrumb breadcrumb_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb_iner text-center">
						<div class="breadcrumb_iner_item">
							<h2>ASESSMENT CENTERS</h2>
							<h5>home <span></span>accredited centers</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb start-->

	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
		<div class="card-body">
            <div class="table-overflow col-md-12">
                <table id="utpras" class="table table-hover table-xl  ">
                    <thead>
                        <tr>
                            
                            
                            <th>Asessment Center</th>
                            <th>Center Manager</th>
                            <th>Qualification Title</th>
                            <th>Accreditation No.</th>
                            <th>Date Accredited</th>
                            <th>Date of Expiration</th>
                            <th class="text-center" scope="col">View Details</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php while ($row = mysqli_fetch_assoc($fetch_c_query)){ ?>
                        <tr>
                           
                           <td><?php echo $row['name_center'] ?> </td>
                           <td><?php echo $row['manager_center'] ?></td>
                                        
                           <td><?php echo $row['name_qua'] ?></td>
                           
                           <td><?php echo $row['ac_num'] ?></td>
                           <td><?php echo $row['date_accre'] ?></td>
						   <td><?php echo $row['date_expire'] ?></td>
                           <td><a data-toggle="modal" data-target="#utprasModal" class="btn btn-info btn-rounded btn-outline">
							   <i class="fa fa-info" aria-hidden="true"></i>
							</a>
						</td>
                           <!-- <td ng-click="makeEditable($index)" ng-include="{{row.isEditable ? 'editableInput.html' : 'readonly.html'}}"> </td> -->
                        </tr>
					<?php } ?>
					
					</tbody>
                </table>
                
            </div> 
        </div>
		</div>
	</section>
	<!-- End Sample Area -->
	<!-- modal area -->
	<?php include('utpras_modal.php'); ?>
	

	<!-- Start Align Area -->
	<div class="whole-wrap">
		
	</div>
	<!-- End Align Area -->

	<!--::footer_part start::-->
	<?php include('footer.php');?>
	<!--::footer_part end::-->

	<!-- scripts datatable -->
	
</body>

</html>