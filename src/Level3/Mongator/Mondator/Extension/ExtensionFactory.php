<?php

namespace Level3\Mongator\Mondator\Extension;

class ExtensionFactory
{
    public function createExtensions($options = array())
    {
        return array(
            $this->createResourceExtension($options),
            $this->createEmptyResourceExtension($options),
            $this->createResourceBuilderBaseExtension($options),
            $this->createResourceBuilderExtension($options),
            $this->createEmptyResourceBuilderExtension($options),
        );
    }

    protected function createResourceExtension($options = array())
    {
        return new ResourceExtension($options);
    }

    protected function createEmptyResourceExtension($options = array())
    {
        return new EmptyResourceExtension($options);
    }

    protected function createResourceBuilderBaseExtension($options = array())
    {
        return new ResourceBuilderBaseExtension($options);
    }

    protected function createResourceBuilderExtension($options = array())
    {
        return new ResourceBuilderExtension($options);
    }

    protected function createEmptyResourceBuilderExtension($options = array())
    {
        return new EmptyResourceBuilderExtension($options);
    }
}