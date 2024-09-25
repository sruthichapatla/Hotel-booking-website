<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="pay.css">
</head>

<body>
    <div class="payment">
        <h2>Payment Gateway</h2><br><br>


        <form action="book.php" method="POST">
            <label for="username">Card holder</label>
            <input type="text" name="card holder" placeholder="Enter card holder name" required><br><br>
            <label for="Card Number">Card Number</label>
            <input type="tel" name="Card Number" maxlength="16" placeholder="Card Number" required><br><br>
            <label for="Expiry date">Expiry date</label>
            <input type="date" name="Expiry date" required><br><br>
            <label for="amount">Amount</label>
            <input type="tel" placeholder="amount" required><br><br>
            <label for="CVV">CVV</label>
            <input type="tel" name="CVV" maxlength="3"placeholder="CVV" required><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <button type="submit">Pay</button>

        </form>
    </div>
</body>