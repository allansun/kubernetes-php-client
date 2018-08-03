<?php


namespace Kubernetes;


interface ModelInterface
{
    public function exchangeArray($data);

    public function getArrayCopy();

    public function toJson();

    public function isRawObject();
}