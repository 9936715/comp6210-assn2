<?php
$title = "Profile";
include_once('layout/header.php');
?>
    <div class="row">
      <div class="col">
        <h2>Profile</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 profile-page-top">
        <img id="pic" alt="profile-pic" class="img-fluid rounded-circle">
        <h3 id="name"></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h4 class="profile-page-heading">Personal Links</h4>
        <ul class="profile-page-list">
          <li>Github: <a id="github"></a></li>
          <li>Facebook: <a id="facebook"></a></li>
          <li>LinkedIn: <a id="linkedin"></a></li>
          <li>Twitter: <a id="twitter"></a></li>
          <li>Youtube: <a id="youtube"></a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h4 class="profile-page-heading">Recommended Articles</h4>
        <ol class="recommended-articles">
          <li><a id="article1"></a></li>
          <li><a id="article2"></a></li>
          <li><a id="article3"></a></li>
          <li><a id="article4"></a></li>
          <li><a id="article5"></a></li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h4 class="profile-page-heading">Feedback</h4>
        <form>
            <div class="form-group row">
                <label for="name" class="col-md-3  col-form-label">Name</label>
                <div class="col-md-9 ">
                  <input type="text" class="form-control" id="name" name="name">
                </div>
              </div>
          <div class="form-group row">
            <label for="email" class="col-md-3  col-form-label">Email</label>
            <div class="col-md-9 ">
              <input type="email" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="form-group row">
            <label for="message" class="col-md-3  col-form-label">Message</label>
            <div class="col-md-9 ">
              <textarea name="message" rows="5" class="form-control" id="message"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3 "></div>
            <div class="col-md-9 ">
              <button type="submit" class="btn btn-primary" name="submitFeedback">Submit Feedback</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script>

let getID = parseInt((new URL(document.location)).searchParams.get('id'));

fetch(`http://localhost:9080/profiles/getprofile/${getID}`)
        .then(response=>response.json())
        .then(data=>{
            document.querySelector("#pic").src = data["MSG"][0]["pic"]
            document.querySelector("#name").innerHTML = data["MSG"][0]["name"]
            document.querySelector("#github").innerHTML = data["MSG"][0]["github"]
            document.querySelector("#github").href = data["MSG"][0]["github"]
            document.querySelector("#facebook").innerHTML = data["MSG"][0]["facebook"]
            document.querySelector("#facebook").href = data["MSG"][0]["facebook"]
            document.querySelector("#linkedin").innerHTML = data["MSG"][0]["linkedin"]
            document.querySelector("#linkedin").href = data["MSG"][0]["linkedin"]
            document.querySelector("#twitter").innerHTML = data["MSG"][0]["twitter"]
            document.querySelector("#twitter").href = data["MSG"][0]["twitter"]
            document.querySelector("#youtube").innerHTML = data["MSG"][0]["youtube"]
            document.querySelector("#youtube").href = data["MSG"][0]["youtube"]
            document.querySelector("#article1").innerHTML = data["MSG"][0]["article1"]
            document.querySelector("#article1").href = data["MSG"][0]["article1"]
            document.querySelector("#article2").innerHTML = data["MSG"][0]["article2"]
            document.querySelector("#article2").href = data["MSG"][0]["article2"]
            document.querySelector("#article3").innerHTML = data["MSG"][0]["article3"]
            document.querySelector("#article3").href = data["MSG"][0]["article3"]
            document.querySelector("#article4").innerHTML = data["MSG"][0]["article4"]
            document.querySelector("#article4").href = data["MSG"][0]["article4"]
            document.querySelector("#article5").innerHTML = data["MSG"][0]["article5"]
            document.querySelector("#article5").href = data["MSG"][0]["article5"]

        });


        </script>

    <?php
include_once ('layout/footer.php');
?>