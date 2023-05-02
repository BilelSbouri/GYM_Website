
//listen for submit form
document.getElementById('contactForm').addEventListener('submit',submitForm);

//submit form
function submitForm(e){
    e.preventDefault();


//get values
    var email = getInputVal('email');
    var tel = getInputVal('tel');
    var message = getInputVal('message');

    //save message
    saveMessage(email, tel, message)
}


//function to get value from form
function getInputVal(id) {
    return document.getElementById(id).value;


}
//function to save mess to firebase
function saveMessage(email, tel, message) {
     var newMessagesRef = messagesRef.push();
    newMessagesRef.set({
        email:email,
        tel:tel,
        message:message

    });
}
