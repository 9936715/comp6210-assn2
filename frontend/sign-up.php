<?php
$title = "Sign Up";
include_once('layout/header.php');
?>
        <div class="row">
            <div class="col-lg-8 col-sm-9">
                <h2>Sign Up</h2>
                <p id="error-message" class="alert alert-danger"></p>
                <form>
                <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" name="username" onblur="checkUsername()" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" name="name"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pic" class="col-md-3 col-form-label">Picture</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="pic" name="pic" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="github" class="col-md-3 col-form-label">GitHub</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="github" name="github" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facebook" class="col-md-3 col-form-label">Facebook</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="facebook" name="facebook" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="linkedin" class="col-md-3 col-form-label">LinkedIn</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="linkedin" name="linkedin" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="twitter" class="col-md-3 col-form-label">Twitter</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="twitter" name="twitter" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="youtube" class="col-md-3 col-form-label">YouTube</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="youtube" name="youtube" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article1" class="col-md-3 col-form-label">Article 1</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article1" name="article1" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article2" class="col-md-3 col-form-label">Article 2</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article2" name="article2" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article3" class="col-md-3 col-form-label">Article 3</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article3" name="article3" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article4" class="col-md-3 col-form-label">Article 4</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article4" name="article4" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article5" class="col-md-3 col-form-label">Article 5</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article5" name="article5"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary" id="sign-up-button">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>

let errorMessage = document.querySelector("#error-message");
errorMessage.style.display = "none";
let button = document.querySelector('#sign-up-button');
console.log(button.innerHTML)
button.addEventListener('click', (e) => {
e.preventDefault();
console.log("clicked");
signUp();
});

async function checkUsername(){
let username = document.querySelector("#username").value;
let postData = {USERNAME:username};
let promise = 
fetch('http://localhost:9080/profiles/checkusername',{
    method:'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(postData)
}).then(response=>response.json())
        .then(resp=>{
            console.log(resp["MSG"]);
            if(resp["MSG"]){
                errorMessage.innerHTML = `Username: ${username}, is already taken. Please choose another username.`;
                document.querySelector("#username").focus();
                errorMessage.style.display = "block";
            }
            else{
                errorMessage.innerHTML = ``;
                errorMessage.style.display = "none";
            }

            });
        let result = await promise;
}   

async function signUp(){
    let username = document.querySelector("#username").value;
    let password = document.querySelector("#password").value;
    let pic = document.querySelector("#pic").value;
let name = document.querySelector("#name").value;
let github = document.querySelector("#github").value;
let facebook = document.querySelector("#facebook").value;
let linkedin = document.querySelector("#linkedin").value;
let twitter = document.querySelector("#twitter").value;
let youtube = document.querySelector("#youtube").value;
let article1 = document.querySelector("#article1").value;
let article2 = document.querySelector("#article2").value;
let article3 = document.querySelector("#article3").value;
let article4 = document.querySelector("#article4").value;
let article5 = document.querySelector("#article5").value;

let postData = {USERNAME:username, PASSWORD:password, PIC:pic, NAME:name, GITHUB:github, FACEBOOK:facebook, LINKEDIN:linkedin, TWITTER:twitter, YOUTUBE:youtube, ARTICLE1:article1, ARTICLE2:article2, ARTICLE3:article3, ARTICLE4:article4, ARTICLE5:article5};
let promise = fetch(`http://localhost:9080/profiles/signup/`,{
    method:'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(postData)
}).then(response=>response.json())
        .then(resp=>{
            if(resp["MSG"]){
                alert("Record added successfully");
                window.location.href = `login.php`;
            }
        });
        let result = await promise;
  }


        </script>
        <?php
        include_once ('layout/footer.php');
        ?>