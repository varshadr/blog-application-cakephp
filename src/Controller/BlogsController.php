<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Blogs Controller
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function saveblog()
    {
        $this->viewBuilder()->enableAutoLayout(false); //to remove cakephp banner in our view file
        //$blogs = $this->paginate($this->Blogs);

        //$this->set(compact('blogs'));
        

        //Request is made to the function as GET method
        $blogName=$this->request->getQuery('title');
        $blogContent=$this->request->getQuery('content');
        $this->loadModel('Blog');

        $article=$this->Blog->newEmptyEntity();
        
        $article->title=$blogName;
        
        $article->content=$blogContent;
                   
        $this->Blog->save($article);
        dd('blog saved');

        

        


    }
    
    public function listblogs() //to show the interface of list blogs
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $this->loadModel('Blog');
        $listall=$this->Blog->find("all")->toArray();
        $this->set(compact('listall')); //no dollar needed,compact will make the variable available to AI
        
        
        
        

        
    }
    
    public function create()
    {
        $this->viewBuilder()->enableAutoLayout(false);
        //to create new blogs
        
        

        
    }
    public function viewblog() //to view the blogs
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $this->loadModel('Blog');
        
        
        $blogId=$this->request->getQuery('blogid');
        $listBlogs = $this->Blog->find()->where(['id' => $blogId])->toArray();
        $this->set(compact('listBlogs'));
        
        //$this->set is a method used to pass data from a controller to a view. The compact function is used to create an array that maps variables to their corresponding values.
        
        

        
    }
    

    /**
     * View method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('blog'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blog = $this->Blogs->newEmptyEntity();
        if ($this->request->is('post')) {
            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $this->set(compact('blog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $this->set(compact('blog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blogs->get($id);
        if ($this->Blogs->delete($blog)) {
            $this->Flash->success(__('The blog has been deleted.'));
        } else {
            $this->Flash->error(__('The blog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
