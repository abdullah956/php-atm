<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ATM</title>
</head>

<body>
  <section>
    <center>
      <h1></h1>
      <div class="maindiv" style="margin-top: 5%">
        <form method="post" action="transferred.php">
        
          <div>
            <span>ENTER RECEIVER'S CNIC</span><br />
            <input type="text" name="rcnic" id="rcnic" placeholder="Without dashes" minlength="13" maxlength="13"
               /><br />
          </div>
          <div>
            <span>AMOUNT</span><br />
            <input type="text" name="amount" id="amount" placeholder="" minlength="" maxlength="" required /><br />

          </div>
         
          <div>
            <input type="submit" value="TRANSFER" name="transfer" id="" />
          </div>
        </form>
      </div>
    </center>
  </section>
</body>
</html>