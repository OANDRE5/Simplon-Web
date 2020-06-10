
<?php $__env->startSection('content'); ?>
<h1>Les Simplonniens</h1>
<a href="/simplonniens/create" class="btn btn-primary my-3">Nouveau apprenant</a>
<a href="/projets/formProjet" class="btn btn-primary my-3">Nouveau Project</a>
<a href="/alumnis/formAlumnis" class="btn btn-primary my-3">Ajouter Alumnis</a>
<a href="/alumnis/liste" class="btn btn-primary my-3">Liste Alumnis</a>
<ul>
<?php $__currentLoopData = $simplonniens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $simplonnien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($simplonnien->nom); ?> <?php echo e($simplonnien->prenom); ?> <?php echo e($simplonnien->formation); ?></li>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
   
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Simplon-Burkina\resources\views/simplonniens/index.blade.php ENDPATH**/ ?>