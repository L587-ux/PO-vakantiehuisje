<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../CSS-bestanden/style.css">
  <title>"Luukse"huisjehuren.nl</title>
</head>
<body>
  <div id="wrapper">
    <div class="figure">
      <a href="Homepage.php"><img class="logo" src="../Afbeeldingen/landallogo.png" alt="Logo Landal"></a>
    </div>
    <header>
      <h1> Reserveren </h1>
    </header>
    <div id="reserverenteksteen">
      <h2>Boek nu!</h2>
      <h4>Als u wilt reserveren kunt u hieronder uw gegevens invullen om een voorlopige resevering te maken.
        U ontvangt dan binnen 5 werkdagen een definitieve bevestiging.</h4>
      <form action="reserveringopslaan.php" method="post"> 
        <div id="geslachtafstand">
          Geslacht
        </div>
        <div id="manblok">
              <input type="radio" id="man" name="kiezen" value="man">
              <label for="man">man  </label>
        </div>
        <div id="vrouwblok">
              <input type="radio" id="vrouw" name="kiezen" value="vrouw">
              <label for="vrouw">vrouw  </label>
        </div>
      <div id="voornaamafstand">
        Voornaam
      </div>
          <input type="text" name="voornaam" id="voornaam">
          <label for="voornaam"></label>
      <div id="tussenvoegselafstand">
        Tussenvoegsel
      </div>
          <input type="text"  name="tussenvoegsel" id="tussenvoegsel" value="optioneel">
          <label for="tussenvoegsel"></label>
      <div id="achternaamafstand">
        Achternaam
      </div>
          <input type="text" name="achternaam" id="achternaam">
          <label for="achternaam"></label>
      <div id="adresafstand">
        Adres
      </div>
          <input type="text" name="adres" id="adres">
          <label for="adres"></label>
      <div id="postcodeafstand">
        Postcode
      </div>
          <input type="text" name="postcode" id="postcode">
          <label for="postcode"></label>
      <div id="woonplaatsafstand">
        Woonplaats
      </div>
          <input type="text" name="woonplaats" id="woonplaats">
          <label for="woonplaats"></label>
      <div id="telefoonnummerafstand">
        Telefoonnummer
      </div>
          <input type="number" min="1" name="telefoonnummer" id="telefoonnummer">
          <label for="telefoonnummer"></label>
      <div id="emailafstand">
        E-mail
      </div>
          <input type="email" name="email" id="email">
          <label for="email"></label>
      <div id="aankomstdatumafstand">
        Gewenste aankomstdatum
      </div>
          <input type="date" min="2023-03-17" name="aankomstdatum" id="aankomstdatum">
          <label for="aankomstdatum"></label>
      <div id="aantalnachtenafstand">
        Aantal nachten
      </div>
          <input type="number" min="1" max="31" name="aantalnachten" id="aantalnachten">
          <label for="aantalnachten"></label>
      <div id="aantalpersonenafstand">
        Aantal personen
      </div>
          <input type="number" min="1" max="6" name="aantalpersonen" id="aantalpersonen">
          <label for="aantalpersonen"></label>
      <input type="submit" id="verzenden" value="verzenden">
      <label for="verzenden"></label>
      </form>
  </div>
</body>
</html>
