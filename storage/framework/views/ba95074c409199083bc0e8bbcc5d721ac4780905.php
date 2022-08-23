<!DOCTYPE html>
<html lang="rus-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    <link rel="stylesheet" href="../css/styles.css">
    <title><?php echo e($title); ?></title>
</head>

<body class="back">
<img class="back2" src="/images/giphy.gif" alt="vinyl">
<header>
    <div class="top-right">
        <div>
            <?php echo $__env->make('elems.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div>
            <?php echo $__env->make('elems.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</header>

<main>
    <div class="<?php echo e($contentClass); ?>">
        <p>
            <?php echo e($slot); ?>

        </p>
    </div>
</main>

<footer>
    by Vanito Kurason ©, 2022
</footer>
</body>

</html>
<?php /**PATH /home/kurason/projects/mielophone/resources/views/components/layout.blade.php ENDPATH**/ ?>