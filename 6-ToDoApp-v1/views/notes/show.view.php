<?php require "views/partials/head.php"; ?>
<?php require "views/partials/nav.php"; ?>
<?php require "views/partials/banner.php"; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a href="/notes" class="bg-blue-500 text-white px-3 py-2 rounded-xl">
            < Go back to notes
                </a>

                <p class="mt-5"><?= htmlspecialchars($note['body']) ?></p>
    </div>
</main>

<?php require "views/partials/foot.php"; ?>