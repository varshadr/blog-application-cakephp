<?php

declare (strict_types = 1);

namespace App\Controller;
use Google_Client;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        //$users = $this->paginate($this->Users);

        //$this->set(compact('users'));
    }

    public function signup()
    {
        $this->viewBuilder()->enableAutoLayout(false); //to remove cakephp banner in our view file
        $userName = $this->request->getQuery('username');
        $userEmail = $this->request->getQuery('email');
        $userPassword = $this->request->getQuery('password');
        $this->loadModel('Users');

        $article = $this->Users->newEmptyEntity();
        $article->username = $userName;

        $article->email = $userEmail;
        $article->password = $userPassword;
        $this->Users->save($article);

        dd('User information saved');
        //$users = $this->paginate($this->Users);

        //$this->set(compact('users'));
    }
    public function signin()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $userName = $this->request->getQuery('email');

        $userPassword = $this->request->getQuery('password');
        $this->loadModel('Users');
        $xyz = $this->Users->find()->where(['password' => $userPassword, 'email' => $userName])->toArray();
        //dd(count($xyz));
        if (count($xyz)) {

            $this->redirect('/home');
        } else {
            dd("incorrect id and password");
        }
        //dd($xyz);
        //dd(['password'=>$userPassword,'username' => $userName]);
        //dd($userName);
        //$users = $this->paginate($this->Users);

        //$this->set(compact('users'));
    }

    public function showsignup()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        //to show html signup page

    }
    public function showsignin()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        //to show html signin page

    }
    public function showprofile()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        //to show user's profile

    }
    public function googlesignin()//to take us to google login
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $google_client_id 		= "124572575381-r0m8v6v4oalslo6hq57nslt41lhhs4h9.apps.googleusercontent.com";
		$google_client_secret 	= "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";
		$google_redirect_url 	= "http://localhost:8765/users/googlesignincallback";
		//$google_developer_key 	= "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

        $gClient = new Google_Client();//library installed with composer
		$gClient->setApplicationName("Login to localhost");
		$gClient->setClientId($google_client_id);
		$gClient->setClientSecret($google_client_secret);
		$gClient->setRedirectUri($google_redirect_url);
        $gClient->addScope('profile');//Scope is what we request from google
        $gClient->addScope('email');
		//$gClient->setDeveloperKey($google_developer_key);
        $Googlesigninredirect=($gClient->createAuthUrl());//to generate the url
        $this->redirect($Googlesigninredirect);//syntax to redirect
    }
    public function googlesignincallback()//for google to redirect back
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $google_client_id 		= "124572575381-r0m8v6v4oalslo6hq57nslt41lhhs4h9.apps.googleusercontent.com";
		$google_client_secret 	= "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";
		$google_redirect_url 	= "http://localhost:8765/users/googlesignincallback";
		//$google_developer_key 	= "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

        $gClient = new Google_Client();//library installed with composer
		$gClient->setApplicationName("Login to localhost");
		$gClient->setClientId($google_client_id);
		$gClient->setClientSecret($google_client_secret);
		$gClient->setRedirectUri($google_redirect_url);
        $gClient->addScope('profile');//Scope is what we request from google
        $gClient->addScope('email');
       
        $userCode = $this->request->getQuery('code');//get data from url
        $userAuthuser = $this->request->getQuery('authuser');
        $userPrompt = $this->request->getQuery('prompt');
        $userScope = $this->request->getQuery('scope');
        $authT = $gClient->authenticate( $userCode);
        $idToken = $authT["id_token"];
        $payload = $gClient->verifyIdToken($idToken);
        $xyz = $this->Users->find()->where([ 'email' => $userScope])->toArray();
        //dd($payload);
        if (count($xyz)) {

            $this->redirect('/home');
        } else {
            
            $article = $this->Users->newEmptyEntity();
            
            $article->username = $payload['name'];
            $article->email = $payload['email'];
            $article->password = $payload['at_hash'];
            $this->Users->save($article);

            $this->redirect('/home');
        }
        

    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('Users'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('Users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('Users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
