<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript"></script></head>
<body>




   <div class="container">
  <div class="row">
     <div class="col-xs-5"  style="border-top:4px solid black">
      <h2>Global Home Health Care
Application For Employment</h2>
     </div>
     <div class="col-xs-2"  style="border-top:4px solid black;background-color:#E7E6E6">
     <p>We are an Equal
Opportunity Employer and
committed to excellence
through diversity</p>
     </div>
     <div class="col-xs-3"  style="border-top:4px solid black;background-color:#E7E6E6">
     <p>Please print or type. The
application must be fully
completed to be
considered. Please
complete each section,
even if you attach a
resume.</p>
     </div>
   </div>
  </div><br><br><br><br>




  


  
<div class="container">
  <div class="row">
    <div class="col-xs-12" style="width: 936px;">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Personal Information</h3>
    </div>
  </div>
</div><br><br><br><br>

<form action="/action_page.php">




<div class="container">
  <div class="row"><br>
    <div class="col-xs-5" style="width: 438px;">
      
   
      
    <div class="form-group">
      <label for="name">First name *</label>
     <input type="text" class="form-control" id="email" value="<?=$f_name?>" name="email">
    </div>
  
  
    </div>

    <div class="col-xs-5" style="width: 468px;">
      
   
      
    <div class="form-group">
      <label for="name">Last name *</label>
     <input type="text" class="form-control" id="email" value="<?=$l_name?>" name="email">
    </div>
  
  
    </div>
    
  
    
  </div>
</div><br><br><br>



<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email" value="<?=$address?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-2">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email" value="<?=$city?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-2">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" value="<?=$state?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-2">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email" value="<?=$zip?>" name="email">
    </div>
  
  
    </div>
    
  </div>
</div><br><br><br><br>


<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-3"  style="width: 220px;">
      
    <div class="form-group">
      <label for="email">Home Phone *</label>
      <input type="text" class="form-control" id="email" value="<?=$home_phone?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-2" style="width: 220px;">
      
    <div class="form-group">
      <label for="email">Cell Phone </label>
      <input type="text" class="form-control" id="email" value="<?=$cell_phone?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-2" style="width: 220px;">
      
    <div class="form-group">
      <label for="email">Alternative Number</label>
      <input type="text" class="form-control" id="email" value="<?=$alternative_number?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-2" style="width: 185px;">
      
    <div class="form-group">
      <label for="email">Gender *</label>
      <input type="text" class="form-control" id="email" value="<?=$gender?>" name="email">
    </div>
  
  
    </div>
    
  </div>
</div><br><br><br>



<div class="container">
  <div class="row"><br><br><br>
    <div class="col-xs-5" style="width: 438px;">
      
    <div class="form-group">
      <label for="email">Date OF Birth *</label>
     <input type="text" class="form-control" id="email" value="<?=$dob?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-5" style="width: 468px;">
      
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="text" class="form-control" id="email" value="<?=$email?>" name="email">
    </div>
  
  
    </div>
    
  </div>
</div><br><br><br>



<div class="container">
  <div class="row"><br><br><br><br><br>
    <div class="col-xs-5" style="width: 438px;">
      
    <div class="form-group">
      <label for="email">Are you legally eligible to work in the US?</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value="" <?php if($are_you_legally_yes==1){echo"checked";} ?>>Yes
    </label>
    <label class="checkbox-inline" style="    margin-left: 125px;">
      <input type="checkbox" value="" <?php if($are_you_legally_no==1){echo"checked";} ?> >No
    </label>
    </div>
  
  
    </div>
      <div class="col-xs-5" style="width: 438px;">
    <div class="form-group">
      <label for="email">Are you a veteran?</label><br>
          <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($are_u_veteran_yes==1){echo"checked";} ?> >Yes
    </label>
    <label class="checkbox-inline"  style="    margin-left: 125px;">
      <input type="checkbox" value="" <?php if($are_u_veteran_no==1){echo"checked";} ?>>No
    </label>
    </div>
  
  </div>
    </div>
    
  
    
  </div>
</div><br><br><br>




<div class="container">
  <div class="row"><br><br><br><br><br>
    <div class="col-xs-10" style="width: 838px;">
      
    <div class="form-group">
      <label for="email">If selected for employment are you willing to submit to a background check?</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value="" <?php if($if_seleted_for_yes==1){echo"checked";} ?>>Yes
    </label>
    <label class="checkbox-inline" style="    margin-left: 125px;">
      <input type="checkbox" value="" <?php if($if_seleted_for_no==1){echo"checked";} ?> >No
    </label>
    </div>
  
  
    </div>
      
    </div>
    
  
    

</div><br><br><br><br><br><br><br><br><br><br>








