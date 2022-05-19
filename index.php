<?php
session_start();
?>

<!DOCTYPE html>
<html lang="et">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
      <nav class="container-fluid align-items-center px-md-5">
        <ul class="navbar-nav collapse navbar-collapse justify-self-start">
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
        <ul class="navbar-nav align-items-center justify-self-end">
          <li class="nav-item collapse navbar-collapse justify-self-start">
            <a class="nav-item">
              <img
                src="./pictures/el-struktuuri-investeerimisfondid.png"
                class="d-block mx-5 header-logo-sf"
              />
            </a>
          </li>
          <li
            class="nav-item d-flex align-items-center text-center justify-self-end mx-auto"
          >
            <a class="col lang-btn h3" href="index.php">EST</a>
            <h3 class="col">|</h3>
            <a class="col lang-btn h3" href="ru.php">RUS</a>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Main Content -->
    <main>
      <!-- Introduction -->
      <section class="bg-img container-fluid">
        <div
          class="bg-light bg-opacity-75 row justify-content-center text-center py-5"
        >
          <div class="col-lg-10 col-12 px-md-5">
            <h1 class="m-3">
              <strong
                >Oled hädas kvalifitseeritud tööjõu leidmisega ja järelkasvu
                kindlustamisega?</strong
              >
            </h1>
            <p class="h4 m-3">
              Uus profiõppe pilootmudel pakub lahendust, mis kasvatab
              kutseoskustega noori töötajaid, kes vastavad just Teie ettevõtte
              vajadustele.
            </p>
            <p class="h4 m-3">
              Profiõpe viib kokku kutsekooli, metalliettevõtte ja erialast tööd
              otsiva noore, kes on juba omandanud keskhariduse. Kolmepoolse
              Kolmepoolse kokkuleppe alusel toimub kutseõpe paralleelselt
              töösuhte töösuhte alustamisega ettevõttes.
            </p>
            <p class="h4 m-3">
              See tagab kiirema, kvaliteetsema ja täpselt ettevõtte vajadustele
              vajadustele vastava uue meistri kujunemise - see ongi profiõpe.
            </p>
          </div>
        </div>
      </section>
      <section class="container">
        <!-- Logos -->
        <div
          class="row align-items-center justify-content-center my-4 mx-0"
          style="width: 100%;"
        >
          <div class="row text-center align-items-center">
            <a
              class="col-md col-6 mx-auto d-block"
              href="https://www.voco.ee/"
              target="_blank"
            >
              <img src="./pictures/voco.png" class="img-fluid" />
            </a>
            <a
              class="col-md col-6 mx-auto d-block"
              href="https://www.kutsehariduskeskus.ee/"
              target="_blank"
            >
              <img src="./pictures/ida-virumaakhk.png" class="img-fluid" />
            </a>
            <a
              class="col-md col-6 mx-auto d-block"
              href="https://www.tthk.ee/"
              target="_blank"
            >
              <img src="./pictures/tallinnathk.png" class="img-fluid" />
            </a>
            <a
              class="col-md col-6 mx-auto d-block"
              href="https://www.vikk.ee/"
              target="_blank"
            >
              <img src="./pictures/viljandikhk.png" class="img-fluid" />
            </a>
            <a
              class="col-md col-6 mx-auto d-block"
              href="https://www.hariduskeskus.ee/"
              target="_blank"
            >
              <img src="./pictures/pärnukhk.png" class="img-fluid" />
            </a>
            <a
              class="col-md col-6 mx-auto d-block"
              href="https://www.vkhk.ee/"
              target="_blank"
            >
              <img src="./pictures/vorumaakhk.png" class="img-fluid" />
            </a>
            <a
              class="col-md col-6 mx-auto d-block"
              href="https://www.mehaanikakool.ee/"
              target="_blank"
            >
              <img src="./pictures/lasnamäekhk.jpg" class="img-fluid" />
            </a>
            <a
              class="col-md col-6 mx-auto d-block"
              href="https://www.rak.ee/"
              target="_blank"
            >
              <img
                src="./pictures/rakverekhk.png"
                class="img-fluid"
                style="width: 50%;"
              />
            </a>
          </div>
        </div>
        <p class="container h4 mx-auto mb-5 text-center">
          Koostöös metallierialasid õpetavate kutsekoolidega piloteerime
          töökohapõhist profiõpet kolmel erialal.
        </p>
      </section>

      <!-- Proffession & Form -->
      <section class="container my-5">
        <div class="row justify-content-center mx-2">
          <div class="col-md c-border m-2 text-center">
            <img
              src="./pictures/CNC-operaator.png"
              class="img-fluid mx-auto my-4"
              style="height: 100px;"
            />
            <div class="p-0 my-2">
              <h3>CNC operaator</h3>
            </div>
            <p class="text-center pro-desc">
              CNC operaatori profiõpe sisaldab metallilõikepinkide
              programmeerimist ja ka täpsust nõudvaid käelisi oskusi. Õppe
              käigus on võimalik spetsialiseeruda CNC treipingi või CNC
              freespingi operaatoriks. Õppe aluseks on CNC metallilõikepingi
              operaatori õppekava.
            </p>
          </div>
          <div class="col-md c-border m-2 text-center">
            <img
              src="./pictures/Koostelukksepp.png"
              class="img-fluid mx-auto my-4"
              style="height: 100px;"
            />
            <div class="p-0 my-2">
              <h3>Koostelukksepp</h3>
            </div>
            <p class="text-center pro-desc">
              Koostelukksepa tööülesanded on toorikute ettevalmistamine,
              detailide mõõtmine, märkimine, töötlemine, puhastamine ning
              koostude koostamine ja reguleerimine. See eeldab jooniste lugemise
              lugemise oskust, masinaehitustehnoloogia ja kasutatavate
              materjalide materjalide tundmist.
            </p>
          </div>
          <div class="col-md c-border m-2 text-center">
            <img
              src="./pictures/Keevitaja.png"
              class="img-fluid mx-auto my-4"
              style="height: 100px;"
            />
            <div class="p-0 my-2">
              <h3>Keevitaja</h3>
            </div>
            <p class="text-center pro-desc">
              Keevitaja valmistab detaile ja kooste, kasutades erinevaid
              keevitusseadmeid, lähtudestööjoonisest, töötlemistehnoloogiatest,
              tööprotsessidest, töövahenditest ja töödeldavatest materjalidest.
            </p>
          </div>
        </div>
      </section>

      <!-- Info part -->
      <section class="container d-block">
        <div class="bg-img2 row justify-content-between mx-2 text-center">
          <div class="bg-light bg-opacity-75 py-5 c-border">
            <div class="col-md-10 col-12 mx-auto px-md-5">
              <h1>
                <strong
                  >Kui hästi profiõpe Teie ettevõttele sobida võiks?</strong
                >
              </h1>
              <p class="h4">
                Palun jaga meiega lisainfot oma ettevõtte tausta ja vajaduste
                kohta, et saaksime hinnata uue loodava profiõppe mudeli sobivust
                Teie ettevõttesse uute professionaalsete töötajate
                koolitamiseks.
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mx-md-5 my-5">
          <!-- Form -->
          <form class="col" method="POST" action="form.php">
            <label class="p-0 mb-1" for="ettevottenimi">Ettevõtte nimi</label>
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^'\x22\x27\\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Ettevõtte nimi..."
              name="ettevottenimi"
            />
            <label class="p-0 mb-1" for="kestegeleb"
              >Kes tegeleb Teie ettevõttes uute inimeste, sh praktikantide
              vastuvõtmisega?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^'\x22\x27\\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Inimese/ameti nimi..."
              name="kestegeleb"
            />
            <label class="p-0 mb-1" for="voimekus"
              >Kirjeldage oma ettevõtte võimekust ja kogemust praktikantide
              personaalsel juhendamisel</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^'\x22\x27\\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Kirjeldus..."
              name="voimekus"
            />
            <label class="p-0 mb-1" for="valmidus"
              >Kas Teie ettevõte on valmis lepinguga tööle võtma noore, kes
              samal ajal õpib kutsekoolis vajalikku eriala?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^'\x22\x27\\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Jah/Ei"
              name="valmidus"
            />
            <label class="p-0 mb-1" for="huvitatus"
              >Kas Teie ettevõte oleks huvitatud osalema 2022/23 õppeaasta
              profiõppe pilootprogrammis?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^'\x22\x27\\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Jah/Ei"
              name="huvitatus"
            />
            <label class="p-0 mb-1" for="mitunoort"
              >Mitu noort on Teie ettevõte korraga võimeline ja valmis vastu
              võtma?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^'\x22\x27\\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Number..."
              name="mitunoort"
            />
            <label class="p-0 mb-1" for="erialad"
              >Millise eriala vastu on Teil suurim vajadus?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^'\x22\x27\\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="CNC operaator, koostelukksepp, keevitaja või mõni muu"
              name="erialad"
            />
            <label class="p-0 mb-1" for="email"
              >Jäta meile oma e-mail, et saaksime Teiega personaalselt
              ühendustühendust võtta!</label
            >
            <input
              class="form-control mb-3"
              type="email"
              maxlength="255"
              title="Sisestage sobiv e-maili aadress"
              required
              placeholder="example@gmail.com"
              name="email"
            />
            <div class="text-center">
              <button class="btn btn-dark mt-3 py-2 w-100" type="submit">
                SAADA
              </button>
            </div>
          </form>
        </div>
        <p class="h5 mx-md-5 mb-5">
          Aitäh lisainfo jagamise eest – antud küsimustikule vastamine ei kohusta
          Teid ega Teie ettevõtet veel millekski. Küll aga saavad kiiremad ja
          suurema motivatsiooniga ettevõtted teiste ees olulise eelise – just
          nende hulgast valitakse välja esimesed profiõppe pilootprogrammis
          osalejad. Huvilistega võtame täiendava info ja tingimuste
          läbirääkimisteks eraldi ühendust.
        </p>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-secondary bg-opacity-25">
      <div class="container text-center">
        <div class="row justify-content-center py-3 mx-auto w-md-75">
          <p class="footer-text">
            Profiõppe pilootprogrammi väljatöötamist korraldab Haridus- ja
            Noorteamet koostöös Eesti Masinatööstuse Liiduga, Haridus- ja
            Teadusministeeriumiga ja kutsekoolidega.
          </p>
          <p class="footer-text m-0">
            Lisainfo ja küsimused: eveli.laats@etag.ee
          </p>
        </div>
        <div class="row">
          <a class="col my-2" href="https://harno.ee/et">
            <img src="./pictures/HARNO.png"
          /></a>
          <a class="col my-2" href="https://www.emliit.ee/et_EE/page/homepage">
            <img src="./pictures/EML.png"
          /></a>
          <a class="col my-2" href="https://www.hm.ee/et">
            <img src="./pictures/HTM.png"
          /></a>
          <a class="col my-2">
            <img src="./pictures/el-struktuuri-investeerimisfondid.png"
          /></a>
        </div>
      </div>
    </footer>
  </body>
</html>
