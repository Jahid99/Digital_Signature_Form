<?php 
session_start();
if(isset($_SESSION['image'])){
  $image = 'doc_signs/'.$_SESSION['image'].'.png';
}

if(filesize($image)>=850  &&  filesize($image)<=880 )  {

  $_SESSION['message'] = "Signature Part is Required";

header('Location: ' . $_SERVER['HTTP_REFERER']);



}

 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>



<form action="upload.php" method="post" enctype="multipart/form-data">





   <div class="container">
  <div class="row" style="border-top:4px solid black">
     <div class="col-md-5" >
      <h2 style="">Global Home Health Care
Application For Employment</h2>
     </div>
     <div class="col-md-3"  style="background-color:#E7E6E6">
     <p style="font-size:21px">We are an Equal
Opportunity Employer and
committed to excellence
through diversity</p>
     </div>
     <div class="col-md-4"  style="background-color:#E7E6E6">
     <p style="font-size:21px">Please print or type. The
application must be fully
completed to be
considered. Please
complete each section,
even if you attach a
resume.</p>
     </div>
   </div>
  </div>




  


  
<div class="container">
  
      <h3 style="color:white;background-color:#2F5496;padding:20px">Personal Information</h3>
    
 </div>






<div class="container">
  <div class="row">
    <div class="col-md-6">
      
   
      
    <div class="form-group">
      <label for="f_name">First name </label>
     <input type="text" class="form-control" id="f_name"  name="f_name">
    </div>
  
  
    </div>

    <div class="col-md-6">
      
   
      
    <div class="form-group">
      <label for="l_name">Last name </label>
     <input type="text" class="form-control" id="l_name"  name="l_name">
    </div>
  
  
    </div>
    
  
    
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address"  name="address">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city">
    </div>
  
  
    </div>
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="state">State</label>
      <input type="text" class="form-control" id="state" name="state">
    </div>
  
  
    </div>
    <div class="col-md-2">
      
    <div class="form-group">
      <label for="zip">Zip</label>
      <input type="text" class="form-control" id="zip" name="zip">
    </div>
  
  
    </div>
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4" >
      
    <div class="form-group">
      <label for="home_phone">Home Phone *</label>
      <input type="text" class="form-control" id="home_phone" name="home_phone">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="cell_phone">Cell Phone </label>
      <input type="text" class="form-control" id="cell_phone"  name="cell_phone">
    </div>
  
  
    </div>
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="alternative_number">Alternative Number</label>
      <input type="text" class="form-control" id="alternative_number"  name="alternative_number">
    </div>
  
  
    </div>
    <div class="col-md-2" >
      
    <div class="form-group">
      <label for="gender">Gender *</label>
      <select class="form-control" id="sel1" name="gender">
        <option value="">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
  
  
    </div>
    
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-6">
      
    <div class="form-group">
      <label for="dob">Date OF Birth *</label>
     <input type="date" class="form-control" id="dob"  name="dob">
    </div>
  
  
    </div>
    
    <div class="col-md-6">
      
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="text" class="form-control" id="email"  name="email">
    </div>
  
  
    </div>
    
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-6">
      
    <div class="form-group">
      <label for="email">Are you legally eligible to work in the US?</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value="1" name="are_you_legally_yes">Yes
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"  value="1"  name="are_you_legally_no" >No
    </label>
    </div>
  
  
    </div>
      <div class="col-md-6">
    <div class="form-group">
      <label for="email">Are you a veteran?</label><br>
          <label class="checkbox-inline" >
      <input type="checkbox" value="1" name="are_u_veteran_yes"  >Yes
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="1" name="are_u_veteran_no" >No
    </label>
    </div>
  
  </div>
    </div>
    
  
    
  </div>
</div>




<div class="container">
  <div class="row">
    <div class="col-md-12">
      
    <div class="form-group">
      <label for="email">If selected for employment are you willing to submit to a background check?</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value="1" name="if_seleted_for_yes">Yes
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"  value="1"  name="if_seleted_for_no">No
    </label>
    </div>
  
  
    </div>
      
    </div>
    
  
    

</div>








<div class="container">
  <div class="row">
    <div class="col-md-12">
      
    <div class="form-group">
      <label for="email">Are you willing to work within a 25-50 mile radius? *</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value="1" name="are_u_willing_yes">Yes
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="1"  name="are_u_willing_no">No
    </label>
    </div>
  
  
    </div>
      
    </div>
    
  
    

