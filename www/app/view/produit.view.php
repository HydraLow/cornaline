<main class="biereind-main">
    <h1 class="bieres-title">Nos bières</h1>
    <div class="biereind-contenu">
        <div class="biereind-gauche">
            <div class="biereind-carte">
                <div class="biereind-nom"><?= $data["bieres"][0]["nom"] ?></div>
                <img
                    src="../../public/images/Etiquette_<?= $data["bieres"][0]["gout"] ?>.png"
                    alt="<?= $data["bieres"][0]["nom"] ?>" />
                <div class="biereind-prix">prix : <?= $data["bieres"][0]["prix"] ?> €<br />quantité : 75 cl</div>
                <button class="biereind-btn">Ajouter au panier</button>
            </div>
        </div>
        <div class="biereind-droite">
            <h2>Descriptif</h2>
            <div class="biereind-desc">
                <p><?= $data["bieres"][0]["description"] ?></p>
                <p>Gout : <?= $data["bieres"][0]["gout"] ?></p>
                <p>Prix : <?= $data["bieres"][0]["prix"] ?> €</p>
                <p>Alcool : <?= $data["bieres"][0]["alcool"] ?> %</p>
            </div>
            <h2>Etiquette</h2>
            <div class="biereind-label">
                <img src="../../public/images/etiquette-<?= $data["bieres"][0]["gout"] ?>.jpg" alt="Etiquette de la bière <?= $data["bieres"][0]["nom"] ?>" />
            </div>
        </div>
    </div>
</main>