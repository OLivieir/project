<!DOCTYPE html>
<html>
<head>
    <title>Warsztat Samochodowy</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo.png" alt="Warsztat Samochodowy">
            </div>
            <div class="burger-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="menu">
                <li><a href="#">Strona główna</a></li>
                <li><a href="#">Usługi</a></li>
                <li><a href="#">Cennik</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>

        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Profesjonalny warsztat samochodowy</h1>
            <p>Specjalizujemy się w naprawie i obsłudze samochodów wszystkich marek.</p>
            <a href="#" class="btn">Dowiedz się więcej</a>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="section-heading">Nasze usługi</h2>
            <div class="service-item">
                <img src="#" alt="Serwisowanie silnika">
                <h3>Serwisowanie silnika</h3>
                <p>Profesjonalna naprawa i serwisowanie silników samochodowych.</p>
            </div>
            <div class="service-item">
                <img src="#" alt="Wymiana opon">
                <h3>Wymiana opon</h3>
                <p>Szybka i fachowa wymiana opon w sezonie letnim i zimowym.</p>
            </div>
            <div class="service-item">
                <img src="#" alt="Naprawa układu hamulcowego">
                <h3>Naprawa układu hamulcowego</h3>
                <p>Diagnoza, naprawa i konserwacja układu hamulcowego.</p>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2 class="section-heading">Skontaktuj się z nami</h2>
            <form>
                <input type="text" placeholder="Imię i nazwisko" required>
                <input type="email" placeholder="Adres email" required>
                <textarea placeholder="Wiadomość" required></textarea>
                <button type="submit">Wyślij</button>
            </form>
        </div>
    </section>
    <?php
  $name = htmlspecialchars($_POST['first']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['last']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "olivier.szel@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Twoja wiadomość została wysłana...";
      }else{
         echo "Wystąpił błąd podczas wysyłki...";
      }
    }else{
      echo "Wprowadź poprawny adres email";
    }
  }else{
    echo "Pole email i wiadomość są wymagane";
  }
?>

    <footer>
        <div class="container">
            <p>&copy; 2023 Warsztat Samochodowy. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>

    <script>
// Obsługa menu mobilnego
const burgerMenu = document.querySelector('.burger-menu');
const menu = document.querySelector('.menu');

burgerMenu.addEventListener('click', () => {
    menu.classList.toggle('show');
});

// Scroll do sekcji na podstawie menu nawigacyjnego
const navLinks = document.querySelectorAll('nav ul.menu li a');

navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();

        const targetSectionId = link.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetSectionId);

        window.scrollTo({
            top: targetSection.offsetTop - 50,
            behavior: 'smooth'
        });

        menu.classList.remove('show');
    });
});


    </script>
</body>
</html>
