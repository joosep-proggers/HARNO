<?php
session_start();
?>

<!DOCTYPE html>
<html lang="et">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tagasiside</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mobile.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="navbar navbar-expand-lg bg-secondary bg-opacity-25">
      <nav
        class="container-fluid align-items-center justify-content-between px-5"
      >
        <ul class="navbar-nav collapse navbar-collapse">
          <li class="nav-item">
            <a href="https://www.emliit.ee/et_EE/page/homepage" class=""
              ><img src="./pictures/EML.png" class="d-block me-5 header-logo"
            /></a>
          </li>
          <li class="nav-item">
            <a href="https://harno.ee/et" class=""
              ><img src="./pictures/HARNO.png" class="d-block me-5 header-logo"
            /></a>
          </li>
          <li class="nav-item">
            <a href="https://www.hm.ee/et" class=""
              ><img src="./pictures/HTM.png" class="d-block header-logo"
            /></a>
          </li>
        </ul>
        <ul class="navbar-nav justify-content-between align-items-center">
          <li class="nav-item collapse navbar-collapse">
            <a class="">
              <img
                src="./pictures/el-struktuuri-investeerimisfondid.png"
                class="d-block mx-5 header-logo-sf"
              />
            </a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a href="index.php" class="btn btn-outline-dark mx-1">EST</a>
            <a href="ru.php" class="btn btn-outline-dark mx-1">RUS</a>
            <a href="en.php" class="btn btn-outline-dark mx-1">ENG</a>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Main Content -->
    <div class="">
      <!-- Introduction -->
      <section class="container-md">
        <div class="row">
          <div class="col-md-6">
            <h1 class="m-3">
              <strong
                >Oled hädas kvalifitseeritud tööjõu leidmisega ja järelkasvu
                kindlustamisega?</strong>
            </h1>
            <p class="h4 m-3">
              Uus profiõppe pilootmudel pakub lahendust, mis kasvatab
              kutseoskustega noori töötajaid, kes vastavad just Sinu ettevõtte
              vajadustele.
            </p>
            <p class="h4 m-3">
              Profiõpe viib kokku kutsekooli, metalliettevõtte ja erialast tööd
              otsiva noore, kes on juba omandanud keskhariduse. Kolmepoolse
              kokkuleppe alusel toimub kutseõpe paralleelselt töösuhte
              alustamisega ettevõttes.
            </p>
            <p class="h4 m-3">
              See tagab kiirema, kvaliteetsema ja täpselt ettevõtte vajadustele
              vastava uue meistri kujunemise - see ongi profiõpe.
            </p>
          </div>
          <img
            class="col-md-6 img-fluid p-0"
            src="https://voco.ee/wp-content/uploads/Untitled-design-2021-04-05T084608.083.png"
            style="object-fit: cover;"
          />
        </div>
      </section>
      <section class="container">
        <!-- Logos -->  
        <div class="row align-items-center justify-content-center my-4 mx-0" style="width: 100%;">
          <div class="row text-center align-items-center">
            <a
              class="col-md-3 col-6 mx-auto d-block"
              href="https://www.voco.ee/"
              target="_blank"
            >
              <img src="./pictures/voco.png" class="img-fluid" />
            </a>
            <a
              class="col-md-3 col-6 mx-auto d-block"
              href="https://www.kutsehariduskeskus.ee/"
              target="_blank"
            >
              <img src="./pictures/ida-virumaakhk.png" class="img-fluid" />
            </a>
            <a
              class="col-md-3 col-6 mx-auto d-block"
              href="https://www.tthk.ee/"
              target="_blank"
            >
              <img src="./pictures/tallinnathk.png" class="img-fluid" />
            </a>
            <a
              class="col-md-3 col-6 mx-auto d-block"
              href="https://www.vikk.ee/"
              target="_blank"
            >
              <img src="./pictures/viljandikhk.png" class="img-fluid" />
            </a>
          </div>
          <div class="row text-center align-items-center">
            <a
              class="col-md-3 col-6 mx-auto d-block"
              href="https://www.hariduskeskus.ee/"
              target="_blank"
            >
              <img src="./pictures/pärnukhk.png" class="img-fluid" />
            </a>
            <a
              class="col-md-3 col-6 mx-auto d-block"
              href="https://www.vkhk.ee/"
              target="_blank"
            >
              <img src="./pictures/vorumaakhk.png" class="img-fluid" />
            </a>
            <a
              class="col-md-3 col-6 mx-auto d-block"
              href="https://www.mehaanikakool.ee/"
              target="_blank"
            >
              <img src="./pictures/lasnamäekhk.jpg" class="img-fluid" />
            </a>
            <a
              class="col-md-3 col-6 mx-auto d-block"
              href="https://www.rak.ee/"
              target="_blank"
            >
              <img src="./pictures/rakverekhk.png" class="img-fluid" style="width: 50%;" />
            </a>
          </div>
        </div>
        <p class="container h4 mx-auto mb-5">
          Koostöös metallierialasid õpetavate kutsekoolidega piloteerime
          töökohapõhist profiõpet kolmel erialal. Palun anna meile oma huvist ja
          võimalikest eelistustest märku – milliste erialade proffide järelkasvu
          Sinu ettevõte täna ja tulevikus kõige olulisemaks peab?
        </p>
      </section>

      <!-- Proffession form -->
      <form method = "POST" action="form.php">
        <section class="container">
          <div class="row">
            <div class="col-md-4" style="background-color: #daedd9;">
              <img
                src="./pictures/kleeps4_cnc-operaator.jpg"
                class="rounded img-fluid mx-auto d-block"
                style="height: 250px;"
              />
              <div class="form-check d-flex justify-content-center p-0 my-2">
                <input
                  type="checkbox"
                  id="cnc-operaator"
                  name="cnc-operaator"
                  class="form-check-input align-self-center me-2"
                  style="padding: 11px;"
                />
                <label
                  for="cnc-operaator"
                  class="h3 form-check-label mt-2"
                  >CNC operaator</label
                >
              </div>
              <p class="text-center pro-desc">
                CNC operaatori profiõpe sisaldab metallilõikepinkide
                programmeerimist ja ka täpsust nõudvaid käelisi oskusi. Õppe
                käigus on võimalik spetsialiseeruda CNC treipingi või CNC
                freespingi operaatoriks. Õppe aluseks on CNC metallilõikepingi
                operaatori õppekava.
              </p>
            </div>
            <div class="col-md-4" style="background-color: #eec8c7;">
              <img
                src="./pictures/kleeps2_koostelukksepp.jpg"
                class="rounded img-fluid mx-auto d-block"
                style="height: 250px;"
              />
              <div class="form-check d-flex justify-content-center p-0 my-2">
                <input
                  type="checkbox"
                  id="koostelukksepp"
                  name="koostelukksepp"
                  class="form-check-input align-self-center me-2"
                  style="padding: 11px;"
                />
                <label
                  for="koostelukksepp"
                  class="h3 form-check-label mt-2"
                  >Koostelukksepp</label
                >
              </div>
              <p class="text-center pro-desc">
                Koostelukksepa tööülesanded on toorikute ettevalmistamine,
                detailide mõõtmine, märkimine, töötlemine, puhastamine ning
                koostude koostamine ja reguleerimine. See eeldab jooniste
                lugemise oskust, masinaehitustehnoloogia ja kasutatavate
                materjalide tundmist.
              </p>
            </div>
            <div class="col-md-4" style="background-color: #f2dae8;">
              <img
                src="./pictures/kleeps5_keevitaja.jpg"
                class="rounded img-fluid mx-auto d-block"
                style="height: 250px;"
              />
              <div class="form-check d-flex justify-content-center p-0 my-2">
                <input
                  type="checkbox"
                  id="keevitaja"
                  name="keevitaja"
                  class="form-check-input align-self-center me-2"
                  style="padding: 11px;"
                />
                <label
                  for="keevitaja"
                  class="h3 form-check-label mt-2"
                  >Keevitaja</label
                >
              </div>
              <p class="text-center pro-desc">
                Keevitaja valmistab detaile ja kooste, kasutades erinevaid
                keevitusseadmeid, lähtudestööjoonisest,
                töötlemistehnoloogiatest, tööprotsessidest, töövahenditest ja
                töödeldavatest materjalidest.
              </p>
            </div>
          </div>
          <div class="row my-4 text-center">
            <h2 class="col-6"><strong>Või hoopis mõni muu eriala?</strong></h2>
            <input
              class="col-6 form-control"
              id="proffession-input"
              name="muueriala"
              type="text"
              placeholder="Kirjuta siia..."
              style="width: 50%;"
            />
          </div>
        </section>

        <!-- Info part of form -->
        <section class="container d-block">
          <div class="row justify-content-between">
            <img
              src="./pictures/keevitaja.png"
              class="col-md-6 img-fluid p-0"
              style="object-fit: cover;"
            />
            <div class="col-md-6 bg-secondary bg-opacity-25">
              <h1 style="font-size: 55px;">
                <strong
                  >Kui hästi profiõpe Sinu ettevõttele sobida võiks?</strong
                >
              </h1>
              <p class="h4">
                Palun jaga meiega lisainfot oma ettevõtte tausta ja vajaduste
                kohta, et saaksime hinnata uue loodava profiõppe mudeli sobivust
                Sinu ettevõttesse uute professionaalsete töötajate
                koolitamiseks.
              </p>
            </div>
          </div>
          <div class="row m-5">
            <form class="col">
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Ettevõtte nimi"
                name = "ettevottenimi"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Kes tegeleb Sinu ettevõttes uute inimeste, sh praktikantide vastuvõtmisega?"
                name = "kestegeleb"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Milline on Sinu ettevõtte võimekus ja kogemus praktikantide personaalsel juhendamisel?"
                name = "voimekus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Kas Sinu ettevõte on valmis lepinguga tööle võtma noore, kes samal ajal õpib kutsekoolis vajalikku eriala?"
                name = "valmidus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Kas Sinu ettevõte oleks huvitatud osalema 2022/23 õppeaasta profiõppe pilootprogrammis?"
                name = "huvitatus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Mitu noort on Sinu ettevõte korraga võimeline ja valmis vastu võtma?"
                name = "mitunoort"
              />
              <input
                class="form-control mb-3"
                type="text"
                placeholder="Tekkis küsimusi? Tahaks midagi täpsustada? Kirjuta siia!"
                name = "lisakysimused"
              />
              <input
                class="form-control mb-3"
                type="text"
                placeholder="Jäta meile oma e-mail kui soovid, et võtaksime Sinuga personaalselt ühendust!"
                name = "email"
              />
              <button class="btn btn-primary mt-3 p-2" type="submit">
                SAADA
              </button>
            </form>
          </div>
          <p class="h5 align-self-center mx-auto mb-5" style="width: 75%;">
            Aitäh lisainfot jagamast - antud küsimustikule vastamine ei kohusta
            Sind ega Sinu ettevõtet veel millekski. Küll aga saavad kiiremad ja
            suurema motivatsiooniga ettevõtted teiste ees olulise eelise - just
            nende hulgast valitakse välja esimesed profiõppe pilootprogrammis
            osalejad. Huvilistega võtame täiendava info ja tingimuste
            läbirääkimisteks eraldi ühendust.
          </p>
        </section>
      </form>
    </div>

    <!-- Footer -->
    <footer class="bg-secondary bg-opacity-50">
      <div class="container text-center">
        <div class="row justify-content-center">
          <p class="footer-text">
            Profiõppe pilootprogrammi väljatöötamist korraldab Haridus- ja
            Noorteamet koostöös Eesti Masinatööstuse Liiduga, Haridus- ja
            Teadusministeeriumiga ja kutsekoolidega.
          </p>
          <p class="footer-text">kontakt: eveli.laats@etag.ee</p>
        </div>
        <div class="row">
          <a class="col my-4" href="https://harno.ee/et" target="_blank">
            <img src="./pictures/HARNO.png"
          /></a>
          <a class="col my-4" href="https://knowyourmeme.com/memes/trollface" target="_blank">
            <img src="./pictures/EML.png"
          /></a>
          <a class="col my-4" href="https://www.hm.ee/et" target="_blank">
            <img src="./pictures/HTM.png"
          /></a>
          <a class="col my-4">
            <img src="./pictures/el-struktuuri-investeerimisfondid.png"
          /></a>
        </div>
      </div>  
    </footer>
  </body>
</html>