/***********************************************
* all_scripts.js
* 
* This include allows for multiple confirm box
* functions.
***********************************************/

function winPop(target,name) {
	window.open(target,name,'width=500,height=500,toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=1,left=0,top=0');
	return false;

}

function pintoBean() {
	if (document.form666.checkBox.checked==true){
		document.form666.searchkey.disabled=true;
		document.form666.searchcomp.disabled=false;
		document.form666.checkBox2.checked=false
	}
	if (document.form666.checkBox.checked==false){
		document.form666.searchkey.disabled=false;
		document.form666.searchcomp.disabled=true;
		document.form666.checkBox2.checked=true
	}		
}

function limaBean() {
	if (document.form666.checkBox2.checked==true){
		document.form666.searchkey.disabled=false;
		document.form666.searchcomp.disabled=true;
		document.form666.checkBox.checked=false
	}
	if (document.form666.checkBox2.checked==false){
		document.form666.searchkey.disabled=true;
		document.form666.searchcomp.disabled=false;
		document.form666.checkBox.checked=true
	}		
}

function redAlert(){
	alert("Please do not change this value");
}

function addPU(){
	var answer = confirm("Are you sure you would like to add this location?")
	if (answer){
		// submit the form
		document.form2.submit();
	}
	else{
		// Go back to form
	}
}

// Usage -> onClick='saveChanges(\"formpdf\",\"Are you sure you want to print this project sheet?\")'
function saveChanges(fname,msg) {
	var answer = confirm(msg);
	if (answer){
		// submit the form
		document.forms[fname].submit();
	}
	else{
		// Go back to form
	}
}

function saveSulfurBulk(){
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form3.submit();
	}
	else{
		// Go back to form
	}
}

function calcSulfurBulk(){
	var arval1 = document.form2.arval1.value - 0;
	var strm1 = document.form2.strm1.value - 0;
	var dryval1 = 0;
	dryval1 = ((arval1 / (100 - strm1) * 100));
	document.form2.dryval1.value = dryval1;
	document.form3.dryval1.value = dryval1;
	
	var arval2 = document.form2.arval2.value - 0;
	var strm2 = document.form2.strm2.value - 0;
	var dryval2 = 0;
	dryval2 = ((arval2 / (100 - strm2) * 100));
	document.form2.dryval2.value = dryval2;
	document.form3.dryval2.value = dryval2;

	var arval3 = document.form2.arval3.value - 0;
	var strm3 = document.form2.strm3.value - 0;
	var dryval3 = 0;
	dryval3 = ((arval3 / (100 - strm3) * 100));
	document.form2.dryval3.value = dryval3;
	document.form3.dryval3.value = dryval3;

	var arval4 = document.form2.arval4.value - 0;
	var strm4 = document.form2.strm4.value - 0;
	var dryval4 = 0;
	dryval4 = ((arval4 / (100 - strm4) * 100));
	document.form2.dryval4.value = dryval4;
	document.form3.dryval4.value = dryval4;

	var arval5 = document.form2.arval5.value - 0;
	var strm5 = document.form2.strm5.value - 0;
	var dryval5 = 0;
	dryval5 = ((arval5 / (100 - strm5) * 100));
	document.form2.dryval5.value = dryval5;
	document.form3.dryval5.value = dryval5;

	var arval6 = document.form2.arval6.value - 0;
	var strm6 = document.form2.strm6.value - 0;
	var dryval6 = 0;
	dryval6 = ((arval6 / (100 - strm6) * 100));
	document.form2.dryval6.value = dryval6;
	document.form3.dryval6.value = dryval6;

	var arval7 = document.form2.arval7.value - 0;
	var strm7 = document.form2.strm7.value - 0;
	var dryval7 = 0;
	dryval7 = ((arval7 / (100 - strm7) * 100));
	document.form2.dryval7.value = dryval7;
	document.form3.dryval7.value = dryval7;

	var arval8 = document.form2.arval8.value - 0;
	var strm8 = document.form2.strm8.value - 0;
	var dryval8 = 0;
	dryval8 = ((arval8 / (100 - strm8) * 100));
	document.form2.dryval8.value = dryval8;
	document.form3.dryval8.value = dryval8;
	
	var arval9 = document.form2.arval9.value - 0;
	var strm9 = document.form2.strm9.value - 0;
	var dryval9 = 0;
	dryval9 = ((arval9 / (100 - strm9) * 100));
	document.form2.dryval9.value = dryval9;
	document.form3.dryval9.value = dryval9;	

	var arval10 = document.form2.arval10.value - 0;
	var strm10 = document.form2.strm10.value - 0;
	var dryval10 = 0;
	dryval10 = ((arval10 / (100 - strm10) * 100));
	document.form2.dryval10.value = dryval10;
	document.form3.dryval10.value = dryval10;

	var arval11 = document.form2.arval11.value - 0;
	var strm11 = document.form2.strm11.value - 0;
	var dryval11 = 0;
	dryval11 = ((arval11 / (100 - strm11) * 100));
	document.form2.dryval11.value = dryval11;
	document.form3.dryval11.value = dryval11;
	
	var arval12 = document.form2.arval12.value - 0;
	var strm12 = document.form2.strm12.value - 0;
	var dryval12 = 0;
	dryval12 = ((arval12 / (100 - strm12) * 100));
	document.form2.dryval12.value = dryval12;
	document.form3.dryval12.value = dryval12;

	var arval13 = document.form2.arval13.value - 0;
	var strm13 = document.form2.strm13.value - 0;
	var dryval13 = 0;
	dryval13 = ((arval13 / (100 - strm13) * 100));
	document.form2.dryval13.value = dryval13;
	document.form3.dryval13.value = dryval13;

	var arval14 = document.form2.arval14.value - 0;
	var strm14 = document.form2.strm14.value - 0;
	var dryval14 = 0;
	dryval14 = ((arval14 / (100 - strm14) * 100));
	document.form2.dryval14.value = dryval14;
	document.form3.dryval14.value = dryval14;

	var arval15 = document.form2.arval15.value - 0;
	var strm15 = document.form2.strm15.value - 0;
	var dryval15 = 0;
	dryval15 = ((arval15 / (100 - strm15) * 100));
	document.form2.dryval15.value = dryval15;
	document.form3.dryval15.value = dryval15;	
}

