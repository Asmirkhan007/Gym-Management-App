const btn = document.getElementById('login');
var loggedIn = false;

function login(password) {
    var storedPassword = 'Pass123';

    return password == storedPassword;
}

function status(event) {
  if(loggedIn) {
   
  } else {
    alert('You are not in :(');
    event.preventDefault(); // disable normal form submit behavior
    return false; // prevent further bubbling of event

  }
}
btn.addEventListener('click' , (event) => {
    
    var password = document.getElementById('password').value;
  
  loggedIn = login(password);
  status(event);


    
    

})

// function authenticate() {
  
