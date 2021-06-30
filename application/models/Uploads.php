<?php
/**
 * Author: Firoz Ahmad Likhon <likh.deshi@gmail.com>
 * Website: https://github.com/firoz-ahmad-likhon
 *
 * Copyright (c) 2018 Firoz Ahmad Likhon
 * Released under the MIT license
 *       ___            ___  ___    __    ___      ___  ___________  ___      ___
 *      /  /           /  / /  /  _/ /   /  /     /  / / _______  / /   \    /  /
 *     /  /           /  / /  /_ / /    /  /_____/  / / /      / / /     \  /  /
 *    /  /           /  / /   __|      /   _____   / / /      / / /  / \  \/  /
 *   /  /_ _ _ _ _  /  / /  /   \ \   /  /     /  / / /______/ / /  /   \    /
 *  /____________/ /__/ /__/     \_\ /__/     /__/ /__________/ /__/     /__/
 * Likhon the hackman, who claims himself as a hacker but really he isn't.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Model 
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
		 $this->load->database(); 
    }

    /**
     * Find data.
     *
     * @param $id
     * @return mixed
     */
	 
	 
	 
	 
	 
	 
	 
	 
	   public function image_uploads($id)
    {
		
        return $this->db->insert('image_upload', $id,$id,1);
    }
	
	
	 public function all_image()
    {
       $query=$this->db->query("select * from image_upload");
	return $query->result();
    }
	
	
	
	
	 public function selected_image()
    {
       $query=$this->db->query("select * from image_upload where flag=1");
	return $query->result();
    }
	 public function selected_image_slider()
    {
       $query=$this->db->query("select * from slider where flag=1");
	return $query->result();
    }
		
	 public function count_of_image()
    {
	
	 $query4=$this->db->from("image_upload")->count_all_results();
	echo $query4;
	die();
	}


 public function allf()
    {
        return $this->db->get_where("permissions", array("deleted_at" => null))->result();
    }
	/**************	                   delete from here                 **************/
	
	
	
	   public function image_uploads_slider($id)
    {
		
        return $this->db->insert('slider', $id,$id,1);
    }
	
 public function all_image_slider()
    {
       $query=$this->db->query("select * from slider");
	return $query->result();
    }
}