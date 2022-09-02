<style>
    * {
        margin: 0;
        padding: 0;
    }
    .main {
        min-height: 100vh; 
        width: 100wh; 
        display: flex; 
        flex-direction: column; 
        align-items: center; 
        justify-content: center;
        background-image: url("https://pmt.com.lb/wp-content/uploads/2021/05/hospital-1.jpg");
        background-size: cover;
        background-position: center;
    }
    .message {
        width: fit-content;
        padding: 20px;
        border-radius: 15px;
        border: 2px solid rgba(0, 0, 0, 0.8);
        background: hsl(0, 0%, 84%, .7);
    }
    .title {
        text-align: center;
        color: green;
        margin-bottom: 10px;
    }
</style>

<?php
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $address = htmlspecialchars($_POST["address"]);
    $age = htmlspecialchars($_POST["age"]);
    $service = htmlspecialchars($_POST["service"]);
    $date = htmlspecialchars($_POST["date"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $adresare = "";
    if ($gender === "M") {
        $adresare = "Domnule";
    } elseif ($gender === "F") {
        $adresare = "Doamna";
    }
?>

<div class='main'>
    <div class='message'>
        <h1 class="title">Succes!</h1>
        <p><?= $adresare ?> <?=$firstname?> <?=$lastname?> (<?=$age?> ani), inscrierea a luat cu succes.</p>
        <p>Va asteptam pe data de <?= substr($date, 0, 10); ?> la filiala din <?=$address?> pentru serviciile de <?=$service?>.</p>
        <p> Aceasta instiintare a fost trimisa si pe email-ul dvs "<?=$email?>".</p>
        <p>In caz de schimbari ne planificate va telefonam pe numarul de telefon "<?=$phone?>" pentru a va instiinta.</p>
    </div>
</div>