
<?php $__env->startSection('content'); ?>
<form action="/projets" method="POST">
        
    <?php echo csrf_field(); ?>

    <h1>Projet</h1>

    <div class="form-row">
       <div class="col">
          Libelle: <input type="text" class="form-control" name='libelle' placeholder="libelle">
       </div>
       <div class="col">
           Client: <input type="text" class="form-control" name='client' placeholder="client">
       </div>
       </div><br>

       <div class="form-row">
           <div class="col">
              Mission: <input type="text" class="form-control" name='mission' placeholder="mission">
           </div>
           <div class="col">
           Techno Utilisées: <input type="text" class="form-control" name='technoUtilisees' placeholder="techno utilisées">
           </div>
           </div><br>

           <div class="form-row">
               <div class="col">
                  Durée: <input type="text" class="form-control" name='duree' placeholder="durée">
               </div>
               </div><br>

               <button type="submit" class="btn btn-primary">Ajouter un Projet</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Simplon-Burkina\resources\views/projets/formProjet.blade.php ENDPATH**/ ?>