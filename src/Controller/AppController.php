<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{


    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Csrf');

        $this->loadComponent('Auth', [
        'authorize' => 'Controller',
        'unauthorizedRedirect' => $this->referer(),
         ]);
    // Allow everyone access to specific actions
    $this->Auth->allow(['register', 'forgot', 'reset', 'logout','view/1']);
    }
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
