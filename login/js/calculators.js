// JavaScript Document
<!-----///////////---!!Calculators!!---/////////---->
function calculateBMI(w,ht)
{
	var weight = parseFloat(w);
	var height = parseFloat(ht);
	var total = weight * height;
	document.getElementById('paid').innerHTML =  total

	
}

function calculateWHR(w,ht,sex)
{
	var waist = parseFloat(w);
	var hip = parseFloat(ht);
	var sex = sex;
	
	var whr = waist / hip;
	whr = Math.round(whr*100)/100;
	//var msg = 'HElp me here!' + whr + sex;
	//alert(msg);
	var status = 'Not available';
	
	switch (sex)
	{
		case "Male":
			if (whr<0.95)
				status = 'Low Risk';
			else if (whr <= 1 && whr > 0.95)
				status = 'Moderate Risk';
			else if (whr > 1)
				status = 'High Risk';
			break;
			
		case "Female":
			if (whr<0.80)
				status = 'Low Risk';
			else if (whr <= 0.85 && whr > 0.80)
				status = 'Moderate Risk';
			else if (whr > 0.85)
				status = 'High Risk';
			break;
	}
	document.getElementById('whr').innerHTML =  whr;
	document.getElementById('statusWhr').innerHTML = status;
}

function calculateBMR(w,ht,a,s)
{
	var weight = parseFloat(w);
	var height = parseFloat(ht);
	var age = parseInt(a);
	var sex = s;
	
	var bmr = 0;
	height *=100;  //convert to centimeters
	
	if(sex == "Male")
		bmr = 66 + ( 13.7 * weight) + ( 5 * height) - ( 6.8 * age);
	else if(sex == "Female")
		bmr = 655 + ( 9.6 * weight) + ( 1.8 * height) - ( 4.7 * age);
		

	bmr = Math.round(bmr*100)/100;
	//var msg = 'HElp me here!' + bmr;
	//alert(msg);
	var status = 'Not available';
		if (bmr<18.5)
			status = 'Underweight';
		else if (bmr < 24.9 && bmr > 18.5)
			status = 'Normal';
		else if (bmr < 29.9 && bmr > 24.9)
			status = 'Overweight';
		else if (bmr > 30)
			status = 'Obese';
	document.getElementById('bmr').innerHTML =  bmr
	document.getElementById('statusBmr').innerHTML = '';
	
}
function calculateTHR(a,s)
{
	var age = parseInt(a);
	var sex = s;
	
	var thr = 0;
	var maxHR = 0;
	
	if(sex == "Male")
		maxHR = 220 - age;
	else if(sex == "Female")
		maxHR = 226 - age;
		
	minThr = 0.5 * maxHR;
	maxThr = 0.75 * maxHR;
	
	minThr = Math.round(minThr*100)/100;
	maxThr = Math.round(maxThr*100)/100;
	
	//var msg = 'HElp me here!' + bmr;
	//alert(msg);
	/*var status = 'Not available';
		if (bmr<18.5)
			status = 'Underweight';
		else if (bmr < 24.9 && bmr > 18.5)
			status = 'Normal';
		else if (bmr < 29.9 && bmr > 24.9)
			status = 'Overweight';
		else if (bmr > 30)
			status = 'Obese';*/
	document.getElementById('thr').innerHTML =  minThr;
	document.getElementById('statusThr').innerHTML = maxThr;
	
}