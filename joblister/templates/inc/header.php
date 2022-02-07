<!DOCTYPE html>
<html>
<head>
	<title>Joblister</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Joblister</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </nav>

	<div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Joblister</h1>
      <p>Instantly search through millions of new jobs. The job process is hard so we made sure our job search site was easy to use. Search through jobs and find the right one that suits you.</p>
      <h3 class="text muted"><?php echo 'You can find the job categories below start searching now!'; ?></h3>
    </div>
  </div>
