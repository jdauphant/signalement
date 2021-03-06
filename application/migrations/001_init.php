<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Init extends CI_Migration {

        public function up()
        {

                $this->dbforge->add_field(array(

                        'id' => array(
                                'type' => 'int',
                                'auto_increment' => TRUE
                        ),
                        'place' => array(
                                'type' => 'TEXT'
                        ),
                        'place_address' => array(
                                'type' => 'TEXT'
                        ),
                        'place_category' => array(
                                'type' => 'TEXT'
                        ),
                        'type' => array(
                                'type' => 'TEXT'
                        ),
                        'anomalies' => array(
                                'type' => 'TEXT[]'
                        ),
                        'pictures' => array(
                                'type' => 'OID[]',
                                'null' => TRUE
                        ),
                        'description' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'firstname' => array(
                        'type' => 'TEXT'
                        ),
                        'lastname' => array(
                        'type' => 'TEXT'
                        ),
                        'email' => array(
                                'type' => 'TEXT'
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('reports');
        }

        public function down()
        {
                $this->dbforge->drop_table('reports');
        }
}
