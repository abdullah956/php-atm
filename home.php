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
      <h1>
        MENU
      </h1>
      <div class="inner">
        <div class="left">

          <div>
            <form action="transfer.php" method="post">
              <button type="submit" name="ft">FUNDS TRANSFER</button>
            </form>

          </div>
          <div>
            <form method="post" action="balance.php">
              <button type="submit" name="bi">BALANCE INQUIRY</button>

            </form>


          </div>

        </div>
        <div class="right">

          <div>
            <form method="post" action="pinchange.php">
              <button type="submit" name="pc">PIN CHANGE</button>

            </form>

          </div>
          <div>
            <form method="post" action="withdraw.php">
              <button type="submit" name="withdraw">WITHDRAW</button>

            </form>

          </div>
          <div>
            <form method="post" action="index.php">
              <button type="submit" name="exit">EXIT</button>

            </form>

          </div>


        </div>
      </div>
    </center>
  </section>
</body>

</html>