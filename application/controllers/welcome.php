<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('course');
		$courses['records'] = $this->course->get_all_courses();
		$this->load->view('index', $courses);
		// $this->output->enable_profiler(TRUE);
	}

	public function show($id)
	{
		$this->load->model('course');
		$course['records'] = $this->course->get_course_by_id($id);
		$this->load->view('index', $course);
	}

	public function add()
	{
		$this->load->model("course");
		$data = $this->input->post();
		
		$this->course->add_course($data);
		redirect('/');

	}

	public function remove($course_id)
	{
		$this->load->model("course");
		$course = $this->course->get_course_by_id($course_id);
		$this->load->view("delete_course", $course );
	}

	public function delete($id)
	{
		$this->load->model("course");
		$this->course->delete_course($id);
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