function saveVMBulk(){

	var emtcruc1 = document.form2.emtcruc1.value - 0;
		document.form3.emtcruc1.value = emtcruc1;
	var crucsam1 = document.form2.crucsam1.value - 0;
		document.form3.crucsam1.value = crucsam1;
	var finheat1 = document.form2.finheat1.value - 0;
		document.form3.finheat1.value = finheat1;
	var samplwt1 = document.form2.samplwt1.value - 0;
		document.form3.samplwt1.value = samplwt1;
	var lstweht1 = document.form2.lstweht1.value - 0;
		document.form3.lstweht1.value = lstweht1;
	var residmo1 = document.form2.residmo1.value - 0;
		document.form3.residmo1.value = residmo1;
	var perctvm1 = document.form2.perctvm1.value - 0;
		document.form3.perctvm1.value = perctvm1;
	var emtcruc2 = document.form2.emtcruc2.value - 0;
		document.form3.emtcruc2.value = emtcruc2;
	var crucsam2 = document.form2.crucsam2.value - 0;
		document.form3.crucsam2.value = crucsam2;
	var finheat2 = document.form2.finheat2.value - 0;
		document.form3.finheat2.value = finheat2;
	var samplwt2 = document.form2.samplwt2.value - 0;
		document.form3.samplwt2.value = samplwt2;
	var lstweht2 = document.form2.lstweht2.value - 0;
		document.form3.lstweht2.value = lstweht2;
	var residmo2 = document.form2.residmo2.value - 0;
		document.form3.residmo2.value = residmo2;
	var perctvm2 = document.form2.perctvm2.value - 0;
		document.form3.perctvm2.value = perctvm2;		
	var emtcruc3 = document.form2.emtcruc3.value - 0;
		document.form3.emtcruc3.value = emtcruc3;
	var crucsam3 = document.form2.crucsam3.value - 0;
		document.form3.crucsam3.value = crucsam3;
	var finheat3 = document.form2.finheat3.value - 0;
		document.form3.finheat3.value = finheat3;
	var samplwt3 = document.form2.samplwt3.value - 0;
		document.form3.samplwt3.value = samplwt3;
	var lstweht3 = document.form2.lstweht3.value - 0;
		document.form3.lstweht3.value = lstweht3;
	var residmo3 = document.form2.residmo3.value - 0;
		document.form3.residmo3.value = residmo3;
	var perctvm3 = document.form2.perctvm3.value - 0;
		document.form3.perctvm3.value = perctvm3;		
	var emtcruc4 = document.form2.emtcruc4.value - 0;
		document.form3.emtcruc4.value = emtcruc4;
	var crucsam4 = document.form2.crucsam4.value - 0;
		document.form3.crucsam4.value = crucsam4;
	var finheat4 = document.form2.finheat4.value - 0;
		document.form3.finheat4.value = finheat4;
	var samplwt4 = document.form2.samplwt4.value - 0;
		document.form3.samplwt4.value = samplwt4;
	var lstweht4 = document.form2.lstweht4.value - 0;
		document.form3.lstweht4.value = lstweht4;
	var residmo4 = document.form2.residmo4.value - 0;
		document.form3.residmo4.value = residmo4;
	var perctvm4 = document.form2.perctvm4.value - 0;
		document.form3.perctvm4.value = perctvm4;		
	var emtcruc5 = document.form2.emtcruc5.value - 0;
		document.form3.emtcruc5.value = emtcruc5;
	var crucsam5 = document.form2.crucsam5.value - 0;
		document.form3.crucsam5.value = crucsam5;
	var finheat5 = document.form2.finheat5.value - 0;
		document.form3.finheat5.value = finheat5;
	var samplwt5 = document.form2.samplwt5.value - 0;
		document.form3.samplwt5.value = samplwt5;
	var lstweht5 = document.form2.lstweht5.value - 0;
		document.form3.lstweht5.value = lstweht5;
	var residmo5 = document.form2.residmo5.value - 0;
		document.form3.residmo5.value = residmo5;
	var perctvm5 = document.form2.perctvm5.value - 0;
		document.form3.perctvm5.value = perctvm5;		
	var emtcruc6 = document.form2.emtcruc6.value - 0;
		document.form3.emtcruc6.value = emtcruc6;
	var crucsam6 = document.form2.crucsam6.value - 0;
		document.form3.crucsam6.value = crucsam6;
	var finheat6 = document.form2.finheat6.value - 0;
		document.form3.finheat6.value = finheat6;
	var samplwt6 = document.form2.samplwt6.value - 0;
		document.form3.samplwt6.value = samplwt6;
	var lstweht6 = document.form2.lstweht6.value - 0;
		document.form3.lstweht6.value = lstweht6;
	var residmo6 = document.form2.residmo6.value - 0;
		document.form3.residmo6.value = residmo6;
	var perctvm6 = document.form2.perctvm6.value - 0;
		document.form3.perctvm6.value = perctvm6;		
	var emtcruc7 = document.form2.emtcruc7.value - 0;
		document.form3.emtcruc7.value = emtcruc7;
	var crucsam7 = document.form2.crucsam7.value - 0;
		document.form3.crucsam7.value = crucsam7;
	var finheat7 = document.form2.finheat7.value - 0;
		document.form3.finheat7.value = finheat7;
	var samplwt7 = document.form2.samplwt7.value - 0;
		document.form3.samplwt7.value = samplwt7;
	var lstweht7 = document.form2.lstweht7.value - 0;
		document.form3.lstweht7.value = lstweht7;
	var residmo7 = document.form2.residmo7.value - 0;
		document.form3.residmo7.value = residmo7;
	var perctvm7 = document.form2.perctvm7.value - 0;
		document.form3.perctvm7.value = perctvm7;		
	var emtcruc8 = document.form2.emtcruc8.value - 0;
		document.form3.emtcruc8.value = emtcruc8;
	var crucsam8 = document.form2.crucsam8.value - 0;
		document.form3.crucsam8.value = crucsam8;
	var finheat8 = document.form2.finheat8.value - 0;
		document.form3.finheat8.value = finheat8;
	var samplwt8 = document.form2.samplwt8.value - 0;
		document.form3.samplwt8.value = samplwt8;
	var lstweht8 = document.form2.lstweht8.value - 0;
		document.form3.lstweht8.value = lstweht8;
	var residmo8 = document.form2.residmo8.value - 0;
		document.form3.residmo8.value = residmo8;
	var perctvm8 = document.form2.perctvm8.value - 0;
		document.form3.perctvm8.value = perctvm8;		
	var emtcruc9 = document.form2.emtcruc9.value - 0;
		document.form3.emtcruc9.value = emtcruc9;
	var crucsam9 = document.form2.crucsam9.value - 0;
		document.form3.crucsam9.value = crucsam9;
	var finheat9 = document.form2.finheat9.value - 0;
		document.form3.finheat9.value = finheat9;
	var samplwt9 = document.form2.samplwt9.value - 0;
		document.form3.samplwt9.value = samplwt9;
	var lstweht9 = document.form2.lstweht9.value - 0;
		document.form3.lstweht9.value = lstweht9;
	var residmo9 = document.form2.residmo9.value - 0;
		document.form3.residmo9.value = residmo9;
	var perctvm9 = document.form2.perctvm9.value - 0;
		document.form3.perctvm9.value = perctvm9;		
	var emtcruc10 = document.form2.emtcruc10.value - 0;
		document.form3.emtcruc10.value = emtcruc10;
	var crucsam10 = document.form2.crucsam10.value - 0;
		document.form3.crucsam10.value = crucsam10;
	var finheat10 = document.form2.finheat10.value - 0;
		document.form3.finheat10.value = finheat10;
	var samplwt10 = document.form2.samplwt10.value - 0;
		document.form3.samplwt10.value = samplwt10;
	var lstweht10 = document.form2.lstweht10.value - 0;
		document.form3.lstweht10.value = lstweht10;
	var residmo10 = document.form2.residmo10.value - 0;
		document.form3.residmo10.value = residmo10;
	var perctvm10 = document.form2.perctvm10.value - 0;
		document.form3.perctvm10.value = perctvm10;		
	var emtcruc11 = document.form2.emtcruc11.value - 0;
		document.form3.emtcruc11.value = emtcruc11;
	var crucsam11 = document.form2.crucsam11.value - 0;
		document.form3.crucsam11.value = crucsam11;
	var finheat11 = document.form2.finheat11.value - 0;
		document.form3.finheat11.value = finheat11;
	var samplwt11 = document.form2.samplwt11.value - 0;
		document.form3.samplwt11.value = samplwt11;
	var lstweht11 = document.form2.lstweht11.value - 0;
		document.form3.lstweht11.value = lstweht11;
	var residmo11 = document.form2.residmo11.value - 0;
		document.form3.residmo11.value = residmo11;
	var perctvm11 = document.form2.perctvm11.value - 0;
		document.form3.perctvm11.value = perctvm11;		
	var emtcruc12 = document.form2.emtcruc12.value - 0;
		document.form3.emtcruc12.value = emtcruc12;
	var crucsam12 = document.form2.crucsam12.value - 0;
		document.form3.crucsam12.value = crucsam12;
	var finheat12 = document.form2.finheat12.value - 0;
		document.form3.finheat12.value = finheat12;
	var samplwt12 = document.form2.samplwt12.value - 0;
		document.form3.samplwt12.value = samplwt12;
	var lstweht12 = document.form2.lstweht12.value - 0;
		document.form3.lstweht12.value = lstweht12;
	var residmo12 = document.form2.residmo12.value - 0;
		document.form3.residmo12.value = residmo12;
	var perctvm12 = document.form2.perctvm12.value - 0;
		document.form3.perctvm12.value = perctvm12;		
	var emtcruc13 = document.form2.emtcruc13.value - 0;
		document.form3.emtcruc13.value = emtcruc13;
	var crucsam13 = document.form2.crucsam13.value - 0;
		document.form3.crucsam13.value = crucsam13;
	var finheat13 = document.form2.finheat13.value - 0;
		document.form3.finheat13.value = finheat13;
	var samplwt13 = document.form2.samplwt13.value - 0;
		document.form3.samplwt13.value = samplwt13;
	var lstweht13 = document.form2.lstweht13.value - 0;
		document.form3.lstweht13.value = lstweht13;
	var residmo13 = document.form2.residmo13.value - 0;
		document.form3.residmo13.value = residmo13;
	var perctvm13 = document.form2.perctvm13.value - 0;
		document.form3.perctvm13.value = perctvm13;		
	var emtcruc14 = document.form2.emtcruc14.value - 0;
		document.form3.emtcruc14.value = emtcruc14;
	var crucsam14 = document.form2.crucsam14.value - 0;
		document.form3.crucsam14.value = crucsam14;
	var finheat14 = document.form2.finheat14.value - 0;
		document.form3.finheat14.value = finheat14;
	var samplwt14 = document.form2.samplwt14.value - 0;
		document.form3.samplwt14.value = samplwt14;
	var lstweht14 = document.form2.lstweht14.value - 0;
		document.form3.lstweht14.value = lstweht14;
	var residmo14 = document.form2.residmo14.value - 0;
		document.form3.residmo14.value = residmo14;
	var perctvm14 = document.form2.perctvm14.value - 0;
		document.form3.perctvm14.value = perctvm14;		
	var emtcruc15 = document.form2.emtcruc15.value - 0;
		document.form3.emtcruc15.value = emtcruc15;
	var crucsam15 = document.form2.crucsam15.value - 0;
		document.form3.crucsam15.value = crucsam15;
	var finheat15 = document.form2.finheat15.value - 0;
		document.form3.finheat15.value = finheat15;
	var samplwt15 = document.form2.samplwt15.value - 0;
		document.form3.samplwt15.value = samplwt15;
	var lstweht15 = document.form2.lstweht15.value - 0;
		document.form3.lstweht15.value = lstweht15;
	var residmo15 = document.form2.residmo15.value - 0;
		document.form3.residmo15.value = residmo15;
	var perctvm15 = document.form2.perctvm15.value - 0;
		document.form3.perctvm15.value = perctvm15;
		

	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form3.submit();
	}
	else{
		// Go back to form
	}
}

