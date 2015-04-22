<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends MX_Controller {

	public function index()
	{
		$this->load->model('testing_models');
		$data['testmodel'] = $this->testing_models->getModels();
		$this->load->view('testing_view',$data);
	}

	/////////////////////////////////////////////////////////
	public function testprint($pdf=false)
	{
		$filename = "Testing";
		$this->load->library('parser');

		$data = array(
		            'blog_title' => 'My Blog Title',
		            'blog_heading' => 'My Blog Heading'
		            );


		$pdfFilePath = FCPATH."assets/downloads/reports/$filename.pdf";
		$data['page_title'] = 'Hello world'; // pass data to the view
		 
		if (file_exists($pdfFilePath) == FALSE)
		{
		    ini_set('memory_limit','32M'); // boost the memory limit if it's low <img src="https://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley">
			$html = $this->parser->parse('test_print', $data);
		    $this->load->library('pdf');
		    $pdf = $this->pdf->load();
		    $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="https://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley">
		    $pdf->WriteHTML($html); // write the HTML into the PDF
		    $pdf->Output($pdfFilePath, 'F'); // save to file because we can
		}
		 
		redirect("assets/downloads/reports/$filename.pdf");
	 }

}

/* End of file testing.php */
/* Location: ./application/modules/testing/controllers/testing.php */