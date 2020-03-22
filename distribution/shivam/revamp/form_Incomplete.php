<html>
<head>
<title>
Upload Your Documents
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<head>
<body>
<!--Header-->
<nav class="navbar float-top navbar-expand-lg navbar-dark bg-dark float-top">

    <div class="container">
      <a class="navbar-brand" href="index.html">Creative Finserve</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item active" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="top2_wrapper">

<div class="bg1"> <img src="images/personal-inner-banner.jpg" alt=""></div>

<div class="top2_inner">

</div>
</div>

<!--form Starts-->

<div class="container-fluid">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<form>
<div class="card">
<div class="card-body">



<div class="form-group" > 
                <label class="col-form-label-lg">Enter Name <span class="mandatory">*</span></label>
                
                <input type="textbox"   name="t1" class="form-control">  
        </div>       
<br>
<div class="form-group">
            <label class="col-form-label-lg">Mobile Number <span class="mandatory">*</span></label>
            <input type="textbox"  maxlength="10" class="form-control" name="t2">
        </div>
        <br>
        <div class="form-group">
                <label class="col-form-label-lg"> Email Id <span class="mandatory">*</span></label><br>
                <input type="textbox" class="form-control" name="t3">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <br>

        <div class="form-group">
        <label class="col-form-label-lg select.form-control:focus::-ms-value">Loan Type <span class="mandatory">*</span> </label><br>
        <select  class="form-control"  id="s1">
        <option value='Unsecured Personal loan'>Unsecured Personal loan</option>
              <option value='Unsecured Business loan'>Unsecured Business loan</option>
              <option value='Home Loan'>Home Loan</option>
              <option value='Loan Against Property' >Loan Against Property</option>
              <option value='Lease Rental Discount' >Lease Rental Discount</option>
              <option value='Car Refinance' >Car Refinance</option>
              <option value='Construction Finance' >Car Loan</option>
              <option value='Construction Finance' >Two Wheeler Loan</option>
              <option value='Construction Finance' >Construction Finance</option>
              <option value='Professional Finance' >Professional Finance</option>
              <option value='Over Draft' >Over Draft</option>
              <option value='Cash Credit' >Cash Credit</option>
              <option value='Equipment Finance' >Equipment Finance</option>
        </select>
        </div>
        <br>

        <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
    Salarised
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Self-Employed  </label>
</div>

<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label>Second Month Salary Slip</label></div><br>
    <div class="col-sm-5">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label></div>
  </div>
</div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br>

<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label>Third Month Salary Slip</label></div>
    <div class="col-sm-5">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label><div>
  </div>
</div>
</div>


<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br> <br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Year Form 16</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Second Year Form 16</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>



<br>
<br>


<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label class="col-form-label-lg">Website URL<span class="mandatory">*</span></label></div>

                
<div class="col-sm-5"><input type="textbox"   name="t1" class="form-control"></div>
</div>
</div>  

<br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Second Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Third Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<br><br>
</div>
</div>
<hr>
<!--Self Employed Section-->

<h3> Self Employed </h3>


<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label class="col-form-label-lg">Website URL<span class="mandatory">*</span></label></div>

                
<div class="col-sm-5"><input type="textbox"   name="t1" class="form-control"></div>
</div>
</div>  

<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Year ITR Form</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Second Year ITR Form</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Third Year ITR Form</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<!--Radio Buttons-->



<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
    Salarised
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Self-Employed  </label>
</div>

<br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label>Second Month Salary Slip</label></div><br>
    <div class="col-sm-5">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label></div>
  </div>
</div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br>

<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label>Third Month Salary Slip</label></div>
    <div class="col-sm-5">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label><div>
  </div>
</div>
</div>


<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br> <br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Year Form 16</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Second Year Form 16</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br>
<br>


<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label class="col-form-label-lg">Website URL<span class="mandatory">*</span></label></div>

                
<div class="col-sm-5"><input type="textbox"   name="t1" class="form-control"></div>
</div>
</div>  
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Year ITR Form</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Second Year ITR Form</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Third Year ITR Form</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</div>

<br>



<!--Spouse/Co-applicant-->
<hr>

<div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Spouse/Co-applicant</label>
  </div>

  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
    Salarised
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Self Employed
  </label>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label>Second Month Salary Slip</label></div><br>
    <div class="col-sm-5">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label></div>
  </div>
</div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br>

<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label>Third Month Salary Slip</label></div>
    <div class="col-sm-5">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label><div>
  </div>
</div>
</div>


<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br> <br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Year Form 16</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Second Year Form 16</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>



<br>
<br>


<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label class="col-form-label-lg">Website URL<span class="mandatory">*</span></label></div>

                
<div class="col-sm-5"><input type="textbox"   name="t1" class="form-control"></div>
</div>
</div>  

<br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>First Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Second Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Third Month Salary Slip</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<br><br>
</div>
</div>
<hr>


<!--Self Employed 2-->



<h3>Self Employed</h3>


<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<label class="col-form-label-lg">Website URL<span class="mandatory">*</span></label></div>

                
<div class="col-sm-5"><input type="textbox"   name="t1" class="form-control"></div>
</div>
</div>  

<br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Lease Agreement</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Last first Year ITR</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Last Second Year ITR</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        <label>Last Third Year ITR</label></div>
        <div class="col-sm-5">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label></div>
        </div>
    </div>
</div>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<br>
<br>


<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Default radio
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Second default radio
  </label>
</div>


























</form>
</div>
<div class="col-sm-1"></div>
</div>
</div>