<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');

		$this->load->database();
		
		$this->load->helper('language');
		$this->load->model('registrationmodel','',TRUE);
	}

	
	function index()
	{  	$data['StudentID'] = $this->input->post('StudentID');
		$data['FirstName'] = $this->input->post('FirstName');
		$data['MiddleName'] = $this->input->post('MiddleName');
		$data['LastName'] = $this->input->post('LastName');
		$data['FullName'] = $this->input->post('FullName');
		$data['FatherName'] = $this->input->post('FatherName');
		$data['MotherName'] = $this->input->post('MotherName');
		$data['StudentEmail'] = $this->input->post('StudentEmail');
		$data['ParentEmail'] = $this->input->post('ParentEmail');
		$data['Address'] = $this->input->post('Address');
		$data['Disability'] = $this->input->post('Disability');
		$data['Height'] = $this->input->post('Height');
		$data['Weight'] = $this->input->post('Weight');
		$data['IdentificationMarks'] = $this->input->post('IdentificationMarks');
		$data['StudentMobile'] = $this->input->post('StudentMobile');
		$data['ParentMobile'] = $this->input->post('ParentMobile');
		$data['FatherOccupation'] = $this->input->post('FatherOccupation');
		$data['MotherOccupation'] = $this->input->post('MotherOccupation');
		$data['DisabilityType'] = $this->input->post('DisabilityType');
		$data['Gender'] = $this->input->post('Gender');
		$data['Caste'] = $this->input->post('Caste');
		$data['Country'] = $this->input->post('Country');
		$data['BirthDate'] = $this->input->post('BirthDate');
        $this->_render_page('/personal_info',$data);
	}
	
	
	function verify_personal_info(){
		$data['StudentID'] = $this->input->post('StudentID');
		$data['FirstName'] = $this->input->post('FirstName');
		$data['MiddleName'] = $this->input->post('MiddleName');
		$data['LastName'] = $this->input->post('LastName');
		$data['FullName'] = $this->input->post('FullName');
		$data['FatherName'] = $this->input->post('FatherName');
		$data['MotherName'] = $this->input->post('MotherName');
		$data['StudentEmail'] = $this->input->post('StudentEmail');
		$data['ParentEmail'] = $this->input->post('ParentEmail');
		$data['Address'] = $this->input->post('Address');
		$data['Disability'] = $this->input->post('Disability');
		$data['Height'] = $this->input->post('Height');
		$data['Weight'] = $this->input->post('Weight');
		$data['IdentificationMarks'] = $this->input->post('IdentificationMarks');
		$data['StudentMobile'] = $this->input->post('StudentMobile');
		$data['ParentMobile'] = $this->input->post('ParentMobile');
		$data['FatherOccupation'] = $this->input->post('FatherOccupation');
		$data['MotherOccupation'] = $this->input->post('MotherOccupation');
		$data['DisabilityType'] = $this->input->post('DisabilityType');
		$data['Gender'] = $this->input->post('Gender');
		$data['Caste'] = $this->input->post('Caste');
		$data['Country'] = $this->input->post('Country');
		$data['BirthDate'] = $this->input->post('BirthDate');
		$this->_render_page('/verify_personal_info',$data);
	}	
	
	function register_personal_info(){
		$stat['status'] = 'failure';
		$data['StudentID'] = $this->input->post('StudentID');
		$data['FirstName'] = $this->input->post('FirstName');
		$data['MiddleName'] = $this->input->post('MiddleName');
		$data['LastName'] = $this->input->post('LastName');
		$data['FullName'] = $this->input->post('FullName');
		$data['FatherName'] = $this->input->post('FatherName');
		$data['MotherName'] = $this->input->post('MotherName');
		$data['StudentEmail'] = $this->input->post('StudentEmail');
		$data['ParentEmail'] = $this->input->post('ParentEmail');
		$data['Address'] = $this->input->post('Address');
		$data['Disability'] = $this->input->post('Disability');
		$data['Height'] = $this->input->post('Height');
		$data['Weight'] = $this->input->post('Weight');
		$data['IdentificationMarks'] = $this->input->post('IdentificationMarks');
		$data['StudentMobile'] = $this->input->post('StudentMobile');
		$data['ParentMobile'] = $this->input->post('ParentMobile');
		$data['FatherOccupation'] = $this->input->post('FatherOccupation');
		$data['MotherOccupation'] = $this->input->post('MotherOccupation');
		$data['DisabilityType'] = $this->input->post('DisabilityType');
		$data['Gender'] = $this->input->post('Gender');
		$data['Caste'] = $this->input->post('Caste');
		$data['Country'] = $this->input->post('Country');
		$data['BirthDate'] = $this->input->post('BirthDate');
		// All the values in data variable are to be stored in the corresponding table
		if($this->registrationmodel->register_personal_info($data)){
			$stat['status'] = "success";
            $stat['message'] = 'Account successfully created. Login now.';
            $stat['url'] = 'educational_info';
			echo json_encode($stat);
			return TRUE;
		}
		else{
			$stat['message'] = 'Incorrect input or email id already register.';
			echo json_encode($stat);
		}
		return FALSE;
	}

	
	function educational_info(){
		//$this->load->view('/educational_info');
		$data['StudentID'] = $this->input->post('StudentID');
		$data['RegNo'] = $this->input->post('RegNo');
		$data['RollNo'] = $this->input->post('RollNo');
		$data['Section'] = $this->input->post('Section');
		$data['AdmissionQuota'] = $this->input->post('AdmissionQuota');
		$data['MainsRank'] = $this->input->post('MainsRank');
		$data['SatScore'] = $this->input->post('SatScore');
		$data['YearOfAdmission'] = $this->input->post('YearOfAdmission');
		$data['YearOfStudy'] = $this->input->post('YearOfStudy');
		$data['AdmissionBatch'] = $this->input->post('AdmissionBatch');
		$data['Semester'] = $this->input->post('Semester');
		$data['Status'] = $this->input->post('Status');
		$data['Class10Percentage'] = $this->input->post('Class10Percentage');
		$data['Class12Percentage'] = $this->input->post('Class12Percentage');
		$this->_render_page('/educational_info', $data);
	}
	
	function verify_educational_info(){
		$data['StudentID'] = $this->input->post('StudentID');
		$data['RegNo'] = $this->input->post('RegNo');
		$data['RollNo'] = $this->input->post('RollNo');
		$data['Section'] = $this->input->post('Section');
		$data['AdmissionQuota'] = $this->input->post('AdmissionQuota');
		$data['MainsRank'] = $this->input->post('MainsRank');
		$data['SatScore'] = $this->input->post('SatScore');
		$data['YearOfAdmission'] = $this->input->post('YearOfAdmission');
		$data['YearOfStudy'] = $this->input->post('YearOfStudy');
		$data['AdmissionBatch'] = $this->input->post('AdmissionBatch');
		$data['Semester'] = $this->input->post('Semester');
		$data['Status'] = $this->input->post('Status');
		$data['Class10Percentage'] = $this->input->post('Class10Percentage');
		$data['Class12Percentage'] = $this->input->post('Class12Percentage');
		$this->_render_page('/verify_educational_info', $data);
	}
	
	function register_educational_info(){
		$stat['status'] = 'failure';
		$data['StudentID'] = $this->input->post('StudentID');
		$data['RegNo'] = $this->input->post('RegNo');
		$data['RollNo'] = $this->input->post('RollNo');
		$data['Section'] = $this->input->post('Section');
		$data['AdmissionQuota'] = $this->input->post('AdmissionQuota');
		$data['MainsRank'] = $this->input->post('MainsRank');
		$data['SatScore'] = $this->input->post('SatScore');
		$data['YearOfAdmission'] = $this->input->post('YearOfAdmission');
		$data['YearOfStudy'] = $this->input->post('YearOfStudy');
		$data['AdmissionBatch'] = $this->input->post('AdmissionBatch');
		$data['Semester'] = $this->input->post('Semester');
		$data['Status'] = $this->input->post('Status');
		$data['Class10Percentage'] = $this->input->post('Class10Percentage');
		$data['Class12Percentage'] = $this->input->post('Class12Percentage');
		// All the values in data variable are to be stored in the corresponding table
		if($this->registrationmodel->register_educational_info($data)){
			$stat['status'] = "success";
            $stat['message'] = 'Account successfully created. Login now.';
            $stat['url'] = 'payment_info';
			echo json_encode($stat);
			return TRUE;
		}
		else{
			$stat['message'] = 'Incorrect input or email id already register.';
			echo json_encode($stat);
		}
		//return FALSE;
	}
	
	function payment_info(){
		$data['StudentID'] = $this->input->post('StudentID');
		$data['PaymentMode'] = $this->input->post('PaymentMode');
		$data['Amount'] = $this->input->post('Amount');
		$data['DDUTRNumber'] = $this->input->post('DDUTRNumber');
		$data['StudentAccNumber'] = $this->input->post('StudentAccNumber');
		$data['HostelerDS'] = $this->input->post('HostelerDS');
		$this->_render_page('/payment_info',$data);
	}
	
	function verify_payment_info(){
		$data['StudentID'] = $this->input->post('StudentID');
		$data['PaymentMode'] = $this->input->post('PaymentMode');
		$data['Amount'] = $this->input->post('Amount');
		$data['DDUTRNumber'] = $this->input->post('DDUTRNumber');
		$data['StudentAccNumber'] = $this->input->post('StudentAccNumber');
		$data['HostelerDS'] = $this->input->post('HostelerDS');
		$this->_render_page('/verify_payment_info', $data);
	}
	
	function register_payment_info(){
		$stat['status'] = 'failure';
		$data['StudentID'] = $this->input->post('StudentID');
		$data['PaymentMode'] = $this->input->post('PaymentMode');
		$data['Amount'] = $this->input->post('Amount');
		$data['DDUTRNumber'] = $this->input->post('DDUTRNumber');
		$data['StudentAccNumber'] = $this->input->post('StudentAccNumber');
		$data['HostelerDS'] = $this->input->post('HostelerDS');
		// All the values in data variable are to be stored in the corresponding table
		if($this->registrationmodel->register_payment_info($data)){
			$stat['status'] = 'success';
            $stat['message'] = 'Account successfully created. Login now.';
			$stat['url'] = '/nitap';
			echo json_encode($stat);
			return TRUE;
		}
		else{
			$stat['message'] = 'Incorrect input or email id already register.';
			echo json_encode($stat);
		}
		return FALSE;
	}
	

	 function _render_page($view, $data=null, $render=false)
     {  //$data['current_page'] = isset($data['current_page']) ? $data['current_page'] : 'home';
        $view_html = array(
            $this->load->view('/base/header', $data, $render),
            // $this->load->view('events/menu/header', $data, $render),
            $this->load->view($view, $data, $render),
            // $this->load->view('events/menu/footer', $data, $render),
            $this->load->view('/base/footer', $data, $render)
        );
        if (!$render) return $view_html;
    }

}