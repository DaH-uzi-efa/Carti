var icon = document.getElementById("icon");

if(localStorage.getItem("theme") == null){
    localStorage.setItem("theme", "dark");
}

let colorTheme = localStorage.getItem("theme");

if(colorTheme == "dark"){
    icon.src = "webimages/sun.png";
    document.body.classList.remove("light-theme");
}else if(colorTheme == "light"){
    icon.src = "webimages/moon.png";
    document.body.classList.add("light-theme");
}

icon.onclick = function(){
    document.body.classList.toggle("light-theme");
    if(document.body.classList.contains("light-theme")){
        icon.src = "webimages/moon.png";
        localStorage.setItem("theme", "light");
    }else{
        icon.src = "webimages/sun.png";
        localStorage.setItem("theme", "dark");

    }
}
console.log(colorTheme)