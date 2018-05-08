<?php
	class Kelas12 extends CI_Controller{


     public function Index(){

      $data['content']='kls12_view';
			$this->load->view("kls10",$data);
		}

		public function tambah(){
			$data['content'] = "kls12_tambah";
			$this->load->view("kls10" , $data);
		}
		public function edit($no){
		  $data['rumus'] =$this->db->get_where('rmskls12',['no'=>$no])->row();
			$data['content'] = "kls12_edit";
			$this->load->view("kls10" , $data);
		}
		function tambah_proses(){
		$judul_rumus = $this->input->post("judul_rumus");
		$rumus = $this->input->post("rumus");


		$data = array(
			"judul_rumus" => $judul_rumus,
			"rumus" => $rumus
			 );

		$insert = $this->db->insert("rmskls12",$data);
		if ($insert) {
			echo "
				<script>
					alert('data berhasil disimpan');

			";
			redirect('kelas12');
		}else{
			echo"
			<script>
					alert('data gagal disimpan');

					</script>
			";

			redirect('Kelas12/tambah');
			}

		}
		public function hapus($no){
			$this->db->delete('rmskls12',['no'=>$no]);
			redirect('Kelas12');
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
			$insert = $this->db->update("rmskls12",$data);
			if ($insert) {
				echo "
					<script>
						alert('data berhasil Update');

				";
				redirect('Kelas12');
			}else{
				echo"
				<script>
						alert('data gagal disimpan');

						</script>
				";

				redirect('Kelas12/tambah');
				}
		}
	}
?>
