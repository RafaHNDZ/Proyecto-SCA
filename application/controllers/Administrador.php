<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Administrador extends CI_Controller{

		public function panel_admin(){
			$data['titulo'] = 'Panel de Control';
			$data['contenido'] = 'panel_admin';
			$this->load->view('plantilla', $data);
		}

		public function historial_entrevistas(){
			$data['titulo'] = 'Historial de Entrevistas';
			$data['contenido'] = 'historial_entrevistas';
			$this->load->view('plantilla', $data);
		}

		public function historial_fichas(){
			$data['titulo'] = 'Historial de Fichas';
			$data['contenido'] = 'historial_fichas';
			$this->load->view('plantilla', $data);
		}

		public function historial_canalizaciones(){
			$data['titulo'] = 'Historial de Canalizaciones';
			$data['contenido'] = 'historial_canalizaciones';
			$this->load->view('plantilla', $data);
		}

		public function historial_entreviastasGrupales(){
			$data['titulo'] = 'Historial de Entreviastas Grupales';
			$data['contenido'] = 'historial_entreviastasGrupales';
			$this->load->view('plantilla', $data);
		}

		public function admin_personal(){
			$data['titulo'] = 'Administrar Personal';
			$data['contenido'] = 'administrar_personal';
			$this->load->view('plantilla', $data);
		}

		public function registrar_tutor(){
			$data['titulo'] = 'Registrar Tutor';
			$data['contenido'] = 'registrar_tutor';
			$this->load->view('plantilla', $data);
		}

		public function admin_grupos(){
			$data['titulo'] = 'Administrar Grupos';
			$data['contenido'] = 'administrar_grupos';
			$this->load->view('plantilla', $data);
		}

		public function registrar_grupo(){
			$data['titulo'] = 'Registrar Grupo';
			$data['contenido'] = 'registrar_grupo';
			$this->load->view('plantilla', $data);
		}

		public function admin_generaciones(){
			$data['titulo'] = 'Administrar Generaciones';
			$data['contenido'] = 'administrar_generaciones';
			$this->load->view('plantilla', $data);
		}

		public function registrar_generacion(){
			$data['titulo'] = 'Registrar Generacion';
			$data['contenido'] = 'registrar_generacion';
			$this->load->view('plantilla', $data);
		}

		public function admin_especialidades(){
			$data['titulo'] = 'Administrar Especialidades';
			$data['contenido'] = 'admin_especialidades';
			$this->load->view('plantilla', $data);
		}

		public function registrar_especialidad(){
			$data['titulo'] = 'Registrar Especialidad';
			$data['contenido'] = 'registrar_especialidad';
			$this->load->view('plantilla', $data);
		}

		public function admin_semestres(){
			$data['titulo'] = 'Administrar Semestres';
			$data['contenido'] = 'admin_semestres';
			$this->load->view('plantilla', $data);
		}

		public function registrar_semestre(){
			$data['titulo'] = 'Registrar Semestre';
			$data['contenido'] = 'registrar_semestre';
			$this->load->view('plantilla', $data);
		}
	}
