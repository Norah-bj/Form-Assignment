<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./me.css">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $flavour = $_POST['flavor'];
        $color= $_POST['color'];
        $topping = $_POST['topping'];
        $size = $_POST['size'];
        $message = $_POST['message'];
        $argument = $_POST['agree'];
        $deriverance = $_POST['deriver'];
    
    ?>

<table border="1">
    <tr>
        <th colspan="2" class="client-info-header">Client's Information</th>
        <th colspan="2" class="flavor-header">Flavor</th>
        <th colspan="2" class="customization-header">Customization</th>
    </tr>
    <tr> 
        <td rowspan="2" class="name-label"><strong>Name</strong></td>
        <td rowspan="2" class="name-data"><?php echo $name ?></td>
        <td rowspan="3" class="flavor-label"><strong>Flavor</strong></td>      
        <td rowspan="3" class="flavor-data"><?php echo $flavour ?></td>                  
        <td class="toppings-label"><strong>Toppings</strong></td>
        <td class="toppings-data"><?php echo $topping ?></td>
    </tr>
    <tr>
        <td class="size-label"><strong>Size</strong></td>
        <td class="size-data"><?php echo $size ?></td>                 
    </tr>
    <tr>
        <td class="email-label"><strong>Email</strong></td>
        <td class="email-data"><?php echo $email ?></td>
        <td class="argument-label"><strong>Argument</strong></td>      
        <td class="argument-data"><?php echo $argument ?></td>                  
    </tr>
    <tr>
        <td class="phone-label"><strong>Phone</strong></td>
        <td class="phone-data"><?php echo $phone ?></td>
        <td rowspan="2" class="color-label"><strong>Color</strong></td>      
        <td rowspan="2" class="color-data"><?php echo $color ?></td>                  
        <td class="delivery-label"><strong>Deliverance</strong></td>
        <td class="delivery-data"><?php echo $deriverance ?></td>
    </tr>
    <tr>
        <td class="date-label"><strong>Date</strong></td>
        <td class="date-data"><?php echo $date ?></td>
        <td class="message-label"><strong>Message</strong></td>      
        <td class="message-data"><?php echo $message ?></td>                  
    </tr>
  </table>
<?php
}
?>
</body>
</html>