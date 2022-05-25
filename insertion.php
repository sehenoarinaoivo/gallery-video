<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>inscription</title>
</head>
<body>
    <form action="insert_data.php" method="post">
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationServer01">Last name</label>
            <input type="text" class="form-control is-valid" id="validationServer01" name="name" required="">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServer02">First name</label>
            <input type="text" class="form-control is-valid" id="validationServer02" name="firstname" required="">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
              </div>
              <input type="text" class="form-control is-invalid" name="username" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required="">
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationServer03">Mail</label>
            <input type="text" class="form-control is-invalid" name="mail" id="validationServer03" required="">
            <div class="invalid-feedback">
              Please provide a valid mail.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer04">State</label>
            <select class="custom-select is-invalid" name="state" id="validationServer04" required="">
              <option selected="" disabled="" value="">Choose...</option>
<option > Afrique du Sud</option>
<option > Afghanistan </option><option> Albanie </option><option> Algérie </option><option > Allemagne </option><option> Andorre </option>
<option> Angola </option><option> Antigua-et-Barbuda </option><option> Arabie Saoudite </option><option> Argentine </option>
<option> Arménie </option><option> Australie </option><option> Autriche </option><option> Azerbaïdjan </option><option> Bahamas </option>
<option> Bahreïn </option><option> Bangladesh </option><option> Barbade </option><option> Belgique </option><option> Belize </option>
<option> Bénin </option><option> Bhoutan </option><option > Biélorussie </ option><option> Birmanie </option><option> Bolivie </option><option> Bosnie-Herzégovine</option><option> Botswana </option><option> Brésil </option><option> Brunei </option><option> Bulgarie </option>
<option > Burkina Faso </option><option> Burundi </option><option> Cambodge </option><option> Cameroun </option><option> Canada </option>
<option > Cap-Vert </option><option> Chili </option><option> Chine </option><option> Chypre </option><option> Colombie </option><option>Comores</option>
<option> Corée du Nord </option><option> Corée du Sud </option><option> Costa Rica </option><option> Côte d’Ivoire </option><option> Croatie </option>
<option> Cuba </option><option > Danemark </option><option> Djibouti </option><option> Dominique </option><option> Égypte </option>
<option> Émirats arabes unis </option><option> Équateur </option><option> Érythrée </option><option> Espagne </option><option> Eswatini </option>
<option> Estonie </option><option> États-Unis </option><option> Éthiopie </option><option> Fidji </option><option> Finlande </option><option> France </option>
<option > Gabon </option><option> Gambie </option><option> Géorgie </option><option> Ghana </option><option> Grèce </option><option> Grenade </option>
<option> Guatemala </option><option> Guinée </option><option> Guinée équatoriale </option><option> Guinée-Bissau </option><option> Guyana </option>
<option> Haïti </option><option> Honduras </option><option> Hongrie </option><option> Îles Cook </option><option> Îles Marshall </option>
<option> Inde </option><option> Indonésie </option><option> Irak </option><option> Iran </option><option> Irlande </option>
<option> Islande </option><option> Israël </option><option> Italie </option><option> Jamaïque </option><option> Japon </option>
<option> Jordanie </option><option> Kazakhstan </option><option> Kenya </option><option > Kirghizistan </ option><option> Kiribati </option><option> Koweït </option><option> Laos </option><option> Lesotho </ option><option > Lettonie </option><option> Liban </option>
<option> Liberia </option><option> Libye </option><option > Liechtenstein </option><option> Lituanie </option><option> Luxembourg </option>
<option> Macédoine </option><option> Madagascar </option><option> Malaisie </option><option> Malawi </option><option> Maldives </option>
<option> Mali </option><option> Malte </option><option> Maroc </option><option> Maurice </option><option > Mauritanie </option><option> Mexique </option><option> Micronésie </option><option> Moldavie </option><option> Monaco </option><option > Mongolie </option>
<option > Monténégro </option><option> Mozambique </option><option> Namibie </option><option> Nauru </option><option> Népal </option><option> Nicaragua </option>
<option> Niger </option><option> Nigeria </option><option> Niue </option><option> Norvège </option><option > Nouvelle-Zélande </option>
<option> Oman </option><option> Ouganda </option><option> Ouzbékistan </option><option> Pakistan </option><option> Palaos </option>
<option> Palestine </option><option> Panama </option><option> Papouasie-Nouvelle-Guinée </option><option> Paraguay </option>
<option> Pays-Bas </option><option> Pérou </option><option> Philippines </option><option> Pologne </option><option> Portugal </option><option> Qatar </option>
<option> République centrafricaine </option><option> République démocratique du Congo </option><option> République Dominicaine </option><option> République du Congo </option>
<option> République tchèque </option><option> Roumanie </option><option> Royaume-Uni </option><option> Russie </option><option> Rwanda </option>
<option>Saint-Kitts-et-Nevis </option><option> Saint-Vincent-et-les-Grenadines </option><option> Sainte-Lucie </option>
<option> Saint-Marin </option><option> Salomon </option><option> Salvador </option><option> Samoa </option>
<option> São Tomé-et-Principe </option><option> Sénégal </option><option> Serbie </option><option> Seychelles </option>
<option> Sierra Leone </option><option> Singapour </option><option> Slovaquie </option><option > Slovénie </option>
<option> Somalie </option><option> Soudan </option><option> Soudan du Sud </option><option> Sri Lanka </option><option> Suède </option>
<option> Suisse </option><option> Suriname </option><option> Syrie </option><option > Tadjikistan </option><option> Tanzanie </option>
<option> Tchad </option><option> Thaïlande </option><option> Timor oriental </option><option> Togo </option><option> Tonga </option>
<option> Trinité-et-Tobago </option><option> Tunisie </option><option > Turkménistan </option><option> Turquie </option><option> Tuvalu </option>
<option> Ukraine </option><option> Uruguay </option><option> Vanuatu </option><option > Vatican </option><option> Venezuela </option>
<option> Viêt Nam </option><option> Yémen </option><option> Zambie </option><option> Zimbabwe </option>            
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationServer05">Password</label>
            <input type="password" class="form-control is-invalid" name="password" id="validationServer05" required="">
            <div class="invalid-feedback">
              Please provide a valid password.
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required="">
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
</body>
</html>