var l3_cert_bus_ess = [
    'Business Essentials'
];

var l4_found_dip_bus_mgt = [
	'Dynamic Business Environment',
	'Enterprising Organisations',
	'Employability and Self Development',
	'Finance for Managers'
];

var l4_dip_bus_mgt = [
	'Introduction to Entrepreneurship',
	'Introduction to Quantitative methods',
	'Project Management',
	'Dynamic Collaborative Teams',
	'Dynamic Business Environment',
	'Enterprising Organisations',
	'Employability and Self Development',
	'Finance for Manager'

];

var l4_dip_bus_mgt_hum = [
	'Introduction to Entrepreneurship',
	'Introduction to Quantitative Methods',
	'Project Management',
	'Principles of HR',
	'Dynamic Business Environment',
	'Enterprising Organisations',
	'Employability and Self Development',
	'Finance for Manager'
];

var l4_dip_bus_mgt_mark = [
	'Introduction to Entrepreneurship',
	'Introduction to Quantitative Methods',
	'Project Management',
	'Principles of Marketing Practice',
	'Dynamic Business Environment',
	'Enterprising Organisations',
	'Employability and Self Development',
	'Finance for Manager'

];

var l5_dip_bus_mgt = [
	'Managing Agile Organisations and People *',
	'Innovation and Business Performance *',
	'Effective Financial Management *',
	'International Business Economics and Markets *',
	'Operations Management',
	'Analytical Decision-making',
	'Managing Stakeholder Relationships'
];

var l5_dip_bus_mgt_hum = [
	'Managing Agile Organisations and People *',
	'Innovation and Business Performance *',
	'Effective Financial Management *',
	'International Business Economics and Markets *',
	'Human Resources Management',
	'Employee Engagement',
	'The HR Professional'
];

var l5_dip_bus_mgt_mark = [
	'Managing Agile Organisations and People *',
	'Innovation and Business Performance *',
	'Effective Financial Management *',
	'International Business Economics and Markets *',
	'Integrated Marketing Communications',
	'Buyer and Consumer Behaviour',
	'Societal and Social Marketing'
];

var l6_dip_bus_mgt = [
	'Leading Strategic Change *',
	'Business Strategy and Decision-making *',
	'Developing International Markets *',
	'Business Ethics and Sustainability *',
	'Strategic Stakeholder Relationship',
	'Corporate Finance',
	'Advanced Project Management'
];

var l6_dip_bus_mgt_hum = [
	'Leading Strategic Change *',
	'Business Strategy and Decision-making *',
	'Developing International Markets *',
	'Business Ethics and Sustainability *',
	'Strategic HRM',
	'Organisational Design, Development and Performance',
	'Contemporary Developments in Global HRM'

];

var l6_dip_bus_mgt_mark = [
	'Leading Strategic Change *',
	'Business Strategy and Decision-making *',
	'Developing International Markets *',
	'Business Ethics and Sustainability *',
	'Strategic Marketing',
	'Strategic Marketing Relationships',
	'Digital Marketing Strategy'
];

var l2_awd_set_up_bus = [
	'Self-employment as a career choice',
	'The business proposition',
	'Personal survival as a sole trader',
	'Business Finance and record Keeping'

];

var l3_cert_bus_set_up = [
	'Analyse entrepreneurial and market potential',
	'Build the business idea',
	'Plan the marketing approach',
	'Plan the operations',
	'Plan the budget',
	'Create the business plan and pitch'
];

var l3_awd_digi_mark = [
	'Introduction to the digital world for small businesses',
	'How to create the infrastructure for successful SMEs',
	'Using digital and online tools to communicate and generate revenues',
	'How to develop and maintain an online presence',
	'Creating a digital marketing plan for a small business'
];

var l2_awd_emp = [
	'What employers are looking for in prospective employees',
	'What I have to offer',
	'Presenting what I have to offer'

];




function getModule(course) {
	if(course == 'l3_cert_bus_ess'){
		return l3_cert_bus_ess;

	} else if(course == 'l4_found_dip_bus_mgt') {
		return l4_found_dip_bus_mgt;

	} else if(course == 'l4_dip_bus_mgt') {
		return l4_dip_bus_mgt;

	} else if(course == 'l4_dip_bus_mgt_hum') {
		return l4_dip_bus_mgt_hum;
		
	} else if(course == 'l4_dip_bus_mgt_mark') {
		return l4_dip_bus_mgt_mark;
		
	} else if(course == 'l5_dip_bus_mgt') {
		return l5_dip_bus_mgt;
		
	} else if(course == 'l5_dip_bus_mgt_hum') {
		return l5_dip_bus_mgt_hum;
		
	} else if(course == 'l5_dip_bus_mgt_mark') {
		return l5_dip_bus_mgt_mark;
		
	} else if(course == 'l6_dip_bus_mgt') {
		return l6_dip_bus_mgt;
		
	} else if(course == 'l6_dip_bus_mgt_hum') {
		return l6_dip_bus_mgt_hum;
		
	} else if(course == 'l6_dip_bus_mgt_mark') {
		return l6_dip_bus_mgt_mark;
		
	} else if(course == 'l2_awd_set_up_bus') {
		return l2_awd_set_up_bus;
		
	} else if(course == 'l3_cert_bus_set_up') {
		return l3_cert_bus_set_up;
		
	} else if(course == 'l3_awd_digi_mark') {
		return l3_awd_digi_mark;
		
	} else if(course == 'l2_awd_emp') {
		return l2_awd_emp;
		
	} else {
		return [];
	}
}