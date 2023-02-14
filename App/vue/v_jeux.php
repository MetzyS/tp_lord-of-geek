<section id="visite">
    <aside id="categories">
        <ul>
            <?php




            foreach ($lesCategories as $uneCategorie) {
                $idCategorie = $uneCategorie['id_categories'];
                $libCategorie = $uneCategorie['nom_cat'];
            ?>
                <li>
                    <a href=index.php?uc=visite&categorie=<?php echo $idCategorie ?>&action=voirJeux><?php echo $libCategorie ?></a>
                </li>
            <?php
            }





            ?>
        </ul>
    </aside>
    <section id="jeux">
        <?php




        foreach ($lesJeux as $unJeu) {
            $id = $unJeu['id_jeux'];
            // $description = $unJeu['description'];
            $prix = $unJeu['prix'];
            $image = $unJeu['image'];
            $nom = $unJeu['nom_jeux'];

        ?>
            <article>
                <img src="public/images/jeux/<?= $image ?>" alt="Image de <?= $nom ?>" />
                <p><?= $nom ?></p>
                <p><?= "Prix : " . $prix . " Euros" ?>
                    <a href="index.php?uc=visite&categorie=<?= $categorie ?>&jeu=<?= $id ?>&action=ajouterAuPanier">
                        <img src="public/images/mettrepanier.png" title="Ajouter au panier" class="add" />
                    </a>
                    <?= var_dump($categorie); ?>
                </p>
            </article>

        <?php
        }




        ?>
    </section>
</section>