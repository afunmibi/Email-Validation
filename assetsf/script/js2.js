// get form data

let fname = document.getElementById('fname').textContent;
let email = document.getElementById('email').textContent;
let message = document.getElementById('message').textContent;

// ReGex

let fnameReGex = /^[a-zA-Z ]{2,30}$/;
let emailReGex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
let messageReGex = /^[a-zA-Z0-9\s\n\r.,!?]{10,}$/;


// Regex testing 


}





function validate(){
if(fname ===' '){
    alert('Input your FullName');
} else{
    alert('You are good to go');
}
if(!fnameReGex.test(fname)){
    alert('Please input must be filled');
    return false;
}
if(email ===' '){
    alert('Input your email');
} else{
    alert('You are good to go');
}
    if(!emailReGex.test(email)){
    alert('Enter correct email address');
    return false;
}

if(message ===' '){
    alert('Input your message');
} else{
    alert('You are good to go');
}
if(messageReGex.test(message)){
    alert('Please enter your message here');
    return false
}
}