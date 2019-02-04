<?php

   class Application {
      public function create_application($fields = array()){
         if($this->_db->insert('application', $fields)){
            throw new Exception('There was a problem creating an account');
         }
      }
   }