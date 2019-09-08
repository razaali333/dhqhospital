
	<?php 
	class Mdl_other extends CI_Model
	{
		public function fetch_dept_name($id)
		{
			 $exe="SELECT * FROM sub_departement WHERE id='$id'";
			 $query=$this->db->query($exe);
			 $dept=$query->row_array();
  			 return $dept['name'];

		}
		public function fetch_dept_price($id)
		{
			 $exe="SELECT * FROM sub_departement WHERE id='$id'";
			 $query=$this->db->query($exe);
			 $dept=$query->row_array();
  			 return $dept['price'];

		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //XRAY//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_xray()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='Xray'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_xray_recept()
		{
			$exe="SELECT * FROM test_entry WHERE departement='Xray' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function delete_xray($data)
		{
			$exe="DELETE FROM test_entry WHERE receptNumber='$data' AND departement='Xray'";
			$query=$this->db->query($exe); 
		}
		public function insert_xray($data)
		{
			$query1=$this->db->insert('test_entry',$data);
		    return $query1; 
		}
		public function insert_film($data)
		{
			$exe="DELETE FROM xray_film WHERE receptNumber='$data[receptNumber]'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      { 
		          $query2=$this->db->insert('xray_film',$data);
		          return $query2;
		      }
		}
		public function get_xray_invoice_by_id($id)
		{
			 $exe="SELECT * FROM test_entry WHERE receptNumber='$id' AND departement='Xray'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //LAB//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_lab()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='Laboratory'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_lab_recept()
		{
			$exe="SELECT * FROM test_entry WHERE departement='Laboratory' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function delete_lab($data)
		{
			$exe="DELETE FROM test_entry WHERE receptNumber='$data' AND departement='Laboratory'";
			$query=$this->db->query($exe); 
		}
		public function insert_lab($data)
		{
			$query1=$this->db->insert('test_entry',$data);
		    return $query1; 
		}
		
		public function get_lab_invoice_by_id($id)
		{
			 $exe="SELECT * FROM test_entry WHERE receptNumber='$id' AND departement='Laboratory'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //Ultrasound//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_ultrasound()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='Ultrasound'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_ultrasound_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='Ultrasound' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_ultrasound($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='Ultrasound'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_ultrasound_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='Ultrasound'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //ECG//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_ecg()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='ECG'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_ecg_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='ECG' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_ecg($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='ECG'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_ecg_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='ECG'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //ECHO//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_echo()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='ECHO'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_echo_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='ECHO' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_echo($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='ECHO'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_echo_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='ECHO'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //OT//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_ot()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='OT'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_ot_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='OT' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_ot($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='OT'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_ot_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='OT'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //WARD//
////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		public function fetch_ward()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='Ward'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_ward_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='Ward' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_ward($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='Ward'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_ward_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='Ward'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //Labour ROOM//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_lroom()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='L-Room'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_lroom_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='L-Room' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_lroom($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='L-Room'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_lroom_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='L-Room'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}	
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //CT SCAN//
////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		public function fetch_ctscan()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='CT Scan'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_ctscan_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='CT Scan' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_ctscan($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='CT Scan'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_ctscan_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='CT Scan'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}	
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //DENTAL//
////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		public function fetch_dental()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='Dental'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_dental_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='Dental' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_dental($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='Dental'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_dental_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='Dental'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}	
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //AMBULANCE//
////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		public function fetch_ambulance()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='Ambulance'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_ambulance_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='Ambulance' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_ambulance($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='Ambulance'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_ambulance_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='Ambulance'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //Physiotherapy//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_physiotherapy()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='Physiotherapy'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_physiotherapy_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='Physiotherapy' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_physiotherapy($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='Physiotherapy'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_physiotherapy_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='Physiotherapy'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		                                //Medical Certificate//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function fetch_certificate()
		{
			 $exe="SELECT * FROM sub_departement WHERE departement='Medical Certificate'";
			 $query=$this->db->query($exe);
  			 return $query;

		}

		public function fetch_certificate_recept()
		{
			$exe="SELECT * FROM other_entry WHERE departement='Medical Certificate' ORDER BY receptNumber DESC LIMIT 1";
			 $query=$this->db->query($exe);
  			 return $query;

		}
		public function insert_certificate($data)
		{
			$exe="DELETE FROM other_entry WHERE receptNumber='$data[receptNumber]' AND departement='Medical Certificate'";
 
		      $query=$this->db->query($exe);
		      if($query)
		      {
		          $query1=$this->db->insert('other_entry',$data);
		          return $query1; 
		      }
		}
		
		public function get_certificate_invoice_by_id($id)
		{
			 $exe="SELECT * FROM other_entry WHERE receptNumber='$id' AND departement='Medical Certificate'";
   			 $query=$this->db->query($exe);
   			 return $query;
		}	
	}

	?>