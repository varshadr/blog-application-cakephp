<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Public Controller
 *
 * @method \App\Model\Entity\Public[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublicController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    

    public function aboutus()
    {
        $this->viewBuilder()->enableAutoLayout(false);
    }
}
    

    