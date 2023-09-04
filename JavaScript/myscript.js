//show type above. js html event -ONKEYUP.
//When an HTML document is loaded into a web browser, it becomes a document object.
//The document object is the root node of the HTML document.
//The document object is a property of the window object.
//getElementById=It is used almost every time you want to read or edit an HTML element.  points to html element
//innerHTML = 'Data or content'; getElementById: The getElementById refers to the HTML element using its ID.Get/Change  the HTML content of an element with id. : Data or content: Data is the new content to go into the element.
//document. getElementById("myPara") will return our html element as a javascript object which has pre-defined property innerHTML
function show()
{
    document.getElementById("print").innerHTML=document.getElementById("un").value;  
   
}
//functions for validation in javascript//
function checkEmpty1()
    {
        if(document.getElementById("no").value=="")
        {
           
            return true;
        }
    }

function checkEmpty2()
{
    if(document.getElementById("eno").value=="" )
    {
        return true;
    }
}

function checkLength1()
    {
        var no=document.getElementById("no").value;
        if( no.length>11 || no.length<11  )
        {
            return true;
        }
    
       
    }

    function checkLength2()
    {
        var eno=document.getElementById("eno").value;
        if( eno.length>11 || eno.length<11)
        {
            return true;
        }
        
    }
    
    function checkPass()
    {
        var password=document.getElementById("password").value;
        if(password.length<8)
        {
            document.getElementById("paserror").innerHTML="Enter valid password";
            return true;
        }
    }

    function checkPassEmpty()
    {
        
        if(document.getElementById("password").value=="" || document.getElementById("password").value=="%")
        {
            document.getElementById("paserror").innerHTML="Enter valid password";
            return true;
        }
    }

function validate(){
    var no=document.getElementById("no").value;
    if(isNaN(no)){
    return true;
    }
    }

    function validate1(){
        var eno=document.getElementById("eno").value;
        if(isNaN(eno)){
        return true;
        }
        }


//js validation
function valid()
{
    
    if(document.getElementById("fname").value== "" || document.getElementById("fname").value== "+" || document.getElementById("fname").value== "-" || document.getElementById("fname").value== "*" || document.getElementById("fname").value== "/")
    {
        document.getElementById("error").innerHTML="Please enter your first name";
        return false;
    }
    if(document.getElementById("lname").value== "" || document.getElementById("lname").value== "+" || document.getElementById("lname").value== "-" || document.getElementById("lname").value== "*" || document.getElementById("lname").value== "/")
    {
        document.getElementById("error").innerHTML="Please enter your last name";
        return false;
    }
    if(document.getElementById("Fname").value== "" || document.getElementById("Fname").value== "+" || document.getElementById("Fname").value== "-" || document.getElementById("Fname").value== "*" || document.getElementById("Fname").value== "/" )
    {
        document.getElementById("error").innerHTML="Please enter your Father's name";
        return false;
    }
     if(document.getElementById("Mname").value== "" || document.getElementById("Mname").value== "+" || document.getElementById("Mname").value== "-" || document.getElementById("Mname").value== "*" || document.getElementById("Mname").value== "/")
    {
        document.getElementById("error").innerHTML="Please enter your Mother's name";
        return false;
    }

    if(document.getElementById("un").value== "" || document.getElementById("un").value== "+" || document.getElementById("un").value== "-" || document.getElementById("un").value== "*" || document.getElementById("un").value== "/" || document.getElementById("un").value== "%" || document.getElementById("un").value== "$" || document.getElementById("un").value== "!")
    {
        document.getElementById("uerror").innerHTML="Please enter your username or avoid operators and %!$";
        return false;
    }


    if(checkEmpty1()==true || checkLength1()==true || validate()==true)
 {
    document.getElementById("moerror").innerHTML="Please enter valid Mobile number & numeric number";
    return false;
    

 }

    
 if(checkEmpty2()==true || checkLength2()==true || validate1()==true)
 {
    document.getElementById("emoerror").innerHTML="Please enter valid Mobile number & numeric number";
    return false;
 }



 if(checkPass()==true || checkPassEmpty())
 {
    
    return false;
 }

       
}
//JS HTML DOM event- ONCHANGE
//small to capital letter javascript. The upperCase() function will be called when a user changes the content of an input field.
function upperCase() {
    let x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
    let y = document.getElementById("lname");
    y.value = y.value.toUpperCase();
    let z = document.getElementById("Fname");
    z.value = z.value.toUpperCase();
    let a = document.getElementById("Mname");
    a.value = a.value.toUpperCase();
    let b = document.getElementById("RP");
    b.value = b.value.toUpperCase();
    let c = document.getElementById("WRTP");
    c.value = c.value.toUpperCase();
  }

