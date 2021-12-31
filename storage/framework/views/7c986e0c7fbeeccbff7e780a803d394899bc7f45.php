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
    
    <label for="id">ROLL NO.</label>
    <input type="int" name="id" id="id" placeholder="Enter ROll No. for update"><br>
    <label for="name">NMAE</label>
    <input type="text" name="name" id="name" placeholder="Enter name"><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Enter your email"><br>
    <label for="mobile" > Mobile no. </label>
    <input onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" type="text" maxlength="10" minlength="10" name="mobile" id="mobile" size="10" placeholder="Enter mobile number"/><br><br>
    <label for="gender" >Gender:</label>
       <input type="radio" value="Male" name="gender" id="gender" > Male
        <input type="radio" value="Female" name="gender" id="gender" > Female   
        <input type="radio" value="Other" name="gender" id="gender" > Other  <br><br>
        <label for="platform" id="platform" >Platform selection </label>
         <select name="platform" id="platform" >
             <option></option>
             <option  value="c">c</option>
             <option  value="c++">c++</option>
             <option  value="html">html</option>
             <option  value="css">css</option>
             <option  value="php">php</option>
         </select><br><br>

         <label>Your hobbies:</label>
         <input type="checkbox" id="h[]" name="h[]" value="Hiking">
         <label for="">Hiking</label>
         <input type="checkbox" id="h[]" name="h[]" value="Camping">
         <label for="">Camping</label>
         <input type="checkbox" id="h[]" name="h[]" value="Archery">
         <label for="">Archery</label>
         <input type="checkbox" id="h[]" name="h[]" value="Running">
         <label for="">Running</label><br><br> 
         
         Select an image that you want to upload a new image
                  <input type="file" name="image" id="image" >

        <input type="submit" name="submit" value="submit" ><br><br><br><br><br><br>
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
<?php endif; ?><?php /**PATH /var/www/html/crud/resources/views/update2.blade.php ENDPATH**/ ?>