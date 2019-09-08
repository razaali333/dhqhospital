
	<?php 
	class Mdl_user extends CI_Model
	{
		//login function
  	public function login($name,$pass)
  	{
  			 $query=$this->db->where(['user_name'=>$name,'password'=>$pass])
                   ->get('user');
               if($query->num_rows())
               {
                return $data=$query->row();
                
               
                return $query;
                // return True;
               }    
               else{
                return false;
               }
  }
  

  public function get_opd_chart()
  {
    $query ="SELECT count(receptNumber) AS fm_no,type FROM opd_entry WHERE type='fm_opd'";

//execute query
$result = $this->db->query($query);

//free memory associated with result

$data = array();
foreach ($result->result() as $row) {
  $data[] = $row;
}
// $result->close();
$query1 ="SELECT count(receptNumber) AS sm_no,type FROM opd_entry WHERE type='sm_opd'";

//execute query
$result1 = $this->db->query($query1);

foreach ($result1->result() as $row1) {
  $data[] = $row1;
}

$query2 ="SELECT count(receptNumber) AS ff_no,type FROM opd_entry WHERE type='ff_opd'";

//execute query
$result2 = $this->db->query($query2);

foreach ($result2->result() as $row2) {
  $data[] = $row2;
}

$query3 ="SELECT count(receptNumber) AS sf_no,type FROM opd_entry WHERE type='sf_opd'";

//execute query
$result3 = $this->db->query($query3);

foreach ($result3->result() as $row3) {
  $data[] = $row3;
}

$query4 ="SELECT count(receptNumber) AS gyne_no,type FROM opd_entry WHERE type='gyne_opd'";

//execute query
$result4 = $this->db->query($query4);

foreach ($result4->result() as $row4) {
  $data[] = $row4;
}

$query5 ="SELECT count(receptNumber) AS aged_no,type FROM opd_entry WHERE type='aged_opd'";

//execute query
$result5 = $this->db->query($query5);

foreach ($result5->result() as $row5) {
  $data[] = $row5;
}

$query6 ="SELECT count(receptNumber) AS staff_no,type FROM opd_entry WHERE type='staff_opd'";

//execute query
$result6 = $this->db->query($query6);

foreach ($result6->result() as $row6) {
  $data[] = $row6;
}

$query7 ="SELECT count(receptNumber) AS casu_no,type FROM opd_entry WHERE type='casualty_opd'";

//execute query
$result7 = $this->db->query($query7);

foreach ($result7->result() as $row7) {
  $data[] = $row7;
}


print json_encode($data);
  }

  public function first_male_opd_invoice()
  {
    // $type="fm_opd";
    $exe="SELECT * FROM `opd_entry` WHERE `id` !='' AND type='fm_opd'  ORDER BY `receptNumber` DESC LIMIT 1 ";
    // echo $exe;exit();
    $query=$this->db->query($exe);
  
    return $query;
  }

   public function second_male_opd_invoice()
  {
    $type="sm_opd";
    $exe="SELECT * FROM opd_entry WHERE type='$type' ORDER BY receptNumber DESC LIMIT 1";
    $query=$this->db->query($exe);
    return $query;
  } 

  public function first_female_opd_invoice()
  {
    $type="ff_opd";
    $exe="SELECT * FROM opd_entry WHERE type='$type' ORDER BY receptNumber DESC LIMIT 1";
    $query=$this->db->query($exe);
    return $query;
  }

    public function second_female_opd_invoice()
  {
    $type="sf_opd";
    $exe="SELECT * FROM opd_entry WHERE type='$type' ORDER BY receptNumber DESC LIMIT 1";
    $query=$this->db->query($exe);
    return $query;
  }
   public function staff_opd_invoice()
  {
    $type="staff_opd";
    $exe="SELECT * FROM opd_entry WHERE type='$type' ORDER BY receptNumber DESC LIMIT 1";
    $query=$this->db->query($exe);
    return $query;
  }

 public function casualty_opd_invoice()
  {
    $type="casualty_opd";
    $exe="SELECT * FROM opd_entry WHERE type='$type' ORDER BY receptNumber DESC LIMIT 1";
    $query=$this->db->query($exe);
    return $query;
  }
 public function aged_opd_invoice()
  {
    $type="age_opd";
    $exe="SELECT * FROM opd_entry WHERE type='$type' ORDER BY receptNumber DESC LIMIT 1";
    $query=$this->db->query($exe);
    return $query;
  }
   public function gyne_opd_invoice()
  {
    $type="gyne_opd";
    $exe="SELECT * FROM opd_entry WHERE type='$type' ORDER BY receptNumber DESC LIMIT 1";
    $query=$this->db->query($exe);
    return $query;
  }


  public function insert_fm_opd($data)
  {
    $exe="DELETE FROM opd_entry WHERE receptNumber='$data[receptNumber]' AND type='fm_opd'";
 
      $query=$this->db->query($exe);
      if($query)
      {
          $query1=$this->db->insert('opd_entry',$data);
      return $query1; 
      }
 
  }

  public function insert_sm_opd($data)
  {
     $exe="DELETE FROM opd_entry WHERE receptNumber='$data[receptNumber]' AND type='sm_opd'";
 
      $query=$this->db->query($exe);
      if($query)
      {
          $query1=$this->db->insert('opd_entry',$data);
      return $query1; 
      }
 
  }

    public function insert_ff_opd($data)
  {
     $exe="DELETE FROM opd_entry WHERE receptNumber='$data[receptNumber]' AND type='ff_opd'";
 
      $query=$this->db->query($exe);
      if($query)
      {
          $query1=$this->db->insert('opd_entry',$data);
      return $query1; 
      }
 
  }


   public function insert_sf_opd($data)
  {
     $exe="DELETE FROM opd_entry WHERE receptNumber='$data[receptNumber]' AND type='sf_opd'";
 
      $query=$this->db->query($exe);
      if($query)
      {
          $query1=$this->db->insert('opd_entry',$data);
      return $query1; 
      }
 
  }
    public function insert_st_opd($data)
  {
     $exe="DELETE FROM opd_entry WHERE receptNumber='$data[receptNumber]' AND type='staff_opd'";
 
      $query=$this->db->query($exe);
      if($query)
      {
          $query1=$this->db->insert('opd_entry',$data);
      return $query1; 
      }
  
  }
   public function insert_casualty_opd($data)
  {
     $exe="DELETE FROM opd_entry WHERE receptNumber='$data[receptNumber]' AND type='casualty_opd'";
 
      $query=$this->db->query($exe);
      if($query)
      {
          $query1=$this->db->insert('opd_entry',$data);
      return $query1; 
      }
 
  }
   public function insert_age_opd($data)
  {
     $exe="DELETE FROM opd_entry WHERE receptNumber='$data[receptNumber]' AND type='age_opd'";
 
      $query=$this->db->query($exe);
      if($query)
      {
          $query1=$this->db->insert('opd_entry',$data);
      return $query1; 
      }
 
  }
     public function insert_gyne_opd($data)
  {
    $exe="DELETE FROM opd_entry WHERE receptNumber='$data[receptNumber]' AND type='gyne_opd'";
 
      $query=$this->db->query($exe);
      if($query)
      {
          $query1=$this->db->insert('opd_entry',$data);
      return $query1; 
      }
 
  }


  public function get_opd_invoice_by_id($id)
  {
   $exe="SELECT * FROM opd_entry WHERE receptNumber='$id' AND type='fm_opd'";
    $query=$this->db->query($exe);
    return $query; 
  }

    public function get_sm_opd_invoice_by_id($id)
  {
   $exe="SELECT * FROM opd_entry WHERE receptNumber='$id' AND type='sm_opd'";
    $query=$this->db->query($exe);
    return $query; 
  }

  public function get_ff_opd_invoice_by_id($id)
  {
    $exe="SELECT * FROM opd_entry WHERE receptNumber='$id' AND type='ff_opd'";
    $query=$this->db->query($exe);
    return $query; 
  }

   public function get_sf_opd_invoice_by_id($id)
  {
    $exe="SELECT * FROM opd_entry WHERE receptNumber='$id' AND type='sf_opd'";
    $query=$this->db->query($exe);
    return $query; 
  }
    public function get_st_opd_invoice_by_id($id)
  {
    $exe="SELECT * FROM opd_entry WHERE receptNumber='$id' AND type='staff_opd'";
    $query=$this->db->query($exe);
    return $query; 
  }

public function get_casualty_opd_invoice_by_id($id)
  {
    $exe="SELECT * FROM opd_entry WHERE receptNumber='$id' AND type='casualty_opd'";
    $query=$this->db->query($exe);
    return $query; 
  }
public function get_age_opd_invoice_by_id($id)
  {
    $exe="SELECT * FROM opd_entry WHERE receptNumber='$id' AND type='age_opd'";
    $query=$this->db->query($exe);
    return $query; 
  }
public function get_gyne_opd_invoice_by_id($id)
  {
    $exe="SELECT * FROM opd_entry WHERE receptNumber='$id' AND type='gyne_opd'";
    $query=$this->db->query($exe);
    return $query; 
  }

  // public function get_user()
  // {
  //  $query= $this->db->get('login');
  //  return $query;
  // }

  // public function fetch_user($id)
  // {
  //   $query="SELECT * FROM `login` WHERE id='$id'";
  //   $query=$this->db->query($query);
  //   return $query->row_array();
  // }

  // public function edit_user($id,$data)
  // {
  //   $this->db->where('login.id',$id);
  //   $query=$this->db->update('login',$data);
  //     return $query;
  //     }

  //   public function delete_user($id)
  //   {
  //      $this->db->where('login.id',$id);
  //     return  $query= $this->db->delete('login');
  //   }  

  //   public function get_cust()
  //   {
  //     $exe="SELECT COUNT(*) AS all_cust FROM customer";
  //     $run=$this->db->query($exe);
   
  //     return $run;
  //   }

  //   public function get_users()
  //   {
  //     $exe="SELECT COUNT(*) AS all_user FROM login";
  //     $run=$this->db->query($exe);
   
  //     return $run;
  //   }

  
	 }

	 ?>
