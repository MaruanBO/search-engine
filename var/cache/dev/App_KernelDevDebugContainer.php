<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW4TOiVs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW4TOiVs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW4TOiVs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW4TOiVs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW4TOiVs\App_KernelDevDebugContainer([
    'container.build_hash' => 'W4TOiVs',
    'container.build_id' => 'a88e1ce4',
    'container.build_time' => 1660061423,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW4TOiVs');