</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      
    <div class="form-group">
      <label for="what_experience">What experiences do you have working with the elderly, handicapped children, and behavior problems?</label>
    <textarea class="form-control" rows="5" id="comment" name="what_experience"></textarea>
    </div>
    </div>
  
  
    </div>
    
   
    
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Position</h3>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="position">Position you are applying for*</label>
      <input type="text" class="form-control" id="position" name="position">
    </div>
  
  
    </div>


        <div class="col-md-4">
      
    <div class="form-group">
      <label for="desired_location">Desired Locations*</label>
      <input type="text" class="form-control" id="desired_location" name="desired_location">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="available_start_date">Available start date*</label>
      <input type="date" class="form-control" id="available_start_date"  name="available_start_date">
    </div>
  
  
    </div>

    
    
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      
    <div class="form-group">
      <label for="email">Employment desired</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value="1" name="full_time">Full time
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="1" name="part_time">Part time
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="1"  name="seasonal">Seasonal/Temporary
    </label>
    </div>
  
  
    </div>
      
    </div>
    
  
    

</div>






<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Education</h3>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
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
        <td><input type="text" class="form-control" id="email"  name="school_name1"></td>
        <td><input type="text" class="form-control" id="email" name="school_name2"></td>
        <td><input type="text" class="form-control" id="email"  name="school_name3"></td>
        <td><input type="text" class="form-control" id="email"  name="school_name4"></td>
        <td><input type="text" class="form-control" id="email"  name="school_name5"></td>
      </tr>
    
      <tr>
        <td><input type="text" class="form-control" id="email"  name="location1"></td>
        <td><input type="text" class="form-control" id="email"  name="location2"></td>
        <td><input type="text" class="form-control" id="email" name="location3"></td>
        <td><input type="text" class="form-control" id="email"  name="location4"></td>
        <td><input type="text" class="form-control" id="email" name="location5"></td>
      </tr>

      <tr>
        <td><input type="text" class="form-control" id="email" name="years_attended1"></td>
        <td><input type="text" class="form-control" id="email" name="years_attended2"></td>
        <td><input type="text" class="form-control" id="email" name="years_attended3"></td>
        <td><input type="text" class="form-control" id="email" name="years_attended4"></td>
        <td><input type="text" class="form-control" id="email" name="years_attended5"></td>
      </tr>
     
    </tbody>
  </table>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 style="color:white;background-color:#2F5496;padding:20px">References&nbsp;<span style="font-size:16px">(business and professional only)</span></h3>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
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
        <td><input type="text" class="form-control" id="email"  name="reference_name1"></td>
        <td><input type="text" class="form-control" id="email"  name="reference_name2"></td>
        <td><input type="text" class="form-control" id="email"  name="reference_name3"></td>
        <td><input type="text" class="form-control" id="email"  name="reference_name4"></td>
      </tr>
    
      <tr>
        <td><input type="text" class="form-control" id="email"  name="reference_title1"></td>
        <td><input type="text" class="form-control" id="email" name="reference_title2"></td>
        <td><input type="text" class="form-control" id="email"  name="reference_title3"></td>
        <td><input type="text" class="form-control" id="email"  name="reference_title4"></td>
      </tr>
    
      <tr>
        <td><input type="text" class="form-control" id="email"  name="reference_company1"></td>
        <td><input type="text" class="form-control" id="email"  name="reference_company2"></td>
        <td><input type="text" class="form-control" id="email" name="reference_company3"></td>
        <td><input type="text" class="form-control" id="email"  name="reference_company4"></td>
      </tr>
     
    </tbody>
  </table>
    </div>
  </div>



<div class="container">
  <div class="row">
    <div class="col-md-12">
      
    <div class="form-group">
      <label for="email">Check Days You Can Work: *</label><br>
          <label class="checkbox-inline">
      <input type="checkbox" value="1" name="m">M
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="1"  name="tu">TU
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"   value="1" name="w">W
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"  value="1"  name="th">TH
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"  value="1"  name="f">F
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="1"  name="sa">SA
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"  value="1"  name="su">SU
    </label>
    </div>
  
  
    </div>
      
    </div>
    
  
    

