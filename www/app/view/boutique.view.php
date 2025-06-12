<main>
    <section class="biere">
        <h1>Nos bières</h1>
        <div class="biere-list">
            <?php foreach ($data["bieres"] as $biere) : ?>
                <a class="biere-item" href="?route=produit&gout=<?= $biere["gout"] ?>">
                    <img src="../../public/images/Etiquette_<?= $biere["gout"] ?>.png" alt="<?= $biere["nom"] ?>">
                    <h2><?= $biere["nom"] ?></h2>
                    <p><?= $biere["description"] ?></p>
                    <p><strong>→ En savoir plus</strong></p>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</main>