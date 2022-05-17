<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
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
    <div>
      <!-- Introduction -->
      <section class="container-md">
        <div class="row">
          <div class="col-md-6">
            <h1 class="m-3">
              <strong
                >Are you struggling to find a skilled workforce and insuring growth?</strong>
            </h1>
            <p class="h4 m-3">
            The new vocational training pilot model offers a solution that grows
              skilled young workers who are just right for your business
              needs.
            </p>
            <p class="h4 m-3">
              Vocational training brings together the vocational school, metal company and young person seeking
              proffessional work who has already completed upper secondary education. Tripartite
              under the agreement, vocational training takes place in parallel with the employment relationship
              starting a business.
            </p>
            <p class="h4 m-3">
              This ensures faster, higher quality formation of a corresponding master
              accurately meeting business needs - this is professional training.
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
          In cooperation with vocational schools teaching metal specialties, we pilot
          work-based vocational training in three disciplines. Please give us your interest and
          indication of possible preferences - which aftergrowth of professionals
          does your company consider the most important today and in the future?
        </p>
      </section>

      <!-- Proffession form -->
      <form class="" method = "POST" action = "form.php">
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
                  >CNC operator</label
                >
              </div>
              <p class="text-center pro-desc">
                CNC operator training includes metal cutting machines,
                manual skills that require programming as well as precision. Learning
                course can specialize in CNC lathe or CNC
                milling machine operator. The training is based on a CNC metal cutting machine
                operator curriculum.
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
                  >Assembly locksmith</label
                >
              </div>
              <p class="text-center pro-desc">
                The tasks of the assembly locksmith are the preparation of the blanks,
                measuring, marking, processing, cleaning of parts,
                assembly and adjustment of assemblies. This requires blueprint
                reading skills, mechanical engineering technology and
                knowledge of used materials.
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
                  >Welder</label
                >
              </div>
              <p class="text-center pro-desc">
                The welder makes parts and assemblies using a variety of
                welding equipment, starting drawing,
                processing technologies, work processes, tools and equipment
                materials to be processed.
              </p>
            </div>
          </div>
          <div class="row my-4 text-center">
            <h2 class="col-6"><strong>Or perhaps another specialty?</strong></h2>
            <input
              class="col-6 form-control"
              id="proffession-input"
              name="muueriala"
              type="text"
              placeholder="Write here..."
              style="width: 50%;"
            />
          </div>
        </section>

        <!-- Info part of form -->
        <section class="container d-block">
          <div class="row justify-content-between">
            <img
              src="./pictures/keevitaja.png"
              class="col-sm-6 img-fluid p-0"
              style="object-fit: cover;"
            />
            <div class="col-sm-6 bg-secondary bg-opacity-25">
              <h1 class="" style="font-size: 55px;">
                <strong
                  >How well could vocational training suit your company?</strong
                >
              </h1>
              <p class="h4">
                Please share with us more information about your business background and needs
                so that we can assess the suitability of the new vocational training model that is being developed.
                Add new professional staff to your business
                training.
              </p>
            </div>
          </div>
          <div class="row m-5">
            <form class="col">
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Company name"
                name = "ettevottenimi"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Who is hiring new people in your company, including trainees?"
                name = "kestegeleb"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="What is the capacity and experience of your company in providing personal guidance to trainees?"
                name = "voimekus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Is your company ready to hire a young person who is studying a specialty at a vocational school at the same time?"
                name = "valmidus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Would your company be interested in participating in the 2022/23 academic year vocational training pilot program?"
                name = "huvitatus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="How many people is your company able to accept at a time?"
                name = "mitunoort"
              />
              <input
                class="form-control mb-3"
                type="text"
                placeholder="Questions? Want to clarify something? Write here!"
                name = "lisakysimused"
              />
              <input
                class="form-control mb-3"
                type="text"
                placeholder="Leave us your e-mail if you want us to contact you personally!"
                name = "email"
              />
              <button class="btn btn-primary mt-3 p-2" type="submit">
                SEND
              </button>
            </form>
          </div>
          <p class="h5 align-self-center mx-auto mb-5" style="width: 75%;">
            Thanks for sharing more information - answering this questionnaire is not obligatory
            You or your business for something else. However, they get faster and
            companies with greater motivation have a significant advantage over others - just
            the first of these will be selected from the vocational training pilot program
            participants. We will contact those interested with additional information and conditions
            contact separately for negotiations.
          </p>
        </section>
      </form>
    </div>

    <!-- Footer -->
    <footer class="bg-secondary bg-opacity-50">
      <div class="container text-center">
        <div class="row justify-content-center">
          <p class="footer-text">
            The development of the vocational training pilot program is organized by the Ministry of Education
            Youth Board in cooperation with the Estonian Machinery Industry Association, Education and
            With the Ministry of Research and vocational schools.
          </p>
          <p class="footer-text">contact: eveli.laats@etag.ee</p>
        </div>
        <div class="row">
          <a class="col my-4" href="https://harno.ee/et" target="_blank">
            <img src="./pictures/HARNO.png"
          /></a>
          <a class="col my-4" href="https://www.emliit.ee/et_EE/page/homepage" target="_blank">
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