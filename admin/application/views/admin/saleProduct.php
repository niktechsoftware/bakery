
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Sale Product</h4>
						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/adminController/addemployeeinfo" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
										<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										     <div class="col-xs-3 col-md-3 col-lg-3">

												<div class="form-group row">
													<div class="col-md-12">
														<label>Select Customer<span title="Required" style="color: red;">*</span></label>
													<select class="form-control" id="types" name="types" style="width: 170px;" required="required">  
									 <option value="" selected="selected">--Select Customer--</option>
									 <option value="Regular">Regular</option>  
									 <option value="Retail">Cash Customer</option>
								</select>
														</div>
								
                                         </div>
											</div>
											 <div class="col-xs-3 col-md-3 col-lg-3">
										<div class="form-group row">
													<div class="col-md-12">
							<input class="form-control" placeholder="Customer Name" type="text" id="retail" name="retail" style="display: none;"/>
							<input class="form-control" placeholder="Customer ID" type="text" id="regular" name="regular" style="display: none;"/>
							</div>
						</div>
					</div>

											  <div class="col-xs-3 col-md-3 col-lg-3">

												<div class="form-group row">
													<div class="col-md-12">
														<label>Select Customer<span title="Required" style="color: red;">*</span></label>
													<select class="form-control" id="ref" name="ref" required="required">  
									 <option value="" selected="selected">--Select Class--</option>
									  <option value="None">None</option>
									  <option value="">Classic</option>
								</select>
														</div>
								
                                         </div>
											</div>
												   <div class="col-xs-3 col-md-3 col-lg-3">

												<div class="form-group row">
													<div class="col-md-12">
														<label>Select Customer<span title="Required" style="color: red;">*</span></label>
														<select class="form-control" id="itype" name="itype" required="required">  
								
									  <option value=1>Sale Invoice</option>
									   <option value=2>Tax Invoice</option>
									
								</select>
														</div>
								
                                         </div>
											</div>
										</div>
									</div>
										<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
									 <table class="table table-striped" id="table-1">
                     
                        <thead>
                          <tr>
		                           <th>#</th>
		                           <th>Name</th>
		                          
		                           <th><label>Price/Piece</label></th>
		                            <th><label>Avl.Q.</label></th>
		                           <th><label>Quantity</label></th>
		                            <th><label>CGST</label></th>
		                             <th><label>SGST</label></th>
		                           <th><label>Discount (%)</label></th>
		                           <th><label>Discount Rs</label></th>
		                           <th><label>Total</label></th>
		                           <th><label>Sub Total</label></th>
		                           <th><label>Add</label></th>
		                           <th><label>Remove</label></th>
		                        </tr>
                        </thead>
                        <tbody>
                         <?php $i = 1; for($i = 1; $i <= 10; $i++){ ?>
	                        <tr id="row<?php echo $i; ?>">
	                            <td width="40">
	                                <strong><?php echo $i; ?></strong>
	                             </td>
	                            <td>
	                                  <input type='text' id="item_name-<?php echo $i; ?>" class='form-control item_name' name="item_name<?php echo $i; ?>" width='100%' readonly />
	                                  <div id ="printS<?php echo $i;?>"></div>
	                            </td>
	                            <td>
	                                   <input id="item_price<?php echo $i; ?>" class='form-control'  name="item_price<?php echo $i; ?>" width='100%' readonly >
	                                    <input type="hidden"  id="company_name<?php echo $i; ?>" class='form-control'  name="company_name<?php echo $i; ?>" width='100%'>
	                                     <input type="hidden" id="product_code<?php echo $i; ?>" class='form-control'  name="product_code<?php echo $i; ?>" width='100%' readonly="readonly">
	                          
	                                   <input type='hidden' class='form-control' id='hsn_sac<?php echo $i; ?>' name="hsn_sac<?php echo $i; ?>" width='100%'>
	                            </td>
	                            <td>
	                                <input id="avlQ<?php echo $i; ?>" name="avlQ<?php echo $i; ?>" class='form-control' width='100%' type="text"/ readonly>
	                            </td>
	                            <td>
	                                <input id="item_quantity<?php echo $i;?>" name="item_quantity<?php echo $i;?>" class='form-control' width='100%' type="text"/>
	                            </td>
	                             <td>
	                                <input id="vat<?php echo $i; ?>" name="vat<?php echo $i; ?>"  width='100%' class='form-control' type="text"/ readonly>
	                            </td>
	                             <td>
	                                <input id="sat<?php echo $i; ?>" name="sat<?php echo $i; ?>"  width='100%' class='form-control' type="text"/ readonly>
	                            </td>
	                            <td>
	                                <input id="item_discount<?php echo $i; ?>" name="item_discount<?php echo $i; ?>"  class='form-control' width='100%' type="text"/ readonly>
	                            </td>
	                            <td>
	                                <input id="discount<?php echo $i; ?>" name="discount<?php echo $i; ?>" class='form-control' width='100%' type="text"/ readonly>
	                            </td>
	                            <td>
	                                  <input id="total_price<?php echo $i; ?>" name="total_price<?php echo $i; ?>" class='form-control' width='100%' type="text"/ readonly>
	                            </td>
	                            <td>
	                                <input id="sub_total<?php echo $i; ?>" name="sub_total<?php echo $i; ?>" class='form-control' width='100%' type="text"/readonly>
	                            </td>
	                            <td>
	                            	<?php if($i != 1 && $i != 2 && $i != 3 && $i != 4 && $i != 5 && $i != 6 && $i != 7 && $i != 8 ){?>
	                                <span class="btn btn-success" id="add<?php echo $i;?>">Add</span>
	                                <?php }?>
	                            </td>
	                            <td>
	                            	
	                                <span class="btn btn-danger" id="del<?php echo $i;?>">Del</span>
	                              
	                            </td>
	                       </tr>
	                      
	                       
	                       <?php } ?>
	                       <tr>
	                            	<td colspan="3"><strong>Total</strong></td>
	                                <td colspan="3"><input id="total" name="total" style="width:180px;" type="text" required readonly/></td>
	                               	<td colspan="1"><strong>Discount</strong></td>
	                                <td  colspan="1">
	                                	<input type = "text" name="discount" id ="discount" style="width:180px;"  />
	                                </td>
	                       </tr>
	                      
	                      </tbody>
                        
                      </table>
                      </div>
                  </div>
                  <script>
              jQuery(document).ready(function() {
				$('#types').change(function(){  
			    		if($('#types').val() == 'Regular'){
			    		    $('#regular').show();
			    			$('#retail').hide();   
			    		}
			    		else if($('#types').val() == 'Retail'){
			    			$('#regular').hide();
			    			$('#retail').show();
			    		}
			    		else { 
			    		    $('#regular').hide();
			    		    $('#retail').hide();     
			    		}  
			    	}); 
				alert("hiiii");
                  		$('#add<?php echo $i;?>').click(function(){
                  			alert("hiiii");
						$("#row<?php echo $i+1;?>").show();
						$("#add<?php echo $i;?>").hide();
						$("#del<?php echo $i;?>").show();
					});
				});
			    </script>


								</div>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
