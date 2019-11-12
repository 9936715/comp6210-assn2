let id = sessionStorage.id;
let username = sessionStorage.username;
let name = sessionStorage.name;
loggedIn = sessionStorage.isLoggedIn;

if(loggedIn){
checkLogin(id, username);
}

console.log(`Logged in: ${loggedIn}`);

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

async function logout(){
let postData = {ID:id};
let promise = 
fetch('http://localhost:9080/profiles/logout',{
    method:'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(postData)
}).then(response=>response.json())
        .then(resp=>{
            if(resp["MSG"])
            {
                removeSessionLogin();
                window.location.href = "index.php";
                console.log(`Logged out: ${resp["MSG"]}`);
            }
        });
let result = await promise;
console.log(result);
  }

  async function checkLogin(id, username){

    let postData = {ID:id, USERNAME:username};
let promise = 
    fetch('http://localhost:9080/profiles/isloggedin',{
        method:'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(postData)
    }).then(response=>response.json())
            .then(resp=>{
                    if(resp["MSG"]){
                        console.log('Logged in')
                        sessionStorage.isLoggedIn = 1;       
                    }
                    else{
                        console.log("Not logged in");
                        removeSessionLogin();
                    }
            });
            let result = await promise;
            console.log(result);
  }

  function removeSessionLogin(){
    sessionStorage.removeItem("id");
    sessionStorage.removeItem("name");
    sessionStorage.removeItem("username");
    sessionStorage.removeItem("isLoggedIn");
}