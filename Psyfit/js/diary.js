
var inputField = document.getElementById("note");
var containerElement = document.getElementById("bgimg");
data=inputField.value;
function send(){
  if (data.length==0) {
    
  }
  else {
$.post("insert-diary.php",
  {
    journal:inputField.value,
  },
  function(data, status){
      console.log("Data: " + data + "\nStatus: " + status);
      inputField.value = "";
  }
);
$.post("get-diary.php",
  {

  },
  function(data, status){
      console.log("Data: " + data + "\nStatus: " + status);
      document.getElementById('cb').innerHTML=data;

  }
);}
}

$.post("get-diary.php",
  {

  },
  function(data, status){
      console.log("Data: " + data + "\nStatus: " + status);
      document.getElementById('cb').innerHTML=data;

  }
);


function openForm() {
  document.getElementById("myForm").style.display = "block";

}
function closeForm() {
  document.getElementById("myForm").style.display = "none";

}


var m = document.getElementById("mymusic");
function play() {
    m.play();
    m.loop=true;
    m.volume=0.1;
}
var btn=document.getElementById("music-btn");
var clicked=false;
function pause() {
  console.log("clicked");
    if(clicked==false){
    m.pause();
    clicked=true;
    btn.setAttribute("class","fas fa-volume-mute");
}
else{
    m.play();
    clicked=false;
    btn.setAttribute("class","fas fa-volume-up");
    }
  };
