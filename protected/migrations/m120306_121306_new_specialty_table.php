<?php

class m120306_121306_new_specialty_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('specialty',array(
			'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
			'name' => "varchar(255) NOT NULL DEFAULT ''",
			'code' => "varchar(3) NOT NULL DEFAULT ''",
			'PRIMARY KEY (`id`)'
		), 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

		$this->insert('specialty',array('name'=>'Abdominal Radiology','code'=>'AR'));
		$this->insert('specialty',array('name'=>'Abdominal Surgery','code'=>'AS'));
		$this->insert('specialty',array('name'=>'Addiction Medicine','code'=>'ADM'));
		$this->insert('specialty',array('name'=>'Addiction Psychiatry','code'=>'ADP'));
		$this->insert('specialty',array('name'=>'Adolescent Medicine (Family Medicine)','code'=>'AMF'));
		$this->insert('specialty',array('name'=>'Adolescent Medicine (Internal Medicine)','code'=>'AMI'));
		$this->insert('specialty',array('name'=>'Adolescent Medicine (Pediatrics)','code'=>'ADL'));
		$this->insert('specialty',array('name'=>'Adult Reconstructive Orthopedics','code'=>'OAR'));
		$this->insert('specialty',array('name'=>'Aerospace Medicine','code'=>'AM'));
		$this->insert('specialty',array('name'=>'Allergy','code'=>'A'));
		$this->insert('specialty',array('name'=>'Allergy & Immunology','code'=>'AI'));
		$this->insert('specialty',array('name'=>'Clinical Laboratory Immunology (Allergy & Immunology)','code'=>'ALI'));
		$this->insert('specialty',array('name'=>'Anatomic/Clinical Pathology','code'=>'PTH'));
		$this->insert('specialty',array('name'=>'Anatomic Pathology','code'=>'ATP'));
		$this->insert('specialty',array('name'=>'Anesthesiology','code'=>'AN'));
		$this->insert('specialty',array('name'=>'Blood Banking/Transfusion Medicine','code'=>'BBK'));
		$this->insert('specialty',array('name'=>'Clinical Cardiac Electrophysiology','code'=>'ICE'));
		$this->insert('specialty',array('name'=>'Cardiothoracic Radiology','code'=>'CTR'));
		$this->insert('specialty',array('name'=>'Cardiothoracic Surgery','code'=>'CTS'));
		$this->insert('specialty',array('name'=>'Cardiovascular Disease','code'=>'CD'));
		$this->insert('specialty',array('name'=>'Chemical Pathology','code'=>'PCH'));
		$this->insert('specialty',array('name'=>'Child and Adolescent Psychiatry','code'=>'CHP'));
		$this->insert('specialty',array('name'=>'Child Neurology','code'=>'CHN'));
		$this->insert('specialty',array('name'=>'Clinical Biochemical Genetics','code'=>'CBG'));
		$this->insert('specialty',array('name'=>'Clinical Cytogenetics','code'=>'CCG'));
		$this->insert('specialty',array('name'=>'Clinical Genetics','code'=>'CG'));
		$this->insert('specialty',array('name'=>'Clinical and Laboratory Dermatological Immunology','code'=>'DDL'));
		$this->insert('specialty',array('name'=>'Clinical and Laboratory Immunology (Internal Medicine)','code'=>'ILI'));
		$this->insert('specialty',array('name'=>'Clinical and Laboratory Immunology (Pediatrics)','code'=>'PLI'));
		$this->insert('specialty',array('name'=>'Clinical Molecular Genetics','code'=>'CMG'));
		$this->insert('specialty',array('name'=>'Clinical Neurophysiology','code'=>'CN'));
		$this->insert('specialty',array('name'=>'Clinical Pathology','code'=>'CLP'));
		$this->insert('specialty',array('name'=>'Clinical Pharmacology','code'=>'PA'));
		$this->insert('specialty',array('name'=>'Colon & Rectal Surgery','code'=>'CRS'));
		$this->insert('specialty',array('name'=>'Cosmetic Surgery','code'=>'CS'));
		$this->insert('specialty',array('name'=>'Craniofacial Surgery','code'=>'CFS'));
		$this->insert('specialty',array('name'=>'Critical Care Medicine (Anesthesiology)','code'=>'CCA'));
		$this->insert('specialty',array('name'=>'Critical Care Medicine (Internal Medicine)','code'=>'CCM'));
		$this->insert('specialty',array('name'=>'Critical Care Medicine (Neurological Surgery)','code'=>'NCC'));
		$this->insert('specialty',array('name'=>'Critical Care Medicine (Obstetrics & Gynecology)','code'=>'OCC'));
		$this->insert('specialty',array('name'=>'Cytopathology','code'=>'PCP'));
		$this->insert('specialty',array('name'=>'Dermatology','code'=>'D'));
		$this->insert('specialty',array('name'=>'Dermatopathology','code'=>'DMP'));
		$this->insert('specialty',array('name'=>'Dermatologic Surgery','code'=>'DS'));
		$this->insert('specialty',array('name'=>'Developmental-Behavioral  Pediatrics','code'=>'DBP'));
		$this->insert('specialty',array('name'=>'Diabetes','code'=>'DIA'));
		$this->insert('specialty',array('name'=>'Diagnostic Radiology','code'=>'DR'));
		$this->insert('specialty',array('name'=>'Emergency Medicine','code'=>'EM'));
		$this->insert('specialty',array('name'=>'Endocrinology, Diabetes and Metabolism','code'=>'END'));
		$this->insert('specialty',array('name'=>'Endovascular Surgical Neuroradiology','code'=>'ESN'));
		$this->insert('specialty',array('name'=>'Epidemiology','code'=>'EP'));
		$this->insert('specialty',array('name'=>'Facial Plastic Surgery','code'=>'FPS'));
		$this->insert('specialty',array('name'=>'Family Practice','code'=>'FP'));
		$this->insert('specialty',array('name'=>'Forensic Pathology','code'=>'FOP'));
		$this->insert('specialty',array('name'=>'Forensic Psychiatry','code'=>'PFP'));
		$this->insert('specialty',array('name'=>'Gastroenterology','code'=>'GE'));
		$this->insert('specialty',array('name'=>'General Practice','code'=>'GP'));
		$this->insert('specialty',array('name'=>'General Preventive Medicine','code'=>'GPM'));
		$this->insert('specialty',array('name'=>'General Surgery','code'=>'GS'));
		$this->insert('specialty',array('name'=>'Geriatric Medicine (Family Practice)','code'=>'FPG'));
		$this->insert('specialty',array('name'=>'Geriatric Medicine (Internal Medicine)','code'=>'IMG'));
		$this->insert('specialty',array('name'=>'Geriatric Psychiatry','code'=>'PYG'));
		$this->insert('specialty',array('name'=>'Gynecology','code'=>'GYN'));
		$this->insert('specialty',array('name'=>'Gynecological Oncology','code'=>'GO'));
		$this->insert('specialty',array('name'=>'Hand Surgery','code'=>'HS'));
		$this->insert('specialty',array('name'=>'Head & Neck Surgery','code'=>'HNS'));
		$this->insert('specialty',array('name'=>'Hematology (Internal Medicine)','code'=>'HEM'));
		$this->insert('specialty',array('name'=>'Hematology (Pathology)','code'=>'HMP'));
		$this->insert('specialty',array('name'=>'Hematology/Oncology','code'=>'HO'));
		$this->insert('specialty',array('name'=>'Hepatology','code'=>'HEP'));
		$this->insert('specialty',array('name'=>'Hospitalist','code'=>'HOS'));
		$this->insert('specialty',array('name'=>'Immunology','code'=>'IG'));
		$this->insert('specialty',array('name'=>'Immunopathology','code'=>'PIP'));
		$this->insert('specialty',array('name'=>'Infectious Disease','code'=>'ID'));
		$this->insert('specialty',array('name'=>'Internal Medicine','code'=>'IM'));
		$this->insert('specialty',array('name'=>'Internal Medicine/Pediatrics','code'=>'MPD'));
		$this->insert('specialty',array('name'=>'Interventional Cardiology','code'=>'IC'));
		$this->insert('specialty',array('name'=>'Legal Medicine','code'=>'LM'));
		$this->insert('specialty',array('name'=>'Maternal & Fetal Medicine','code'=>'MFM'));
		$this->insert('specialty',array('name'=>'Maxillofacial Radiology','code'=>'MXR'));
		$this->insert('specialty',array('name'=>'Medical Genetics','code'=>'MG'));
		$this->insert('specialty',array('name'=>'Medical Management','code'=>'MDM'));
		$this->insert('specialty',array('name'=>'Medical Microbiology','code'=>'MM'));
		$this->insert('specialty',array('name'=>'Medical Oncology','code'=>'ON'));
		$this->insert('specialty',array('name'=>'Medical Toxicology (Emergency Medicine)','code'=>'ETX'));
		$this->insert('specialty',array('name'=>'Medical Toxicology (Pediatrics)','code'=>'PDT'));
		$this->insert('specialty',array('name'=>'Medical Toxicology (Preventive Medicine)','code'=>'PTX'));
		$this->insert('specialty',array('name'=>'Molecular Genetic Pathology (Medical Genetics)','code'=>'MGG'));
		$this->insert('specialty',array('name'=>'Molecular Genetic Pathology (Pathology)','code'=>'MGP'));
		$this->insert('specialty',array('name'=>'Musculoskeletal Oncology','code'=>'OMO'));
		$this->insert('specialty',array('name'=>'Musculoskeletal Radiology','code'=>'MSR'));
		$this->insert('specialty',array('name'=>'Neonatal-Perinatal Medicine','code'=>'NPM'));
		$this->insert('specialty',array('name'=>'Nephrology','code'=>'NEP'));
		$this->insert('specialty',array('name'=>'Neurodevelopmental Disabilities (Pediatrics)','code'=>'NDP'));
		$this->insert('specialty',array('name'=>'Neurodevelopmental Disabilities (Psychiatry & Neurology)','code'=>'NDN'));
		$this->insert('specialty',array('name'=>'Neurology','code'=>'N'));
		$this->insert('specialty',array('name'=>'Neurology/Diagnostic Radiology/Neuroradiology','code'=>'NRN'));
		$this->insert('specialty',array('name'=>'Neurological Surgery','code'=>'NS'));
		$this->insert('specialty',array('name'=>'Neuropathology','code'=>'NP'));
		$this->insert('specialty',array('name'=>'Neuropsychiatry','code'=>'NUP'));
		$this->insert('specialty',array('name'=>'Neuroradiology','code'=>'RNR'));
		$this->insert('specialty',array('name'=>'Nuclear Cardiology','code'=>'NC'));
		$this->insert('specialty',array('name'=>'Nuclear Medicine','code'=>'NM'));
		$this->insert('specialty',array('name'=>'Nuclear Radiology','code'=>'NR'));
		$this->insert('specialty',array('name'=>'Nutrition','code'=>'NTR'));
		$this->insert('specialty',array('name'=>'Obstetrics','code'=>'OBS'));
		$this->insert('specialty',array('name'=>'Obstetrics & Gynecology','code'=>'OBG'));
		$this->insert('specialty',array('name'=>'Occupational Medicine','code'=>'OM'));
		$this->insert('specialty',array('name'=>'Ophthalmology','code'=>'OPH'));
		$this->insert('specialty',array('name'=>'Oral & Maxillofacial Surgery','code'=>'OMF'));
		$this->insert('specialty',array('name'=>'Orthopedic Surgery','code'=>'ORS'));
		$this->insert('specialty',array('name'=>'Orthopedic Surgery of the Spine','code'=>'OSS'));
		$this->insert('specialty',array('name'=>'Orthopedic Trauma','code'=>'OTR'));
		$this->insert('specialty',array('name'=>'Orthopedics, Foot and Ankle','code'=>'OFA'));
		$this->insert('specialty',array('name'=>'Osteopathic Manipulative Medicine','code'=>'OMM'));
		$this->insert('specialty',array('name'=>'Other','code'=>'OS'));
		$this->insert('specialty',array('name'=>'Otolaryngology','code'=>'OTO'));
		$this->insert('specialty',array('name'=>'Otology/Neurotology','code'=>'OT'));
		$this->insert('specialty',array('name'=>'Pain Management','code'=>'APM'));
		$this->insert('specialty',array('name'=>'Pain Medicine','code'=>'PMD'));
		$this->insert('specialty',array('name'=>'Pain Medicine (Psychiatry)','code'=>'PPN'));
		$this->insert('specialty',array('name'=>'Palliative Medicine','code'=>'PLM'));
		$this->insert('specialty',array('name'=>'Pediatric Allergy','code'=>'PDA'));
		$this->insert('specialty',array('name'=>'Pediatric Anesthesiology (Pediatrics)','code'=>'PAN'));
		$this->insert('specialty',array('name'=>'Pediatric Cardiology','code'=>'PDC'));
		$this->insert('specialty',array('name'=>'Pediatric Cardiothoric Surgery','code'=>'PCS'));
		$this->insert('specialty',array('name'=>'Pediatric Critical Care Medicine','code'=>'CCP'));
		$this->insert('specialty',array('name'=>'Pediatric Dermatology','code'=>'PDD'));
		$this->insert('specialty',array('name'=>'Pediatric Emergency Medicine (Emergency Medicine)','code'=>'PE'));
		$this->insert('specialty',array('name'=>'Pediatric Emergency Medicine (Pediatrics)','code'=>'PEM'));
		$this->insert('specialty',array('name'=>'Pediatric Endocrinology','code'=>'PDE'));
		$this->insert('specialty',array('name'=>'Pediatric Gastroenterology','code'=>'PG'));
		$this->insert('specialty',array('name'=>'Pediatric Hematology/Oncology','code'=>'PHO'));
		$this->insert('specialty',array('name'=>'Pediatric Infectious Disease','code'=>'PDI'));
		$this->insert('specialty',array('name'=>'Pediatric Nephrology','code'=>'PN'));
		$this->insert('specialty',array('name'=>'Pediatric Ophthalmology','code'=>'PO'));
		$this->insert('specialty',array('name'=>'Pediatric Orthopedics','code'=>'OP'));
		$this->insert('specialty',array('name'=>'Pediatric Otolaryngology','code'=>'PDO'));
		$this->insert('specialty',array('name'=>'Pediatric Pathology','code'=>'PP'));
		$this->insert('specialty',array('name'=>'Pediatric Pulmonology','code'=>'PDP'));
		$this->insert('specialty',array('name'=>'Pediatric Radiology','code'=>'PDR'));
		$this->insert('specialty',array('name'=>'Pediatric Rehabilitation Medicine','code'=>'RPM'));
		$this->insert('specialty',array('name'=>'Pediatric Rheumatology','code'=>'PPR'));
		$this->insert('specialty',array('name'=>'Pediatric Surgery (Neurology)','code'=>'NSP'));
		$this->insert('specialty',array('name'=>'Pediatric Surgery (Surgery)','code'=>'PDS'));
		$this->insert('specialty',array('name'=>'Pediatric Urology','code'=>'UP'));
		$this->insert('specialty',array('name'=>'Pediatrics','code'=>'PD'));
		$this->insert('specialty',array('name'=>'Pharmaceutical Medicine','code'=>'PHM'));
		$this->insert('specialty',array('name'=>'Phlebology','code'=>'PHL'));
		$this->insert('specialty',array('name'=>'Physical Medicine & Rehabilitation','code'=>'PM'));
		$this->insert('specialty',array('name'=>'Plastic Surgery','code'=>'PS'));
		$this->insert('specialty',array('name'=>'Plastic Surgery within the Head & Neck','code'=>'PSH'));
		$this->insert('specialty',array('name'=>'Procedural Dermatology','code'=>'PRD'));
		$this->insert('specialty',array('name'=>'Proctology','code'=>'PRO'));
		$this->insert('specialty',array('name'=>'Psychiatry','code'=>'P'));
		$this->insert('specialty',array('name'=>'Psychoanalysis','code'=>'PYA'));
		$this->insert('specialty',array('name'=>'Psychosomatic Medicine','code'=>'PYM'));
		$this->insert('specialty',array('name'=>'Public Health and General Preventive Medicine','code'=>'MPH'));
		$this->insert('specialty',array('name'=>'Pulmonary Critical Care Medicine','code'=>'PCC'));
		$this->insert('specialty',array('name'=>'Pulmonary Disease','code'=>'PUD'));
		$this->insert('specialty',array('name'=>'Radiation Oncology','code'=>'RO'));
		$this->insert('specialty',array('name'=>'Radiological Physics','code'=>'RP'));
		$this->insert('specialty',array('name'=>'Radiology','code'=>'R'));
		$this->insert('specialty',array('name'=>'Radioisotopic Pathology','code'=>'RIP'));
		$this->insert('specialty',array('name'=>'Reproductive Endocrinology & Infertility','code'=>'REN'));
		$this->insert('specialty',array('name'=>'Rheumatology','code'=>'RHU'));
		$this->insert('specialty',array('name'=>'Selective Pathology','code'=>'SP'));
		$this->insert('specialty',array('name'=>'Sleep Medicine','code'=>'SM'));
		$this->insert('specialty',array('name'=>'Spinal Cord Injury Medicine','code'=>'SCI'));
		$this->insert('specialty',array('name'=>'Sports Medicine (Emergency Medicine)','code'=>'ESM'));
		$this->insert('specialty',array('name'=>'Sports Medicine (Family Practice)','code'=>'FSM'));
		$this->insert('specialty',array('name'=>'Sports Medicine (Internal Medicine)','code'=>'ISM'));
		$this->insert('specialty',array('name'=>'Sports Medicine (Orthopedic Surgery)','code'=>'OSM'));
		$this->insert('specialty',array('name'=>'Sports Medicine (Pediatrics)','code'=>'PSM'));
		$this->insert('specialty',array('name'=>'Sports Medicine (Physical Medicine & Rehabilitation)','code'=>'PMM'));
		$this->insert('specialty',array('name'=>'Surgical Critical Care (Surgery)','code'=>'CCS'));
		$this->insert('specialty',array('name'=>'Surgical Oncology','code'=>'SO'));
		$this->insert('specialty',array('name'=>'Thoracic Surgery','code'=>'TS'));
		$this->insert('specialty',array('name'=>'Trauma Surgery','code'=>'TRS'));
		$this->insert('specialty',array('name'=>'Transplant Surgery','code'=>'TTS'));
		$this->insert('specialty',array('name'=>'Undersea & Hyperbaric Medicine (Emergency Medicine)','code'=>'UME'));
		$this->insert('specialty',array('name'=>'Undersea & Hyperbaric Medicine (Preventive Medicine)','code'=>'UM'));
		$this->insert('specialty',array('name'=>'Unspecified','code'=>'US'));
		$this->insert('specialty',array('name'=>'Urgent Care Medicine','code'=>'UCM'));
		$this->insert('specialty',array('name'=>'Urology','code'=>'U'));
		$this->insert('specialty',array('name'=>'Vascular and Interventional Radiology','code'=>'VIR'));
		$this->insert('specialty',array('name'=>'Vascular Medicine','code'=>'VM'));
		$this->insert('specialty',array('name'=>'Vascular Neurology','code'=>'VN'));
		$this->insert('specialty',array('name'=>'Vascular Surgery','code'=>'VS'));
	}

	public function down()
	{
		$this->dropTable('specialty');
	}
}
