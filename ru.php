<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Обратная связь</title>
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
                >Вы изо всех сил пытаетесь найти квалифицированную рабочую силу и потомство
             страхование?</strong>
            </h1>
            <p class="h4 m-3">
            Новая пилотная модель профессионального обучения предлагает решение, которое
              квалифицированные молодые работники, которые как раз подходят для вашего бизнеса
              потребности.
            </p>
            <p class="h4 m-3">
            Профессиональное обучение объединяет профессионально-техническое училище, металлургическое предприятие и профессиональную работу.
              ищу молодого человека, который уже получил полное среднее образование. трехсторонний
              по договору профессиональное обучение происходит параллельно с трудовыми отношениями
              открытие бизнеса.
            </p>
            <p class="h4 m-3">
            Это обеспечивает более быстрое, более высокое качество и точное соответствие бизнес-потребностям.
              формирование соответствующего нового мастера - это и есть профессиональная подготовка.
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
        В сотрудничестве с профессиональными учебными заведениями, обучающими металлургическим специальностям, мы пилотируем
          профессиональное обучение на рабочем месте по трем специальностям. Пожалуйста, проявите к нам интерес и
          указание на возможные предпочтения - потомки профессионалов, в каких профессиях
          Считаете ли вы это наиболее важным сегодня и в будущем?
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
                  >Оператор ЧПУ</label
                >
              </div>
              <p class="text-center pro-desc">
                Обучение операторов ЧПУ включает металлорежущие станки
                ручные навыки, которые требуют программирования, а также точности. Обучение
                курс может специализироваться на токарном станке с ЧПУ или ЧПУ
                оператор фрезерного станка. Обучение проводится на металлорежущем станке с ЧПУ.
                учебная программа оператора.
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
                  >Слесарь по сборке</label
                >
              </div>
              <p class="text-center pro-desc">
                В задачи слесаря-сборщика входит подготовка заготовок,
                измерение, маркировка, обработка, очистка деталей;
                сборка и регулировка узлов. Для этого нужны чертежи
                навыки чтения, технологии машиностроения и используемые
                знание материалов.
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
                  >Сварщик</label
                >
              </div>
              <p class="text-center pro-desc">
                Сварщик изготавливает детали и узлы, используя различные
                сварочное оборудование, стартовый чертеж,
                технологии обработки, рабочие процессы, инструменты и оборудование
                материалы, подлежащие обработке.
              </p>
            </div>
          </div>
          <div class="row my-4 text-center">
            <h2 class="col-6"><strong>Или другая специальность?</strong></h2>
            <input
              class="col-6 form-control"
              id="proffession-input"
              name="muueriala"
              type="text"
              placeholder="Напишите здесь ..."
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
                  >Насколько профессиональное обучение может подойти вашей компании?</strong
                >
              </h1>
              <p class="h4">
                Пожалуйста, поделитесь с нами для получения дополнительной информации о вашем бизнесе и потребностях
                чтобы мы могли оценить пригодность новой модели профессионального обучения, которая разрабатывается
                Добавьте в свой бизнес новых профессиональных сотрудников
                обучение.
              </p>
            </div>
          </div>
          <div class="row m-5">
            <form class="col">
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Название компании"
                name = "ettevottenimi"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Кто нанимает новых людей в вашу компанию, в том числе стажеров?"
                name = "kestegeleb"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Каковы возможности и опыт вашей компании в личном консультировании стажеров?"
                name = "voimekus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Готова ли ваша компания принять на работу молодого человека по контракту, параллельно обучающегося по специальности в ПТУ?"
                name = "valmidus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Была бы ваша компания заинтересована в участии в пилотной программе профессионального обучения 2022/23 учебного года?"
                name = "huvitatus"
              />
              <input
                class="form-control mb-3"
                type="text"
                required
                placeholder="Сколько молодых людей ваша компания может и хочет принять одновременно?"
                name = "mitunoort"
              />
              <input
                class="form-control mb-3"
                type="text"
                placeholder="Вопросы? Хотите что-то уточнить? Напишите здесь!"
                name = "lisakysimused"
              />
              <input
                class="form-control mb-3"
                type="text"
                placeholder="Оставьте нам свой e-mail, если хотите, чтобы мы связались с вами лично!"
                name = "email"
              />
              <button class="btn btn-primary mt-3 p-2" type="submit">
              ОТПРАВИТЬ
              </button>
            </form>
          </div>
          <p class="h5 align-self-center mx-auto mb-5" style="width: 75%;">
          Спасибо, что поделились дополнительной информацией - ответы на эту анкету не обязательны
            Вы или ваш бизнес для чего-то еще. Однако они становятся быстрее и
            компании с большей мотивацией имеют значительное преимущество перед другими — просто
            первый из них будет выбран из пилотной программы профессионального обучения
            участники. Мы свяжемся с заинтересованными с дополнительной информацией и условиями
            обращайтесь отдельно для переговоров.
          </p>
        </section>
      </form>
    </div>

    <!-- Footer -->
    <footer class="bg-secondary bg-opacity-50">
      <div class="container text-center">
        <div class="row justify-content-center">
          <p class="footer-text">
            Разработку пилотной программы профессионального обучения организует Министерство образования
            Молодежный совет в сотрудничестве с Эстонской ассоциацией машиностроителей, Образовательной и
            С Министерством исследований и профессионально-технических училищ.
          </p>
          <p class="footer-text">контакт: eveli.laats@etag.ee</p>
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