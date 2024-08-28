var fullname = document.getElementById("fullname");
var email= document.getElementById("email");
var phone= document.getElementById("phone");
var date= document.getElementById("date");
var message= document.getElementById("message");
var send= document.getElementById("send");

send.addEventListener("click", function(event){
    var fullnameRegex = /^[a-zA-Z]+(?: [a-zA-Z]+)+$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phoneRegex = /^\d(?:\s*\d){7,}$/;

    errors.innerHTML = '';
        if(!fullnameRegex.test(fullname.value)){
            event.preventDefault();
            errors.innerHTML += '<li>fullname struct (FirstName LastName). It must not contain numbers.</li>'
        }
        if (!emailRegex.test(email.value)) {
            event.preventDefault();
            errors.innerHTML += '<li>Please write a valid email.</li>';
        }
        if(!phoneRegex.test(phone.value)){
            event.preventDefault();
            errors.innerHTML += '<li>phone error.</li>';
        }

        
        });



