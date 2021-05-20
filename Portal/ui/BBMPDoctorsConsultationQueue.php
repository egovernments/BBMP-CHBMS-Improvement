<!doctype html>
<html lang="en">
  <?php include('php/queue.php'); ?>
  <?php
$pagetype = $_GET['type'];


if($pagetype=="")
{
  $pagetype="Zone 1";
}

 ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="icon" href="https://bbmpgov.com/chbms/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>BBMP CHBMS Dashboard</title>
  <meta name="description" content="Dashboard to show details of Bed Allocation">
  <meta name="author" content="Jagan">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
  <script src="js/header.js" type="text/javascript" defer></script>
  <!-- Datatable CSS -->
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>

<body>
  <!-- nav bar contents -->
  <header-component></header-component>
  <!-- nav bar contents -->


  <div class="cs-card-body">


    <div class="card ">
      <!-- router contents -->
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs text-center">
          <li class="nav-item ">
            <a class="nav-link active jk-home-link" aria-current="true" href="#">Queue Status</a>
          </li>
          <li class="nav-item">
            <a class="nav-link jk-bed-availability" href="#">Bed Availability</a>
          </li>
        </ul>
      </div>
      <!-- router contents -->


      <a class="btn-group jk-btn-back jk-home-link" role="group" aria-label="...">
        <- Back </a> <div class="card-body">
          <h4 class="cs-card-title">Doctors Consultation Queue- <?php echo $pagetype ?>
            <span class="cs-card-sub-title"><span class="jk-font-color-grey">last updated :</span> 12/04/2021 12:50
              PM
              <span class="jk-refresh-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                  width="24px" fill="#000000">
                  <path d="M0 0h24v24H0V0z" fill="none" />
                  <path
                    d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z" />
                </svg></span>
              <span class="jk-refresh-text cs-primary">Refresh</span></span>
          </h4>

          <!-- card 2 patient waiting for doctors contents -->
          <div class="cs-white-cards" style="margin-top: 2%;">
          <div class="container-fluid">
           <div class="table-responsive">

         <table id='empTable' class="table table-striped table-bordered nowrap" style="width:100%"> 
              <thead>
                <tr>

                  <th scope="col">Queue No.</th>
                  <th scope="col">BU Number</th>
                  <th scope="col">SRF Number.</th>
                  <th scope="col">Added on</th>

                </tr>
              </thead>
              
            </table>
          </div>
          </div>
          </div>
          <!-- card 2 patient waiting for doctors contents -->
          <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: none;">Top</button>
    </div>
  </div>
  </div>
  <!-- Scripts contents -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
  </script>
  <script src="js/scripts.js"></script>
  <!-- Scripts contents -->
</body>

</html>
<script type="text/javascript">
  $(document).ready(function(){
   $('#empTable').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'php/consutationajax.php?patientpage=<?php echo $pagetype; ?>'
      },
      'columns': [
         { data: 'patient_id' },
         { data: 'bucode' },
         { data: 'srf_number' },
         { data: 'time_added_to_queue' },
         
      ]
   });
});

</script>