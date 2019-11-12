<?php
$title = "Contact";
include_once('layout/header.php');
?>
        <div class="row">
            <div class="col-lg-9">
                <h2>Contact</h2>
                <p id="error-message" class="alert alert-danger"></p>
                <form>
                    <div class="form-group row">
                        <label for="profile-id" class="col-md-3 col-form-label">Profile ID</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" id="profile-id" name="profile-id" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message-id" class="col-md-3 col-form-label">Message ID</label>
                        <div class="col-md-9 ">
                            <input type="number" class="form-control" id="message-id" name="message-id" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-3  col-form-label">Email</label>
                        <div class="col-md-9 ">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3 "></div>
                        <div class="col-md-9 ">
                            <button type="button" class="btn btn-primary" onclick="submitContact()" id="submit-contact">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" id="message-wrapper">
            <div class="col-12">
                <h4>Message</h4>
                <p id="message">
                </p>
            </div>
                <div class="col-12">
                    <h4>Response</h4>
                    <p id="response">
                    </p>
                </div>
            </div>
</div>
   <script>
      let wrapper = $("#message-wrapper");
       wrapper.hide(); 
       let error = $('#error-message');
       error.hide();
       let message = $('#message');
       let rsp = $('#response');

       async function submitContact(){
           console.log('submitContact');
           let messageId = $('#message-id').val();
           let profileId = $('#profile-id').val();
           let email = $('#email').val();
       
           postData = {ID:messageId, PROFILEID:profileId, EMAIL:email}
           let promise = 
           fetch('http://localhost:9080/messages/getmessage',{
    method:'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(postData)
}).then(response=>response.json())
.then(data=>{
    if(data["MSG"] === undefined || data["MSG"].length == 0){
        console.log("no data");
        error.text('Please check the details provided');
        error.show();
    }
    else
    {
        console.log("data");
        error.hide();
        wrapper.show();
        message.text(data["MSG"][0]["message"]);
        console.log(data["MSG"][0]["response"]);
        rsp.text(data["MSG"][0]["response"]);
    }
});
let result = await promise;
       }

       </script>
            <?php
        include_once ('layout/footer.php');
        ?>