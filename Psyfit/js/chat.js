const form = document.querySelector(".typing-area"),
incoming_id = form.querySelector(".incoming_id").value,
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector(".snd"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}


chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}




  function send(){
      var elem = document.getElementById('ca');
      elem.scrollTop = elem.scrollHeight;
  $.post("insert-chat.php",
    {
      msg:inputField.value,
      incoming_id: incoming_id,
    },
    function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
        inputField.value = "";

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
        if(data){
          var elem = document.getElementById('ca');
          elem.scrollTop = elem.scrollHeight;
        }
    }
);
},500);


useEffect(() => {
 window.addEventListener("beforeunload", handleBeforeUnload);
 return () => {
   window.removeEventListener("beforeunload", handleBeforeUnload);
 };
}, []);

const handleBeforeUnload = (e) => {
 e.preventDefault();
 const message =
   "Are you sure you want to leave? All provided data will be lost.";
 e.returnValue = message;
 return message;
};
