

<?php $__env->startSection('content'); ?>
    

<form action="/alumnis" method="POST">
        
    <?php echo csrf_field(); ?>

    <div class="form-row">
        <div class="col">
            NOM: <input type="text" class="form-control" name='nom' placeholder="Nom">
        </div>
        <div class="col">
            PRENOM: <input type="text" class="form-control" name='prenom' placeholder="Prenom">
        </div>
      </div>
    <br>
      <div class="form-row">
        <div class="col">
            DATE de NAISSANCE: <input type="date" class="form-control" name='dateDeNaissance' placeholder="Date de Naissaance">
        </div>
        <div class="col">
            SEXE:  <input type="text" class="form-control" name='sexe' placeholder="Sexe">
        </div>
        </div><br>

      <div class="form-row">
        <div class="col">
        FORMATION: <input type="text" class="form-control" name='formation' placeholder="Formation">
        </div>
        <div class="col">
            ETABLISSEMENT: <input type="text" class="form-control" name='etablissement' placeholder="Etablissement">
        </div>
        </div> <br>
      
      <div class="form-row">
        <div class="col">
            TELEPHONE: <input type="number" class="form-control" name='telephone' placeholder="Téléphone">
        </div>
        <div class="col">
            PROMOTION: <input type="date" class="form-control" name='promotion' placeholder="promotion">
        </div>
        </div><br>
    
      <div class="form-row">
        <div class="col">
            ENTREPRISE ACTUELLE: <input type="text" class="form-control" name='entrepriseActuelle' placeholder="Entreprise actuelle">
        </div>
        <div class="col">
            FONCTION: <input type="text" class="form-control" name='fonction' placeholder="Fonction">
        </div>
        </div><br>
      
      <div class="form-row">
        <div class="col">
            NATIONALITE: <input type="text" class="form-control" name='nationalite' placeholder="Nationalité">
        </div>
        <div class="col">
            Photo: <input type="file" class="form-control" name='photo' placeholder="photo">
        </div>
        </div><br><br>

        <button type="submit" class="btn btn-primary">Ajouter un Simplonnien</button>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Simplon-Burkina\resources\views/alumnis/formAlumnis.blade.php ENDPATH**/ ?>