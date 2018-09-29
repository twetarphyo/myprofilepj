<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="/css/master.css"/> -->

<div class="">
  <br>
  <h1 style="padding-left:300px;">Sign In</h1>
  <hr>

  <form method="post" action="/login" style="padding-left:300px;">

    {{ csrf_field() }}

  <div class="form-group">
  <label for="email">Email Address:</label>
  <input type="email" name="email" class="form-control" style="width:400px;" required>
  </div><br>

  <div class="form-group">
  <label for="password" >Password:</label>
  <input type="password" name="password" class="form-control" style="width:400px;" required>
  </div><br>

  <button class="btn btn-primary">Sign In</button>
  </form>
</div>
