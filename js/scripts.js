/* 

// copies email address for user
function copyEvent(id)
{
    var str = document.getElementById(id);
    window.getSelection().selectAllChildren(str);
    document.execCommand("Copy")
} */


// outputs a thank you message for contact form
function thankYouMsg()
{
    document.getElementById("thankYouDiv").innerHTML = "Thank you for your message, I will get back to you shortly";
}