function lowerCase() {
    let l= document.getElementById("email");
    l.value = l.value.toLowerCase();
  }
  

//js event onclick- event - onclick event occurs when the user clicks on an HTML element.
function confirmation(){
  var result = confirm();
 
}

function showpass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";     //password to text for human readable. ONCLICK EVENT
  } else {
    x.type = "password";
  }
}

//jQuery is a lightweight, "write less, do more", JavaScript library. The purpose of jQuery is to make it much easier to use JavaScript on your website. jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.
//jQuery means "write less do more". jQuery simplifies AJAX call and DOM manipulation.
//JQUERY of mouse enter[warning if someone wants to go home without login]//mouseenter() method attaches an event handler function to an HTML element.
$(document).ready(function(){                                                                                                    //before finishing the loading of document jquery will not execute
    $("#alert1").mouseenter(function(){                                                                                          //moving a mouse over an element: jquery syntax
      alert("Warning!please logout before leaving"); //alert jquery command box
    });
  });


//Ajax content  ..Update a web page without reloading the page..
//AJAX just uses a combination of:
//A browser built-in XMLHttpRequest object (to request data from a web server)
//JavaScript and HTML DOM (to display or use the data)
// AJAX applications might use XML to transport data

 /* function loadDoc() {   
    var xhttp = new XMLHttpRequest();                 //request data from server,without refreshing the page| exchange data from server
    xhttp.open("GET", "../Controll/Ajx.txt", false);  //open(method, url, sync) Specifies the type of request
    xhttp.send();                                    //Sends the request to the server (used for GET) 
    document.getElementById("dcon").innerHTML = xhttp.responseText; //responseText:get the response data as a JS string

  }*/
  function loadDoc() 
  { 
     var xhttp =new XMLHttpRequest();           //request data from server,without refreshing the page| exchange data from server
     xhttp.onreadystatechange=function()         //defines a function to be executed when the readyState changes
     {
      if(this.readyState==4 && this.status == 200) 
      { 
        document.getElementById("dcon").innerHTML=this.responseText;  
      
     }
     };
      xhttp.open("GET","../Controll/Ajx.txt",true); 
      xhttp.send();
    }

    function loadabout() 
    { 
       var xhttp =new XMLHttpRequest();       //request data from server,without refreshing the page| exchange data from server
       xhttp.onreadystatechange=function()    //defines a function to be executed when the readyState changes
       {
        if(this.readyState==4 && this.status == 200)  //the response is ready
        { 
          document.getElementById("about").innerHTML=this.responseText; //responseText:get the response data as a string.
        
       }
       };
        xhttp.open("GET","../Controll/Ajxab.txt",true);  //open(method, url, async) Specifies the type of request
        xhttp.send();    //Sends the request to the server (used for GET) 
      }

      function loadacon() 
      { 
         var xhttp =new XMLHttpRequest();       //request data from server,without refreshing the page| exchange data from server
         xhttp.onreadystatechange=function()    //defines a function to be executed when the readyState changes
         {
          if(this.readyState==4 && this.status == 200) 
          { 
            document.getElementById("contact").innerHTML=this.responseText; //responseText:get the response data as a JS string
          
         }
         };
          xhttp.open("GET","../Controll/Ajxcon.txt",true);  //open(method, url, async) Specifies the type of request
          xhttp.send();    //Sends the request to the server (used for GET) 
        }

 
