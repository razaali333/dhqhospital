
	<?php 
	class Mdl_departement extends CI_Model
	{
		public function insert_departement($data)
		{
			 $query=$this->db->insert('sub_departement',$data);
  			 return $query;

		}

		public function get_departement()
		{
			$query=$this->db->get('sub_departement');
			return $query;
		}	

		public function fetch_departement_by_id($id)
		{
			$exe="SELECT * FROM sub_departement WHERE id='$id'";
			$query=$this->db->query($exe);
			 $row=$query->result(); 
      			echo json_encode($row);
			return $query;
		}	

		public function edit_departement($sub_departement,$departement,$price,$id)
		{
			 $exe="UPDATE sub_departement SET name='$sub_departement',departement='$departement',price='$price' WHERE id='$id'";
			$query=$this->db->query($exe);
			
			return $query;
		}

		public function delete_departement($id)
		{
			$exe="DELETE FROM sub_departement WHERE id='$id'";
			$query=$this->db->query($exe);
			
			return $query;
		}
		public function sub_departement($departement)
		{
			$exe="SELECT * FROM sub_departement WHERE departement='$departement'";
			$query=$this->db->query($exe);
			$row=$query->result();
			echo json_encode($row);
			return $row;
		}
	}

	?>