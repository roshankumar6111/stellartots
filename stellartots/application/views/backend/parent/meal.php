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
						</tr>
					</thead>
                    <tbody>
                       
                    	<?php $count = 1;foreach($meal as $row):?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
							<td><?php echo $row['day'];?></td>
                            <td><?php echo $row['meal'];?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
		</div>
	</div>
</div>


<!--

---  DATA TABLE EXPORT CONFIGURATIONS --                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable();
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>-->
