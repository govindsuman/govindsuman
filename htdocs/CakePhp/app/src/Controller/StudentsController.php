<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Students Controller
 *
 * @method \App\Model\Entity\Students[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $students = $this->paginate($this->Students);

        $this->set(compact('students'));
    }

    /**
     * View method
     *
     * @param string|null $id Students id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $students = $this->Students->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('students'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $students = $this->Students->newEmptyEntity();
        if ($this->request->is('post')) {
            $students = $this->Students->patchEntity($students, $this->request->getData());
            if ($this->Students->save($students)) {
                $this->Flash->success(__('The Students has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Students could not be saved. Please, try again.'));
        }
        $this->set(compact('students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Students id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $students = $this->Students->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $students = $this->Students->patchEntity($students, $this->request->getData());
            if ($this->Students->save($students)) {
                $this->Flash->success(__('The Students has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Students could not be saved. Please, try again.'));
        }
        $this->set(compact('students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Students id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $Students = $this->Students->get($id);
        if ($this->Students->delete($Students)) {
            $this->Flash->success(__('The Students has been deleted.'));
        } else {
            $this->Flash->error(__('The Students could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
