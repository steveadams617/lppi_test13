<?php

/*************************
	 Table names
*************************/
$lang['dcs'] = 'Dcs';
$lang['episode_provider'] = 'Episode_provider';
$lang['episodes'] = 'Episodes';
$lang['insurances'] = 'Insurances';
$lang['notes'] = 'Notes';
$lang['organizations'] = 'Organizations';
$lang['patients'] = 'Patients';
$lang['printgroups'] = 'Printgroups';
$lang['provider'] = 'Provider';
$lang['sf_tables'] = 'Sf_tables';
$lang['sfzips'] = 'Sfzips';
$lang['staff'] = 'Staff';
$lang['supports'] = 'Supports';
$lang['tasks'] = 'Tasks';
$lang['teams'] = 'Teams';
$lang['users'] = 'Users';


/*************************
	 Table: Dcs
*************************/
$lang['dcs.id'] = 'ID';
$lang['dcs.episode_id'] = 'Episode ID';
$lang['dcs.plan'] = 'Plan';
$lang['dcs.transport_arranged_date'] = 'Transportation Arranged';
$lang['dcs.transport_details'] = 'Transportation Details';


/*************************
	 Table: Episode_provider
*************************/
$lang['episode_provider.id'] = 'ID';
$lang['episode_provider.provider_id'] = 'Provider';
$lang['episode_provider.episode_id'] = 'Episode ID';
$lang['episode_provider.release_signed_date'] = '';
$lang['episode_provider.next_appt_date'] = '';
$lang['episode_provider.next_appt_time'] = '';
$lang['episode_provider.last_collateral'] = '';
$lang['episode_provider.total_collateral'] = '';
$lang['episode_provider.dc_instructs_sent'] = '';
$lang['episode_provider.dc_summary_sent'] = '';
$lang['episode_provider.notify_at_dc'] = '';
$lang['episode_provider.dc_summary_requested'] = '';
$lang['episode_provider.scheduled_mtg_frequency'] = '';
$lang['episode_provider.actual_contact_frequency'] = '';
$lang['episode_provider.last_patient_contact_date'] = '';
$lang['episode_provider.provider_relationship_memo'] = '';


/*************************
	 Table: Episodes
*************************/
$lang['episodes.id'] = 'ID';
$lang['episodes.patient_id'] = 'Patient ID';
$lang['episodes.team_id'] = 'Team ID';
$lang['episodes.oneliner'] = 'One liner';
$lang['episodes.start_date'] = 'Start Date';
$lang['episodes.end_date'] = 'End Date';
$lang['episodes.historyphysical'] = 'H+P';


/*************************
	 Table: Insurances
*************************/
$lang['insurances.id'] = 'ID';
$lang['insurances.insurance_type_id'] = 'Insurance Type';
$lang['insurances.insurance'] = 'Insurance';
$lang['insurances.face_sheet_insurance'] = 'Face Sheet Insurance';
$lang['insurances.abbrev'] = 'Abbreviation';


/*************************
	 Table: Notes
*************************/
$lang['notes.id'] = 'ID';
$lang['notes.episode_id'] = 'Episode ID';
$lang['notes.user_id'] = 'User ID';
$lang['notes.body'] = 'Note';
$lang['notes.printed'] = 'Printed';
$lang['notes.include_plan'] = 'Include Plan';
$lang['notes.note_date'] = 'Note Date';
$lang['notes.note_time'] = 'Note Time';
$lang['notes.status_id'] = 'Status';


/*************************
	 Table: Organizations
*************************/
$lang['organizations.id'] = 'ID';
$lang['organizations.organization'] = '';
$lang['organizations.address1'] = '';
$lang['organizations.address2'] = '';
$lang['organizations.city'] = '';
$lang['organizations.state'] = '';
$lang['organizations.zip'] = '';
$lang['organizations.main_phone'] = '';


/*************************
	 Table: Patients
*************************/
$lang['patients.id'] = 'ID';
$lang['patients.first_name'] = 'First Name';
$lang['patients.last_name'] = 'Last Name';
$lang['patients.middle_name'] = 'Middle Name';
$lang['patients.nick_alias'] = 'Nickname or Alias';
$lang['patients.mrn'] = 'MRN';
$lang['patients.DOB'] = 'Date of Birth';
$lang['patients.city'] = 'City';
$lang['patients.state'] = 'State';
$lang['patients.zip'] = 'ZIP';
$lang['patients.phone'] = 'Phone';


/*************************
	 Table: Printgroups
*************************/
$lang['printgroups.id'] = 'ID';
$lang['printgroups.user_id'] = '';
$lang['printgroups.print_timestamp'] = '';


/*************************
	 Table: Provider
*************************/
$lang['provider.id'] = 'ID';
$lang['provider.organization_id'] = 'Organization ID';
$lang['provider.provider_type_id'] = '';
$lang['provider.first_name'] = '';
$lang['provider.last_name'] = '';
$lang['provider.prof_inits'] = '';
$lang['provider.work_direct_phone'] = '';
$lang['provider.work_extension'] = '';
$lang['provider.work_fax'] = '';
$lang['provider.work_pager'] = '';
$lang['provider.work_cell'] = '';
$lang['provider.personal_cell'] = '';
$lang['provider.email'] = '';
$lang['provider.contact_preferences'] = '';


/*************************
	 Table: Sf_tables
*************************/
$lang['sf_tables.t_id'] = '';
$lang['sf_tables.tablename'] = '';
$lang['sf_tables.usetable'] = '';


/*************************
	 Table: Sfzips
*************************/
$lang['sfzips.sfz_id'] = 'ID';
$lang['sfzips.sfz_zip'] = '';
$lang['sfzips.sfz_neighhoods'] = '';


/*************************
	 Table: Staff
*************************/
$lang['staff.st_id'] = 'ID';
$lang['staff.Column 2'] = '';
$lang['staff.st_room'] = '';


/*************************
	 Table: Supports
*************************/
$lang['supports.id'] = 'ID';
$lang['supports.episode_id'] = 'Episode ID';
$lang['supports.first_name'] = 'First Name';
$lang['supports.last_name'] = 'Last Name';
$lang['supports.nick_alias'] = 'Nickname or Alias';
$lang['supports.relationship'] = 'Relationship';
$lang['supports.city'] = 'City';
$lang['supports.state'] = 'State';
$lang['supports.zip'] = 'ZIP';
$lang['supports.home_phone'] = 'Home Phone';
$lang['supports.work_phone'] = 'Work Phone';
$lang['supports.cell_phone'] = 'Cell Phone';
$lang['supports.memo'] = 'Memo';


/*************************
	 Table: Tasks
*************************/
$lang['tasks.id'] = 'ID';
$lang['tasks.episode_id'] = '';
$lang['tasks.task'] = '';
$lang['tasks.create_timestamp'] = '';
$lang['tasks.complete_timestamp'] = '';


/*************************
	 Table: Teams
*************************/
$lang['teams.id'] = 'ID';
$lang['teams.team'] = 'Team';


/*************************
	 Table: Users
*************************/
$lang['users.id'] = 'ID';
$lang['users.first_name'] = '';
$lang['users.last_name'] = '';
$lang['users.room'] = '';
