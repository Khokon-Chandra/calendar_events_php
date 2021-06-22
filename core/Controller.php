<?php
namespace core;
/**
 * 
 */
class Controller
{
    
    public function migrate()
    {
       Application::$app->db->createEventsTable();
       printf("<h3>Successfuly migrated</h2><a href='/'>back to home</a>");
    }
}
