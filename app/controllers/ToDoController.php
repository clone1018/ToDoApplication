<?php

class ToDoController extends Frame\Controller\JSON {
    
    public function create() {
        // Optional validator coming soon
        $task = $this->request->task;

        $newTask = new Todo();
        $newTask->task = $task;
        $newTask->save();

        $this->response->redirect('/');
    }

}