const pass_field = document.querySelector('.pass-key');
const showBtn = document.querySelector('.show');
showBtn.addEventListener('mouseover', function(){
 if(pass_field.type === "password"){
   pass_field.type = "text";
   showBtn.textContent = "HIDE";
   showBtn.style.color = "#3498db";
 }else{
   pass_field.type = "password";
   showBtn.textContent = "SHOW";
   showBtn.style.color = "#222";
 }
});
showBtn.addEventListener('mouseout', function(){
 if(pass_field.type === "password"){
   pass_field.type = "text";
   showBtn.textContent = "HIDE";
   showBtn.style.color = "#3498db";
 }else{
   pass_field.type = "password";
   showBtn.textContent = "SHOW";
   showBtn.style.color = "#222";
 }
});


const cpass_field = document.querySelector('.cpass-key');
const cshowBtn = document.querySelector('.cshow');
cshowBtn.addEventListener('mouseover', function(){
 if(cpass_field.type === "password"){
   cpass_field.type = "text";
   cshowBtn.textContent = "HIDE";
   cshowBtn.style.color = "#3498db";
 }else{
   cpass_field.type = "password";
   cshowBtn.textContent = "SHOW";
   cshowBtn.style.color = "#222";
 }
});
cshowBtn.addEventListener('mouseout', function(){
 if(cpass_field.type === "password"){
   cpass_field.type = "text";
   cshowBtn.textContent = "HIDE";
   cshowBtn.style.color = "#3498db";
 }else{
   cpass_field.type = "password";
   cshowBtn.textContent = "SHOW";
   cshowBtn.style.color = "#222";
 }
});
function check(e) {
var pass=document.getElementById("pswd");
var cpass=document.getElementById("cpswd");
if(pass.value!=cpass.value){
e.preventDefault();
alert("Password and Confirm Password must be same");
}

}
