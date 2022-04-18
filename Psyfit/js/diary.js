const form = document.querySelector(".form-container"),
incoming_id = form.querySelector(".email").value,
inputField = form.querySelector(".note").value;
alert("hello");
function send(){
$.post("insert-diary.php",
  {
    journal:inputField.value,
    username: incoming_id,
  },
  function(data, status){
      console.log("Data: " + data + "\nStatus: " + status);
      inputField.value = "";
       scrollToBottom();
  }
);
}

setInterval(() =>{
  $.post("get-diary.php",
    {

    },
    function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
        document.getElementById('cb').innerHTML=data;
         scrollToBottom();


    }
);
},100);
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
