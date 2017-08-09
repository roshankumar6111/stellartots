<?php
          $time	=	$this->db->get('weekly_progress_report_date' )->result_array();
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
					<?php echo get_phrase('manage_progress_report');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
        
	
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane  <?php if(!isset($edit_data) && !isset($personal_profile) && !isset($academic_result) )echo 'active';?>" id="list">
				<center>
                <?php echo form_open(base_url() . 'index.php?admin/weekly_progress_report');?>
                <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
                	<tr>
<!--                        <td><?php echo get_phrase('select_exam');?></td>-->
                        <td><?php echo get_phrase('select_class');?></td>
<!--                        <td><?php echo get_phrase('select_subject');?></td>-->
                        <td>&nbsp;</td>
                	</tr>
                	<tr>

                        <td>
                        	<select name="class_id" class="form-control"  onchange="show_subjects(this.value)"  style="float:left;">
                                <option value=""><?php echo get_phrase('select_a_class');?></option>
                                <?php 
                                $classes = $this->db->get('class')->result_array();
                                foreach($classes as $row):
                                ?>
                                    <option value="<?php echo $row['class_id'];?>"
                                        <?php if($class_id == $row['class_id'])echo 'selected';?>>
                                            Class <?php echo $row['name'];?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </td>
                        <td>
                        	<input type="hidden" name="operation" value="selection" />
                    		<input type="submit" value="<?php echo get_phrase('manage_progress_report');?>" class="btn btn-info" />
                        </td>
                	</tr>
                </table>
                </form>
                </center>
                
                
                <br /><br />
                
                
                <?php if( $class_id >0 ):?>
                <?php 
						////CREATE THE MARK ENTRY ONLY IF NOT EXISTS////
						$students	=	$this->crud_model->get_students($class_id);
						foreach($students as $row):
							$verify_data	=	array(	
														'class_id' => $class_id ,
														
														'student_id' => $row['student_id']);
							$query = $this->db->get_where('weekly_progress_report' , $verify_data);
							
							if($query->num_rows() < 1)
								$this->db->insert('weekly_progress_report' , $verify_data);
						 endforeach;
				?>
                <table class="table table-bordered" >
                    <?php  echo form_open(base_url() . 'index.php?admin/weekly_progress_report/'. $class_id);?>
                      <thead>
                        <tr>
                            <td><?php echo get_phrase('From Date');?></td>
                            <td><?php echo get_phrase('To Date');?></td>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                             <td>
                                   <input type="text" class="form-control datepicker" name="from_date"  data-start-view="2">
                                 </td>
                             <td>
                             <input type="text" class="form-control datepicker" name="to_date" data-start-view="2">
                                  
                             </td>
                             </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td><?php echo get_phrase('student');?></td>
                            <td><?php echo get_phrase('Monday');?></td>
                            <td><?php echo get_phrase('Tuesday');?></td> 
                            <td><?php echo get_phrase('Wednesday');?></td>
                            <td><?php echo get_phrase('Thurday');?></td>
                            <td><?php echo get_phrase('Friday');?></td>
                        </tr>
                    </thead>
                    <tbody>
                    	
                        <?php 
						$students	=	$this->crud_model->get_students($class_id);
						foreach($students as $row):
						
							$verify_data	=	array(	
														'class_id' => $class_id ,
													
														'student_id' => $row['student_id']);
														
							$query = $this->db->get_where('weekly_progress_report' , $verify_data);							 
							$marks	=	$query->result_array();
							foreach($marks as $row2):
							?>
                            
							<tr>
								<td>
									<?php echo $row['name'];?>
								</td>
                                
								<td>
                                   
									<textarea  placeholder="<?php echo $row2['monday'];?>" name="monday_<?php echo $row['student_id'];?>" class="form-control"><?php echo $row2['comment'];?></textarea>
								</td><td>
									<textarea  placeholder="<?php echo $row2['tuesday'];?>" name="tuesday_<?php echo $row['student_id'];?>" class="form-control"><?php echo $row2['comment'];?></textarea>
								</td><td>
									<textarea placeholder="<?php echo $row2['wednesday'];?>" name="wednesday_<?php echo $row['student_id'];?>" class="form-control"><?php echo $row2['comment'];?></textarea>
								</td><td>
									<textarea placeholder="<?php echo $row2['thursday'];?>" name="thursday_<?php echo $row['student_id'];?>" class="form-control"><?php echo $row2['comment'];?></textarea>
								</td><td>
									<textarea placeholder="<?php echo $row2['friday'];?>" name="friday_<?php echo $row['student_id'];?>" class="form-control"><?php echo $row2['comment'];?></textarea>
								</td>
                                	<input type="hidden" name="report_id_<?php echo $row['student_id'];?>" value="<?php echo $row2['report_id'];?>" />
                                    
                                	<input type="hidden" name="class_id" value="<?php echo $class_id;?>" />
                                	<input type="hidden" name="operation" value="update" />
							 </tr>

                            
                         	<?php 
							endforeach;
						 endforeach;
						 ?>
                   
                     </tbody>
                    
                  </table>

                  <center>
                      <button type="submit" class="btn btn-primary"><?php echo get_phrase('update_report');?></button>
                  </center>
                  <?php echo form_close();?>
            
            <?php endif;?>
			</div>
            <!----TABLE LISTING ENDS-->
            
		</div>
	</div>
</div>

<script type="text/javascript">
  function show_subjects(class_id)
  {
      for(i=0;i<=100;i++)
      {

          try
          {
              document.getElementById('subject_id_'+i).style.display = 'none' ;
	  		  document.getElementById('subject_id_'+i).setAttribute("name" , "temp");
          }
          catch(err){}
      }
      document.getElementById('subject_id_'+class_id).style.display = 'block' ;
	  document.getElementById('subject_id_'+class_id).setAttribute("name" , "subject_id");
  }

</script> 