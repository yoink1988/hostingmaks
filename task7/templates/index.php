<html>
    <head>
        <title>%TITLE%</title>
<head>
    <!-- Bootstrap -->
    <link href="/styles/bootstrap.min.css" rel="stylesheet">
    <link href="/styles/bootstrap-theme.min.css" rel="stylesheet">
</head>
    <body>
    <div><h2>Contact Form</h2></div>
    <div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong>

<form method="post" action="">

    <div class="form-group">
    <label>Full name</label>
    <input type="text" name="name" placeholder="Full name">
    </div>

    <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" placeholder="Email">
    </div>
     Subject
    <select name ="subject" class="form-control">
    <option value=1>Please Select</option>
    <option value=2 >2</option>
    <option value=3 >3</option>
   </select> 

    <div class="form-group">
    Message<textarea class="form-control" name="message"  rows="3"></textarea>
    </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

    </div>
    </body>
</html>

