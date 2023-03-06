 function crud(){ 
    //validating name
    let name=document.myform.fname.value;  
    // to check if name is empty of not  
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }
      // to check if name has atleast 5 characters
      else if(name.length<5){  
        alert("Name can't less than 5 characters");  
        return false;  
      }
    // // to ensure name cannot be more than 5 characters
    else if(name.length>15){  
        alert("Name can't more than 15 characters");  
        return false;  
      } 

     //validating Last name 
    let llname=document.myform.lname.value;     
    if (llname==null || llname==""){  
      alert("Last name can't be blank");  
      return false;  
    }
      // to check if name has atleast 5 characters
      else if(llname.length<5){  
        alert("Last name can't less than 5 characters");  
        return false;  
      }
    // // to ensure name cannot be more than 5 characters
    else if(llname.length>15){  
        alert("Last name can't more than 15 characters");  
        return false;  
      }
    //validating phonenumber 
    let Phone=document.myform.phonenumber.value;     
    if (Phone==null || Phone==""){  
      alert("Phonenumber can't be blank");  
      return false;  
    }
    else if(Phone.length<9){  
      alert("Phonenumber can't less than 9 digits");  
      return false;  
    }
  // // to ensure name cannot be more than 5 characters
  else if(Phone.length>9){  
      alert("Phonenumber can't more than 9 digits");  
      return false;  
    }
  }
  function crud2(){
      //validating reservation number 
      let reserv=document.myform2.checkreservation.value;
      if (reserv==null || reserv==""){  
          alert("Reservation can't be blank");  
          return false;  
        }  
      else if(reserv.length<8){  
          alert("Reservation code can't be less than 8 digits");  
          return false;  
        }
      // // to ensure name cannot be more than 9 characters
      else if(reserv.length>8){  
          alert("Reservation code can't be more than 8 digits");  
          return false;  
        } 
 
  }     
    //validating email 
  function Bookemail(){ 
    let emaill=document.myform.email.value;
    if (emaill==null || emaill==""){  
        alert("Email can't be blank");  
        return false;  
      }
      let pattern = /@/;
      let eemail=document.myform.email.value;
      let result = pattern.test(eemail);
      // document.write(result);
      if (result==false) {
        alert("Email must contain @");
      }   
    }
    
      // on mouse over 
    function onm(){
      // document.getElementById('mo').style.color = 'blue'; 
      // document.getElementById('mo').style.fontStyle = 'italic';
      // document.getElementById('mo').style.backgroundColor  = 'yellow';
      document.getElementById('mo').style.fontSize = '20px';
    }
      // on mouse over 
      function onm2(){
        document.getElementById('mo2').style.fontSize = '20px';
      }
      function onm3(){
        document.getElementById('mo3').style.fontSize = '20px';
      }

    //on mouse out 
    function ono(){
      // document.getElementById('mo').style.color = 'red'; 
      // document.getElementById('mo').style.fontStyle = 'normal';
      document.getElementById('mo').style.fontSize = '18px';
      // document.getElementById('mo').style.backgroundColor  = 'white';
    }
    function ono2(){
      document.getElementById('mo2').style.fontSize = '18px';
    }
    function ono3(){
      document.getElementById('mo3').style.fontSize = '18px';
    }