
var elForm = document.getElementById('reqAccess');
var email = document.getElementById('enterEmail');
var emailfeedback = document.getElementById('emailfeedback');


var repeatInput = document.getElementById('repeatpassword');
var repeatfeedback = document.getElemetnById('repeatpasswordfeedback');


function checkEmail(event){

	if(emailInput.value.length < 1)
	{
		emailfeedback.innerHtml = '<p>Error! You Must Enter Email! </p>';
		event.preventDefault(); //Do not submit the form (submit == default)
	
	}
	else
	{
		emailfeedback.innerHtml = '<p>HIT TRIGGER - Longer than expected </p>';	
		
	}	
}

/*
function checkUserName(){
    if(elUsername.value.length < 7){
        elMsg.innerHTML = '<p>Username must be 7 characters or more </p>';
        
    }
    else
    {  
        elMsg.innerHTML = '';    
    }
	
      
}

*/

/*

function checkEmail(){

	if(email.value.length < 3)
	{
		emailfeedback.innerHTML = '<p>Error! You Must Enter Email! </p>';
		//event.preventDefault(); //Do not submit the form (submit == default)
	
	}
	else
	{
		emailfeedback.innerHTML = '<p>HIT TRIGGER - Longer than expected </p>';	
		
	}	
} */


function checkRepeatPassword(event){

	if(repeatInput.value.length < 1)
	{
		repeatfeedback.innerHtml = '<p>Error! You Must Enter A Password! </p>';
		event.preventDefault(); //Do not submit the form (submit == default)
	
	}
	else
	{
		repeatfeedback.innerHtml = '';	
		
	}	
}



//email.addEventListener('blur', checkEmail, false);

elForm.addEventListener('submit', function(event) {checkEmail(event);checkRepeatPassword(event);}, false);
