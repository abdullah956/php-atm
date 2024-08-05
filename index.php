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
        <div class="maindiv">
          <form method="post" action="indexverify.php">
            <div >
              <span>ENTER YOU CNIC</span><br />
              <input type="text" name="cnic" id="cnic" placeholder="Without dashes" minlength="13" maxlength="13" required/><br />
            </div>
            <div>
              <span>ENTER YOUR PIN</span><br />
              <input type="password" name="pin" id="pin" placeholder="****" minlength="4" maxlength="4" required /><br />
            </div>
            <div>
                <input type="submit" value="ENTER" name="btn" id="" />

            </div>

            
          </form>
        </div>
      </center>
    </section>
  </body>
</html>
