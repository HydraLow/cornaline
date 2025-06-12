<main class="trombi-main">
    <h1 class="trombi-title">Notre equipe !</h1>
    <section class="trombi-section">
        <div class="trombi-groupe">Les GB</div>
        <div class="trombi-grille trombi-gb">
            <?php foreach ($data["GB_members"] as $member) : ?>
                <div class="trombi-item">
                    <img src="../../public/images/<?= strtolower(explode(' ', $member["nom"])[1]) ?>.png" alt="<?= $member["nom"] ?>">
                    <div class="trombi-nom"><?= $member["nom"] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="trombi-section">
        <div class="trombi-groupe">Les MMI</div>
        <div class="trombi-grille trombi-mmi">
            <?php foreach ($data["MMI_members"] as $member) : ?>
                <div class="trombi-item">
                    <img src="../../public/images/<?= strtolower(explode(' ', $member["nom"])[1]) ?>.png" alt="<?= $member["nom"] ?>">
                    <div class="trombi-nom"><?= $member["nom"] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <h1 class="trombi-title">Qui sommes-nous ?</h1>
    <section class="trombi-presentation">
        <aside class="trombi-aside">
            <figure><img src="../../public/images/Etiquette_blonde.png" alt="Logo de Cornaline"></figure>
        </aside>
        <div>
            <p>
                Cornaline, bière artisanale née de la rencontre entre savoir-faire brassicole et sens du design.
            </p>
            <p>Nous sommes une petite équipe de 7 personnes, réunie autour d’une même idée : créer une bière à la fois belle, bonne, et pleine de caractère.</p>
            <p>3 d’entre nous se consacrent à la fabrication, du choix des ingrédients au brassage, pour donner naissance à une bière subtilement orangée, élégante et équilibrée.</p>
            <p>Les 4 autres travaillent sur l’univers visuel, le design et la communication. Car pour nous, l’expérience Cornaline ne passe pas seulement par le goût, mais aussi par l’histoire qu’on raconte et l’image qu’on partage.</p>
            <p>
                Ensemble, nous formons une micro-brasserie indépendante, libre d’explorer, d’inventer, et surtout de proposer une bière qui nous ressemble : minérale, solaire, précieuse.</p>
        </div>
    </section>
    <style>

    </style>
</main>