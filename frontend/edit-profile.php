<?php
$title = "Edit Profile";
include_once('layout/header.php');
?>
        <div class="row">
            <div class="col-lg-9">
                <h2>Edit Profile</h2>
                <form>
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pic" class="col-md-3 col-form-label">Picture</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="pic" name="pic">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="github" class="col-md-3 col-form-label">GitHub</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="github" name="github">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facebook" class="col-md-3 col-form-label">Facebook</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="facebook" name="facebook">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="linkedin" class="col-md-3 col-form-label">LinkedIn</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="linkedin" name="linkedin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="twitter" class="col-md-3 col-form-label">Twitter</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="twitter" name="twitter">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="youtube" class="col-md-3 col-form-label">YouTube</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="youtube" name="youtube">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article1" class="col-md-3 col-form-label">Article 1</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article1" name="article1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article2" class="col-md-3 col-form-label">Article 2</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article2" name="article2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article3" class="col-md-3 col-form-label">Article 3</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article3" name="article3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article4" class="col-md-3 col-form-label">Article 4</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article4" name="article4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article5" class="col-md-3 col-form-label">Article 5</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="article5" name="article5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary" id="save-profile">Save Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
        let getID = parseInt((new URL(document.location)).searchParams.get('id'));
            if(sessionStorage.id == getID || sessionStorage.username == "admin"){
                getProfile();

            }
            else{
                alert("You do not have rights to edit this page");
                window.location.href = "index.php";
            }

            let button = document.querySelector('#save-profile');

button.addEventListener('click', (e) => {
e.preventDefault();
updateProfile();
  });

async function getProfile()
{   let promise = 
    fetch(`http://localhost:9080/profiles/getprofile/${getID}`)
        .then(response=>response.json())
        .then(data=>{
            document.querySelector("#pic").value = data["MSG"][0]["pic"];
            document.querySelector("#name").value = data["MSG"][0]["name"];
            document.querySelector("#github").value = data["MSG"][0]["github"];
            document.querySelector("#facebook").value = data["MSG"][0]["facebook"];
            document.querySelector("#linkedin").value = data["MSG"][0]["linkedin"];
            document.querySelector("#twitter").value = data["MSG"][0]["twitter"];
            document.querySelector("#youtube").value = data["MSG"][0]["youtube"];
            document.querySelector("#article1").value = data["MSG"][0]["article1"];
            document.querySelector("#article2").value = data["MSG"][0]["article2"];
            document.querySelector("#article3").value = data["MSG"][0]["article3"];
            document.querySelector("#article4").value = data["MSG"][0]["article4"];
            document.querySelector("#article5").value = data["MSG"][0]["article5"];
        });
        let result = await promise;
}

  async function updateProfile(){
      
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

let postData = {ID:getID, PIC:pic, NAME:name, GITHUB:github, FACEBOOK:facebook, LINKEDIN:linkedin, TWITTER:twitter, YOUTUBE:youtube, ARTICLE1:article1, ARTICLE2:article2, ARTICLE3:article3, ARTICLE4:article4, ARTICLE5:article5};
let promise = fetch(`http://localhost:9080/profiles/updateprofile/`,{
    method:'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(postData)
}).then(response=>response.json())
        .then(resp=>{
            if(resp["MSG"]){
                window.location.href = `profile.php?id=${getID}`;
            }
        });
        let result = await promise;
  }
        </script>

        <?php
        include_once ('layout/footer.php');
        ?>