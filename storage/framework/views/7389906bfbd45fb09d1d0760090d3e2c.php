<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent("title"); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="<?php echo e(url('css/main.css')); ?>" rel="stylesheet"/>

        <!-- Styles -->
      
       
    </head>
    <body class="antialiased">
        <div class="relative">
            <nav>
                <a href="<?php echo e(Route("home")); ?>"> Home </a>
                <a href="<?php echo e(Route("about")); ?>"> about </a>
                <a href="<?php echo e(Route("computers.index")); ?>"> computers </a>
            </nav>
        </div>
        
        <?php echo $__env->yieldContent("content"); ?>
        
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/layout.blade.php ENDPATH**/ ?>