<?php

/**
 * Example controller
 * @author Md.Rajib-Ul-Islam<mdrajibul@gmail.com>
 */
class ExampleController extends BaseController
{
    private $service;

    public function __construct($controller, $action, $queryString = null)
    {
        parent::__construct($controller, $action, $queryString);

        $this->service = new ExampleService();
    }

    /**
     * GetMapping - /example/display/:name
     * Get request api to display name
     * @param $name - Name to display
     */
    public function display($name)
    {
        if ($this->requestMethod != 'GET') {
            $response['statusCode'] = 405;
            return $this->render($response);
        }
        $response['statusCode'] = 200;
        $response['body'] = json_encode($this->service->display($name));
        return $this->render($response);
    }
}
