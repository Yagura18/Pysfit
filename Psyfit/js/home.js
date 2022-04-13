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
