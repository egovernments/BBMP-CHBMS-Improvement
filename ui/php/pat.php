<?php
include('connection.php');   
$pat = "Select DISTINCT bucode, srf_number, queue_type, t1.queue_name, t2.count, convert_tz(time_added_to_queue , '+00:00','+05:30') as time_added_to_queue from patient t1 inner join( SELECT queue_name, count(*) as count, min(time_added_to_queue) as earliest FROM patient Where queue_type != UPPER('NONE') and queue_name != UPPER('NONE') and queue_name != '0' and queue_name != 'OTHER DISTRICT' group by queue_name ) t2 on t1.time_added_to_queue = t2.earliest and t1.queue_name = t2.queue_name order by FIELD(t1.queue_name,'EAST','WEST','SOUTH','BOMMANAHALLI','MAHADEVAPURA','Yelahanka','RAJARAJESWARI NAGAR','DASARAHALLI','Anekal','Bangalore (North)','Bangalore-East','Bangalore-South','OTHER DISTRICT','ICU_VENTILATOR','ICU','HDU','GENERAL')";
$stmt = $mysqli->prepare($pat);		
$stmt->execute();		
$result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);		
if($stmt->affected_rows>0) {
	$data = array();
 		foreach($result as $key => $val){
		if (!array_key_exists($val['queue_type'],$data))
		{	
			$data[$val['queue_type']]= array();
		}
		$data1 = array();
		$data1['total'] = $val['count'];
		$data1['queue_name'] = $val['queue_name'];
		$data1['bucode'] = $val['bucode'];	
		$data1['queue_type'] = $val['queue_type'];	
		$data1['time_added_to_queue'] = $val['time_added_to_queue'];

		array_push($data[$val['queue_type']],$data1);			
 	}
}
$stmt->close();
?>
