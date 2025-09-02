
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data["title"] = "First Prime";
		$data["header"] = "Semetic Prime";
		$this->load->view("pages/prime", $data);
	}

	public function page2()
	{
		$data["title"] = "Second Prime";
		$data["header"] = "Conversions";
		$this->load->view("pages/prime2", $data);
	}

	public function page3()
	{
		$data["title"] = "Music Prime";
		$data["header"] = "Music";
		$this->load->view("pages/prime3", $data);
	}
	public function page4()
	{
		$data["title"] = "Expenses";
		$data["header"] = "Expenses";
		$this->load->view("pages/prime4", $data);
	}
	public function css()
	{
		$data["title"] = "CSS Elements";
		$data["header"] = "CSS Elements";
		$this->load->view("pages/css", $data);
	}
	public function javascript()
	{
		$data["title"] = "Javascript Elements";
		$data["header"] = "Javascript Elements";
		$this->load->view("pages/javascript", $data);
	}
}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */
