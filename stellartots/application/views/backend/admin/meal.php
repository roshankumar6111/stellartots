 <?php 
                                $time	=	$this->db->get('mealtime' )->result_array();
                                foreach($time as $row):?>
                                <span class="fc-header-title pull-right" style="margin-left:10px;"><h3>To: <?php echo $row['todate']; ?></h3> </span>
                                <span class="fc-header-title pull-right"><h3>From: <?php echo $row['fromdate']; ?></h3> </span>
                                
                           <?php     endforeach;
        ?>
<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo get_phrase('meal_list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_meal');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
          
        
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
				
                <table class="table table-bordered datatable">
                	<thead>
                		<tr>
<!--                    		<th><div>#</div></th>-->
                    		<th><div><?php echo get_phrase('S.No');?></div></th>
                            <th><div><?php echo get_phrase('Days');?></div></th>
                    		<th><div><?php echo get_phrase('Meal details');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                       
                    	<?php $count = 1;foreach($meal as $row):?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
							<td><?php echo $row['day'];?></td>
                            <td><?php echo $row['meal'];?></td>
							<td>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_meal/<?php echo $row['id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo get_phrase('edit');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/meal/delete/<?php echo $row['id'];?>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo get_phrase('delete');?>
                                            </a>
                                 </li>
                                </ul>
                            </div>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url() . 'index.php?admin/meal/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Monday');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="monday" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Tuesday');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tuesday" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Wednesday');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="wednesday" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Thursday');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="thursday" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Friday');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="friday" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('From');?></label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="fromdate" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('To');?></label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="to" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>
<!--
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name_numeric');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name_numeric"/>
                                </div>
                            </div>
-->
<!--
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('teacher');?></label>
                                <div class="col-sm-5">
                                    <select name="teacher_id" class="form-control select2" style="width:100%;">
                                    	<?php 
										$teachers = $this->db->get('teacher')->result_array();
										foreach($teachers as $row):
										?>
                                            <option value=""><?php echo get_phrase('select');?></option>
                                    		<option value="<?php echo $row['teacher_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
-->
                        </div>
                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo get_phrase('add_meal');?></button>
                              </div>
							</div>
                    </form>                
                </div>                
			</div>
			<!----CREATION FORM ENDS-->
		</div>
	</div>
</div>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable();
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>