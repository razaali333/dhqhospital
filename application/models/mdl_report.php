
<?php 
  class Mdl_report extends CI_Model
  {
    public function get_date_filter_record($search,$from,$to,$recept,$p_name,$gendar,$type,$shift)
    {
      if(isset($search)){
      
    $sql = "SELECT * FROM `opd_entry` WHERE id!=''";

              
        if($from!='' && $to=='')
              
        $sql.=" AND date>='$from' AND date<'$from' + INTERVAL 1 DAY"; 
              
        if($from=='' && $to!='')
              
        $sql.=" AND date>='$to' AND date<'$to' + INTERVAL 1 DAY"; 
             
        if($from!='' && $to!='')

        $sql.=" AND date >= '$from' and date <'$to' + INTERVAL 1 DAY"; 

        if($gendar!='')
                        
            $sql.=" AND gander='$gendar'";

        if($recept!='')
                        
            $sql.=" AND receptNumber='$recept'";

        if($p_name!='')
                        
            $sql.=" AND patient_name LIKE '%$p_name%'";

        if($type!='')
                        
            $sql.=" AND type='$type'"; 

        if($shift!='')
                        
            $sql.=" AND shift='$shift'"; 

        } else {
          $date = date('Y-m-d');
        $sql = "SELECT * FROM `opd_entry` WHERE id!='' AND date>='$date' AND date<'$date' + INTERVAL 1 DAY"; 
        }
//echo $sql;
        $query=$this->db->query($sql);
         return $query;

      
    }

    public function get_daily_record($today)
    {
       $exe="SELECT * FROM `opd_entry` WHERE date>='$today' AND date<'$today' + INTERVAL 1 DAY";
       $query=$this->db->query($exe);
         return $query;
    }



    public function filter_day_report($status)
    {
      if($status=="week")
      {
      $exe="SELECT * FROM `opd_entry` WHERE date between date_sub(now(),INTERVAL 1 WEEK) and now()";
       $query=$this->db->query($exe); 
      }
      else if($status=="month")
      {
      $exe="SELECT * FROM opd_entry WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE())";
      
      }

      else if($status=="year")
      {
        $exe="SELECT  * FROM opd_entry WHERE YEAR(date) = YEAR(CURDATE())";
      }

       $query=$this->db->query($exe); 
       $row=$query->result();
      echo json_encode($row);
      return $row;

    }


    public function get_today_record($search,$recept,$p_name,$gendar,$shift)
    {
       $date = date('Y-m-d');
       $opd_type = "";
       $type=$this->session->userdata('type');
       if($type=="First Male OPD"){
          $opd_type = " AND type='fm_opd'";
       } elseif ($type=="Second Male OPD") {
          $opd_type = " AND type='sm_opd'";
       } elseif($type=="First Female OPD"){
          $opd_type = " AND type='ff_opd'";
       } elseif ($type=="Second Female OPD") {
          $opd_type = " AND type='sf_opd'";
       } elseif($type=="Aged OPD"){
          $opd_type = " AND type='aged_opd'";
       } elseif ($type=="Staff OPD") {
          $opd_type = " AND type='staff_opd'";
       } elseif($type=="Gyne OPD"){
          $opd_type = " AND type='gyne_opd'";
       } elseif ($type=="Casualty OPD") {
          $opd_type = " AND type='casualty_opd'";
       } elseif ($type=="Admin") {
          $opd_type = "";
       } 
       if(isset($search)){
        
       $sql = "SELECT * FROM `opd_entry` WHERE id!='' ".$opd_type." AND date>='$date' AND date<'$date' + INTERVAL 1 DAY";

        if($gendar!='')
                        
            $sql.=" AND gander='$gendar'";

        if($recept!='')
                        
            $sql.=" AND receptNumber='$recept'";

        if($p_name!='')
                        
            $sql.=" AND patient_name LIKE '%$p_name%'";

         

        if($shift!='')
                        
            $sql.=" AND shift='$shift'"; 

        } else {
         
        $sql = "SELECT * FROM `opd_entry` WHERE id!='' ".$opd_type." AND date>='$date' AND date<'$date' + INTERVAL 1 DAY"; 
        }
//echo $sql;
        $query=$this->db->query($sql);
         return $query;

}

  public function monthly_report($search,$from,$to,$type,$gendar,$shift)
    {
      
          if(isset($search)){
      
    $sql = "SELECT COUNT(receptNumber) AS no,SUM(price) AS price,date AS c_date,type AS type FROM opd_entry WHERE id!=''";

              
        if($from!='' && $to=='') {
            $sql.=" AND date>='$from' AND date<'$from' + INTERVAL 1 DAY";
        }
              
         
              
        if($from=='' && $to!='') {
            $sql.=" AND date>='$to' AND date<'$to' + INTERVAL 1 DAY"; 
        }
              
        
             
        if($from!='' && $to!='') {
            $sql.=" AND date >= '$from' and date <'$to' + INTERVAL 1 DAY"; 
        }

        

        if($gendar!='') {
            $sql.=" AND gander='$gendar'";
        }
                        
            

        if($type!='') {
            $sql.=" AND type='$type'";
        }
                        
             

        if($shift!='') {
            $sql.=" AND shift='$shift'"; 
        }
                        
       $sql.=" GROUP BY date";  

        } else {
          $date = date('Y-m-d');
        $sql = "SELECT COUNT(receptNumber) AS no,SUM(price) AS price,date AS c_date,type AS type FROM opd_entry WHERE id!='' AND date>='$date' AND date<'$date' + INTERVAL 1 DAY  GROUP BY date"; 
        }
//echo $sql;
        $query=$this->db->query($sql);
         return $query;
  }
    public function get_other_today_record($search,$recept,$p_name,$departement,$gendar,$shift,$sub_dep)
    {
       $date = date('Y-m-d');
       $dept_type = "";
       $type=$this->session->userdata('type');
       if($type=="Ultrasound"){
          $dept_type = " AND departement='Ultrasound'";
       } elseif ($type=="ECG") {
          $dept_type = " AND departement='ECG'";
       } elseif($type=="ECHO"){
          $dept_type = " AND departement='ECHO'";
       } elseif ($type=="OT") {
          $dept_type = " AND departement='OT'";
       } elseif($type=="Ward"){
          $dept_type = " AND departement='Ward'";
       } elseif ($type=="L-Room") {
          $dept_type = " AND departement='L-Room'";
       } elseif($type=="CT Scan"){
          $dept_type = " AND departement='CT Scan'";
       } elseif ($type=="Dental") {
          $dept_type = " AND departement='Dental'";
       } elseif ($type=="Ambulance") {
          $dept_type = " AND departement='Ambulance'";
       } elseif ($type=="Physiotherapy") {
          $dept_type = " AND departement='Physiotherapy'";
       } elseif ($type=="Medical Certificate") {
          $dept_type = " AND departement='Medical Certificate'";
       } elseif ($type=="Admin") {
          $dept_type = "";
       }
       if(isset($search)){
        
       $sql = "SELECT * FROM `other_entry` WHERE id!='' ".$dept_type." AND date>='$date' AND date<'$date' + INTERVAL 1 DAY";

       if($departement!='')
                        
            $sql.=" AND departement='$departement'";

      if($sub_dep!='')
                        
            $sql.=" AND cat_id='$sub_dep'";

        if($gendar!='')
                        
            $sql.=" AND gander='$gendar'";

        if($recept!='')
                        
            $sql.=" AND receptNumber='$recept'";

        if($p_name!='')
                        
            $sql.=" AND patient_name LIKE '%$p_name%'";

         

        if($shift!='')
                        
            $sql.=" AND shift='$shift'"; 

        } else {
         
        $sql = "SELECT * FROM `other_entry` WHERE id!='' ".$dept_type." AND date>='$date' AND date<'$date' + INTERVAL 1 DAY"; 
        }
//echo $sql;
        $query=$this->db->query($sql);
         return $query;

}

public function all_opd_report($search,$from,$to)
{
$date=date('Y-m-d');
$sql='';
$query1='';
$query2='';
$query3='';
$query4='';
$query5='';

  if(isset($search))
  {
    if(isset($from) AND isset($to))
    {
        if($from!='' && $to=='') {
            $sql.=" AND date>='$from' AND date<'$from' + INTERVAL 1 DAY";
        }
              
         
              
        if($from=='' && $to!='') {
            $sql.=" AND date>='$to' AND date<'$to' + INTERVAL 1 DAY"; 
        }
              
        
             
        if($from!='' && $to!='') {
            $sql.=" AND date >= '$from' and date <'$to' + INTERVAL 1 DAY"; 
        }

         if($from=='' && $to=='') {
            $sql.=" AND date >= '$date' and date <'$date' + INTERVAL 1 DAY"; 
        }
        
    }
  }
  
  else{

  $sql.=" AND date >= '$date' and date <'$date' + INTERVAL 1 DAY"; 
        
}
// $date='date='.$now;
    $fm_exe="SELECT `type`,`shift`,`gander`, COUNT(CASE WHEN `type` = 'fm_opd' AND gander='Male' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `mm_opd`, COUNT(CASE WHEN `type` = 'fm_opd' AND gander='Female' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `mf_opd`, COUNT(CASE WHEN `type` = 'fm_opd' AND gander='Male' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `em_opd`, COUNT(CASE WHEN `type` = 'fm_opd' AND gander='Female' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `ef_opd`,COUNT(CASE WHEN `type` = 'fm_opd' AND gander='Male' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `nm_opd`,COUNT(CASE WHEN `type` = 'fm_opd' AND gander='Female' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `nf_opd` FROM `opd_entry` WHERE id !='' ".$sql;

  $query1=$this->db->query($fm_exe);
    

$sm_exe="SELECT `type`,`shift`,`gander`, COUNT(CASE WHEN `type` = 'sm_opd' AND gander='Male' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `s_mm_opd`, COUNT(CASE WHEN `type` = 'sm_opd' AND gander='Female' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `s_mf_opd`, COUNT(CASE WHEN `type` = 'sm_opd' AND gander='Male' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `s_em_opd`, COUNT(CASE WHEN `type` = 'sm_opd' AND gander='Female' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `s_ef_opd`,COUNT(CASE WHEN `type` = 'sm_opd' AND gander='Male' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `s_nm_opd`,COUNT(CASE WHEN `type` = 'sm_opd' AND gander='Female' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `s_nf_opd` FROM `opd_entry` WHERE id !='' ".$sql;
   
  $query2=$this->db->query($sm_exe);

  $ff_exe="SELECT `type`,`shift`,`gander`, COUNT(CASE WHEN `type` = 'ff_opd' AND gander='Male' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `ff_mm_opd`, COUNT(CASE WHEN `type` = 'ff_opd' AND gander='Female' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `ff_mf_opd`, COUNT(CASE WHEN `type` = 'ff_opd' AND gander='Male' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `ff_em_opd`, COUNT(CASE WHEN `type` = 'ff_opd' AND gander='Female' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `ff_ef_opd`,COUNT(CASE WHEN `type` = 'ff_opd' AND gander='Male' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `ff_nm_opd`,COUNT(CASE WHEN `type` = 'ff_opd' AND gander='Female' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `ff_nf_opd` FROM `opd_entry` WHERE id !='' ".$sql;
   $query3=$this->db->query($ff_exe);

   $sf_exe="SELECT `type`,`shift`,`gander`, COUNT(CASE WHEN `type` = 'sf_opd' AND gander='Male' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `sf_mm_opd`, COUNT(CASE WHEN `type` = 'sf_opd' AND gander='Female' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `sf_mf_opd`, COUNT(CASE WHEN `type` = 'sf_opd' AND gander='Male' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `sf_em_opd`, COUNT(CASE WHEN `type` = 'sf_opd' AND gander='Female' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `sf_ef_opd`,COUNT(CASE WHEN `type` = 'sf_opd' AND gander='Male' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `sf_nm_opd`,COUNT(CASE WHEN `type` = 'sf_opd' AND gander='Female' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `sf_nf_opd` FROM `opd_entry` WHERE id !='' ".$sql;
   $query4=$this->db->query($sf_exe);

    $gyne_exe="SELECT `type`,`shift`,`gander`, COUNT(CASE WHEN `type` = 'gyne' AND gander='Male' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `gynem_opd`, COUNT(CASE WHEN `type` = 'gyne' AND gander='Female' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `gynef_opd` FROM `opd_entry` WHERE id !='' ".$sql;
   $query5=$this->db->query($gyne_exe);
  
   $age_exe="SELECT `type`,`shift`,`gander`, COUNT(CASE WHEN `type` = 'age' AND gander='Male' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `age_mm_opd`, COUNT(CASE WHEN `type` = 'age' AND gander='Female' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `age_mf_opd`, COUNT(CASE WHEN `type` = 'age' AND gander='Male' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `age_em_opd`, COUNT(CASE WHEN `type` = 'age' AND gander='Female' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `age_ef_opd`,COUNT(CASE WHEN `type` = 'age' AND gander='Male' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `age_nm_opd`,COUNT(CASE WHEN `type` = 'age' AND gander='Female' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `age_nf_opd` FROM `opd_entry`WHERE id !='' ".$sql;

   $query6=$this->db->query($age_exe);

   $staff_exe="SELECT `type`,`shift`,`gander`, COUNT(CASE WHEN `type` = 'staff' AND gander='Male' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `staff_mm_opd`, COUNT(CASE WHEN `type` = 'staff' AND gander='Female' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `staff_mf_opd`, COUNT(CASE WHEN `type` = 'staff' AND gander='Male' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `staff_em_opd`, COUNT(CASE WHEN `type` = 'staff' AND gander='Female' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `staff_ef_opd`,COUNT(CASE WHEN `type` = 'staff' AND gander='Male' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `staff_nm_opd`,COUNT(CASE WHEN `type` = 'staff' AND gander='Female' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `staff_nf_opd` FROM `opd_entry` WHERE id !='' ".$sql;
   
   $query7=$this->db->query($staff_exe); 

   $cas_exe="SELECT `type`,`shift`,`gander`, COUNT(CASE WHEN `type` = 'casualty_opd' AND gander='Male' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `cas_mm_opd`, COUNT(CASE WHEN `type` = 'casualty_opd' AND gander='Female' AND shift='morning' THEN `receptNumber` ELSE NULL END) AS `cas_mf_opd`, COUNT(CASE WHEN `type` = 'casualty_opd' AND gander='Male' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `cas_em_opd`, COUNT(CASE WHEN `type` = 'casualty_opd' AND gander='Female' AND shift='evening' THEN `receptNumber` ELSE NULL END) AS `cas_ef_opd`,COUNT(CASE WHEN `type` = 'casualty_opd' AND gander='Male' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `cas_nm_opd`,COUNT(CASE WHEN `type` = 'casualty_opd' AND gander='Female' AND shift='night' THEN `receptNumber` ELSE NULL END) AS `cas_nf_opd` FROM `opd_entry` WHERE id !='' ".$sql;
   
   $query8=$this->db->query($cas_exe);


    return  array('fm_opd' => $query1,
                    'sm_opd' => $query2,
                    'ff_opd' => $query3,
                    'sf_opd' => $query4,
                    'gyne_opd' => $query5,
                    'age_opd' => $query6,
                    'staff_opd' => $query7,
                    'cas_opd' => $query8
                     );
  
}
}