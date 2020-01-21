<?php
$id = $_GET["id"];
include("./connectdb.php");
$sql = "SELECT * FROM applicatie WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);
?>
   <div class="top"></div>
   <form action="./index.php?content=update2_script" method="post">
     <div class="row">
       <div class="col-1"></div>
       <div class="form-group col-5">
         <label for="InputFirtsname">First name</label>
         <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $record["firstname"]?>" aria-describedby="FirstNameHelp" placeholder="First name" name="firstname">
         <small id="FirstnameHelp" class="form-text text-muted">We'll share your name with everyone.</small>
       </div>
       <div class="form-group col-4">
         <label for="InputInfix">Tussenvoegsel</label>
         <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $record["infix"]?>"  aria-describedby="InfixHelp" placeholder="Tussenvoegsel" name="infix">
         <small id="TussenvoegselnameHelp" class="form-text text-muted">We'll share your it with everyone.</small>
       </div>
       <div class="col-2"></div>
       <div class="col-1"></div>
       <div class="form-group col-3">
         <label for="InputLastName">Last name</label>
         <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $record["lastname"]?>"  aria-describedby="LastNameHelp" placeholder="Last name" name="lastname">
         <small id="LastNamenameHelp" class="form-text text-muted">We'll share your lastname with everyone.</small>
       </div>
       <div class="form-group col-6">
         <label for="InputEmail">E-mail</label>
         <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $record["E-mail"]?>"  aria-describedby="EmailHelp" placeholder="Email" name="email">
         <small id="LastNamenameHelp" class="form-text text-muted">We'll share your it with everyone.</small>
       </div>
       <div class="col-2"></div>
       <div class="col-1"></div>
       <div class="form-group col-4">
         <label for="InputOpleiding">Opleiding</label>
         <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $record["opleiding"]?>"aria-describedby="OpleidingHelp" placeholder="opleiding" name="opleiding">
         <small id="LastNamenameHelp" class="form-text text-muted">We'll share your it with everyone.</small>
       </div>
       <div class="form-group col-5">
         <label for="InputTelefoon">Telefoon nummer</label>
         <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $record["tel"]?>"  aria-describedby="TelefoonHelp" placeholder="Telefoon nummer" name="tel">
         <small id="LastNamenameHelp" class="form-text text-muted">We'll share your it with everyone.</small>
       </div>
       <div class="col-2"></div>
       <div class="col-1"></div>
       <div class="form-group col-5">
         <label for="InputBurgerservicenummer">Burgerservicenummer</label>
         <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $record["burgerserversnummer"]?>" aria-describedby="BurgerservicenummerHelp" placeholder="Burgerservicenummer" name="bur">
         <small id="LastNamenameHelp" class="form-text text-muted">We'll share your it with everyone.</small>
       </div>
       <div class="col-4">
         <button type="submit" class="btn btn-info btn-block btn-lg mb-2 space">verstuur</button>
       </div>
       <input type="hidden" name="id" value="<?php echo $id; ?>">
       </from>
       <div class="bot"></div>
     </div>