function calcVMBulk(){
	var emtcruc1 = document.form2.emtcruc1.value - 0;
	var crucsam1 = document.form2.crucsam1.value - 0;
	var finheat1 = document.form2.finheat1.value - 0;
	var samplwt1 = 0;
	var lstweht1 = 0;
	var residmo1 = document.form2.residmo1.value - 0;
	var perctvm1 = 0;

	samplwt1 = crucsam1 - emtcruc1;
	document.form2.samplwt1.value = samplwt1;
	
	lstweht1 = (((crucsam1 - finheat1) / samplwt1) * 100);
	document.form2.lstweht1.value = lstweht1;
	
	perctvm1 = lstweht1 - residmo1;
	document.form2.perctvm1.value = perctvm1;

	var emtcruc2 = document.form2.emtcruc2.value - 0;
	var crucsam2 = document.form2.crucsam2.value - 0;
	var finheat2 = document.form2.finheat2.value - 0;
	var samplwt2 = 0;
	var lstweht2 = 0;
	var residmo2 = document.form2.residmo2.value - 0;
	var perctvm2 = 0;

	samplwt2 = crucsam2 - emtcruc2;
	document.form2.samplwt2.value = samplwt2;
	
	lstweht2 = (((crucsam2 - finheat2) / samplwt2) * 100);
	document.form2.lstweht2.value = lstweht2;
	
	perctvm2 = lstweht2 - residmo2;
	document.form2.perctvm2.value = perctvm2;
	
	var emtcruc3 = document.form2.emtcruc3.value - 0;
	var crucsam3 = document.form2.crucsam3.value - 0;
	var finheat3 = document.form2.finheat3.value - 0;
	var samplwt3 = 0;
	var lstweht3 = 0;
	var residmo3 = document.form2.residmo3.value - 0;
	var perctvm3 = 0;

	samplwt3 = crucsam3 - emtcruc3;
	document.form2.samplwt3.value = samplwt3;
	
	lstweht3 = (((crucsam3 - finheat3) / samplwt3) * 100);
	document.form2.lstweht3.value = lstweht3;
	
	perctvm3 = lstweht3 - residmo3;
	document.form2.perctvm3.value = perctvm3;
	
	var emtcruc4 = document.form2.emtcruc4.value - 0;
	var crucsam4 = document.form2.crucsam4.value - 0;
	var finheat4 = document.form2.finheat4.value - 0;
	var samplwt4 = 0;
	var lstweht4 = 0;
	var residmo4 = document.form2.residmo4.value - 0;
	var perctvm4 = 0;

	samplwt4 = crucsam4 - emtcruc4;
	document.form2.samplwt4.value = samplwt4;
	
	lstweht4 = (((crucsam4 - finheat4) / samplwt4) * 100);
	document.form2.lstweht4.value = lstweht4;
	
	perctvm4 = lstweht4 - residmo4;
	document.form2.perctvm4.value = perctvm4;
	
	var emtcruc5 = document.form2.emtcruc5.value - 0;
	var crucsam5 = document.form2.crucsam5.value - 0;
	var finheat5 = document.form2.finheat5.value - 0;
	var samplwt5 = 0;
	var lstweht5 = 0;
	var residmo5 = document.form2.residmo5.value - 0;
	var perctvm5 = 0;

	samplwt5 = crucsam5 - emtcruc5;
	document.form2.samplwt5.value = samplwt5;
	
	lstweht5 = (((crucsam5 - finheat5) / samplwt5) * 100);
	document.form2.lstweht5.value = lstweht5;
	
	perctvm5 = lstweht5 - residmo5;
	document.form2.perctvm5.value = perctvm5;

	var emtcruc6 = document.form2.emtcruc6.value - 0;
	var crucsam6 = document.form2.crucsam6.value - 0;
	var finheat6 = document.form2.finheat6.value - 0;
	var samplwt6 = 0;
	var lstweht6 = 0;
	var residmo6 = document.form2.residmo6.value - 0;
	var perctvm6 = 0;

	samplwt6 = crucsam6 - emtcruc6;
	document.form2.samplwt6.value = samplwt6;
	
	lstweht6 = (((crucsam6 - finheat6) / samplwt6) * 100);
	document.form2.lstweht6.value = lstweht6;
	
	perctvm6 = lstweht6 - residmo6;
	document.form2.perctvm6.value = perctvm6;
	
	var emtcruc7 = document.form2.emtcruc7.value - 0;
	var crucsam7 = document.form2.crucsam7.value - 0;
	var finheat7 = document.form2.finheat7.value - 0;
	var samplwt7 = 0;
	var lstweht7 = 0;
	var residmo7 = document.form2.residmo7.value - 0;
	var perctvm7 = 0;

	samplwt7 = crucsam7 - emtcruc7;
	document.form2.samplwt7.value = samplwt7;
	
	lstweht7 = (((crucsam7 - finheat7) / samplwt7) * 100);
	document.form2.lstweht7.value = lstweht7;
	
	perctvm7 = lstweht7 - residmo7;
	document.form2.perctvm7.value = perctvm7;
	
	var emtcruc8 = document.form2.emtcruc8.value - 0;
	var crucsam8 = document.form2.crucsam8.value - 0;
	var finheat8 = document.form2.finheat8.value - 0;
	var samplwt8 = 0;
	var lstweht8 = 0;
	var residmo8 = document.form2.residmo8.value - 0;
	var perctvm8 = 0;

	samplwt8 = crucsam8 - emtcruc8;
	document.form2.samplwt8.value = samplwt8;
	
	lstweht8 = (((crucsam8 - finheat8) / samplwt8) * 100);
	document.form2.lstweht8.value = lstweht8;
	
	perctvm8 = lstweht8 - residmo8;
	document.form2.perctvm8.value = perctvm8;
	
	var emtcruc9 = document.form2.emtcruc9.value - 0;
	var crucsam9 = document.form2.crucsam9.value - 0;
	var finheat9 = document.form2.finheat9.value - 0;
	var samplwt9 = 0;
	var lstweht9 = 0;
	var residmo9 = document.form2.residmo9.value - 0;
	var perctvm9 = 0;

	samplwt9 = crucsam9 - emtcruc9;
	document.form2.samplwt9.value = samplwt9;
	
	lstweht9 = (((crucsam9 - finheat9) / samplwt9) * 100);
	document.form2.lstweht9.value = lstweht9;
	
	perctvm9 = lstweht9 - residmo9;
	document.form2.perctvm9.value = perctvm9;

	var emtcruc10 = document.form2.emtcruc10.value - 0;
	var crucsam10 = document.form2.crucsam10.value - 0;
	var finheat10 = document.form2.finheat10.value - 0;
	var samplwt10 = 0;
	var lstweht10 = 0;
	var residmo10 = document.form2.residmo10.value - 0;
	var perctvm10 = 0;

	samplwt10 = crucsam10 - emtcruc10;
	document.form2.samplwt10.value = samplwt10;
	
	lstweht10 = (((crucsam10 - finheat10) / samplwt10) * 100);
	document.form2.lstweht10.value = lstweht10;
	
	perctvm10 = lstweht10 - residmo10;
	document.form2.perctvm10.value = perctvm10;

	var emtcruc11 = document.form2.emtcruc11.value - 0;
	var crucsam11 = document.form2.crucsam11.value - 0;
	var finheat11 = document.form2.finheat11.value - 0;
	var samplwt11 = 0;
	var lstweht11 = 0;
	var residmo11 = document.form2.residmo11.value - 0;
	var perctvm11 = 0;

	samplwt11 = crucsam11 - emtcruc11;
	document.form2.samplwt11.value = samplwt11;
	
	lstweht11 = (((crucsam11 - finheat11) / samplwt11) * 100);
	document.form2.lstweht11.value = lstweht11;
	
	perctvm11 = lstweht11 - residmo11;
	document.form2.perctvm11.value = perctvm11;

	var emtcruc12 = document.form2.emtcruc12.value - 0;
	var crucsam12 = document.form2.crucsam12.value - 0;
	var finheat12 = document.form2.finheat12.value - 0;
	var samplwt12 = 0;
	var lstweht12 = 0;
	var residmo12 = document.form2.residmo12.value - 0;
	var perctvm12 = 0;

	samplwt12 = crucsam12 - emtcruc12;
	document.form2.samplwt12.value = samplwt12;
	
	lstweht12 = (((crucsam12 - finheat12) / samplwt12) * 100);
	document.form2.lstweht12.value = lstweht12;
	
	perctvm12 = lstweht12 - residmo12;
	document.form2.perctvm12.value = perctvm12;

	var emtcruc13 = document.form2.emtcruc13.value - 0;
	var crucsam13 = document.form2.crucsam13.value - 0;
	var finheat13 = document.form2.finheat13.value - 0;
	var samplwt13 = 0;
	var lstweht13 = 0;
	var residmo13 = document.form2.residmo13.value - 0;
	var perctvm13 = 0;

	samplwt13 = crucsam13 - emtcruc13;
	document.form2.samplwt13.value = samplwt13;
	
	lstweht13 = (((crucsam13 - finheat13) / samplwt13) * 100);
	document.form2.lstweht13.value = lstweht13;
	
	perctvm13 = lstweht13 - residmo13;
	document.form2.perctvm13.value = perctvm13;

	var emtcruc14 = document.form2.emtcruc14.value - 0;
	var crucsam14 = document.form2.crucsam14.value - 0;
	var finheat14 = document.form2.finheat14.value - 0;
	var samplwt14 = 0;
	var lstweht14 = 0;
	var residmo14 = document.form2.residmo14.value - 0;
	var perctvm14 = 0;

	samplwt14 = crucsam14 - emtcruc14;
	document.form2.samplwt14.value = samplwt14;
	
	lstweht14 = (((crucsam14 - finheat14) / samplwt14) * 100);
	document.form2.lstweht14.value = lstweht14;
	
	perctvm14 = lstweht14 - residmo14;
	document.form2.perctvm14.value = perctvm14;

	var emtcruc15 = document.form2.emtcruc15.value - 0;
	var crucsam15 = document.form2.crucsam15.value - 0;
	var finheat15 = document.form2.finheat15.value - 0;
	var samplwt15 = 0;
	var lstweht15 = 0;
	var residmo15 = document.form2.residmo15.value - 0;
	var perctvm15 = 0;

	samplwt15 = crucsam15 - emtcruc15;
	document.form2.samplwt15.value = samplwt15;
	
	lstweht15 = (((crucsam15 - finheat15) / samplwt15) * 100);
	document.form2.lstweht15.value = lstweht15;
	
	perctvm15 = lstweht15 - residmo15;
	document.form2.perctvm15.value = perctvm15;	
}

