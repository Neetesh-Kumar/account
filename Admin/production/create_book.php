<?php
	include('../../connection.php');
    date_default_timezone_set("Asia/Karachi");
    $date= date("Y-m-d");
    $time= date("H:i:s");
    $created_at=$time;
    $booking_date=$date;

	$query = "insert into add_booking values(null,'$booking_date',$_POST[account],$_POST[cnno],'$_POST[shipper_name]','$_POST[city]','$_POST[area]',$_POST[cells],$_POST[shi_landline],'$_POST[shi_email]','$_POST[add_password]','$_POST[pickup_add]','$_POST[return_add]','$_POST[cong_name]','$_POST[cong_ref]','$_POST[cong_email]',$_POST[cong_cells],'$_POST[cong_address]','$_POST[orgin_city]','$_POST[dest_city]','$_POST[service_type]','$_POST[pices]','$_POST[weight]','$_POST[sel_consi]','$_POST[cons_districation]','$_POST[consi_remarks]','$time')";
	$query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=all_booking.php');
?>
