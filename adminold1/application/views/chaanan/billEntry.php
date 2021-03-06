<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $smallTitle;?></h4>
                  </div>
                  <?php $categoryDe=$this->db->get("product_category");?>
                  <div class="card-body">
                     	<form method="post"	action="<?php echo base_url()?>apanelForms/enterBill" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    <?php if($this->uri->segment(3)=="success"){?>
										        <div class="alert alert-success col-md-12 col-lg-12 col-xs-12">Product is done successfully entered!</div>
										    <?php }else{
										    if($this->uri->segment(3)){?>
										     <div class="alert alert-warning col-md-12 col-lg-12 col-xs-12"> Please Try Again !</div>
										    
										   <?php  }}?>
											 <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Company Name or Dealer Name</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                      <input type="text" class="form-control" name="companyName">
                            </div>
                          </div>
                        </div>
                      </div>  
                    	<div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Company Address Or Dealer Address</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                               <input type="text" class="form-control" name="daddress">
                            </div>
                             </div>
                        </div>
                      </div>  
                        
										</div>
									</div>
                   <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
                     <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Dealer Mobile 1</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="text" class="form-control" name="mobile">
                            </div>
                           </div>
                        </div>
                      </div>
                       <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Dealer Mobile 2</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="text-center" class="form-control" name="mobile2">
                            </div>
                           </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                      <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Bill Date (yyyy-mm-dd)</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="date" class="form-control" name="billDate">
                            </div>
                           </div>
                        </div>
                      </div>
                       
                    <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Bill Number</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="text" class="form-control" name="billNumber">
                            </div>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>GST NO.</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="text" class="form-control" name="gst">
                            </div>
                           </div>
                        </div>
                      </div>
                       <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Pin code:</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="text" class="form-control" name="stcode">
                            </div>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                       <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Email ID:</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="text" class="form-control" name="emailid">
                            </div>
                           </div>
                        </div>
                      </div>
                   <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Total Product Quantity</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="text" class="form-control" id="product_quantity" name="product_quantity">
                            </div>
                           </div>
                        </div>
                      </div>
                  <div class="form-group" id ="printT"><div class="form-group">
              <div class="col-sm-10 ">
               <script>
                $("#product_quantity").keyup(function(){
              var w = $("#product_quantity").val();
              $.post("<?php echo site_url("home/printTable") ?>",{w : w}, function(data){
               $("#printT").html(data);
               //alert(data);
                });
                });
              </script>
               </div>
              </div>
              </div>  
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                  <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Enter CGST (%)</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                   <input type="text" class="form-control" name="vatper">
                            </div>
                           </div>
                        </div>
                      </div>
                    <div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"><label>Enter SGST/UTGST(%)</label></div>
													<div class="col-md-7">
													    <div class="form-group">
                                <input type="text" class="form-control" name="satper">
														</div>
								           </div>
												</div>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                      <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Round off</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                <input type="text" class="form-control" name="roff">
                            </div>
                           </div>
                        </div>
                       </div>

                      <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Freight</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                <input type="text" class="form-control" name="freight">
                            </div>
                           </div>
                        </div>
                       </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                      <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Discount</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                <input type="text" class="form-control" name="discount">
                            </div>
                           </div>
                        </div>
                       </div>

                      <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Total Bill Amount</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                <input type="text" class="form-control" name="total_prize">
                            </div>
                           </div>
                        </div>
                       </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Paid Amount</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                <input type="text" class="form-control" name="amount_paid">
                            </div>
                           </div>
                        </div>
                       </div>

                       <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Balance</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                <input type="text" class="form-control" name="balance">
                            </div>
                           </div>
                        </div>
                       </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Pay Mode</label></div>
                          <div class="col-sm-7">
                            <select class="form-control" id="payMode" name="payMode"  required="required">
                              <option value="cash">Cash</option>
                              <option value="OBC">Chaque</option>
                            </select>
                          </div>
                        </div>
                       </div>
                        <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Discription</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                <input type="text" class="form-control" name="discription">
                            </div>
                           </div>
                        </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-5"><label>Dealer Or Company Email</label></div>
                          <div class="col-md-7">
                              <div class="form-group">
                                <input type="text" class="form-control" name="company_email">
                            </div>
                           </div>
                        </div>
                       </div>
                       <div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-5"></div>
													<div class="col-md-7">
														<div class="form-group">
															<button type="submit" class="btn btn-primary">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>
											</div>
                   </div>
                 </div>                  
							</div>
						</div>
				</form>
               <div id="setValue"></div>
                      
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                     <?php $sub=$this->db->get("stock_products");?>

                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th> Company Name</th>
                            <th> Product Name</th>
                            <th>Product Image</th>
                            <th>Sub Category
                            <th>HSN</th>
                            <th>Price<th>
                            <th>Weight</th>
                            <th>Quantity</th>
                            <th>Delete</th>
                      
                          </tr>
                           <?php $i=1; foreach($sub->result() as $row):?>
                         <tr>
                             <td><?php echo $i;?></td>
                             <td><?php echo $row->name;?></td>
                             <td><?php echo $row->company;?></td>
                             <td><img src="<?php echo base_url();?>assets/images/client_gallery/<?php echo $row->image;?>" height="50px;" width="80px;"></td>
                             <td><?php $this->db->where('id',$row->sub_category);
                             $category=$this->db->get('sub_category');
                             echo $category->row()->name;?></td>
                             <td><?php echo $row->hsn;?></td>
                             <td><?php echo $row->selling_price1;?></td>
                             <td></td>
                             <td><?php echo $row->weight;?></td>
                             <td><?php echo $row->quantity;?></td>

                            <td><button type="button" class="btn btn-danger">
                            <a href="<?php echo base_url();?>apanelForms/deleteproduct/<?php echo $row->id;?>">
                            <i class="fa fa-trash" style="color:white"></i>
                            </a></button></td>
                             </tr>
                             <?php $i++; endforeach;?>
                        </thead>
                        <tbody>
                        
                          <tr>
                            </tr>
                       </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            	</div>
            	</div>
							</div>
