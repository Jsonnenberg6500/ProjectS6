//for initial login page
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elMsg = document.getElementById('usernamefeedback');
var elMsg2 = document.getElementById('passwordfeedback');



//****************** for initial login page *****************************

function checkUserName(){
    if(elUsername.value.length < 7){
        elMsg.innerHTML = '<p>Username must be 7 characters or more </p>';
        
    }
    else
    {  
        elMsg.innerHTML = '';    
    }
	
      
}


function checkPassword(){

	if(elPassword.value.length < 7){
        elMsg2.innerHTML = '<p>Password must be 7 characters or more </p>';
        
    }
    else
    {  
        elMsg2.innerHTML = '';    
    }
    
    
}

elUsername.addEventListener('blur', checkUserName, false);
elPassword.addEventListener('blur', checkPassword, false);


