function sendMail(params) {
    var tempParams ={
        form_name:document.getElementById("formName").value,
        phone:document.getElementById("phone").value,
        user_email:document.getElementById("user-email").value,
        mesagge:document.getElementById("message").value,
    };
    emailjs.send("service_6x6q47","contact_form",tempParams)
    .then(function(res){
    console.log("success", res.status);
    })
}