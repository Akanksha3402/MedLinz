<!DOCTYPE html>
<html>
<head>
<style>
.btn-group .button {

  background: #0066cc; border: none; border-radius: 3px; font-size: 24px; padding: 15px 32px;cursor: pointer;
  width: 25%;
  display: block;
  border-radius: 0%;
}

.btn-group .button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background: #003366;

transition: 0.5s background;
}
</style>
</head>
<body>

<h1 align='center'>Who are you?</h1>

<div class="btn-group" align='center'>
  <button class="button" input type="button" value="Home" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'hospital.php';" />Hospital</button><br><br><br>
  <button class="button" input type="button" value="Home" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'Pharmacy.php';">Pharmacist</button><br><br><br>
  <button class="button" input type="button" value="Home" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'Patha.php';">Pathalogist</button><br><br><br>
  <button class="button" input type="button" value="Home" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'Jobseaker.php';">Job seaker</button><br><br><br>
  <button class="button" input type="button" value="Home" class="homebutton" id="btnHome" onClick="Javascript:window.location.href = 'index.php';">Visiter</button><br><br><br>
</div>

</body>
</html>