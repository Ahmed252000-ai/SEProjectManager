@extends('layouts.student_sidebar')
@extends('layouts.app')
@section('content2')
<script>
    var element = document.getElementById("home");
    element.classList.add("show");

</script>

<body>
<style>
/* projects tab */

/* Rectangle 5 */
.col-xl, .col-xl-auto, .col-xl-12,
.col-xl-11, .col-xl-10,
.col-xl-9, .col-xl-8,
.col-xl-7, .col-xl-6, .col-xl-5, .col-xl-4, .col-xl-3,
 .col-xl-2, .col-xl-1, .col-lg, .col-lg-auto, .col-lg-12, 
 .col-lg-11, .col-lg-10, .col-lg-9, .col-lg-8, .col-lg-7,
  .col-lg-6, .col-lg-5, .col-lg-4, .col-lg-3, .col-lg-2,
   .col-lg-1, .col-md, .col-md-auto, .col-md-12, .col-md-11, 
   .col-md-10, .col-md-9, .col-md-8, .col-md-7,
    .col-md-6, .col-md-5, .col-md-4, .col-md-3, .col-md-2,
     .col-md-1, .col-sm, .col-sm-auto, .col-sm-12, .col-sm-11,
      .col-sm-10, .col-sm-9, .col-sm-8, .col-sm-7, .col-sm-6,
       .col-sm-5, .col-sm-4, .col-sm-3, .col-sm-2, .col-sm-1,
        .col, .col-auto, .col-12, .col-11, .col-10, .col-9, .col-8, 
.col-7, .col-6, .col-5, .col-4, .col-3, .col-2, .col-1 {
position: relative;
width: 100%;
padding-right: 30px;
padding-left: 35px;
margin-right: 30px;
margin-left: 30px;
}


</style>

<div class ="container">

<h1>Deliverables</h1>

<div class="row">
    <div class="col">
        <button style="margin-top: 10px; width:150px; " type="button" class="btn btn-outline-dark">Suggestions</button>

    </div>
    <div class="col">
        <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark">Discussion</button>

    </div>
    <div class="col">
        <button style="margin-top: 10px; width:150px;" type="button" class="btn btn-outline-dark">Open</button>

    </div>


</div>


</div>

</body>
@endsection

