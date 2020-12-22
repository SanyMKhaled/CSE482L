
function validate() {
  var name = document.getElementById('name').value
  var username = document.getElementById('Uname').value
  var password = document.getElementById('Password').value
  var genderM = document.getElementById('male')  
  var genderF = document.getElementById('female')  
  var genderO = document.getElementById('other')  
  var con = document.getElementById('contact')

  var contactEx = /^01[0-9]{9}$/
  var usernameEx = /\s/;
  var passEx = /([a-zA-Z0-9)]{8,32}/;

    if(name == ""){
        alert('Name must be filled out')
    }

    if(usernameEx.test(username)){
        alert( 'White space found on UserName, Remove it')
    }
    
    if(passEx.test(password)){
        return true;
    }
    else{
        alert('Password must be between 8-32 chars')
    }

    if(genderM.checked==false && genderF.checked==false && genderO.checked==false )
           {
                alert("You must select gender");
                return false;
           }
    if(contactEx.test(con)){
        return true
    }       else{
        alert('Not a valid phone number')
    }
          
} 
