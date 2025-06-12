<main class="contact-container">
  <section class="cart-section">
    <h2 class="form-title">Nous contacter</h2>
    <form id="contact-form">
      <div class="form-group">
        <label for="subject">Objet :</label>
        <select id="subject" name="subject" required>
          <option value="">-- Choisir un objet --</option>
          <option value="commande">Commande</option>
          <option value="livraison">Livraison</option>
          <option value="produit">Produit</option>
          <option value="autre">Autre</option>
        </select>
      </div>

      <div class="form-group">
        <label for="email">Adresse mail :</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
      </div>

      <button type="submit" class="submit-btn">Envoyer</button>
    </form>
  </section>
</main>