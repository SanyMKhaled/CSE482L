function validate() {
  var name = document.getElementById('name').nodeValue
  var con = document.getElementById('num').nodeValue

  var contactEx = /^01[0-9]{9}$/

    if(name == ""){
        alert('Name must be filled out')
    }
    if(contactEx.test(con)){
        return true
    }       else{
        alert('Not a valid phone number')
    }
          
} 
