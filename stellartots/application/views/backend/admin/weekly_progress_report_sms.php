<hr />
<div class="row">
	<div class="col-md-12">
	
		<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title"><?php echo get_phrase('send_marks');?> via SMS</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">
			<?php echo form_open(base_url() . 'index.php?admin/weekly_progress_report_sms/send_sms' , array('target'=>'_top'));?>

                <div class="form-group">
                    <div class="col-md-3">
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
                    </div>
                </div>
                  <div class="form-group">
                    <div class="col-md-3">
                        <select name="receiver" class="form-control" required>
                        	<option value=""><?php echo get_phrase('select_receiver');?></option>
                        	<option value="student"><?php echo get_phrase('students');?></option>
                        	<option value="parent"><?php echo get_phrase('parents');?></option>
                        </select>
                    </div>
                </div>
                
                  <div class="col-md-3">
                      <button type="submit" class="btn btn-primary"><?php echo get_phrase('send_marks');?> via SMS</button>
                  </div>
                <div class="form-group">
                    <div class="col-md-3">
<!-----SELECT SUBJECT ACCORDING TO SELECTED CLASS-------->
                            <p><input type="checkbox" id="ckbCheckAll" /> Select All Student </p>
							<?php 
                                $classes	=	$this->crud_model->get_classes(); 
                                foreach($classes as $row): ?>
                               
                             <div  id="student_id_<?php echo $row['class_id'];?>" 
                                          style="display:<?php if($class_id == $row['class_id'])echo 'block';else echo 'none';?>;">
                               
                              <?php   
                              $students	=	$this->crud_model->get_students_by_class($row['class_id']); 
                              foreach($students as $row2): ?>
                             <p id="checkBoxes">                        
                          
                              <input name="students_id_value[]" value="<?php echo $row2['student_id'];?>" type="checkbox" id="one"  class="checkBoxClass"/>  <?php if(isset($student_id) && $student_id == $row2['student_id'])
                                                echo 'selected="selected"';?><?php echo $row2['name'];?>
                                 </p>
                                 <?php endforeach;?>   
                               </div>
                            <?php endforeach;?>
                            
                            
<!--test checkbox-->

<!-- end of check box -->
                    </div>
                </div>

              

			<?php echo form_close();?>	
			</div>
			
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
              document.getElementById('student_id_'+i).style.display = 'none' ;
	  		  document.getElementById('student_id_'+i).setAttribute("name" , "temp");
          }
          catch(err){}
      }
      document.getElementById('student_id_'+class_id).style.display = 'block' ;
	  document.getElementById('student_id_'+class_id).setAttribute("name" , "subject_id");
  }

</script> 


<script>
    
$(document).ready(function () {
    $("#ckbCheckAll").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
    
    $(".checkBoxClass").change(function(){
        if (!$(this).prop("checked")){
            $("#ckbCheckAll").prop("checked",false);
        }
    });
});
    var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

</script>
<!--
<style>
  .selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

</style>-->
