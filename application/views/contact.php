<div class="container mt-3">
    <div class="text-center">
      <h4>Contact form</h4>
      <hr style="width: 250px;border-top: 3px solid #999;">
    </div>
    <form name="qryform" id="qryform" method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email" required>
      </div>

      <div class="form-group">
        <label>Phone No.:</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
      </div>
      <div class="form-group">
        <label>Subject:</label>
        <!--<input type="text" class="form-control" id="name" placeholder="Subject" name="subject">-->
        <select class="form-control" id="subject" name="subject" required>   
          <option value="" disabled selected>Select your Subject</option>       
          <option value="sub1">Collaboration</option>
          <option value="sub2">General Question</option>
          <option value="sub3">Advertising</option>
        </select>
      </div>
      <div class="form-group">
        <label>Questions:</label>
        <textarea name="issues" class="form-control" id="iq" placeholder="Enter your Questions, please be nice" required></textarea>
      </div>
      <div class="form-group">
          <script>
          grecaptcha.ready(function() {
          grecaptcha.execute('6LcTYIUUAAAAANJcsPjCY1dWeIxZqYEa8zt-WBBz', {action: 'action_name'})
          .then(function(token) {
          // Verify the token on the server.
          });
          });
          </script>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>