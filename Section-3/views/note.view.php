<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <h4>
            <?= htmlspecialchars($note['body'])?>
        </h4>
        <p class="mt-6">
            <a href="/notes" class="text-blue-500 underline">Go Back ..........</a>
        </p>

    </div>
</main>

<?php require('partials/footer.php') ?>