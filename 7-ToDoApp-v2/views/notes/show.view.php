<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a href="/notes" class="bg-blue-500 text-white px-3 py-2 rounded-xl">
            < Go back to notes
                </a>

                <p class="mt-5"><?= htmlspecialchars($note['body']) ?></p>
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <form class="mt-5" action="" method="POST">
                    <button class="bg-red-500 text-white px-3 py-2 rounded-xl mt-5">Delete</button>
                </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>