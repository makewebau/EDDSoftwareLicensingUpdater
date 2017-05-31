<?php

namespace MakeWeb\EDDSoftwareLicensingUpdater;

class Updater
{
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setPluginFilePath($path)
    {
        $this->path = $path;
    }

    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    public function setLicenseKey($licenseKey)
    {
        $this->licenseKey = $licenseKey;
    }

    public function setHostUrl($hostUrl)
    {
        $this->hostUrl = $hostUrl;

        return $this;
    }

    public function register()
    {
        new EDDSLPluginUpdater(
            $this->hostUrl,
            $this->path,
            [
                'version'   => $this->version,
                'license'   => $this->licenseKey,
                'item_name' => $this->name,
            ]
        );
    }
}
