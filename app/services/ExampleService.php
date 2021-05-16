<?php

/**
 * A simple example service
 * @author Md.Rajib-Ul-Islam<mdrajibul@gmail.com>
 */
class ExampleService implements IExampleService
{
    /**
     * display properties
     * @param $name
     * @return array
     */
    public function display($name)
    {
        return array("name" => $name);
    }
}