function calcPlastic(){
	
	// Get softening temp averages.
	var softt1 = document.form2.softt1.value - 0;
	var softt2 = document.form2.softt2.value - 0;
	var softt3 = document.form2.softt3.value - 0;
	var softav = 0;
	var softpm = 0;
	
	// If the 3rd value is not present, only average the first 2.
	if (softt3 == 0){
		softav = ((softt1 + softt2) / 2);
		softav = Math.round((softav*100))/100;
		document.form2.softav.value = softav;
	}
	else {
		softav = ((softt1 + softt2 + softt3) / 3);
		softav = Math.round((softav*100))/100;
		document.form2.softav.value = softav;
	}
	
	// +/- values
	softpm = softt1 - softt2;
	softpm = Math.round((softpm*100))/100;
	document.form2.softpm.value = softpm;
	
	//-----------------------------------------------------------
	// Get max fluid ddpm averages
	var mxddpm1 = document.form2.mxddpm1.value - 0;
	var mxddpm2 = document.form2.mxddpm2.value - 0;
	var mxddpm3 = document.form2.mxddpm3.value - 0;
	var mxddpmav = 0;
	var mxddpmpm = 0;
	var ddpmucl = 0;
	var ddpmlcl = 0;
	
	// If the 3rd value is not present, only average the first 2.
	if (mxddpm3 == 0){
		mxddpmav = ((mxddpm1 + mxddpm2) / 2);
		mxddpmav = Math.round((mxddpmav*100))/100;
		document.form2.mxddpmav.value = mxddpmav;
		document.form2.mxddpmpm10.value = mxddpmav;
	}
	else {
		mxddpmav = ((mxddpm1 + mxddpm2 + mxddpm3) / 3);
		mxddpmav = Math.round((mxddpmav*100))/100;
		document.form2.mxddpmav.value = mxddpmav - 0;
		document.form2.mxddpmpm10.value = mxddpmav - 0;
	}
	
	ddpmucl = ((mxddpmav * .1) + mxddpmav);
	document.form2.ddpmucl.value = ddpmucl - 0;
	
	ddpmlcl = (mxddpmav - (mxddpmav * .1));
	document.form2.ddpmlcl.value = ddpmlcl - 0;	
	
	//-----------------------------------------------------------
	// Get max fluid temp averages
	var mxtemp1 = document.form2.mxtemp1.value - 0;
	var mxtemp2 = document.form2.mxtemp2.value - 0;
	var mxtemp3 = document.form2.mxtemp3.value - 0;
	var mxtempav = 0;
	var mxtemppm = 0;
	
	// If the 3rd value is not present, only average the first 2.
	if (mxtemp3 == 0){
		mxtempav = ((mxtemp1 + mxtemp2) / 2);
		mxtempav = Math.round((mxtempav*100))/100;
		document.form2.mxtempav.value = mxtempav;
	}
	else {
		mxtempav = ((mxtemp1 + mxtemp2 + mxtemp3) / 3);
		mxtempav = Math.round((mxtempav*100))/100;
		document.form2.mxtempav.value = mxtempav;
	}
	
	// +/- values
	mxtemppm = mxtemp1 - mxtemp2;
	mxtemppm = Math.round((mxtemppm*100))/100;
	document.form2.mxtemppm.value = mxtemppm;	

	//-----------------------------------------------------------
	// Get final fluid temp averages
	var fftemp1 = document.form2.fftemp1.value - 0;
	var fftemp2 = document.form2.fftemp2.value - 0;
	var fftemp3 = document.form2.fftemp3.value - 0;
	var fftempav = 0;
	var fftemppm = 0;
	
	// If the 3rd value is not present, only average the first 2.
	if (fftemp3 == 0){
		fftempav = ((fftemp1 + fftemp2) / 2);
		fftempav = Math.round((fftempav*100))/100;
		document.form2.fftempav.value = fftempav;
	}
	else {
		fftempav = ((fftemp1 + fftemp2 + fftemp3) / 3);
		fftempav = Math.round((fftempav*100))/100;
		document.form2.fftempav.value = fftempav;
	}
	
	// +/- values
	fftemppm = fftemp1 - fftemp2;
	fftemppm = Math.round((fftemppm*100))/100;
	document.form2.fftemppm.value = fftemppm;

	//-----------------------------------------------------------
	// Get final fluid temp averages
	var trange1 = document.form2.trange1.value - 0;
	var trange2 = document.form2.trange2.value - 0;
	var trange3 = document.form2.trange3.value - 0;
	var trangeav = 0;
	var trangepm = 0;
	
	// If the 3rd value is not present, only average the first 2.
	if (trange3 == 0){
		trangeav = ((trange1 + trange2) / 2);
		trangeav = Math.round((trangeav*100))/100;
		document.form2.trangeav.value = trangeav;
	}
	else {
		trangeav = ((trange1 + trange2 + trange3) / 3);
		trangeav = Math.round((trangeav*100))/100;
		document.form2.trangeav.value = trangeav;
	}
	
	// +/- values
	trangepm = trange1 - trange2;
	trangepm = Math.round((trangepm*100))/100;
	document.form2.trangepm.value = trangepm;

	//-----------------------------------------------------------
	// Get final fluid temp averages
	var solidt1 = document.form2.solidt1.value - 0;
	var solidt2 = document.form2.solidt2.value - 0;
	var solidt3 = document.form2.solidt3.value - 0;
	var solidav = 0;
	var solidpm = 0;
	
	// If the 3rd value is not present, only average the first 2.
	if (solidt3 == 0){
		solidav = ((solidt1 + solidt2) / 2);
		solidav = Math.round((solidav*100))/100;
		document.form2.solidav.value = solidav;
	}
	else {
		solidav = ((solidt1 + solidt2 + solidt3) / 3);
		solidav = Math.round((solidav*100))/100;
		document.form2.solidav.value = solidav;
	}
	
	// +/- values
	solidpm = solidt1 - solidt2;
	solidpm = Math.round((solidpm*100))/100;
	document.form2.solidpm.value = solidpm;	

}

