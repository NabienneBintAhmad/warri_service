<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDWe9ZaZ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDWe9ZaZ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDWe9ZaZ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDWe9ZaZ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDWe9ZaZ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DWe9ZaZ',
    'container.build_id' => '21de5f26',
    'container.build_time' => 1564488152,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDWe9ZaZ');
