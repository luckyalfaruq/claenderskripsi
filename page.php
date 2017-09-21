<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('external_m');
		$this->load->model('m_agenda');
	}

	function index()
	{
		// $this->session->sess_destroy();

		$data="";

		$this->load->view('page/header',$data);
		$this->load->view('page/home');
		$this->load->view('page/footer');
	}
	function data(){
		$data=111;
		$hasil=$this->m_agenda->last_kode();
		echo json_encode($hasil);
		// print_r($data1) ;
		// echo $data1;
		// return $data1;
		// echo json_encode($data1);
	}
	function univ($data)
	{
		$hasil=$this->m_agenda->univ($data);
		// $this->load->view('dteil',array('data'=>$this->m_agenda->univ($id)));
// echo "$data[nama_agenda]";
		$this->load->view('page/header',$data);
		$this->load->view('page/detil',array(
			'data' => $this->m_agenda->univ($data)));
		$this->load->view('page/footer');
		
// foreach ($hasil as $key ) {
// echo "$key[nama_agenda]<br>";
// echo "$key[tgl_mulai]<br>";
// echo "$key[jam_mulai]<br>";
// echo "$key[jam_selesai]<br>";
// echo " $key[file_lampiran]<br>";
// echo "<img src='".$key['file_lampiran']."'><br>";
//php didalem html harus ada membuka php lagi
//karena na beidsa 
//titik menendakan menyambung string
//Use of undefined constant file_lampiran - assumed 'file_lampiran'
//jika pake konstata harus difinisikan 
//kalo chrcter harus pake petik  

		// }		
		# code...
	}
function adab ($data)
  {
   $hasil=$this->m_agenda->adab($data);
   $this->load->view('page/header',$data);
		$this->load->view('page/detil1',array(
			'data' => $this->m_agenda->adab($data)));
		$this->load->view('page/footer');
		
//    foreach ($hasil as $key ) {
// echo "$key[nama_agenda]<br>";
// echo "$key[tgl_mulai]<br>";
// echo "$key[jam_mulai]<br>";
// echo "$key[jam_selesai]<br>";
// // echo "$key[lampiran]<br>";

// 		}
  }
  function isoshum ($data)
  {
    $hasil=$this->m_agenda->isoshom($data);
    $this->load->view('page/header',$data);
		$this->load->view('page/detil1',array(
			'data' => $this->m_agenda->isoshom($data)));
		$this->load->view('page/footer');
		
//   foreach ($hasil as $key ) {
// echo "$key[nama_agenda]<br>";
// echo "$key[tgl_mulai]<br>";
// echo "$key[jam_mulai]<br>";
// echo "$key[jam_selesai]<br>";
// // echo "$key[lampiran]<br>";

// 		}
  }
  function saintek ($data)
  {
    $hasil=$this->m_agenda->saintek($data);
    $this->load->view('page/header',$data);
		$this->load->view('page/detil1',array(
			'data' => $this->m_agenda->saintek($data)));
		$this->load->view('page/footer');
		
//     foreach ($hasil as $key ) {
// echo "$key[nama_agenda]<br>";
// echo "$key[tgl_mulai]<br>";
// echo "$key[jam_mulai]<br>";
// echo "$key[jam_selesai]<br>";
// // echo "$key[lampiran]<br>";

// 		}
  }
  function tarbiyah ($data)
  {
    $hasil=$this->m_agenda->tarbiyah($data);
    $this->load->view('page/header',$data);
		$this->load->view('page/detil1',array(
			'data' => $this->m_agenda->tarbiyah($data)));
		$this->load->view('page/footer');
		
//   foreach ($hasil as $key ) {
// echo "$key[nama_agenda]<br>";
// echo "$key[tgl_mulai]<br>";
// echo "$key[jam_mulai]<br>";
// echo "$key[jam_selesai]<br>";
// echo "$key[lampiran]<br>";

// 		}
  }
  function usuludin ($data)
  {
    $hasil=$this->m_agenda->usuludin($data);
    $this->load->view('page/header',$data);
		$this->load->view('page/detil1',array(
			'data' => $this->m_agenda->usuludin($data)));
		$this->load->view('page/footer');
		
//   foreach ($hasil as $key ) {
// echo "$key[nama_agenda]<br>";
// echo "$key[tgl_mulai]<br>";
// echo "$key[jam_mulai]<br>";
// echo "<a $key[jam_selesai]<br>";
// // echo "$key[lampiran]<br>";

// 		}
  }
  function web_unit ($data)
  {
    $hasil=$this->m_agenda->web_unit($data);
    $this->load->view('page/header',$data);
		$this->load->view('page/detil1',array(
			'data' => $this->m_agenda->web_unit($data)));
		$this->load->view('page/footer');
		
//   foreach ($hasil as $key ) {
// echo "$key[nama_agenda]<br>";
// echo "$key[tgl_mulai]<br>";
// echo "$key[jam_mulai]<br>";
// echo "$key[jam_selesai]<br>";
// // echo "$key[lampiran]<br>";

// 		}
  }
  public function fakultas($data)
  {
  	$hasil=$this->m_agenda->fakultas($data);
    $this->load->view('page/header',$data);
		$this->load->view('page/detisyariahl',array(
			'data' => $this->m_agenda->fakultas($data)));
		$this->load->view('page/footer');

  	# code...
  }
	//VALIDASI LOGIN
	
}
