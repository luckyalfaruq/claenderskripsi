<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_agenda extends CI_Model {
private $url_kue;
	// public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->url_kue='http://service.exp.uin-suka.ac.id/agenda/index.php/api_agenda';
		
	}
 function baca(){

	 $data =json_decode($this->curl->simple_get($this->url_kue),TRUE);
	 return $data;
}
function last_kode()
  {
    $param = array('kode' => 2323, 'subkode' => 16);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query;
  }
  function univ($data)
  {
  	 $param = array('kode' => 2323, 'subkode' => 3, 'data' => $data);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query;
  }
  function adab ($data)
  {
     $param = array('kode' => 2323, 'subkode' => 4, 'data' => $data);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query;
  }
  function isoshom($data)
  {
     $param = array('kode' => 2323, 'subkode' => 5, 'data' => $data);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query;
  }
  function saintek ($data)
  {
     $param = array('kode' => 2323, 'subkode' => 6, 'data' => $data);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query;
  }
  function tarbiyah ($data)
  {
     $param = array('kode' => 2323, 'subkode' => 7, 'data' => $data);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query;
  }
  function usuludin ($data)
  {
   $param = array('kode' => 2323, 'subkode' => 8, 'data' => $data);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query;
  }
  function web_unit ($data)
  {
     $param = array('kode' => 2323, 'subkode' => 9, 'data' => $data);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query;  
  }
  public function fakultas($data)
  {
     $param = array('kode' => 2323, 'subkode' => 10, 'data' => $data);
    $query = json_decode($this->curl->simple_post($this->url_kue, $param), TRUE);
    return $query; 
    # code...
  }
}

/* End of file  */
/* Location: ./application/models/ */