<?php
	class Kelas10 extends CI_Controller{


     public function Index(){

      $data['content']='kls10_view';
			$this->load->view("kls10",$data);
		}

		public function tambah(){
			$data['content'] = "kls10_tambah";
			$this->load->view("kls10" , $data);
		}
		public function edit($no){
		  $data['rumus'] =$this->db->get_where('rmskls10',['no'=>$no])->row();
			$data['content'] = "kls10_edit";
			$this->load->view("kls10" , $data);
		}
		function tambah_proses(){
		$judul_rumus = $this->input->post("judul_rumus");
		$rumus = $this->input->post("rumus");


		$data = array(
			"judul_rumus" => $judul_rumus,
			"rumus" => $rumus
			 );

		$insert = $this->db->insert("rmskls10",$data);
		if ($insert) {
			echo "
				<script>
					alert('data berhasil disimpan');

			";
			redirect('Kelas10');
		}else{
			echo"
			<script>
					alert('data gagal disimpan');

					</script>
			";

			redirect('Kelas10/tambah');
			}

		}
		public function hapus($no){
			$this->db->delete('rmskls10',['no'=>$no]);
			redirect('Kelas10');
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
			$insert = $this->db->update("rmskls10",$data);
			if ($insert) {
				echo "
					<script>
						alert('data berhasil Update');

				";
				redirect('Kelas10');
			}else{
				echo"
				<script>
						alert('data gagal disimpan');

						</script>
				";

				redirect('Kelas10/tambah');
				}
		}
	}
?>
