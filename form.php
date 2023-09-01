<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<form action="testForm.php" method="get">

<div class="hero m-12">
    <div class="card flex-shrink-0 w-72 shadow-2xl bg-base-100">
      <div class="card-body">
      <div class="form-control">
          <label class="label">
            <span class="label-text">Name</span>
          </label>
          <input type="text" name="name" placeholder="name" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" name="email" placeholder="email" class="input input-bordered" required />
        </div>
        
        <div class="form-control mt-6">
        <input type="submit" name="save" class="btn btn-primary" value="Save" />
        </div>
      </div>
    </div>
  </div>

</form>

   
</body>
</html>