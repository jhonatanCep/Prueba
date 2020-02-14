<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla </title>
</head>
<body>

<h1>Crear </h1>
<?php if(session('mensaje')): ?>

<div><?php echo e(session('mensaje')); ?></div>

<?php endif; ?>

<form action="<?php echo e(route('Book.crear')); ?>"method="post">
    <?php echo csrf_field(); ?>

    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div>
            el nombre es obligatorio        
        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div>
            el Titulo es obligatorio        
        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <?php $__errorArgs = ['publish_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div>
            la fecha  es obligatoria        
        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <?php $__errorArgs = ['author_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div>
            el autor  es obligatorio        
        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    <input type="text" name="name" placeholder="name" value="<?php echo e(old('name')); ?>">
    <input type="text" name="title" placeholder="title" value="<?php echo e(old('title')); ?>">
    <input type="date" name="publish_date" placeholder="publish_date" value="<?php echo e(old('publish_date')); ?>">
    <input type="text" name="author_id" placeholder="author_id" value="<?php echo e(old('author_id')); ?>">
    <button type="submit">Registrar</button>
    
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Libro</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
    foreach ($book as $libro) {
       ?>
       
     <tr>
     
            <th><?php echo e($libro->id); ?></th>
            <td><?php echo e($libro->title); ?></td>
            <td><?php echo e($libro->Author->name); ?></td>
            <td><?php echo e($libro->publish_date->format('d /m /y')); ?></td>
            <td><button>
            <a href="<?php echo e(route('Books.edit',$libro)); ?>">Editar</a>
            </button>
            <form action="<?php echo e(route('Books.eliminar',$libro)); ?>" method="post">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button type="submit">Eliminar</button>
            </form>
           
            </td>

        </tr>
<?php } ?>
        
    </tbody>
</table>
    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\prueba\resources\views/welcome.blade.php ENDPATH**/ ?>