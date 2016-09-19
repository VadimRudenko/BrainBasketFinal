<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {
	
	function __construct() 
	{
	parent::__construct();
	}
	
		public function get_articles($num, $offset)
	{
		$this->db->select('id,title,content,date');
		$this->db->from('articles');
		$this->db->limit($num, $offset);
		$this->db->order_by('date','DESC');
		return $this->db->get()->result_array();
	}	
	
	public function get_all_comments()   //просмотр всех комментариев из базы
	{
		return $this->db->get('comments');
	}
	
	//public function add_comment($add0, $add1, $add2) // запись нового коммента
	public function add_comment( $add1, $add2) // запись нового коммента
	{  
		$this->db->select('id');
		$this->db->from('articles');
		$this->db->get()->result();
		
		$data = array(
		//'article_id' => $add0,
		
        'author' => $add1,
        'comment_text' => $add2,
       	);
		
		if($this->db->insert('comments', $data) )
		{
			echo 'Комментарий отправлен';
			//redirect
		}
		else
		{
			echo 'Что-то сломалось. Комментарий НЕ отправлен';
		}
		
		
	}
	
	
} 