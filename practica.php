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
    .container { 
        display: flex; 
        flex-direction: column;
        margin-top: 10px;
    }
    .btn-submit {
        margin-top: 20px;
        padding: 10px; 
        border-radius: 10px; 
        background-color: lightgreen;
        text-align: center;
    }
    .row {
        flex-direction: row;
        gap: 10px;
    }
    select {
        font-size: 18px;
    }
    .inner-main {
        width: 20%;
        padding: 20px;
        background-color: white;
        background: hsl(188, 100%, 37%, .5);
    }
</style>

<form action="./practica_result.php" method='POST' class='main'>
    <div class='inner-main'>
        <div class="container">
            <label for="firstname">Nume:</label>
            <input type="text" name="firstname" id="firstname" >
        </div>
        <div  class="container">
            <label for="lastname">Prenume:</label>
            <input type="text" name="lastname" id="lastname" >
        </div>
        <div  class="container">
            <label for="phone">Telefon:</label>
            <input type="text" name="phone" id="phone" >
        </div>
        <div  class="container">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" >
        </div>
        <div  class="container">
            <label for="address">Localitate:</label>
            <input type="text" name="address" id="address" >
        </div>
        <div  class="container">
            <label for="age">Varsta:</label>
            <input type="number" name="age" id="age" min='0' max='100' >
        </div>
        <div  class="container">
            <label for="service">Serviciu:</label>
            <select name="service" id='service'>
                <option value="">Alege serviciu...</option>
                <option value="Consultatie">Consultatie</option>
                <option value="Chirugie">Chirugie</option>
                <option value="Pediatrie">Pediatrie</option>
                <option value="Stomatologie">Stomatologie</option>
            </select>
        </div>
        <div  class="container">
            <label for="date">Data consultarii:</label>
            <input type="datetime-local" name="date" id="date">
        </div>
        <div  class="container">
            <label>Gen:</label>
            <div class='container row mt-1'>
                <input type="radio" name="gender" id="m" value='M'>
                <label for="m" >M</label>
                <input type="radio" name="gender" id="f" value='F'>
                <label for="f" >F</label>
            </div>
        </div>
        <div  class="container">
            <button type='submit' name='submit' value='Submit' class='btn-submit'>Send</button>
        </div>
    </div>    
</form>
<!--

  Inscrieri medicale:

  - Nume

  - Prenume

  - Numarul de telefon

  - Email

  - Locatie (Select -> Riscani, Botanica, Centru)

  - Varsta

  - Serviciu (Select -> Consultatie, Chirugie, Pediatrie, Stomatologie)

  - Zi de inscriere (DATA TIME)

  - Gender

-->