function savePlastic(){
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form2.submit();
	}
	else{
		// Go back to form
	}
}

function calcST1() {
    /*****************************************************
	* STAGE 1 VALUES                                    
	* WTF?
	******************************************************/
	
	var st1gw = document.form2.st1gw.value - 0;
	var st1tare = document.form2.st1tare.value - 0;
	var st115 = document.form2.st115.value - 0;
	var st1f = document.form2.st1f.value - 0;
	
	/* Stage 1 sample weight: st1swt */
	var st1swt = st1gw - st1tare;
	document.form2.st1swt.value = st1swt;
	
	/* Number Reported calculation */
	var holderA = 0;
	
	holderA = (((st1gw - st1f) / st1swt) * 100);
	//document.form2.st1sm.value = Math.round((holderA*100))/100;
	document.form2.st1sm.value = holderA;
	
	
	var answer = confirm("Are you sure you would like to save this sample data?  \n\nData will be rounded upon write to the database.")
	if (answer){
		// submit the form
		document.form2.submit();
	}
	else{
		// Go back to form
	}
}

function calcST2() {
    /*****************************************************/
	/* STAGE 2 VALUES                                    */
	//var st2gw = document.form4.st2gw.value - 0;
	//var st2tare = document.form4.st2tare.value - 0;
	//var st215 = document.form4.st215.value - 0;
	//var st2f = document.form4.st2f.value - 0;
	
	/* Stage 1 sample weight: st2swt */
	//var st2swt = st2gw - st2tare;
	//document.form4.st2swt.value = st2swt;
	
	/* Number Reported calculation */
	//var holderA = 0;
	
	//holderA = (((st2gw - st2f) / st2swt) * 100);
	//document.form4.st2sm.value = Math.round((holderA*100))/100;
	//document.form4.st2sm.value = holderA;
	
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form4.submit();
	}
	else{
		// Go back to form
	}

}

