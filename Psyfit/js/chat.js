const form = document.querySelector(".typing-area"),
incoming_id = form.querySelector(".incoming_id").value,
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector(".snd"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}

// inputField.focus();
// inputField.onkeyup = ()=>{
//     if(inputField.value != ""){
//         sendBtn.classList.add("active");
//     }else{
//         sendBtn.classList.remove("active");
//     }
// }
//

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}



function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
  }


  function send(){
  $.post("insert-chat.php",
    {
      msg:inputField.value,
      incoming_id: incoming_id,
    },
    function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
        inputField.value = "";
         scrollToBottom();
    }
);
}

setInterval(() =>{
  $.post("get-chat.php",
    {
      incoming_id: incoming_id,

    },
    function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
        document.getElementById('cb').innerHTML=data;
         scrollToBottom();


    }
);
},500);
