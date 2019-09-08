
	<?php 
	class Mdl_chart extends CI_Model
	{
		public function get_opd_daily_chart()
		{
			$date=date('Y-m-d');
			  $query ="SELECT count(receptNumber) AS fm_no,type FROM opd_entry WHERE date='$date' AND type='fm_opd'";

$result = $this->db->query($query);

$data = array();
foreach ($result->result() as $row) {
  $data[] = $row;
}
$query1 ="SELECT count(receptNumber) AS sm_no,type FROM opd_entry WHERE date='$date' AND type='sm_opd'";

$result1 = $this->db->query($query1);

foreach ($result1->result() as $row1) {
  $data[] = $row1;
}

$query2 ="SELECT count(receptNumber) AS ff_no,type FROM opd_entry WHERE date='$date' AND type='ff_opd'";

$result2 = $this->db->query($query2);

foreach ($result2->result() as $row2) {
  $data[] = $row2;
}
$query3 ="SELECT count(receptNumber) AS sf_no,type FROM opd_entry WHERE date='$date' AND type='sf_opd'";

$result3 = $this->db->query($query3);

foreach ($result3->result() as $row3) {
  $data[] = $row3;
}

$query4 ="SELECT count(receptNumber) AS gyne_no,type FROM opd_entry WHERE date='$date' AND type='gyne_opd'";

$result4 = $this->db->query($query4);

foreach ($result4->result() as $row4) {
  $data[] = $row4;
}

$query5 ="SELECT count(receptNumber) AS cas_no,type FROM opd_entry WHERE date='$date' AND type='casualty_opd'";

$result5 = $this->db->query($query5);

foreach ($result5->result() as $row5) {
  $data[] = $row5;
}

$query6 ="SELECT count(receptNumber) AS age_no,type FROM opd_entry WHERE date='$date' AND type='age_opd'";

$result6 = $this->db->query($query6);

foreach ($result6->result() as $row6) {
  $data[] = $row6;
}

$query7 ="SELECT count(receptNumber) AS staff_no,type FROM opd_entry WHERE date='$date' AND type='staff_opd'";

$result7 = $this->db->query($query7);

foreach ($result7->result() as $row7) {
  $data[] = $row7;
}
print json_encode($data);
		}


public function get_opd_weekly_chart()
{

$query ="SELECT count(receptNumber) AS fm_no FROM opd_entry WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY AND type='fm_opd'";

$result = $this->db->query($query);

$data = array();
foreach ($result->result() as $row) {
  $data[] = $row;
}
$query1 ="SELECT count(receptNumber) AS sm_no FROM opd_entry WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY AND type='sm_opd'";

$result1 = $this->db->query($query1);

foreach ($result1->result() as $row1) {
  $data[] = $row1;
}

$query2 ="SELECT count(receptNumber) AS ff_no FROM opd_entry WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY AND type='ff_opd'";

$result2 = $this->db->query($query2);

foreach ($result2->result() as $row2) {
  $data[] = $row2;
}
$query3 ="SELECT count(receptNumber) AS sf_no FROM opd_entry WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY AND type='sf_opd'";

$result3 = $this->db->query($query3);

foreach ($result3->result() as $row3) {
  $data[] = $row3;
}

$query4 ="SELECT count(receptNumber) AS gyne_no FROM opd_entry WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY AND type='gyne_opd'";

$result4 = $this->db->query($query4);

foreach ($result4->result() as $row4) {
  $data[] = $row4;
}

$query5 ="SELECT count(receptNumber) AS cas_no FROM opd_entry WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY AND type='casualty_opd'";

$result5 = $this->db->query($query5);

foreach ($result5->result() as $row5) {
  $data[] = $row5;
}

$query6 ="SELECT count(receptNumber) AS age_no FROM opd_entry WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY AND type='age_opd'";

$result6 = $this->db->query($query6);

foreach ($result6->result() as $row6) {
  $data[] = $row6;
}

$query7 ="SELECT count(receptNumber) AS staff_no FROM opd_entry WHERE date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY AND type='staff_opd'";

$result7 = $this->db->query($query7);

foreach ($result7->result() as $row7) {
  $data[] = $row7;
}
print json_encode($data);
}

public function get_opd_fifteen_chart()
{
	$query ="SELECT count(receptNumber) AS fm_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 15 DAY AND `date` < NOW() AND type='fm_opd' GROUP BY type";

$result = $this->db->query($query);

$data = array();
foreach ($result->result() as $row) {
  $data[] = $row;
}
$query1 ="SELECT count(receptNumber) AS sm_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 15 DAY AND `date` < NOW() AND type='sm_opd' GROUP BY type";

$result1 = $this->db->query($query1);

foreach ($result1->result() as $row1) {
  $data[] = $row1;
}

$query2 ="SELECT count(receptNumber) AS ff_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 15 DAY AND `date` < NOW() AND type='ff_opd' GROUP BY type";

$result2 = $this->db->query($query2);

foreach ($result2->result() as $row2) {
  $data[] = $row2;
}
$query3 ="SELECT count(receptNumber) AS sf_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 15 DAY AND `date` < NOW() AND type='sf_opd' GROUP BY type";

$result3 = $this->db->query($query3);

foreach ($result3->result() as $row3) {
  $data[] = $row3;
}

$query4 ="SELECT count(receptNumber) AS gyne_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 15 DAY AND `date` < NOW() AND type='gyne_opd' GROUP BY type";

$result4 = $this->db->query($query4);

foreach ($result4->result() as $row4) {
  $data[] = $row4;
}

$query5 ="SELECT count(receptNumber) AS cas_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 15 DAY AND `date` < NOW() AND type='casualty_opd' GROUP BY type";

$result5 = $this->db->query($query5);

foreach ($result5->result() as $row5) {
  $data[] = $row5;
}

$query6 ="SELECT count(receptNumber) AS age_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 15 DAY AND `date` < NOW() AND type='age_opd' GROUP BY type";

$result6 = $this->db->query($query6);

foreach ($result6->result() as $row6) {
  $data[] = $row6;
}

$query7 ="SELECT count(receptNumber) AS staff_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 15 DAY AND `date` < NOW() AND type='staff_opd' GROUP BY type";

$result7 = $this->db->query($query7);

foreach ($result7->result() as $row7) {
  $data[] = $row7;
}
print json_encode($data);
}


public function get_opd_monthly_chart()
{
  $query ="SELECT count(receptNumber) AS fm_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 30 DAY AND `date` < NOW() AND type='fm_opd' GROUP BY type";

$result = $this->db->query($query);

$data = array();
foreach ($result->result() as $row) {
  $data[] = $row;
}
$query1 ="SELECT count(receptNumber) AS sm_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 30 DAY AND `date` < NOW() AND type='sm_opd' GROUP BY type";

$result1 = $this->db->query($query1);

foreach ($result1->result() as $row1) {
  $data[] = $row1;
}

$query2 ="SELECT count(receptNumber) AS ff_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 30 DAY AND `date` < NOW() AND type='ff_opd' GROUP BY type";

$result2 = $this->db->query($query2);

foreach ($result2->result() as $row2) {
  $data[] = $row2;
}
$query3 ="SELECT count(receptNumber) AS sm_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 30 DAY AND `date` < NOW() AND type='sm_opd' GROUP BY type";

$result3 = $this->db->query($query3);

foreach ($result3->result() as $row3) {
  $data[] = $row3;
}

$query4 ="SELECT count(receptNumber) AS gyne_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 30 DAY AND `date` < NOW() AND type='gyne_opd' GROUP BY type";

$result4 = $this->db->query($query4);

foreach ($result4->result() as $row4) {
  $data[] = $row4;
}

$query5 ="SELECT count(receptNumber) AS cas_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 30 DAY AND `date` < NOW() AND type='casualty_opd' GROUP BY type";

$result5 = $this->db->query($query5);

foreach ($result5->result() as $row5) {
  $data[] = $row5;
}

$query6 ="SELECT count(receptNumber) AS age_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 30 DAY AND `date` < NOW() AND type='age_opd' GROUP BY type";

$result6 = $this->db->query($query6);

foreach ($result6->result() as $row6) {
  $data[] = $row6;
}

$query7 ="SELECT count(receptNumber) AS staff_no  FROM opd_entry WHERE `date` >= NOW() - INTERVAL 30 DAY AND `date` < NOW() AND type='staff_opd' GROUP BY type";

$result7 = $this->db->query($query7);

foreach ($result7->result() as $row7) {
  $data[] = $row7;
}
print json_encode($data);
}


  public function get_opd_name_monthly_chart($value)
  {
      $query ="SELECT count(receptNumber) AS fm_no  FROM opd_entry WHERE type='fm_opd' AND MONTH(date)='$value' AND YEAR(date)=YEAR(CURRENT_DATE)";

$result = $this->db->query($query);

$data = array();
foreach ($result->result() as $row) {
  $data[] = $row;
}
$query1 ="SELECT count(receptNumber) AS sm_no  FROM opd_entry WHERE type='sm_opd' AND MONTH(date)='$value' AND YEAR(date)=YEAR(CURRENT_DATE)";

$result1 = $this->db->query($query1);

foreach ($result1->result() as $row1) {
  $data[] = $row1;
}

$query2 ="SELECT count(receptNumber) AS ff_no  FROM opd_entry WHERE type='ff_opd' AND MONTH(date)='$value' AND YEAR(date)=YEAR(CURRENT_DATE)";

$result2 = $this->db->query($query2);

foreach ($result2->result() as $row2) {
  $data[] = $row2;
}
$query3 ="SELECT count(receptNumber) AS sf_no  FROM opd_entry WHERE type='sf_opd' AND MONTH(date)='$value' AND YEAR(date)=YEAR(CURRENT_DATE)";

$result3 = $this->db->query($query3);

foreach ($result3->result() as $row3) {
  $data[] = $row3;
}

$query4 ="SELECT count(receptNumber) AS gyne_no  FROM opd_entry WHERE type='gyne_opd' AND MONTH(date)='$value' AND YEAR(date)=YEAR(CURRENT_DATE)";

$result4 = $this->db->query($query4);

foreach ($result4->result() as $row4) {
  $data[] = $row4;
}

$query5 ="SELECT count(receptNumber) AS cas_no  FROM opd_entry WHERE type='casualty_opd' AND MONTH(date)='$value' AND YEAR(date)=YEAR(CURRENT_DATE)";

$result5 = $this->db->query($query5);

foreach ($result5->result() as $row5) {
  $data[] = $row5;
}

$query6 ="SELECT count(receptNumber) AS age_no  FROM opd_entry WHERE type='age_opd' AND MONTH(date)='$value' AND YEAR(date)=YEAR(CURRENT_DATE)";

$result6 = $this->db->query($query6);

foreach ($result6->result() as $row6) {
  $data[] = $row6;
}

$query7 ="SELECT count(receptNumber) AS staff_no  FROM opd_entry WHERE type='staff_opd' AND MONTH(date)='$value' AND YEAR(date)=YEAR(CURRENT_DATE)";

$result7 = $this->db->query($query7);

foreach ($result7->result() as $row7) {
  $data[] = $row7;
}
print json_encode($data);
  }


	}