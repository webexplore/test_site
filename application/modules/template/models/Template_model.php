<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Template_model extends CI_Model  {
    
    public function __construct()
	{
	    parent::__construct();
	}

    public function getWebMenusByLang($table, $lang)
	{
		$data = array();
		$where_Ary = array(
			"web_menu_master.is_parent" => "P",
			"web_menu_master.is_active" => "Y",
			"web_menu_master.lang" => $lang
		);
		
		$this->db->select("*")
				->from($table)
				->where($where_Ary)
				->order_by('web_menu_master.menu_srl','ASC');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) 
		   {
			  foreach($query->result() as $rows)
			  {
					$data[] = array(
							"FirstLevelMenuData" => $rows,
							"secondLevelMenu" => $this->getSecondLevelMenu($rows->menu_id,$table,$lang) 
						 );
			 }
		   }
		   return $data;
	}
	
	public function getSecondLevelMenu($parentID,$table,$lang)
	{
		$data = array();
		$where_Ary = array(
			"web_menu_master.parent_id" => $parentID,
			"web_menu_master.is_active" => "Y",
			"web_menu_master.lang" => $lang
		);
		
		$this->db->select("*")
				->from($table)
				->where($where_Ary)
				->order_by('web_menu_master.menu_srl','ASC');
		$query = $this->db->get();
		
		if($query->num_rows() > 0) 
		   {
				foreach($query->result() as $rows)
				{
					$data[] = array(
							"secondLevelMenuData" => $rows,
							"thirdLevelMenu" => $this->getThirdLevelMenu($rows->menu_id,$table,$lang) 
						 );
				}
		   }
		   return $data;
	}
	

	function getThirdLevelMenu($parentID,$table,$lang) {
		$data = array();
		$where_Ary = array(
			"web_menu_master.parent_id" => $parentID,
			"web_menu_master.is_active" => "Y",
			"web_menu_master.lang" => $lang
		);
		
		$this->db->select("*")
				->from($table)
				->where($where_Ary)
				->order_by('web_menu_master.menu_srl','ASC');
		$query = $this->db->get();
		
		if($query->num_rows() > 0) 
		   {
				foreach($query->result() as $rows)
				{
					$data[] = array(
							"thirdLevelMenuData" => $rows
						);
				}
		   }
		   return $data;
	}





	public function insertIntoEsnanBooking($data){
		$lastinsert_id = 0;
		$response = [];
		try {
			$this->db->trans_begin();
			
			date_default_timezone_set('Asia/Kolkata');
			$timestamp = date("Y-m-d H:i:s");

			$bookingRefNo = $this->getBookingRefNo();
			$insertArrData = [
				"name" => $data['name'],
				"mobileno" => $data['mobileno'],
				"qty" => $data['qty'],
				"address" => $data['address'],
				"city" => $data['city'],
				"pincode" => $data['pincode'],
				"state" => $data['state'],
				"booking_ref_no" =>	$bookingRefNo,
				"booking_date" => $timestamp
			];
			$this->db->insert('esnan_booking', $insertArrData);
			$lastinsert_id = $this->db->insert_id();
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				return $lastinsert_id=0;
				
			} else {
				$this->db->trans_commit();
				//return $lastinsert_id;
				return $response = [
					"refno" => $bookingRefNo,
					"status" => "success"
				];
			}
		} catch (Exception $err) {
			echo $err->getTraceAsString();
		}
	}

	private function getBookingRefNo(){
        $lastnumber = (int)(0);
        $tag = "";
		$noofpaddingdigit = (int)(7);
		$rowId = 0;
		$bookingRefNo = "";
     
       $sql="SELECT
                id,
                srl,
                prefix
            FROM serials LOCK IN SHARE MODE";
        
        $query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$row = $query->row(); 
				$lastnumber = $row->srl;
				$tag = $row->prefix;
				$rowId = $row->id;
		}
        $digit = (int)(log($lastnumber,10)+1) ;  
        if($digit==7){
            $bookingRefNo = $tag."/".$lastnumber;
		}
		elseif ($digit==6) {
			$bookingRefNo = $tag."/00".$lastnumber;
		}
		elseif ($digit==5) {
			$bookingRefNo = $tag."/00".$lastnumber;
		}
	  	elseif ($digit==4) {
            $bookingRefNo = $tag."/000".$lastnumber;
        }
		elseif($digit==3){
            $bookingRefNo = $tag."/0000".$lastnumber;
		}
		elseif($digit==2){
            $bookingRefNo = $tag."/00000".$lastnumber;
		}
		elseif($digit==1){
            $bookingRefNo = $tag."/000000".$lastnumber;
        }
        $lastnumber = $lastnumber + 1;
        
        //update
        $data = array(
        'srl' => $lastnumber,
        );
        $array = array('id' => $rowId);
        $this->db->where($array); 
        $this->db->update('serials', $data);
		
        return $bookingRefNo;
        
	}
	
	function getPincode()// added by sandipan on 02.01.2019
	{
		$data = array();
		$this->db->select("*")
				->from('pincodes')
				->where('is_active','Y')
				->order_by('pin');
		$query = $this->db->get();
		//echo $this->db->last_query();

		if($query->num_rows()> 0)
		{
            foreach ($query->result() as $rows)
			{
				$data[] = $rows;
            }
            return $data;
             
        }
		else
		{
             return $data;
         }
	}

	function getESnanbookingList($fdat,$tdate) {
		$data = array();
		$where = "DATE_FORMAT(esnan_booking.booking_date,'%Y-%m-%d') BETWEEN '".$fdat."' AND '".$tdate."'";
		$this->db->select("*,pincodes.pin")
				->from('esnan_booking')
				->join('pincodes','esnan_booking.pincode = pincodes.id','INNER')
				->where($where)
				->order_by('booking_date DESC');
		$query = $this->db->get();
	//	echo $this->db->last_query();

		if($query->num_rows()> 0)
		{
            foreach ($query->result() as $rows)
			{
				$data[] = $rows;
            }
            return $data;
             
        }
		else
		{
             return $data;
         }
	}

}