</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Employment History</h3>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email"><b>Employer (1)</b></label>
      <input type="text" class="form-control" id="email" value="" name="employer1_name">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email" name="employer1_title">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="date" class="form-control" id="email" name="employer1_date">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email" name="employer1_workphone">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" name="employer1_starting_payrate">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email"  name="employer1_ending_payrate">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email"  name="employer1_address">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email" name="employer1_city">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" name="employer1_state">
    </div>
  
  
    </div>


    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email"  name="employer1_zip">
    </div>
  
  
    </div>
    
    
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email"><b>Employer (2)</b></label>
      <input type="text" class="form-control" id="email"  name="employer2_name">
    </div>
  
  
    </div>
    
    <div class="col-md-4" >
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email"  name="employer2_job_title">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="date" class="form-control" id="email"  name="employer2_dates">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4" >
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email" name="employer2_work_phone">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" name="employer2_starting_pay_rate">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email"  name="employer2_ending_pay_rate">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email"  name="employer2_address">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email"  name="employer2_city">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email"  name="employer2_state">
    </div>
  
  
    </div>


    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email" name="employer2_zip">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email"><b>Employer (3)</b></label>
      <input type="text" class="form-control" id="email"  name="employer3_name">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email" name="employer3_job_title">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="date" class="form-control" id="email"  name="employer3_dates_employed">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email"  name="employer3_work_phone">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email"  name="employer3_starting_pay_rate">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email"  name="employer3_ending_pay_rate">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email"  name="employer3_address">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email"  name="employer3_city">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email"  name="employer3_state">
    </div>
  
  
    </div>


    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email"  name="employer3_zip">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email"><b>Employer (4)</b></label>
      <input type="text" class="form-control" id="email"  name="employer4_name">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email"  name="employer4_job_title">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="date" class="form-control" id="email"  name="employer4_dates_employed">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email" name="employer4_work_phone">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" name="employer4_starting_pay_rate">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email"  name="employer4_ending_pay_rate">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-3" >
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email"  name="employer4_address">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email"  name="employer4_city">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" name="employer4_state">
    </div>
  
  
    </div>


    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email"  name="employer4_zip">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email"><b>Employer (5)</b></label>
      <input type="text" class="form-control" id="email"  name="employer5_name">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Job title</label>
      <input type="text" class="form-control" id="email" name="employer5_job_title">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Dates employed</label>
      <input type="date" class="form-control" id="email"  name="employer5_dates_employed">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4" >
      
    <div class="form-group">
      <label for="email">Work phone</label>
      <input type="text" class="form-control" id="email"  name="employer5_work_phone">
    </div>
  
  
    </div>
    
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Starting pay rate</label>
      <input type="text" class="form-control" id="email" name="employer5_starting_pay_rate">
    </div>
  
  
    </div>
    <div class="col-md-4">
      
    <div class="form-group">
      <label for="email">Ending pay rate</label>
      <input type="text" class="form-control" id="email" name="employer5_ending_pay_rate">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Address</label>
      <input type="text" class="form-control" id="email" name="employer5_address">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">City</label>
      <input type="text" class="form-control" id="email" name="employer5_city">
    </div>
  
  
    </div>
    
    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">State</label>
      <input type="text" class="form-control" id="email" name="employer5_state">
    </div>
  
  
    </div>


    <div class="col-md-3">
      
    <div class="form-group">
      <label for="email">Zip</label>
      <input type="text" class="form-control" id="email" name="employer5_zip">
    </div>
  
  
    </div>
    
    
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 style="color:white;background-color:#2F5496;padding:20px">Signature Disclaimer</h3>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
     
     <div class="col-md-12" >
     <p style="color:black;background-color:#E7E6E6;"><input type="checkbox" value="1"  name="i_certify"> I certify that my answers are true and complete to the best of my knowledge. If this application leads to employment, I understand that false or misleading information in my application or interview may result in my employment being terminated.</p>
     </div>
  
   </div>
  </div>


  <div class="container">
  <div class="row">
  
    <div class="col-md-6">
      
    <div class="form-group">
      <label for="name">Name*</label>
     <input type="text" class="form-control" id="email"  name="myname" required>
    </div>
      
    <div class="form-group">
      <label for="name">Date*</label>
     <input type="date" class="form-control" id="email"  name="mydate" required>
    </div>
  
  
    </div>

    <div class="col-md-6">
      
    <div class="form-group">
      <label for="name">Signature</label>

       <img src="<?php echo $image; ?>">

    </div>
      
    
  
  
    </div>
    
  
    
  </div>
</div><br>

<div class="cotainer">
  <div class="form-group">
        <div class="col-md-12">
            <label class="file-upload btn btn-primary">
                Upload Your CV ...(.pdf/.doc/.docx) <input name="mycv" type="file" required/>
            </label>
        </div>
    </div>
</div><br><br><br><br>

<div class="cotainer">
  <div class="form-group">
        <div class="col-md-12">
            <label class="file-upload btn btn-primary">
                <input type="submit" style="color:black" value="Submit Form" >
            </label>
        </div>
    </div>
</div>




</form><br><br>
</body>
</html>
