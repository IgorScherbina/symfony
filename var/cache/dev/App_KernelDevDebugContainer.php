<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMl90l4b\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMl90l4b/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMl90l4b.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMl90l4b\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMl90l4b\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ml90l4b',
    'container.build_id' => '33867f9c',
    'container.build_time' => 1629043863,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMl90l4b');