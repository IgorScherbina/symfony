<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQsx6jyq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQsx6jyq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQsx6jyq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQsx6jyq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQsx6jyq\App_KernelDevDebugContainer([
    'container.build_hash' => 'Qsx6jyq',
    'container.build_id' => 'bc62b8a9',
    'container.build_time' => 1640530417,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQsx6jyq');
