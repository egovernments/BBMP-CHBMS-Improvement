<!doctype html>
<html lang="en">

<head>
<?php 
include ('php/connection.php');
include ('php/query.php');
include ('php/pat.php');
include ('php/patientwb.php');
?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="icon" href="assests/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>BBMP CHBMS Dashboard</title>
  <meta name="description" content="Dashboard to show details of Bed Allocation">
  <meta name="author" content="Jagan">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
  <script src="js/header.js" type="text/javascript" defer></script>
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
            <a class="nav-link active jk-home-link" aria-current="true" href="index.php">Queue Status</a>
          </li>
          <li class="nav-item">
            <a class="nav-link jk-bed-availability" href="#">Bed Availability</a>
          </li>
        </ul>
      </div>
      <!-- router contents -->

      <div class="card-body">
        <h4 class="cs-card-title">Patient Queue Status <span class="cs-card-sub-title"><span class="jk-font-color-grey">last updated :</span> 12/04/2021 12:50
            PM
            <span class="jk-refresh-icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z" />
              </svg>
            </span>
            <span class="jk-refresh-text cs-primary">Refresh</span></span>
        </h4>
        <div class="alert alert-primary jk-alert-danger" role="alert">
          <span class="jk-info-icon"> <svg class="MuiSvgIcon-root-603" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
            </svg></span>
          This is only for patients who require hospitalisation. If you are not already on the queue and require
          hospitalisation then call 1912.
        </div>
        <!-- card 1 search contents -->
        <div class="cs-white-cards">
          <div class="card-body">
            <h6 class="card-title cs-card1-header  jk-font-bold">Check your Queue status </h6>
            <h6 class="card-subtitle cs-card1-helper-text">Search by BU Number(eg BU-12355) along with the last 4 digit of the registered mobile number. Call 1912 incase you are not alloted a BU Number</h6>
            <form class="row g-3 needs-validation cs-card1-form jk-dashboard-form" novalidate>
              <div class="col-md-3 jk-no-padding-left">
                <!-- <label for="validationCustom01" class="form-label">First name</label> -->
                <input type="text" class="form-control" id="validationCustom01" placeholder="BU Number (eg BU-123456)" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              
              <div class="col-md-3 jk-no-padding-left">
                <!-- <label for="validationCustom02" class="form-label">Last name</label> -->
                <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                <input type="text" class="form-control" id="validationCustom03" placeholder="Last 4 digit of registered Mobile Number" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-3 jk-no-padding-left">
                <button class="btn cs-primary-button" type="submit">SEARCH</button>
              </div>
            </form>
            <div class="jk-margin-top-s jk-alert-danger-text jk-search-helper-text" id="jk-search-helper-text">
              <div>
                Note:
              </div>
              <div>
              • Enter your BU Number and the last 4 digits of your registered phone number to look up your
                status in the queue.
              </div>
              <div>
              • If you are not on the queue yet and need medical assistance, please call 1912 to get your BU Number
              </div>
              <div>
              • After calling 1912, you will be sent an SMS with your BU number in it. Please find your SRF Number in
                the top right corner of your RT-PCR test report
              </div>
            </div>
            <!-- search result  -->
            <div class="col-md-3 col-sm-6 cs-grey-sub-cards jk-search-result" id="jk-search-result-element">
              <div class="jk-search-response-holder">
                <div class="jk-search-response-label">
                  Queue Type
                </div>
                <div class="jk-search-response-value">
                  Patients Waiting For Zonal Doctors Consultation (1st Triage )
                </div>
              </div>
              <div class="jk-search-response-holder">
                <div class="jk-search-response-label">
                  Queue Position
                </div>
                <div class="jk-search-response-value jk-font-bold">
                  56
                </div>
              </div>
              <div class="jk-search-response-holder">
                <div class="jk-search-response-label">
                  Zone
                </div>
                <div class="jk-search-response-value">
                  4
                </div>
              </div>
            </div>
            <!-- search result  -->

          </div>
        </div>
        <!-- card 1 search contents -->

        <!-- card 2 patient waiting for doctors contents -->
        <div class="cs-white-cards" style="margin-top: 2%;">
          <h6 class="card-title  jk-font-bold">Patients Waiting For Triage </h6>
          
          <div class="row" id="cs-doctor-consultations-card">

          <?php for($i=0;$i<count($data);$i++) { ?>
            <div class="col-md-3 col-sm-6 cs-grey-sub-cards jk-zone-card" data-zone_type="<?php echo $data[$i]['queue_name'];?>" >
              <h6 data-zone_type="<?php echo $data[$i]['queue_name'];?>"><?php echo $data[$i]['queue_name'];?></h6>
              <h3 data-zone_type="<?php echo $data[$i]['queue_name'];?>" class="jk-font-bold"><?php echo $data[$i]['total']; ?></h3>
              <p>
                <small>
                  <span data-zone_type="<?php echo $data[$i]['queue_name'];?>" class="jk-font-color-grey" style="display:inline-block;">Last Consultation</span>
                  <span data-zone_type="<?php echo $data[$i]['queue_name'];?>" style="display:inline-block;"><?php echo $data[$i]['bucode']; ?>
                    <span  data-zone_type="<?php echo $data[$i]['queue_name'];?>" class="jk-timeperiod-element">
                      (10 min ago)
                    </span>
                  </span>
                </small>
              </p>
              
            </div>
            <?php } ?>          
          </div>
          

        </div>
         
        <!-- card 2 patient waiting for doctors contents -->



        <!-- card 3 patient waiting contents -->
        <div class="cs-white-cards" style="margin-top: 2%;">
          <h6 class="card-title jk-font-bold">Patients Waiting For Beds</h6>
          
          <div class="row" id="cs-doctor-consultations-card">
          
             <?php for($j=0;$j<count($pdata);$j++) { ?> 
            <div class="col-md-3 col-sm-6 cs-grey-sub-cards jk-bed-card" data-patb_type="<?php echo $pdata[$j]['queue_name'];?>">
              <h6 data-patb_type="<?php echo $pdata[$j]['queue_name'];?>" ><?php echo $pdata[$j]['queue_name'];?></h6>
              <h3 data-patb_type="<?php echo $pdata[$j]['queue_name'];?>"  class="jk-font-bold"><?php echo $pdata[$j]['total']; ?></h3>
              <p>
                <small>
                  <span data-patb_type="<?php echo $pdata[$j]['queue_name'];?>" class="jk-font-color-grey" style="display:inline-block;">Last Consultation</span>
                  <span data-patb_type="<?php echo $pdata[$j]['queue_name'];?>" style="display:inline-block;"><?php echo $pdata[$j]['bucode']; ?>
                    <span data-patb_type="<?php echo $pdata[$j]['queue_name'];?>" class="jk-timeperiod-element">
                      (1 hr ago)
                    </span>
                  </span>
                </small>
              </p>
              
            </div>
    
            <?php }?>
            
           
          </div>

        </div>
        <div class="alert alert-primary jk-alert-danger" role="alert">
            <span class="jk-info-icon"> <svg class="MuiSvgIcon-root-603" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                </path>
              </svg></span>
            If you are in the queue and situation deteriorating, call 1912. Doctors will assess if you need to urgent
            attention and move you to the critical queue
          </div>
        <!-- card 3 patient waiting contents -->
        <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: none;">Top</button>

      </div>
    </div>
  </div>
  <!-- Scripts contents -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
  </script>
  <script src="js/scripts.js"></script>
  <!-- Scripts contents -->
</body>

</html>