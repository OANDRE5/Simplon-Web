<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simplon-BF</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
      
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="/">Acceuil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Nos formations">Nos Formations</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/simplonniens">Nos Simplonniens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Notre Equipes"> Notre Equipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Nous Contacter"> Nous Contacter</a>
                    </li>
                  </ul>
                  <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\laragon\www\Simplon-Burkina\resources\views/layout.blade.php ENDPATH**/ ?>