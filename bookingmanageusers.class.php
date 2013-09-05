<?php
require_once $CFG->libdir.'/formslib.php';

class mod_booking_manageusers_form extends moodleform {
	function definition() {
		global $CFG, $DB,$OUTPUT;
		$mform =& $this->_form;

		// visible elements
		$mform->addElement('header', '', $this->_customdata['bookingdata']->text);
		//display booking option name and the link to the associated course if there is one

		$tmp_txt = get_string("updatebooking", "booking");
		$mform->addElement('html','<img src="pix/edit.gif" alt="'.$tmp_txt.'"> <a href="editoptions.php?id='.$this->_customdata['bookingdata']->cmid.'&optionid='.$this->_customdata['bookingdata']->id.'">'.$tmp_txt.'</a>');
		$tmp_txt = get_string("deletebookingoption", "booking");
		$mform->addElement('html',' | <img src="pix/delete.gif" alt="'.$tmp_txt.'">  <a href="report.php?id='.$this->_customdata['bookingdata']->cmid.'&optionid='.$this->_customdata['bookingdata']->id.'&action=deletebookingoption&sesskey='.sesskey().'">'.$tmp_txt.'</a>');
		$downloadoptions = array('id' => $this->_customdata['bookingdata']->cmid,'action' => $this->_customdata['bookingdata']->id,'download'=>'ods','optionid' => $this->_customdata['bookingdata']->id);
		$odsurl = new moodle_url('report.php', $downloadoptions);
		$mform->addElement('html',' <br/><br/> <a href="'.$odsurl.'">'.get_string('downloadusersforthisoptionods','booking').'</a>');
		$downloadoptions['download'] ='xls';
		$xlsurl = new moodle_url('report.php', $downloadoptions);
		$mform->addElement('html',' | <a href="'.$xlsurl.'">'.get_string('downloadusersforthisoptionxls','booking').'</a><br />');
		
		if($this->_customdata['bookingdata']->courseid !=0) {
			$mform->addElement('html','<span>'.get_string('associatedcourse','booking').': <a href="'.$this->_customdata['bookingdata']->courseurl.'">'.$this->_customdata['bookingdata']->urltitle.'</a></span><br /><br />');
		}

		$display_buttons = false;
		//add all booked users to form
		if($this->_customdata['bookedusers']){
			$mform->addElement('html','<br/><div><strong>'.get_string('bookedusers','booking').' :</strong></div><div style="background-color: lightgreen;">');
			foreach($this->_customdata['bookedusers'] as $user){
				if (empty($user->imagealt)){
					$user->imagealt = '';
				}
				$mform->addElement('html','<table class="mod-booking-inlinetable"><tr><td class="attemptcell">');
				$mform->addElement('advcheckbox', "user[$user->id]", '', null, array('group' => $this->_customdata['bookingdata']->id+1));
				$mform->addElement('html','</td><td class="picture">'.$OUTPUT->user_picture($user, array()).'</td><td class="fullname">'."<a href=\"$CFG->wwwroot/user/view.php?id=$user->id\">".fullname($user).'</a></td></tr></table>');
				
			}
			$this->add_checkbox_controller($this->_customdata['bookingdata']->id+1);
			$mform->addElement('html','</div>');
			$display_buttons = true;
		}
		else {
			$mform->addElement('html','<br/><div>'.get_string('nobookedusers','booking').'</div>');
		}
		
		//add all waiting list users to form
		if(!empty($this->_customdata['waitinglistusers'])){
		$mform->addElement('html','<div>'.get_string('waitinglistusers','booking').' :</div><div style="background-color: orange;">');
		if($this->_customdata['waitinglistusers']){			
			foreach($this->_customdata['waitinglistusers'] as $user){
				if (empty($user->imagealt)){
					$user->imagealt = '';
				}
				$mform->addElement('html','<table class="mod-booking-inlinetable"><tr><td class="attemptcell">');
				$mform->addElement('advcheckbox', "user[$user->id]", '', null, array('group' => $this->_customdata['bookingdata']->id));
				$mform->addElement('html','</td><td class="picture">'.$OUTPUT->user_picture($user, array()).'</td><td class="fullname">'."<a href=\"$CFG->wwwroot/user/view.php?id=$user->id\">".fullname($user).'</a></td></tr></table>');				
			}
			$this->add_checkbox_controller($this->_customdata['bookingdata']->id);
			$display_buttons = true;
		}
		$mform->addElement('html','</div>');
		}
		//-------------------------------------------------------------------------------
		// buttons
		//
		// If there are booked or waitinglist users only, we display the buttons
		if ($display_buttons) {
			$mform->addElement('html','<div class="clearfix" style="clear: both; width: 100%;">'.get_string('withselected', 'booking').' :</div>');
			$buttonarray=array();
			if (get_config('booking', 'linktocourse')) {
				if (!$this->_customdata['bookingdata']->autoenrol) {
					$buttonarray[] = &$mform->createElement('submit', 'subscribetocourse', get_string('subscribetocourse','booking'));
				}
			}
			$buttonarray[] = &$mform->createElement("submit",'deleteusers', get_string('booking:deleteresponses','booking'));
			$mform->addGroup($buttonarray, 'buttonar', '', array(' '), false);

			//hidden elements
			$mform->addElement('hidden', 'id',$this->_customdata['bookingdata']->cmid);
			$mform->setType('id', PARAM_INT);

			$mform->addElement('hidden', 'bookingid',$this->_customdata['bookingdata']->bookingid);
			$mform->setType('bookingid', PARAM_INT);

			$mform->addElement('hidden', 'optionid',$this->_customdata['bookingdata']->id);
			$mform->setType('optionid', PARAM_INT);
		}
		// $buttonarray[] = &$mform->createElement('cancel');
		$mform->addElement('html','<br/><a href="view.php?id='.$this->_customdata['bookingdata']->cmid.'">'.get_string('return','booking').'</a><br/>');
		
	}

	function data_preprocessing(&$default_values){
		if (!isset($default_values['descriptionformat'])) {
			$default_values['descriptionformat'] = FORMAT_HTML;
		}
		if (!isset($default_values['description'])) {
			$default_values['description'] = '';
		}
	}
	function get_data() {
		$data = parent::get_data();
		if (isset($data->subscribetocourse) && !array_keys($data->user,1)) {
			$data = false;
		}
		return $data;
	}
}
?>