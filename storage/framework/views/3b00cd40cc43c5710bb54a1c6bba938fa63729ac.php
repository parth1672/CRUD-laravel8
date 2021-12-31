<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, []); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>

<section>
    <div class="div">
<form action="/update" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
 
<label for="id">Enter a name that you wont to update.</label>
<input type="text" name="name" id="name" placeholder="<?php echo e($data->name); ?>"><br>
<label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="<?php echo e($data->email); ?>"><br>
<label for="mobile" > Mobile no. </label>
    <input onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" type="text" maxlength="10" minlength="10" name="mobile" id="mobile" size="10" placeholder="<?php echo e($data->mobile); ?>"/><br><br>
    <label for="gender" >Gender:</label>
       <input type="radio" value="Male" name="gender" id="gender" <?php echo e($data->gender == "Male" ? "checked" : ""); ?>> Male
        <input type="radio" value="Female" name="gender" id="gender"  <?php echo e($data->gender == "Female" ? "checked" : ""); ?> > Female   
        <input type="radio" value="Other" name="gender" id="gender" <?php echo e($data->gender == "Other" ? "checked" : ""); ?> > Other  <br><br>
        <label for="platform" id="platform" >Platform selection </label>
         <select name="platform" id="platform" >
             <option></option>
             <option  value="c" <?php echo e($data->platform == "c" ? "selected" : ""); ?> >c</option>
             <option  value="c++" <?php echo e($data->platform == "c++" ? "selected" : ""); ?> >c++</option>
             <option  value="html" <?php echo e($data->platform == "html" ? "selected" : ""); ?>>html</option>
             <option  value="css" <?php echo e($data->platform == "css" ? "selected" : ""); ?>>css</option>
             <option  value="php" <?php echo e($data->platform == "php" ? "selected" : ""); ?>>php</option>
         </select><br><br>
         
         <label>Your hobbies:</label>
         <input type="checkbox" id="h[]" name="h[]" value="Hiking" <?php echo e(in_array('Hiking',$hobbies) ? "checked" : ""); ?> >
         <label for="">Hiking</label>
         <input type="checkbox" id="h[]" name="h[]" value="Camping" <?php echo e(in_array('Camping',$hobbies) ? "checked" : ""); ?> >
         <label for="">Camping</label>
         <input type="checkbox" id="h[]" name="h[]" value="Archery" <?php echo e(in_array('Archery',$hobbies) ? "checked" : ""); ?> >
         <label for="">Archery</label>
         <input type="checkbox" id="h[]" name="h[]" value="Running" <?php echo e(in_array('Running',$hobbies) ? "checked" : ""); ?> >
         <label for="">Running</label><br><br> 
         <label> Uploaded image </label><br>
         <img src="/images/<?php echo e($data->image); ?>" style="width:100px;height:63px;"> <br>
         Select an image if you want to upload a new image
         <input type="file" name="image" id="image" >
         
 <input type="submit" name="submit" value="Update" ><br><br><br>
</form>
   </div>

</section>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /var/www/html/crud/resources/views/update.blade.php ENDPATH**/ ?>