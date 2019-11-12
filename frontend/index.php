<?php
$title = "Home";
include_once('layout/header.php');
?>



    <div id="app" class="row">

     </div>

<script>
    getProfiles();
    
  async function getProfiles(){  
  let promise = fetch('http://localhost:9080/profiles/getall')
        .then(response=>response.json())
        .then(data=>{
            let html = "";
            console.log(sessionStorage.username);
            for(let i = 0; i < data["MSG"].length; i++){
                html += `<div class="col-lg-4 col-md-6"><div class="profile-home"><a href="profile.php?id=${data["MSG"][i]["id"]}">
            <img src="${data["MSG"][i]["pic"]}" alt="profile-pic" class="img-fluid rounded-circle profile-home-img"/>
            <h3>${data["MSG"][i]["name"]}</h3></a>`;
            if(sessionStorage.username == "admin"){
                html+=`<div class="text-center admin-edit-btn"><a class="btn-block btn btn-primary" href="edit-profile.php?id=${data["MSG"][i]['id']}">Edit</a></div>`;
            }
            html+=`</div></div>`;
            }
            document.querySelector('#app').innerHTML = html;
        });
        console.log(promise);
        let result = await promise;
        console.log(`Result: ${result}`);
    }
</script>


<?php
include_once ('layout/footer.php');
?>

