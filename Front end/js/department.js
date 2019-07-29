var dep_arr = new Array("Accident and emergency (A&E)","Anaesthetics","Breast screening","Cardiology","Chaplaincy","Critical care",
"Diagnostic imaging","Discharge lounge","Ear nose and throat (ENT)","Elderly services department","Gastroenterology","General surgery",
"Gynaecology","Haematology","Maternity departments","Microbiology","Neonatal unit","Nephrology","Neurology","Nutrition and dietetics","Obstetrics and gynaecology units","Occupational therapy","Oncology","Orthopaedics","Pain management clinics","Pharmacy",
"Physiotherapy","Radiotherapy","Renal unit","Rheumatology","Sexual health (genitourinary medicine)","Urology");
function populateDep(countryElementId, stateElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var countryElement = document.getElementById(countryElementId);
	countryElement.length=0;
	countryElement.options[0] = new Option('Select Department','-1');
	countryElement.selectedIndex = 0;
	for (var i=0; i<dep_arr.length; i++) {
		countryElement.options[countryElement.length] = new Option(dep_arr[i],dep_arr[i]);
	}


}