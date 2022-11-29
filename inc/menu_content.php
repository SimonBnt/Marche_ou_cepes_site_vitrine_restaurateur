<?php
    require "functionDb.php";

    $returnedDishes = getDisheFromDb();
    $category = getCategory();

    ?>
    <section id="menu" class="section">
        <h2>Notre menu</h2>
        <div id="dishe_container">
            <?php foreach ($category as $key => $categories): ?>

            <div class="dishe_category" id="category<?php echo $categories['id'] ?>">
                <h3>
                    <?php echo $categories['name'] ?>
                </h3>
                <?php foreach ($returnedDishes as $returnedDishe): ?>
                <?php if ($categories['id'] == $returnedDishe['id']): ?>
                <div class="dishes">
                    <p class="align-start">
                        <?php echo $returnedDishe['title'] ?>
                    </p>
                    <p class="align-start" id="dishes_p">
                        <?php echo $returnedDishe['description'] ?>
                    </p>
                </div>
                <?php endif ?>
                <?php endforeach; ?>
            </div>

            <?php endforeach; ?>
        </div>

    </section>