function calcST2RM(){

	//var strm = document.form5.strm.value - 0;
	//var st2sm = document.form4.st2sm.value - 0;
	//var finalval = 0;
	//finalval = strm + st2sm;
	
	//document.form5.finalval.value = finalval;
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form5.submit();
	}
	else{
		// Go back to form
	}
}

function calcST3(){
	var st1gw = document.form6.st1gw.value - 0;
	var st1tare = document.form6.st1tare.value - 0;
	var st115 = document.form6.st115.value - 0;
	var st1f = document.form6.st1f.value - 0;
	
	/* Stage 1 sample weight: st1swt */
	var st1swt = st1gw - st1tare;
	document.form6.st1swt.value = st1swt;
	
	/* Number Reported calculation */
	var holderA = 0;
	
	holderA = (((st1gw - st1f) / st1swt) * 100);
	document.form6.st1sm.value = Math.round((holderA*100))/100;
	
	var st2gw = document.form6.st2gw.value - 0;
	var st2tare = document.form6.st2tare.value - 0;
	var st215 = document.form6.st215.value - 0;
	var st2f = document.form6.st2f.value - 0;
	
	/* Stage 1 sample weight: st2swt */
	var st2swt = st2gw - st2tare;
	document.form6.st2swt.value = st2swt;
	
	/* Number Reported calculation */
	var holderA = 0;
	
	holderA = (((st2gw - st2f) / st2swt) * 100);
	document.form6.st2sm.value = Math.round((holderA*100))/100;
	
	
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form6.submit();
	}
	else{
		// Go back to form
	}
}

