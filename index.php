<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Protfolio | Stefano Degiorgi</title>
  <link rel="stylesheet" href="css/style.css">

  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <script src="index.js"></script>
</head>

<body>
  <div class="nav-container">
    <header>
      <main>Stefano Degiorgi</main>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About me</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact me</a></li>
        </ul>
      </nav>
    </header>
    <div class="social-header">
    </div>
  </div>
  <section class="home" id="home">
    <div class="home-text">
      <h1>Curiosity, determination and codes</h1>
      <h2>Hi I'm Stefano</h2>
    </div>
  </section>
  <section class="about" id="about">
    <div class="left">
      <div class="about-text">
        <h1>About me</h1>
        <p class="desc">
          Hello. My name is Stefano Degiorgi.
          I'm a Swiss Student, making an apprenticeship as a computer scientist in Zürich.
          My main program languages are Java and JavaScript, but im open to learn new languages.
        </p>
      </div>
    </div>
    <div class="right">
      <img class="about-img" src="img/profil.jpg" alt="picture of stefano">
    </div>
  </section>
  <section class="projects" id="projects">
    <br>
    <h1>Projects</h1>
    <div class="projects">
      <div class="projects">
        <div class="project">
          <a href="https://github.com/StefDegiorgi/step_goal" target="_blank">
            <img class="project-img" src="img/step_goal.png" alt="Step Goal Project">
          </a>
          <p class="project-description">Step Goal Project</p>
        </div>
        <div class="project">
          <a href="https://github.com/StefDegiorgi/sudoku-game" target="_blank">
            <img class="project-img" src="img/sudoku-game.png" alt="Sudoku Game Project">
          </a>
          <p class="project-description">Sudoku Game Project</p>
        </div>
        <div class="project">
          <a href="https://github.com/StefDegiorgi/Coworking_Space_M233" target="_blank">
            <img class="project-img" src="img/user-list.png" alt="User List Project">
          </a>
          <p class="project-description">Coworking Space Project</p>
        </div>
        <div class="project">
          <a href="https://github.com/StefDegiorgi/BlackJack" target="_blank">
            <img class="project-img" src="img/blackjack.png" alt="Blackjack Project">
          </a>
          <p class="project-description">Blackjack Project</p>
        </div>
        <div class="project">
          <a href="https://github.com/StefDegiorgi" target="_blank">
            <img class="project-img" src="img/github.png" alt="Blackjack Project">
          </a>
          <p class="project-description">More Projects</p>
        </div>
  </section>
  <section class="contact" id="contact">
    <h1>Contact Me</h1>
    <form action="index.php" method="POST">
      <input name="name" type="text" class="feedback-input" placeholder="Name" />
      <input name="subject" type="text" class="feedback-input" placeholder="Subject">
      <input name="mail" type="text" class="feedback-input" placeholder="Email" />
      <textarea name="message" class="feedback-input" placeholder="Comment"></textarea>
      <input type="submit" name="submit" value="SUBMIT" />
    </form>
  </section>

  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
      header("Location: index.php?error=invalidemail");
      exit();
    }

    $mailTo = "stef.degiorgi@bluewin.ch";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an E-Mail from".$name.".\n\n".$message;

    if (mail($mailTo, $subject, $txt, $headers)) {
      header("Location: index.php?mailsend");
    } else {
      header("Location: index.php?error=mailerror");
    }
  }
  ?>
</body>

</html>