<div class="container">
  <div class="row"><br><br><br><br><br>
    <div class="col-xs-10" style="width: 838px;">
      
    <div class="form-group">
      <label for="email">Are you willing to work within a 25-50 mile radius? *</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value="" <?php if($are_u_willing_yes==1){echo"checked";} ?>>Yes
    </label>
    <label class="checkbox-inline" style="    margin-left: 125px;">
      <input type="checkbox" value="" <?php if($are_u_willing_no==1){echo"checked";} ?> >No
    </label>
    </div>
  
  
    </div>
      
    </div>
    
  
    

</div><br><br><br><br><br><br>


<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-11"  style="width: 906px;">
      
    <div class="form-group">
      <label for="email">What experiences do you have working with the elderly, handicapped children, and behavior problems?</label><br><br>
    <div class="col-xs-12" style="width: 900px;border:1px solid #E7E6E6;">
      <h3 style="color:black;padding:10px;font-size: 14px;"><?=$what_experience?></h3>
    </div>
    </div>
  
  
    </div>
    
   
    
  </div>
</div><br><br><br><br><br><br><br><br><br><br><br>



<div class="container">
  <div class="row">
    <div class="col-xs-12" style="width: 936px;">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Position</h3>
    </div>
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Position you are applying for</label>
      <input type="text" class="form-control" id="email" value="<?=$position?>" name="email">
    </div>
  
  
    </div>


        <div class="col-xs-3"  style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Desired Locations</label>
      <input type="text" class="form-control" id="email" value="<?=$desired_location?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Available start date</label>
      <input type="text" class="form-control" id="email" value="<?=$available_start_date?>" name="email">
    </div>
  
  
    </div>

    
    
  </div>
</div><br><br><br>

<div class="container">
  <div class="row"><br><br><br><br>
    <div class="col-xs-10" style="width: 838px;">
      
    <div class="form-group">
      <label for="email">Employment desired</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($full_time==1){echo"checked";} ?>>Full time
    </label>
    <label class="checkbox-inline" style="    margin-left: 125px;">
      <input type="checkbox" value=""  <?php if($part_time==1){echo"checked";} ?> >Part time
    </label>
    <label class="checkbox-inline" style="    margin-left: 125px;">
      <input type="checkbox" value=""  <?php if($seasonal==1){echo"checked";} ?> >Seasonal/Temporary
    </label>
    </div>
  
  
    </div>
      
    </div>
    
  
    

</div>


<br><br><br><br><br><br><br><br><br>



<div class="container">
  <div class="row">
    <div class="col-xs-12" style="width: 936px;">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Education</h3>
    </div>
  </div>
</div><br><br><br><br><br>


<div class="container">
  <div class="row">
    <div class="col-xs-12" style="width: 936px;">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>School name</th>
        <th>Location</th>
        <th>Years attended</th>
        <th>Degree received</th>
        <th>Major</th>
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <td><?=$school_name1?></td>
        <td><?=$school_name2?></td>
        <td><?=$school_name3?></td>
        <td><?=$school_name4?></td>
        <td><?=$school_name5?></td>
      </tr>
    
      <tr>
        <td><?=$location1?></td>
        <td><?=$location2?></td>
        <td><?=$location3?></td>
        <td><?=$location4?></td>
        <td><?=$location5?></td>
      </tr>

      <tr>
        <td><?=$years_attended1?></td>
        <td><?=$years_attended2?></td>
        <td><?=$years_attended3?></td>
        <td><?=$years_attended4?></td>
        <td><?=$years_attended5?></td>
      </tr>
     
    </tbody>
  </table>
    </div>
  </div>
</div><br><br><br><br><br><br><br><br>


<div class="container">
  <div class="row">
    <div class="col-xs-12" style="width: 936px;">
      <h3 style="color:white;background-color:#2F5496;padding:20px">References&nbsp;<span style="font-size:16px">(business and professional only)</span></h3>
    </div>
  </div>
</div><br><br><br><br><br>


<div class="container">
  <div class="row">
    <div class="col-xs-12" style="width: 936px;">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Company</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <td><?=$reference_name1?></td>
        <td><?=$reference_name2?></td>
        <td><?=$reference_name3?></td>
        <td><?=$reference_name4?></td>
      </tr>
    
      <tr>
        <td><?=$reference_title1?></td>
        <td><?=$reference_title2?></td>
        <td><?=$reference_title3?></td>
        <td><?=$reference_title4?></td>
      </tr>
    
      <tr>
        <td><?=$reference_company1?></td>
        <td><?=$reference_company2?></td>
        <td><?=$reference_company3?></td>
        <td><?=$reference_company4?></td>
      </tr>
     
    </tbody>
  </table>
    </div>
  </div>
</div><br><br><br>

<br><br><br>