function calcST3RM(){
	var strm = document.form7.strm.value - 0;
	var st1sm = document.form6.st1sm.value - 0;
	var st2sm = document.form6.st2sm.value - 0;
	var finalval = 0;
	
	finalval = strm + st2sm + st1sm;
	
	document.form7.finalval.value = finalval;
	
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form7.submit();
	}
	else{
		// Go back to form
	}
	
}

function loadSieve() {
	 alert("Please remember to press calculate twice even if your values auto-load");
	 calcSieve();
}

function saveSieve() {
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form3.submit();
	}
	else{
		// Go back to form
	}
}

function back2Sieve(){
	document.form9.submit();
}

function saveStab() {
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form2.submit();
	}
	else{
		// Go back to form
	}
}

function calcStability() {
	var AVGtot = 0;
	var AVGhard = 0;

	var S1gw=document.form2.S1gw.value - 0;  // No clue why, but all the variables have to be subtracted by 0 to set numeral.
	var S1at=document.form2.S1at.value - 0;
	var S1val1=document.form2.S1val1.value - 0;
	var S1val2=document.form2.S1val2.value - 0;
	var S1val3=document.form2.S1val3.value - 0;
	var S1val4=document.form2.S1val4.value - 0;
	var S1val5=document.form2.S1val5.value - 0;
	var S1val6=document.form2.S1val6.value - 0;	
	var S1tot = 0;
	var S1hard = 0;
	
	S1tot=((S1val1 + S1val2 + S1val3 + S1val4) / S1gw);
	S1hard=((S1val1 + S1val2 + S1val3 + S1val4 + S1val5) / S1gw);
	
	document.form2.S1tot.value = S1tot;
	document.form2.S1hard.value = S1hard;
	
	var S2gw=document.form2.S2gw.value - 0;  // No clue why, but all the variables have to be subtracted by 0 to set numeral.
	var S2at=document.form2.S2at.value - 0;
	var S2val1=document.form2.S2val1.value - 0;
	var S2val2=document.form2.S2val2.value - 0;
	var S2val3=document.form2.S2val3.value - 0;
	var S2val4=document.form2.S2val4.value - 0;
	var S2val5=document.form2.S2val5.value - 0;
	var S2val6=document.form2.S2val6.value - 0;	
	var S2tot = 0;
	var S2hard = 0;
	
	S2tot=((S2val1 + S2val2 + S2val3 + S2val4) / S2gw);
	S2hard=((S2val1 + S2val2 + S2val3 + S2val4 + S2val5) / S2gw);
	
	document.form2.S2tot.value = S2tot;
	document.form2.S2hard.value = S2hard;

		var S3gw=document.form2.S3gw.value - 0;  // No clue why, but all the variables have to be subtracted by 0 to set numeral.
	var S3at=document.form2.S3at.value - 0;
	var S3val1=document.form2.S3val1.value - 0;
	var S3val2=document.form2.S3val2.value - 0;
	var S3val3=document.form2.S3val3.value - 0;
	var S3val4=document.form2.S3val4.value - 0;
	var S3val5=document.form2.S3val5.value - 0;
	var S3val6=document.form2.S3val6.value - 0;	
	var S3tot = 0;
	var S3hard = 0;
	
	S3tot=((S3val1 + S3val2 + S3val3 + S3val4) / S3gw);
	S3hard=((S3val1 + S3val2 + S3val3 + S3val4 + S3val5) / S3gw);
	
	document.form2.S3tot.value = S3tot;
	document.form2.S3hard.value = S3hard;
	
	if (S3tot > "") {
		AVGtot = (((S1tot + S2tot + S3tot) / 3) * 100);
		AVGtot=Math.round((AVGtot*10))/10;
	}
	else {
		AVGtot = (((S1tot + S2tot) / 2) * 100);
		AVGtot=Math.round((AVGtot*10))/10;
	}
	
	document.form2.AVGtot.value = AVGtot;  // The variable gets shown, but needs to be sent to hidden so it
	document.form2.AVGtotX.value = AVGtot; // can be passed along to the page that actually writes the data
	
	if (S3hard > "") {
		AVGhard = (((S1hard + S2hard + S3hard) / 3) * 100);
		AVGhard=Math.round((AVGhard*10))/10;
	}
	else {
		AVGhard = (((S1hard + S2hard) / 2) * 100);
		AVGhard=Math.round((AVGhard*10))/10;
	}
	
	document.form2.AVGhard.value = AVGhard;  // The variable gets shown, but needs to be sent to hidden so it
	document.form2.AVGhardX.value = AVGhard; // can be passed along to the page that actually writes the data	
										   
	
	//var answer = confirm("Are you sure you would like calculate this data "+S1tot+"?")
	//if (answer){
		// submit the form
		//document.form2.submit();
	//}
	//else{
		// Go back to form
	//}
}

