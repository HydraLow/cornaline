<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Cornaline</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        .contact-container {
            max-width: 1200px;
            margin: 120px auto 50px;
            padding: 0 20px;
            display: flex;
            justify-content: center;
        }

        .cart-section {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            border: 1px solid var(--secondary-color);
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-title {
            color: var(--primary-color);
            margin-bottom: 25px;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: var(--primary-color);
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f5f5f5;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .submit-btn {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #d4b06c;
            transform: translateY(-2px);
        }

        .total-section {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="assets/images/Logo_Cornaline_sous_illustrator_fin.png" alt="Logo Cornaline">
            </div>
            <ul class="nav-links">
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="accueil.php#nos-bieres">Nos Bières</a></li>
                <li><a href="accueil.php#notre-brasserie">Notre Brasserie</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="contact-container">
        <section class="cart-section">
            <h2 class="form-title">Votre panier</h2>
            <form id="contact-form">
                <div class="form-group">
                    <label for="email">Adresse mail :</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="text" id="adresse" name="adresse" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="code-postal">Code Postal :</label>
                        <input type="text" id="code-postal" name="code-postal" required>
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville :</label>
                        <input type="text" id="ville" name="ville" required>
                    </div>
                </div>

                <div class="total-section">
                    <div class="form-group">
                        <label for="total">Total :</label>
                        <input type="text" id="total" name="total" readonly>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Valider</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Contact</h4>
                <p>Email: contact@cornaline-biere.com</p>
                <p>Téléphone: +33 1 23 45 67 89</p>
            </div>
            <div class="footer-section">
                <h4>Suivez-nous</h4>
                <div class="social-links">
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">Untappd</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html> 