<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *  Article Controller
 */
class Student extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('StudentM');
	
	}
	public function index()
	{

		$data['data'] = $this->StudentM->get_records('student');
		// echo "<pre>";print_r($data); die();

		$this->load->view('student_details/list',$data);
	}
	public function add()
	{
		$data['student_name'] = $this->input->post('student_name');
		$data['father_name'] = $this->input->post('father_name');
		$data['mother_name'] = $this->input->post('mother_name');
		$data['class'] = $this->input->post('class');
		$data['dob'] = $this->input->post('dob');
		$data['scholar_no'] = $this->input->post('scholar_no');
		$data['Samagra'] = $this->input->post('Samagra');
		$data['aadhar'] = $this->input->post('aadhar');
		$data['account'] = $this->input->post('account');
		$data['caste'] = $this->input->post('caste');
		$data['caste_no'] = $this->input->post('caste_no');
		$data['Mobile'] = $this->input->post('Mobile');
		$data['school'] = $this->input->post('school');
		$data['Percentage'] = $this->input->post('Percentage');
		$this->StudentM->insert('student', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-uppercase text-center mx-auto" style="width: 40%;">Record has been saved successfully.</div>');
		redirect(base_url('Student'));
	}
	public function edit($id){
		$update = $this->StudentM->find_record_by_id('student', $id);
    // Return data as JSON
    echo json_encode($update);
	}
	public function update($id)
	{
		$data['student_name'] = $this->input->post('student_name');
		$data['father_name'] = $this->input->post('father_name');
		$data['mother_name'] = $this->input->post('mother_name');
		$data['class'] = $this->input->post('class');
		$data['dob'] = $this->input->post('dob');
		$data['scholar_no'] = $this->input->post('scholar_no');
		$data['Samagra'] = $this->input->post('Samagra');
		$data['aadhar'] = $this->input->post('aadhar');
		$data['account'] = $this->input->post('account');
		$data['caste'] = $this->input->post('caste');
		$data['caste_no'] = $this->input->post('caste_no');
		$data['Mobile'] = $this->input->post('Mobile');
		$data['school'] = $this->input->post('school');
		$data['Percentage'] = $this->input->post('Percentage');
	
		$this->StudentM->update('student', $data, $id);
	
		
		$this->session->set_flashdata('message', '<div class="alert alert-info text-uppercase text-center mx-auto" style="width: 40%;">Record has been updated successfully.</div>');
		redirect(base_url('student'));
	}
	public function delete($id)
	{
		$this->StudentM->delete('student', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger text-uppercase text-center mx-auto" style="width: 40%;">Record has been deleted successfully.</div>');
		redirect(base_url('student'));
	}
}