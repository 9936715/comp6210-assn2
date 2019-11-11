let theme = localStorage.theme;
let darkCSS = document.querySelector("#dark-css");
let lightCSS = document.querySelector("#light-css");
let lightMenuItem = document.querySelector('#theme-light');
let darkMenuItem = document.querySelector('#theme-dark');
let navigation = document.querySelector("nav");

// on load
if(theme){
    if(theme == "light"){
        lightTheme();
    }
    else{
        darkTheme();
    }
}
else{
    lightTheme();
}

// on change
lightMenuItem.addEventListener('click', (e) => {
e.preventDefault();
localStorage.theme = "light";
lightTheme();
  });
 
darkMenuItem.addEventListener('click', (e) => {
e.preventDefault();
localStorage.theme = "dark";
darkTheme();
  });

function lightTheme(){
    darkCSS.disabled = true;
    lightCSS.disabled = false;
    navigation.classList.add("navbar-light");
    navigation.classList.remove("navbar-dark");
    lightMenuItem.classList.add("active");
    darkMenuItem.classList.remove("active");

}

function darkTheme(){
    darkCSS.disabled = false;
    lightCSS.disabled = true;
    navigation.classList.remove("navbar-light");
    navigation.classList.add("navbar-dark");
    darkMenuItem.classList.add("active");
    lightMenuItem.classList.remove("active");
}