function confirmRecord() {
	var answer = confirm("Are you sure you would like to save this data?")
	if (answer){
		// submit the form
		document.form2.submit();
	}
	else{
		// Go back to form
	}
}

function confirmNote() {
	var answer = confirm("Are you sure you would like save this note?")
	if (answer){
		// submit the form
		document.form3.submit();
	}
	else{
		// Go back to form
	}
}

function confirmLogin() {
	var answer = confirm("Are you sure you would like to save this sample data?")
	if (answer){
		// submit the form
		document.form.submit();
	}
	else{
		// Go back to form
	}
}

function confirmTime() {
	var answer = confirm("Are you sure you would like to input this time?  It cannot be changed.")
	if (answer){
		// submit the form
		document.form.submit();
	}
	else{
		// Go back to form
	}
}

function confirmBarge() {
	var answer = confirm("Are you sure you would like to input this barge data?")
	if (answer){
		// submit the form
		document.form.submit();
	}
	else{
		// Go back to form
	}
}

function confirmTruck() {
	var answer = confirm("Are you sure you would like to input this truck data?")
	if (answer){
		// submit the form
		document.form.submit();
	}
	else{
		// Go back to form
	}
}

function adminEditUser() {
	var answer = confirm("Are you sure you would like to edit this user?")
	if (answer){
		// submit the form
		document.form.submit();
	}
	else{
		// Go back to form
	}
}

function adminDeleteUser() {
	var answer = confirm("Are you sure you would like to delete this user?")
	if (answer){
		// submit the form
		document.form2.submit();
	}
	else{
		// Go back to form
	}
}

// Purpose: Auto populating the rfq or quote due date from the timeframe dropdown 
function datePopulate(source,destination) {
	var currentTime = new Date();
	var source_value = document.getElementById(source).value;
	var month, day, year;

	switch(source_value){
		case "2":
			days = 4;
			break;

		case "3": 
			days = 14;
			break;

		case "4": 
			days = 30;
			break;

		case "5":
			days = 90;
			break;

		case "6":
			days = 180;
			break;

		case "9999":
			days = 0;
			break;

		default:
			days = 0;
	}

	currentTime.setDate(currentTime.getDate()+days);

	month = ("0" + (currentTime.getMonth() + 1)).slice(-2);
	day = currentTime.getDate();
	year = currentTime.getFullYear();

	document.getElementById(destination).value = month+"/"+day+"/"+year;
}
