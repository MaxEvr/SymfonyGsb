<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG2uhEWJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG2uhEWJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG2uhEWJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG2uhEWJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG2uhEWJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'G2uhEWJ',
    'container.build_id' => 'ea66ec6f',
    'container.build_time' => 1648820707,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG2uhEWJ');