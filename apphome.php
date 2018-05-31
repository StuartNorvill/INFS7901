<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>INFS7901 - GP Clinic Appointment Database Application</h1>
    <form action="apptlist.php" method="post">
        <input type="submit" name="submitapp" class="btn btn-primary btn-lg" value="See Appointments" style="text-align:centre;margin:10px" />
    </form>
    <form action="showpatient.php" method="post">
        <input type="submit" name="submitap1" class="btn btn-primary btn-lg" value="See 1 Patient's Appointments" style="text-align:centre;margin:10px" />
    </form>
    <form action="avg_age.php" method="post">
        <input type="submit" name="submitpaa" class="btn btn-primary btn-lg" value="See Patients' Average age" style="text-align:centre;margin:10px" />
    </form>
    <form action="no_conditions.php" method="post">
        <input type="submit" name="submitcep" class="btn btn-primary btn-lg" value="See # Conditions each Patient has" style="text-align:centre;margin:10px" />
    </form>
    <form action="no_conditions_max.php" method="post">
        <input type="submit" name="submitmax" class="btn btn-primary btn-lg" value="See the Patient with the most Conditions" style="text-align:centre;margin:10px" />
    </form>
    <form action="updatepatient.php" method="post">
        <input type="submit" name="submitpln" class="btn btn-primary btn-lg" value="Update a Patient Last Name" style="text-align:centre;margin:10px" />
    </form>
    <form action="delpatient.php" method="post">
        <input type="submit" name="submitdel" class="btn btn-primary btn-lg" value="Delete a Patient" style="text-align:centre;margin:10px" />
    </form>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>    