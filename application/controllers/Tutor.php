<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor extends CI_Controller{

	public function index(){

		$data['titulo'] = 'Log In';
		$data['contenido'] = 'login';
		$this->load->view('plantilla', $data);
	}

	public function tutor_panel(){

		$data['titulo'] = 'Panel Tutor';
		$data['contenido'] = 'panel_tutor';
		$this->load->view('plantilla', $data);
	}

	public function formatos(){

		$data['titulo'] = 'Formatos';
		$data['contenido'] = 'formatos';
		$this->load->view('plantilla', $data);
	}

	public function frlEntrevistaIndividual(){

		$data['titulo'] = 'Formulario Entrevistas';
		$data['contenido'] = 'frlEntrevistaIndividual';
		$this->load->view('plantilla', $data);
	}

	public function frlAcompanaminetoGrupo(){

		$data['titulo'] = 'Formulario Entrevistas';
		$data['contenido'] = 'frlAcompanaminetoGrupo';
		$this->load->view('plantilla', $data);
	}

	public function frlFichaDeCanalizacion(){

		$data['titulo'] = 'Formulario Canalizacion';
		$data['contenido'] = 'frlFichaDeCanalizacion';
		$this->load->view('plantilla', $data);
	}

	public function grupo(){

		$data['titulo'] = 'Grupo';
		$data['contenido'] = 'lista_grupo';
		$this->load->view('plantilla', $data);
	}

	public function historial_entrevistas(){
		$data['titulo'] = 'Historial de Entrevistas';
		$data['contenido'] = 'historial_entrevistas';
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

	public function ficha_alumno(){
		$data['titulo'] = 'Ficha de Registro';
		$data['contenido'] = 'frlFichaAlumno';
		$this->load->view('plantilla', $data);

	}
}
