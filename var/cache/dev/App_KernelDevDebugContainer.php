<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXhREDzt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXhREDzt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXhREDzt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXhREDzt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXhREDzt\App_KernelDevDebugContainer([
    'container.build_hash' => 'XhREDzt',
    'container.build_id' => 'ecb1c398',
    'container.build_time' => 1586994688,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXhREDzt');