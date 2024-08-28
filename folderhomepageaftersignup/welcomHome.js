var icon = document.getElementById("icon");
icon.onclick=function(){
    document.body.classList.toggle("dark");
if(document.body.classList.contains("dark")){
    icon.src="sun-removebg-preview.png" ; 
    document.getElementById("checkBlue").src="checkOrange-removebg-preview.png";
    document.getElementById("map").src="darkmap-removebg-preview.png";
    document.getElementById("profile").src="Profile White.png";
}
else{
    icon.src= "moon-removebg-preview.png" ;
    document.getElementById("checkBlue").src="download-removebg-preview (1).png";
    document.getElementById("map").src="mapProgramming-removebg-preview.png";
    document.getElementById("profile").src="user_pic.png";
}}

