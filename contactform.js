$("document").ready(function(){
	$("#submit").click(function(){
        alert("cooool");
			var name_ = $("#name").val();
			var email_ = $("#email").val();
			var subject_ = $("#subject").val();
			var message_ = $("#message").val();

    $.post( "contactform.php", { name: name_,subject:subject_,message:message_,email:email_}, 
    function(result){
        alert("sucess" + result);
        $("#response").text(result);
    
    });
});
});





/*jQuery(document).ready(function($) {
  
  $('#submit').click(function() {

var name = $('#name').val();
var email = $('#email').val();
var subject = $('#subject').val();
var message = $('#message').val();


var vdata = 'name:' + name + 'email:' + email + 'subject:' + subject + 'message:' + message;
//alert(vdata);
$.ajax({
type: "POST",
url: "contactform.php",
data: vdata,
success: function(){

alert("it's a success");

}




})
return false;

});

});

*/







  
    
  