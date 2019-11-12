<?php
$title = "Login";
include_once('layout/header.php');
?>
        <div class="row">
            <div class="col-md-9 col-lg-6">
                <h2>Login</h2>
                <p id="error-message"></p>
                <form>
                    <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article5" class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary" id="login-button">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<script>
let button = document.querySelector('#login-button');
button.addEventListener('click', (e) => {
e.preventDefault();

let username = document.querySelector("#username").value;
let password = document.querySelector("#password").value;

let postData = {USERNAME:username, PASSWORD:password};
fetch('http://localhost:9080/profiles/login',{
    method:'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(postData)
}).then(response=>response.json())
        .then(data=>{
            if(data["MSG"] === undefined || data["MSG"].length == 0)
            {
                document.querySelector("#error-message").innerHTML = "Username or password is incorrect. Please try again with the correct details";
                document.querySelector("#error-message").classList.add("alert");
                document.querySelector("#error-message").classList.add("alert-danger");
            }
            else{
                sessionStorage.id = data["MSG"][0]["id"];
                sessionStorage.username = data["MSG"][0]["username"];
                sessionStorage.name = data["MSG"][0]["name"];
                sessionStorage.isLoggedIn = 1;
                if(sessionStorage.username == "admin"){
                    window.location.href = "index.php";
                }
                else{
                window.location.href = `profile.php?id=${sessionStorage.id}`;
                }
            }
        });

  });
       
</script>

<?php
include_once('layout/footer.php');
?>