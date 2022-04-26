var m = document.getElementById("mymusic");
var cg=document.getElementById("cgbox");
//music
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


  //goal stuff
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  function send() {
    document.getElementById("tgt3").style.display = "block";
    document.getElementById("tgt3").innerHTML=document.getElementById('note').value;
    document.getElementById('addgoal').style.display="none";
    document.getElementById('myForm').style.display="none";
    console.log(document.getElementById('note').innerHTML);
    var customgoal=document.getElementById("tgt3").innerHTML;
    localStorage.setItem("customgoal",customgoal.toString());
    localStorage.setItem("count","1");
  }


//Todays goals
  document.getElementById("tgt1").onclick = function()
  { document.getElementById("tgt1").style.display = "none";
  document.getElementById("cgt1").style.display = "block";
    document.getElementById("cgt1").innerHTML=document.getElementById("tgt1").innerHTML;
    var g1=document.getElementById("tgt1").innerHTML;
    localStorage.setItem("gt1",g1.toString());
    localStorage.setItem("tgt1","1");
}
  document.getElementById("tgt2").onclick = function()
  { document.getElementById("tgt2").style.display = "none";
  document.getElementById("cgt2").style.display = "block";
  document.getElementById("cgt2").innerHTML=document.getElementById("tgt2").innerHTML;
  var g2=document.getElementById("tgt2").innerHTML;
  localStorage.setItem("gt2",g2.toString());
  localStorage.setItem("tgt2","1");
  }
  document.getElementById("tgt3").onclick = function()
  { document.getElementById("tgt3").style.display = "none";
  document.getElementById("cgt3").style.display = "block";
  document.getElementById("cgt3").innerHTML=document.getElementById("tgt3").innerHTML;
  var g3=document.getElementById("tgt3").innerHTML;
  localStorage.setItem("gt3",g3.toString());
  localStorage.setItem("tgt3","1");
  }
//Completed Goals
  document.getElementById("cgt1").onclick = function()
  { document.getElementById("cgt1").style.display = "none";
    document.getElementById("tgt1").style.display = "block";
    document.getElementById("tgt1").innerHTML=document.getElementById("cgt1").innerHTML;
    localStorage.setItem("tgt1","0");
}

  document.getElementById("cgt2").onclick = function()
  { document.getElementById("cgt2").style.display = "none";
  document.getElementById("tgt2").style.display = "block";
  document.getElementById("tgt2").innerHTML=document.getElementById("cgt2").innerHTML;
    localStorage.setItem("tgt2","0");
  }

    document.getElementById("cgt3").onclick = function()
    { document.getElementById("cgt3").style.display = "none";
      document.getElementById("tgt3").style.display = "block";
      document.getElementById("tgt3").innerHTML=document.getElementById("cgt3").innerHTML;
        localStorage.setItem("tgt3","0");
  }


//clearing goals at midnight system time
  setInterval(() =>{
    var current=new Date();
    var time=current.getHours();
     if (time.toString()=="00") {
       document.getElementById('addgoal').style.display="block";
       document.getElementById('myForm').style.display="block";
       localStorage.clear();
     }
},3600);
var current=new Date();
var time=current.getHours();
 if (time.toString()=="00") {
   document.getElementById('addgoal').style.display="block";
   document.getElementById('myForm').style.display="block";
   localStorage.clear();
 }

var count=localStorage.getItem("count");
if (count=="1") {
  document.getElementById('addgoal').style.display="none";
  document.getElementById('myForm').style.display="none";
  document.getElementById("tgt3").style.display = "block";
  document.getElementById("tgt3").innerHTML=localStorage.getItem("customgoal");
}

var c1=localStorage.getItem("tgt1");
if(c1=="1")
{
  document.getElementById('tgt1').style.display="none";
  document.getElementById('cgt1').style.display="block";
  document.getElementById("cgt1").innerHTML=localStorage.getItem("gt1");
}

var c2=localStorage.getItem("tgt2");
if(c2=="1")
{
  document.getElementById('tgt2').style.display="none";
  document.getElementById('cgt2').style.display="block";
  document.getElementById("cgt2").innerHTML=localStorage.getItem("gt2");
}
var c3=localStorage.getItem("tgt3");
if(c3=="1")
{
  document.getElementById('tgt3').style.display="none";
  document.getElementById('cgt3').style.display="block";
  document.getElementById("cgt3").innerHTML=localStorage.getItem("gt3");
}
var a=1;
setInterval(() =>{
  $.post("alert.php",{},
    function(data, status){
      if(data=="1")
        {alrt();}
    }
);
},5000);


function alrt()
{
  if(a==1)
  {
    alert("You got a match! Head over to the chat section to interact with your Psyfer. Remember, BE NICE!");
    a=0;
    location.reload();
  }
}
