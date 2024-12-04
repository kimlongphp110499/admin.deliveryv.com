<?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($column->isVisible()): ?>
        <?php if($columnSelect && ! $this->isColumnSelectEnabled($column)) continue; ?>

        <?php if (isset($component)) { $__componentOriginal2fda0246830e61b9a8f5d07802f9541d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fda0246830e61b9a8f5d07802f9541d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-tables::tailwind.components.table.cell','data' => ['class' => method_exists($this, 'setTableDataClass') ? $this->setTableDataClass($column, $row) : '','id' => method_exists($this, 'setTableDataId') ? $this->setTableDataId($column, $row) : '','customAttributes' => method_exists($this, 'setTableDataAttributes') ? $this->setTableDataAttributes($column, $row) : []]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-tables::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableDataClass') ? $this->setTableDataClass($column, $row) : ''),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableDataId') ? $this->setTableDataId($column, $row) : ''),'customAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableDataAttributes') ? $this->setTableDataAttributes($column, $row) : [])]); ?>
            <?php if($column->asHtml): ?>
                <?php echo e(new \Illuminate\Support\HtmlString($column->formatted($row))); ?>

            <?php else: ?>
                <?php echo e($column->formatted($row)); ?>

            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fda0246830e61b9a8f5d07802f9541d)): ?>
<?php $attributes = $__attributesOriginal2fda0246830e61b9a8f5d07802f9541d; ?>
<?php unset($__attributesOriginal2fda0246830e61b9a8f5d07802f9541d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fda0246830e61b9a8f5d07802f9541d)): ?>
<?php $component = $__componentOriginal2fda0246830e61b9a8f5d07802f9541d; ?>
<?php unset($__componentOriginal2fda0246830e61b9a8f5d07802f9541d); ?>
<?php endif; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/vendor/livewire-tables/tailwind/components/table/row-columns.blade.php ENDPATH**/ ?>