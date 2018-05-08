<?php
	class Kelas11 extends CI_Controller{


     public function Index(){

      $data['content']='kls11_view';
			$this->load->view("kls10",$data);
		}

		public function tambah11(){
			$data['content'] = "kls11_tambah";
			$this->load->view("kls10" , $data);
		}
		public function edit($no){
		  $data['rumus'] =$this->db->get_where('rmskls11',['no'=>$no])->row();
			$data['content'] = "kls11_edit";
			$this->load->view("kls10" , $data);
		}
		function tambah_proses(){
		$judul_rumus = $this->input->post("judul_rumus");
		$rumus = $this->input->post("rumus");


		$data = array(
			"judul_rumus" => $judul_rumus,
			"rumus" => $rumus
			 );

		$insert = $this->db->insert("rmskls11",$data);
		if ($insert) {
			echo "
				<script>
					alert('data berhasil disimpan');

			";
			redirect('kelas11');
		}else{
			echo"
			<script>
					alert('data gagal disimpan');

					</script>
			";

			redirect('Kelas11/tambah');
			}

		}
		public function hapus($no){
			$this->db->delete('rmskls11',['no'=>$no]);
			redirect('Kelas11');
		}
		public function update(){
			$no=$this->input->post("id");
			$judul_rumus = $this->input->post("judul_rumus");
			$rumus = $this->input->post("rumus");


			$data = array(
				"judul_rumus" => $judul_rumus,
				"rumus" => $rumus
				 );
				 $this->db->where('no',$no);
			$insert = $this->db->update("rmskls11",$data);
			if ($insert) {
				echo "
					<script>
						alert('data berhasil Update');

				";
				redirect('Kelas11');
			}else{
				echo"
				<script>
						alert('data gagal disimpan');

						</script>
				";

				redirect('Kelas11/tambah');
				}
		}
	}
?>
