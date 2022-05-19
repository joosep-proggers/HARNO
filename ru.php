<?php
session_start();
?>

<!DOCTYPE html>
<html lang="et">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
                >Вы изо всех сил пытаетесь найти квалифицированную рабочую силу и потомство
                страхование?</strong
              >
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
            В сотрудничестве с профессиональными учебными заведениями, обучающими металлургическим специальностям, мы пилотируем
            профессиональное обучение на рабочем месте по трем специальностям. Пожалуйста, проявите к нам интерес и
            указание на возможные предпочтения - потомки профессионалов, в каких профессиях
            Считаете ли вы это наиболее важным сегодня и в будущем?
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
              <h3>Оператор ЧПУ</h3>
            </div>
            <p class="text-center pro-desc">
                Обучение операторов ЧПУ включает металлорежущие станки
                ручные навыки, которые требуют программирования, а также точности. Обучение
                курс может специализироваться на токарном станке с ЧПУ или ЧПУ
                оператор фрезерного станка. Обучение проводится на металлорежущем станке с ЧПУ.
                учебная программа оператора.
            </p>
          </div>
          <div class="col-md c-border m-2 text-center">
            <img
              src="./pictures/Koostelukksepp.png"
              class="img-fluid mx-auto my-4"
              style="height: 100px;"
            />
            <div class="p-0 my-2">
              <h3>Слесарь по сборке</h3>
            </div>
            <p class="text-center pro-desc">
                В задачи слесаря-сборщика входит подготовка заготовок,
                измерение, маркировка, обработка, очистка деталей;
                сборка и регулировка узлов. Для этого нужны чертежи
                навыки чтения, технологии машиностроения и используемые
                знание материалов.
            </p>
          </div>
          <div class="col-md c-border m-2 text-center">
            <img
              src="./pictures/Keevitaja.png"
              class="img-fluid mx-auto my-4"
              style="height: 100px;"
            />
            <div class="p-0 my-2">
              <h3>Сварщик</h3>
            </div>
            <p class="text-center pro-desc">
                Сварщик изготавливает детали и узлы, используя различные
                сварочное оборудование, стартовый чертеж,
                технологии обработки, рабочие процессы, инструменты и оборудование
                материалы, подлежащие обработке.
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
        </div>
        <div class="row justify-content-center mx-md-5 my-5">
          <!-- Form -->
          <form class="col" method="POST" action="form.php">
            <label class="p-0 mb-1" for="ettevottenimi">Название компании</label>
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^&#x22&#x27\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Название компании..."
              name="ettevottenimi"
            />
            <label class="p-0 mb-1" for="kestegeleb"
              >Кто нанимает новых людей в вашу компанию, в том числе стажеров?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^&#x22&#x27\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Имя человека/название работы..."
              name="kestegeleb"
            />
            <label class="p-0 mb-1" for="voimekus"
              >Каковы возможности и опыт вашей компании в личном консультировании стажеров?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^&#x22&#x27\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Описание..."
              name="voimekus"
            />
            <label class="p-0 mb-1" for="valmidus"
              >Готова ли ваша компания принять на работу молодого человека по контракту, параллельно обучающегося по специальности в ПТУ?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^&#x22&#x27\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Да/Нет"
              name="valmidus"
            />
            <label class="p-0 mb-1" for="huvitatus"
              >Была бы ваша компания заинтересована в участии в пилотной программе профессионального обучения 2022/23 учебного года?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^&#x22&#x27\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Да/Нет"
              name="huvitatus"
            />
            <label class="p-0 mb-1" for="mitunoort"
              >Сколько молодых людей ваша компания может и хочет принять одновременно?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^&#x22&#x27\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Количество..."
              name="mitunoort"
            />
            <label class="p-0 mb-1" for="erialad"
              >Какая профессия вам больше всего нужна?</label
            >
            <input
              class="form-control mb-3"
              type="text"
              maxlength="255"
              pattern="[^&#x22&#x27\]+"
              title="Ärge kasutage erilisi sümboleid"
              required
              placeholder="Оператор ЧПУ, Слесарь по сборке, Сварщик или другой"
              name="erialad"
            />
            <label class="p-0 mb-1" for="email"
              >Оставьте нам свой e-mail, если хотите, чтобы мы связались с вами лично!</label
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
                ОТПРАВИТЬ
              </button>
            </div>
          </form>
        </div>
        <p class="h5 mx-md-5 mb-5">
            Спасибо, что поделились дополнительной информацией - ответы на эту анкету не обязательны
            Вы или ваш бизнес для чего-то еще. Однако они становятся быстрее и
            компании с большей мотивацией имеют значительное преимущество перед другими — просто
            первый из них будет выбран из пилотной программы профессионального обучения
            участники. Мы свяжемся с заинтересованными с дополнительной информацией и условиями
            обращайтесь отдельно для переговоров.
        </p>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-secondary bg-opacity-25">
      <div class="container text-center">
        <div class="row justify-content-center py-3 mx-auto w-md-75">
          <p class="footer-text">
            Разработку пилотной программы профессионального обучения организует Министерство образования
            Молодежный совет в сотрудничестве с Эстонской ассоциацией машиностроителей, Образовательной и
            С Министерством исследований и профессионально-технических училищ.
          </p>
          <p class="footer-text m-0">
            контакт: eveli.laats@etag.ee
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