<div class="container">
  <div class="row"><br><br><br><br><br>
    <div class="col-xs-10" style="width: 838px;">
      
    <div class="form-group">
      <label for="email">Check Days You Can Work: *</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value=""   <?php if($m==1){echo"checked";} ?> >M
    </label>
    <label class="checkbox-inline" style="    margin-left: 80px;">
      <input type="checkbox" value="" <?php if($tu==1){echo"checked";} ?> >TU
    </label>
    <label class="checkbox-inline" style="    margin-left: 80px;">
      <input type="checkbox" value="" <?php if($w==1){echo"checked";} ?> >W
    </label>
    <label class="checkbox-inline" style="    margin-left: 80px;">
      <input type="checkbox" value="" <?php if($th==1){echo"checked";} ?> >TH
    </label>
    <label class="checkbox-inline" style="    margin-left: 80px;">
      <input type="checkbox" value="" <?php if($f==1){echo"checked";} ?> >F
    </label>
    <label class="checkbox-inline" style="    margin-left: 80px;">
      <input type="checkbox" value="" <?php if($sa==1){echo"checked";} ?> >SA
    </label>
    <label class="checkbox-inline" style="    margin-left: 80px;">
      <input type="checkbox" value="" <?php if($su==1){echo"checked";} ?> >SU
    </label>
    </div>
  
  
    </div>
      
    </div>
    
  
    

</div><br><br><br><br><br><br><br><br><br><br>


<div class="container">
  <div class="row">
    <div class="col-xs-12" style="width: 936px;">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Employment History</h3>
    </div>
  </div>
</div><br><br><br>

<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email"><b>Employer (1)</b></label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_name?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_title?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_date?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_workphone?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_starting_payrate?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_ending_payrate?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_address?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 125px;">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_city?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 136px;">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_state?>" name="email">
    </div>
  
  
    </div>


    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email" value="<?=$employer1_zip?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br><br><br><br><br>



<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email"><b>Employer (2)</b></label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_name?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_job_title?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_dates?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_work_phone?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_starting_pay_rate?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_ending_pay_rate?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br><br><br>


<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_address?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 125px;">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_city?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 136px;">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_state?>" name="email">
    </div>
  
  
    </div>


    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email" value="<?=$employer2_zip?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br><br><br>


<div class="container">
  <div class="row"><br><br><br><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email"><b>Employer (3)</b></label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_name?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_job_title?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_dates_employed?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_work_phone?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_starting_pay_rate?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_ending_pay_rate?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_address?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 125px;">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_city?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 136px;">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_state?>" name="email">
    </div>
  
  
    </div>


    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email" value="<?=$employer3_zip?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br><br><br><br><br>


<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email"><b>Employer (4)</b></label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_name?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_job_title?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_dates_employed?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_work_phone?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_starting_pay_rate?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_ending_pay_rate?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_address?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 125px;">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_city?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 136px;">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_state?>" name="email">
    </div>
  
  
    </div>


    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email" value="<?=$employer4_zip?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br><br><br>


<div class="container">
  <div class="row"><br><br><br><br><br><br><br><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email"><b>Employer (5)</b></label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_name?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_job_title?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_dates_employed?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_work_phone?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 291px;">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_starting_pay_rate?>" name="email">
    </div>
  
  
    </div>
    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_ending_pay_rate?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br>


<div class="container">
  <div class="row"><br><br><br>
    <div class="col-xs-3"  style="width: 329px;">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_address?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 125px;">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_city?>" name="email">
    </div>
  
  
    </div>
    
    <div class="col-xs-3" style="width: 136px;">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_state?>" name="email">
    </div>
  
  
    </div>


    <div class="col-xs-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email" value="<?=$employer5_zip?>" name="email">
    </div>
  
  
    </div>
    
    
  </div>
</div><br><br><br><br><br><br><br><br>


<div class="container">
  <div class="row">
    <div class="col-xs-12" style="width: 936px;">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Signature Disclaimer</h3>
    </div>
  </div>
</div><br><br><br><br>


<div class="container">
  <div class="row">
     
     <div class="col-xs-11" style="color:black;background-color:#E7E6E6;width: 908px;;margin-left:15px">
     <p style="width: 900px;"><input type="checkbox" value=""  <?php if($i_certify==1){echo"checked";} ?>> I certify that my answers are true and complete to the best of my knowledge. If this application leads to employment, I understand that false or misleading information in my application or interview may result in my employment being terminated.</p>
     </div>
  
   </div>
  </div><br><br>


  <div class="container">
  <div class="row"><br>
  
    <div class="col-xs-5">
      
    <div class="form-group">
      <label for="name">Name</label>
     <input type="text" class="form-control" id="email" value="<?=$myname?>" name="email">
    </div>
      
    <div class="form-group">
      <label for="name">Date</label>
     <input type="text" class="form-control" id="email" value="<?=$mydate?>" name="email">
    </div>
  
  
    </div>

    <div class="col-xs-5"><br>
      
    <div class="form-group">
      <label for="name">Signature</label><br><br>

       <img src="<?=$image?>">

    </div>
      
    
  
  
    </div>
    
  
    
  </div>
</div><br><br><br>



</form>
</body>
