let id = localStorage.id;
let username = localStorage.username;
let name = localStorage.name;
loggedIn = localStorage.isLoggedIn;

if(loggedIn){
checkLogin(id, username);
}

console.log(loggedIn);

if(loggedIn == 1){
    document.querySelector('#login').style.display = "none";
    document.querySelector('#sign-up').style.display = "none";
    if(username != "admin"){
    document.querySelector("#edit-profile").href = "edit-profile.php?id="+id;
    document.querySelector('#profile-menu').href = "profile.php?id="+id;
    document.querySelector("#name-menu").innerHTML = name;
    document.querySelector('#admin-dropdown').style.display = "none";}
    if(username == "admin"){
        document.querySelector('#account-dropdown').style.display = "none";

    }
}
else{
    document.querySelector('#account-dropdown').style.display = "none";
    document.querySelector('#admin-dropdown').style.display = "none";
}

function logout(){
let postData = {ID:id};

fetch('http://localhost:9080/profiles/logout',{
    method:'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(postData)
}).then(response=>response.json())
        .then(data=>{
            if(data["MSG"] === undefined || data["MSG"].length == 0)
            {
                console.log("Error while logging out");
            }
            else{
                removeLocalLogin();
                window.location.href = "index.php";
            }
        });

  }



  function checkLogin(id, username){

    let postData = {ID:id, USERNAME:username};

    fetch('http://localhost:9080/profiles/isloggedin',{
        method:'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(postData)
    }).then(response=>response.json())
            .then(data=>{
                if(data["MSG"] === undefined || data["MSG"].length == 0)
                {
                    console.log("Did not return any data when checking if logged in");
                    removeLocalLogin();
                }
                else{
                    if(data["MSG"][0]["logged_in"] == 1){
                        console.log('logged in')
                        localStorage.isLoggedIn = 1;       
                    }
                    else{
                        console.log("Already logged out");
                        removeLocalLogin();
                    }
                }
            });
  }

  function removeLocalLogin(){
    localStorage.removeItem("id");
    localStorage.removeItem("name");
    localStorage.removeItem("username");
    localStorage.removeItem("isLoggedIn");
}