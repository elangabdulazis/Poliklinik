
<?php  
public function pdf(){
		$this->load->library('dompdf_gen');
		$data = [
			'tindakan' => $this->tindakan_model->getData()
		];

		$this->load->view('tindakan/laporan_pdf',$data);
		$paper_size ='A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation);


		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_tindakan.pdf",array('Attachment'=>0));
	}