<?php
	$CI = get_instance();
	$CI->load->database;
	$CI->load->dbforge();

	// adding time_start_min filed to class_routine table
	$time_start_min_field = 'time_start_min';
	$fields_start = array(
		$time_start_min_field => array(
			'type' => 'INT',
			)
		);
	$CI->dbforge->add_column('class_routine' , $fields_start);

	// adding time_end_min filed to class_routine table
	$time_end_min_field = 'time_end_min';
	$fields_end = array(
		$time_end_min_field => array(
			'type' => 'INT',
			)
		);
	$CI->dbforge->add_column('class_routine' , $fields_end);



?>