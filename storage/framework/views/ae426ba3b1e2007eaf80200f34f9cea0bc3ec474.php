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
    <div class="div2">   
    



<table >
   
<tr>
  <th> ROLL NO. </th>
  <th> NMAE </th>
  <th> Email </th>
  <th> MOBILE NUMBER </th>
  <th> GENDER </th>
  <th> PLATFORM </th>
  <th> HOBBIES </th>
  <th> IMAGE </th>
  <th> UPDATE </th>
  <th> DELETE </th>
</tr>

       <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
        <tr>
        <td><?php echo e($member->id); ?></td>
        <td><?php echo e($member->name); ?></td>
        <td><?php echo e($member->email); ?></td>
        <td><?php echo e($member->mobile); ?></td>
        <td><?php echo e($member->gender); ?></td>
        <td><?php echo e($member->platform); ?></td>
        <td><?php echo e($member->hobbies); ?></td>
        <td>  <img src="images/<?php echo e($member->image); ?>" style="width:80px;height:43px;"> </td>
        <td><a href=<?php echo e("update/".$member->id); ?>> UPDATE</a></a></td>
        <td> <a href=<?php echo e("delete/".$member->id); ?>> DELETE</a></td> 
        
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>



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
<?php endif; ?><?php /**PATH /var/www/html/crud/resources/views/show.blade.php ENDPATH**/ ?>