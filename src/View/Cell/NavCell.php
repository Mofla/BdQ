<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Nav cell
 */
class NavCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $isConnected = false;
        $id = $this->request->session()->read('Auth.User.id');
        if($id){
            $isConnected = true;
            $user = $this->request->session();
        }
        $this->set(compact('isConnected','user'));
    }
}
